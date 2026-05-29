<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Especial Cris 26</title>
    <style>
        :root {
            --gold: #e5c07b;
            --green: #2ebd85;
            --green-dim: #40dd9f;
            --bg-deep: #050a08;
            --bg-card: rgba(19, 28, 25, 0.95);
            --border: rgba(45, 66, 59, 0.6);
            --text-main: #ffffff;
            --text-dim: #a2b5ae;
            --red: #e53e3e;
            --red-dim: #fc8181;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body {
            background-color: var(--bg-deep);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        body::before {
            content: ""; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(135deg, #1b352b 0%, #091310 70%, #050a08 100%);
            z-index: -1;
        }
        .admin-box {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 24px;
            width: 100%;
            max-width: 850px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.7);
        }
        h1 { font-size: 1.4rem; color: var(--gold); margin-bottom: 20px; text-align: center; text-transform: uppercase; letter-spacing: 1px; }
        
        /* LOGIN SECCIÓN */
        .login-form { display: flex; flex-direction: column; gap: 15px; max-width: 320px; margin: 0 auto; text-align: center; }
        .login-form p { font-size: 0.9rem; color: var(--text-dim); }
        input[type="password"], input[type="text"], textarea {
            width: 100%; padding: 12px; background: #0d1412; border: 1px solid var(--border);
            border-radius: 8px; color: #fff; font-size: 0.9rem; outline: none;
        }
        input:focus, textarea:focus { border-color: var(--green); }
        .btn {
            background: var(--green); color: #050a08; border: none; padding: 12px;
            border-radius: 8px; font-weight: bold; cursor: pointer; font-size: 0.9rem;
            transition: background-color 0.1s;
        }
        .btn:hover { background: var(--green-dim); }
        .btn-danger { background: var(--red); color: white; }
        .btn-danger:hover { background: #c53030; }

        /* HEADER PANEL */
        .panel-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 1px solid var(--border); padding-bottom: 15px; }
        .panel-header span { font-size: 0.95rem; color: var(--green); font-weight: bold; }
        .btn-logout { background: none; border: 1px solid var(--red); color: var(--red-dim); padding: 6px 12px; border-radius: 6px; font-size: 0.8rem; cursor: pointer; font-weight: bold; }
        .btn-logout:hover { background: var(--red); color: white; }

        /* PESTAÑAS (TABS) */
        .admin-tabs { display: flex; gap: 10px; margin-bottom: 20px; border-bottom: 1px solid rgba(45, 66, 59, 0.4); padding-bottom: 10px; }
        .tab-btn { flex: 1; padding: 10px; background: #0d1412; border: 1px solid var(--border); color: var(--text-dim); border-radius: 8px; cursor: pointer; font-weight: bold; font-size: 0.85rem; text-align: center; }
        .tab-btn.active { background: var(--gold); color: #050a08; border-color: var(--gold); }

        .tab-content { display: none; }
        .tab-content.active { display: block; }

        /* TABLAS Y LISTADOS */
        .table-responsive { width: 100%; overflow-x: auto; margin-top: 10px; }
        table { width: 100%; border-collapse: collapse; text-align: left; font-size: 0.88rem; }
        th, td { padding: 12px; border-bottom: 1px solid rgba(45, 66, 59, 0.4); vertical-align: middle; }
        th { color: var(--gold); font-weight: bold; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.5px; }
        tr:hover { background: rgba(46, 189, 133, 0.03); }
        
        .action-inputs { display: flex; gap: 6px; align-items: center; }
        .table-input { padding: 6px 10px; background: #0d1412; border: 1px solid var(--border); border-radius: 6px; color: white; font-size: 0.85rem; }
        .btn-sm { padding: 6px 10px; font-size: 0.75rem; border-radius: 4px; border: none; font-weight: bold; cursor: pointer; white-space: nowrap; }
        
        .empty-notice { text-align: center; color: var(--text-dim); padding: 30px; font-style: italic; }

        /* ESTILOS DE PAGINACIÓN */
        .pagination-container {
            display: none;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid rgba(45, 66, 59, 0.4);
        }
        .pagination-info {
            font-size: 0.85rem;
            color: var(--text-dim);
        }
        .pagination-buttons {
            display: flex;
            gap: 8px;
        }
        .btn-page {
            background: #0d1412;
            border: 1px solid var(--border);
            color: var(--text-main);
            padding: 6px 12px;
            font-size: 0.8rem;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-page:hover:not(:disabled) {
            background: var(--green);
            color: #050a08;
            border-color: var(--green);
        }
        .btn-page:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }
    </style>
</head>
<body>

    <div class="admin-box">
        <div id="loginSection" class="login-form">
            <h1>🔐 Acceso Admin</h1>
            <p>Introduce la clave maestra para gestionar el contenido de la web:</p>
            <input type="password" id="adminPassword" placeholder="Contraseña..." style="text-align: center;">
            <button class="btn" onclick="login()">Entrar al Panel</button>
        </div>

        <div id="panelSection" style="display: none;">
            <div class="panel-header">
                <span>⚡ Panel de Control Activo</span>
                <button class="btn-logout" onclick="logout()">Cerrar Sesión 🚪</button>
            </div>

            <h1>Administración General</h1>

            <div class="admin-tabs">
                <button class="tab-btn active" id="tabTriviaBtn" onclick="switchTab('trivia')">🎮 Ranking del Trivial</button>
                <button class="tab-btn" id="tabMessagesBtn" onclick="switchTab('messages')">💌 Libro de Dedicatorias</button>
            </div>

            <!-- PESTAÑA TRIVIA -->
            <div id="contentTrivia" class="tab-content active">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Participante</th>
                                <th>Puntuación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="triviaTableBody">
                        </tbody>
                    </table>
                </div>
                <!-- Paginación Trivia -->
                <div id="triviaPagination" class="pagination-container">
                    <span id="triviaPageInfo" class="pagination-info">Página 1 de 1</span>
                    <div class="pagination-buttons">
                        <button id="triviaPrevBtn" class="btn-page" onclick="changeTriviaPage(-1)">◀ Anterior</button>
                        <button id="triviaNextBtn" class="btn-page" onclick="changeTriviaPage(1)">Siguiente ▶</button>
                    </div>
                </div>
            </div>

            <!-- PESTAÑA DEDICATORIAS -->
            <div id="contentMessages" class="tab-content">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 20%;">Autor</th>
                                <th style="width: 45%;">Mensaje / Dedicatoria</th>
                                <th style="width: 15%;">Fecha (24h)</th>
                                <th style="width: 20%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="messagesTableBody">
                        </tbody>
                    </table>
                </div>
                <!-- Paginación Dedicatorias -->
                <div id="messagesPagination" class="pagination-container">
                    <span id="messagesPageInfo" class="pagination-info">Página 1 de 1</span>
                    <div class="pagination-buttons">
                        <button id="messagesPrevBtn" class="btn-page" onclick="changeMessagesPage(-1)">◀ Anterior</button>
                        <button id="messagesNextBtn" class="btn-page" onclick="changeMessagesPage(1)">Siguiente ▶</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Variables globales para el estado de la paginación
        const ITEMS_PER_PAGE = 5;
        let currentTriviaPage = 1;
        let currentMessagesPage = 1;
        
        let globalTriviaData = [];
        let globalMessagesData = [];

        // Verificar sesión al cargar la página
        window.onload = function() {
            fetch('api.php?action=admin_check')
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    showPanel();
                }
            });
        };

        function login() {
            const pass = document.getElementById('adminPassword').value;
            fetch('api.php?action=admin_login', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ password: pass })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    showPanel();
                } else {
                    alert(data.message || 'Error de autenticación');
                }
            });
        }

        function showPanel() {
            document.getElementById('loginSection').style.display = 'none';
            document.getElementById('panelSection').style.display = 'block';
            loadAdminData();
        }

        function switchTab(target) {
            const tabTrivia = document.getElementById('tabTriviaBtn');
            const tabMessages = document.getElementById('tabMessagesBtn');
            const contentTrivia = document.getElementById('contentTrivia');
            const contentMessages = document.getElementById('contentMessages');

            if (target === 'trivia') {
                tabTrivia.classList.add('active');
                tabMessages.classList.remove('active');
                contentTrivia.classList.add('active');
                contentMessages.classList.remove('active');
            } else {
                tabTrivia.classList.remove('active');
                tabMessages.classList.add('active');
                contentTrivia.classList.remove('active');
                contentMessages.classList.add('active');
            }
        }

        function loadAdminData() {
            // 1. Cargar datos del Trivial
            fetch('api.php?action=get_ranking')
            .then(res => res.json())
            .then(players => {
                globalTriviaData = players || [];
                // Ajustar página actual si se eliminaron elementos
                const totalPages = Math.ceil(globalTriviaData.length / ITEMS_PER_PAGE);
                if (currentTriviaPage > totalPages && totalPages > 0) currentTriviaPage = totalPages;
                renderTriviaTable();
            });

            // 2. Cargar dedicatorias editables
            fetch('api.php?action=admin_get_messages')
            .then(res => res.json())
            .then(messages => {
                globalMessagesData = messages || [];
                // Ajustar página actual si se eliminaron elementos
                const totalPages = Math.ceil(globalMessagesData.length / ITEMS_PER_PAGE);
                if (currentMessagesPage > totalPages && totalPages > 0) currentMessagesPage = totalPages;
                renderMessagesTable();
            });
        }

        /* RENDERS CON PAGINACIÓN */
        function renderTriviaTable() {
            const triviaBody = document.getElementById('triviaTableBody');
            const paginationCont = document.getElementById('triviaPagination');
            
            if(globalTriviaData.length === 0) {
                triviaBody.innerHTML = `<tr><td colspan="3" class="empty-notice">No hay registros en el trivial todavía.</td></tr>`;
                paginationCont.style.display = 'none';
                return;
            }

            // Calcular índices de corte para paginación
            const startIndex = (currentTriviaPage - 1) * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;
            const pageItems = globalTriviaData.slice(startIndex, endIndex);

            let html = '';
            pageItems.forEach(p => {
                html += `
                    <tr>
                        <td>
                            <input type="text" class="table-input" id="name-${p.id}" value="${p.nombre}">
                        </td>
                        <td>
                            <input type="number" class="table-input" style="width:80px;" id="score-${p.id}" value="${p.puntuacion}">
                        </td>
                        <td>
                            <div class="action-inputs">
                                <button class="btn-sm" style="background:var(--green); color:#050a08;" onclick="editPlayer(${p.id})">💾 Guardar</button>
                                <button class="btn-sm btn-danger" onclick="deletePlayer(${p.id})">🗑️ Borrar</button>
                            </div>
                        </td>
                    </tr>`;
            });
            triviaBody.innerHTML = html;

            // Mostrar/Ocultar y controlar la botonera de paginación de Trivia
            const totalPages = Math.ceil(globalTriviaData.length / ITEMS_PER_PAGE);
            if (globalTriviaData.length > ITEMS_PER_PAGE) {
                paginationCont.style.display = 'flex';
                document.getElementById('triviaPageInfo').textContent = `Página ${currentTriviaPage} de ${totalPages}`;
                document.getElementById('triviaPrevBtn').disabled = (currentTriviaPage === 1);
                document.getElementById('triviaNextBtn').disabled = (currentTriviaPage === totalPages);
            } else {
                paginationCont.style.display = 'none';
            }
        }

        function renderMessagesTable() {
            const messagesBody = document.getElementById('messagesTableBody');
            const paginationCont = document.getElementById('messagesPagination');
            
            if(globalMessagesData.length === 0) {
                messagesBody.innerHTML = `<tr><td colspan="4" class="empty-notice">No se han enviado dedicatorias aún.</td></tr>`;
                paginationCont.style.display = 'none';
                return;
            }

            // Calcular índices de corte para paginación
            const startIndex = (currentMessagesPage - 1) * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;
            const pageItems = globalMessagesData.slice(startIndex, endIndex);

            let html = '';
            pageItems.forEach(m => {
                html += `
                    <tr>
                        <td>
                            <input type="text" class="table-input" style="width:100%; font-weight:bold; color:var(--gold);" id="msg-author-${m.id}" value="${m.nombre}">
                        </td>
                        <td>
                            <textarea class="table-input" style="width:100%; font-size:0.85rem; resize:vertical; font-style:italic;" rows="2" id="msg-text-${m.id}">${m.mensaje}</textarea>
                        </td>
                        <td style="color:var(--text-dim); font-size:0.8rem;">${m.fecha_registro}</td>
                        <td>
                            <div class="action-inputs">
                                <button class="btn-sm" style="background:var(--green); color:#050a08;" onclick="editMessage(${m.id})">💾 Guardar</button>
                                <button class="btn-sm btn-danger" onclick="deleteMessage(${m.id})">🗑️ Borrar</button>
                            </div>
                        </td>
                    </tr>`;
            });
            messagesBody.innerHTML = html;

            // Mostrar/Ocultar y controlar la botonera de paginación de Dedicatorias
            const totalPages = Math.ceil(globalMessagesData.length / ITEMS_PER_PAGE);
            if (globalMessagesData.length > ITEMS_PER_PAGE) {
                paginationCont.style.display = 'flex';
                document.getElementById('messagesPageInfo').textContent = `Página ${currentMessagesPage} de ${totalPages}`;
                document.getElementById('messagesPrevBtn').disabled = (currentMessagesPage === 1);
                document.getElementById('messagesNextBtn').disabled = (currentMessagesPage === totalPages);
            } else {
                paginationCont.style.display = 'none';
            }
        }

        /* FUNCIONES DE NAVEGACIÓN */
        function changeTriviaPage(direction) {
            currentTriviaPage += direction;
            renderTriviaTable();
        }

        function changeMessagesPage(direction) {
            currentMessagesPage += direction;
            renderMessagesTable();
        }

        /* ACCIONES JUGADORES TRIVIAL */
        function editPlayer(id) {
            const nuevoNombre = document.getElementById(`name-${id}`).value.trim();
            const nuevaPuntuacion = document.getElementById(`score-${id}`).value;

            fetch('api.php?action=admin_edit_player', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ id: id, nombre: nuevoNombre, puntuacion: nuevaPuntuacion })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    alert('Participante actualizado con éxito.');
                    loadAdminData();
                } else {
                    alert('Error al actualizar datos.');
                }
            });
        }

        function deletePlayer(id) {
            if(!confirm('¿Estás seguro de que quieres eliminar a este participante?')) return;

            fetch(`api.php?action=admin_delete_player&id=${id}`)
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    loadAdminData();
                } else {
                    alert('Error al eliminar participante.');
                }
            });
        }

        /* NUEVA ACCIÓN: EDITAR COMENTARIO / AUTOR */
        function editMessage(id) {
            const nuevoAutor = document.getElementById(`msg-author-${id}`).value.trim();
            const nuevoMensaje = document.getElementById(`msg-text-${id}`).value.trim();

            if(nuevoAutor === "" || nuevoMensaje === "") {
                alert("Los campos no pueden quedar vacíos.");
                return;
            }

            fetch('api.php?action=admin_edit_message', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ id: id, nombre: nuevoAutor, mensaje: nuevoMensaje })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    alert('¡Dedicatoria actualizada con éxito!');
                    loadAdminData();
                } else {
                    alert('Error al actualizar la dedicatoria.');
                }
            });
        }

        /* ACCIONES BORRAR DEDICATORIAS */
        function deleteMessage(id) {
            if(!confirm('¿Estás seguro de que deseas eliminar permanentemente esta dedicatoria?')) return;

            fetch(`api.php?action=admin_delete_message&id=${id}`)
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    loadAdminData();
                } else {
                    alert('Error al eliminar el mensaje.');
                }
            });
        }

        function logout() {
            fetch('api.php?action=admin_logout')
            .then(() => {
                document.getElementById('loginSection').style.display = 'block';
                document.getElementById('panelSection').style.display = 'none';
                document.getElementById('adminPassword').value = '';
                currentTriviaPage = 1;
                currentMessagesPage = 1;
            });
        }
    </script>
</body>
</html>