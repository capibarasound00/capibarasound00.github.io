<?php
session_start();
header('Content-Type: application/json');

// Establecer la zona horaria correcta de España (Madrid) con formato 24h
date_default_timezone_set('Europe/Madrid');

// ==========================================
// CONFIGURACIÓN DE TU BASE DE DATOS (InfinityFree)
// ==========================================
$db_host = "sql112.infinityfree.com"; 
$db_user = "if0_42018459";             
$db_pass = "tmzP8wd2Mks2y";            
$db_name = "if0_42018459_cris26";      

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
    // Forzar a la conexión de MySQL a usar la hora local de Madrid calculando el desfase actual (con horario de verano/invierno automático)
    $now = new DateTime();
    $mins = $now->getOffset() / 60;
    $sgn = ($mins < 0 ? -1 : 1);
    $mins = abs($mins);
    $hrs = floor($mins / 60);
    $mins -= $hrs * 60;
    $offset = sprintf('%+d:%02d', $hrs * $sgn, $mins);
    $pdo->exec("SET time_zone='$offset';");
    
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => "Error de conexión de base de datos."]);
    exit;
}

// Obtener la acción solicitada
$action = $_GET['action'] ?? '';

switch ($action) {
    
    // 1. OBTENER RANKING COMPLETO (Público)
    case 'get_ranking':
        $stmt = $pdo->query("SELECT id, nombre, puntuacion FROM ranking_trivia ORDER BY puntuacion DESC, fecha_registro ASC");
        echo json_encode($stmt->fetchAll());
        break;

    // 2. GUARDAR PUNTUACIÓN (Público)
    case 'save_score':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;
        $data = json_decode(file_get_contents('php://input'), true);
        $nombre = trim($data['nombre'] ?? '');
        $puntuacion = intval($data['puntuacion'] ?? 0);

        if (!empty($nombre)) {
            // Inserta usando NOW() que ya estará sincronizado con la hora de Madrid
            $stmt = $pdo->prepare("INSERT INTO ranking_trivia (nombre, puntuacion, fecha_registro) VALUES (?, ?, NOW())");
            $stmt->execute([$nombre, $puntuacion]);
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Nombre vacío"]);
        }
        break;

    // 3. ELIMINAR PUNTUACIÓN RECIENTE (Ventana de 2 minutos - Público)
    case 'delete_recent':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;
        $data = json_decode(file_get_contents('php://input'), true);
        $nombre = trim($data['nombre'] ?? '');

        if (!empty($nombre)) {
            $stmt = $pdo->prepare("DELETE FROM ranking_trivia WHERE nombre = ? AND fecha_registro >= NOW() - INTERVAL 2 MINUTE ORDER BY id DESC LIMIT 1");
            $stmt->execute([$nombre]);
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error"]);
        }
        break;

    // 4. GUARDAR MENSAJE / DEDICATORIA (Público)
    case 'save_message':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;
        $data = json_decode(file_get_contents('php://input'), true);
        $nombre = trim($data['nombre'] ?? '');
        $mensaje = trim($data['mensaje'] ?? '');

        if (empty($nombre) || empty($mensaje)) {
            echo json_encode(["status" => "error", "message" => "Por favor, rellena todos los campos."]);
            exit;
        }

        try {
            $stmt = $pdo->prepare("INSERT INTO dedicatorias (nombre, mensaje, fecha_registro) VALUES (?, ?, NOW())");
            $stmt->execute([$nombre, $mensaje]);
            echo json_encode(["status" => "success", "message" => "¡Mensaje guardado con éxito!"]);
        } catch (PDOException $e) {
            echo json_encode(["status" => "error", "message" => "Error al guardar en la base de datos."]);
        }
        break;

    // 5. OBTENER MENSAJES / DEDICATORIAS (Público - Muestra formato 24h: %H:%i)
    case 'get_messages':
        try {
            $stmt = $pdo->query("SELECT nombre, mensaje, DATE_FORMAT(fecha_registro, '%d/%m/%Y %H:%i') as fecha FROM dedicatorias ORDER BY id DESC");
            echo json_encode($stmt->fetchAll());
        } catch (PDOException $e) {
            echo json_encode([]);
        }
        break;

    // 6. LOGIN DEL ADMINISTRADOR
    case 'admin_login':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;
        $data = json_decode(file_get_contents('php://input'), true);
        $password = $data['password'] ?? '';

        if ($password === 'Cris26LaGuerrera!') { 
            $_SESSION['admin_logged'] = true;
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Contraseña incorrecta"]);
        }
        break;

    // 7. VERIFICAR SESIÓN DE ADMIN
    case 'admin_check':
        if (isset($_SESSION['admin_logged'])) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error"]);
        }
        break;

    // 8. LOGOUT DEL ADMINISTRADOR
    case 'admin_logout':
        unset($_SESSION['admin_logged']);
        session_destroy();
        echo json_encode(["status" => "success"]);
        break;

    // 9. ELIMINAR JUGADOR DEL TRIVIAL (Solo Admin)
    case 'admin_delete_player':
        if (!isset($_SESSION['admin_logged'])) {
            echo json_encode(["status" => "error", "message" => "No autorizado"]);
            exit;
        }
        $id = intval($_GET['id'] ?? 0);
        $stmt = $pdo->prepare("DELETE FROM ranking_trivia WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(["status" => "success"]);
        break;

    // 10. EDITAR JUGADOR DEL TRIVIAL (Solo Admin)
    case 'admin_edit_player':
        if (!isset($_SESSION['admin_logged'])) {
            echo json_encode(["status" => "error", "message" => "No autorizado"]);
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;
        $data = json_decode(file_get_contents('php://input'), true);
        $id = intval($data['id'] ?? 0);
        $nombre = trim($data['nombre'] ?? '');
        $puntuacion = intval($data['puntuacion'] ?? 0);

        if (!empty($nombre)) {
            $stmt = $pdo->prepare("UPDATE ranking_trivia SET nombre = ?, puntuacion = ? WHERE id = ?");
            $stmt->execute([$nombre, $puntuacion, $id]);
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Nombre inválido"]);
        }
        break;

    // 11. OBTENER LISTA DE DEDICATORIAS PARA EL PANEL ADMIN (Solo Admin)
    case 'admin_get_messages':
        if (!isset($_SESSION['admin_logged'])) {
            echo json_encode([]);
            exit;
        }
        $stmt = $pdo->query("SELECT id, nombre, mensaje, DATE_FORMAT(fecha_registro, '%d/%m/%Y %H:%i') as fecha_registro FROM dedicatorias ORDER BY id DESC");
        echo json_encode($stmt->fetchAll());
        break;

    // 12. ELIMINAR DEDICATORIA DESDE EL PANEL ADMIN (Solo Admin)
    case 'admin_delete_message':
        if (!isset($_SESSION['admin_logged'])) {
            echo json_encode(["status" => "error", "message" => "No autorizado"]);
            exit;
        }
        $id = intval($_GET['id'] ?? 0);
        $stmt = $pdo->prepare("DELETE FROM dedicatorias WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(["status" => "success"]);
        break;

    // 13. EDITAR DEDICATORIA COMPLETA desde el Panel Admin (Autor + Mensaje)
    case 'admin_edit_message':
        if (!isset($_SESSION['admin_logged'])) {
            echo json_encode(["status" => "error", "message" => "No autorizado"]);
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;
        $data = json_decode(file_get_contents('php://input'), true);
        $id = intval($data['id'] ?? 0);
        $nombre = trim($data['nombre'] ?? '');
        $mensaje = trim($data['mensaje'] ?? '');

        if (!empty($nombre) && !empty($mensaje)) {
            $stmt = $pdo->prepare("UPDATE dedicatorias SET nombre = ?, mensaje = ? WHERE id = ?");
            $stmt->execute([$nombre, $mensaje, $id]);
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Campos obligatorios vacíos"]);
        }
        break;

    default:
        echo json_encode(["status" => "error", "message" => "Acción no válida"]);
        break;
}
?>