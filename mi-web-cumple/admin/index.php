<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Trivia de Cris</title>
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
        .container {
            width: 100%;
            max-width: 900px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.5);
        }
        h1, h2 { color: var(--gold); text-align: center; margin-bottom: 20px; }
        h2 { margin-top: 30px; border-bottom: 1px solid var(--border); padding-bottom: 10px; text-align: left;}
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: var(--text-dim); }
        input[type="password"], input[type="text"], textarea {
            width: 100%; padding: 12px; background: rgba(0,0,0,0.3);
            border: 1px solid var(--border); border-radius: 6px; color: white; font-size: 16px;
        }
        textarea { resize: vertical; height: 80px; }
        button {
            width: 100%; padding: 12px; background: var(--green); border: none;
            border-radius: 6px; color: white; font-size: 16px; font-weight: bold; cursor: pointer; transition: 0.2s;
        }
        button:hover { background: var(--green-dim); }
        .btn-danger { background: var(--red); }
        .btn-danger:hover { background: #ff5555; }
        .btn-small { width: auto; padding: 6px 12px; font-size: 14px; margin-left: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid var(--border); }
        th { color: var(--gold); }
        .flex-actions { display: flex; gap: 5px; }
        .header-panel { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    </style>
</head>
<body>

    <div id="loginSection" class="container" style="max-width: 400px;">
        <h1>Admin Panel</h1>
        <div class="form-group">
            <label>Contraseña del Administrador</label>
            <input type="password" id="adminPassword" placeholder="Introduce la contraseña">
        </div>
        <button onclick="login()">Entrar</button>
    </div>

    <div id="panelSection" class="container" style="display: none;">
        <div class="header-panel">
            <h1>Panel de Control</h1>
            <button class="btn-danger btn-small" onclick="logout()">Cerrar Sesión</button>
        </div>

        <h2>Participantes del Trivial</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Puntuación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="playersTableBody"></tbody>
        </table>

        <h2>Gestión de Dedicatorias (Amigos)</h2>
        <div style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px; border: 1px solid var(--border); margin-bottom: 20px;">
            <h3>Añadir Nueva Dedicatoria</h3>
            <div class="form-group" style="margin-top: 10px;">
                <label>Nombre del Amigo/a</label>
                <input type="text" id="nuevaDediNombre" placeholder="Ej: Maria u Paco">
            </div>
            <div class="form-group">
                <label>Mensaje de Dedicatoria</label>
                <textarea id="nuevaDediMensaje" placeholder="Escribe la dedicatoria aquí..."></textarea>
            </div>
            <button style="width: auto; padding: 10px 20px;" onclick="addDedicatoria()">Añadir Dedicatoria ✨</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th style="width: 25%;">Amigo</th>
                    <th style="width: 50%;">Mensaje</th>
                    <th style="width: 25%;">Acciones</th>
                </tr>
            </thead>
            <tbody id="dedicatoriasTableBody"></tbody>
        </table>
    </div>

    <script>
        // Al cargar la página verificar si ya está logueado
        fetch('../api.php?action=admin_check')
        .then(res => res.json())
        .then(data => {
            if(data.logged) {
                document.getElementById('loginSection').style.display = 'none';
                document.getElementById('panelSection').style.display = 'block';
                loadAdminData();
            }
        });

        function login() {
            const pass = document.getElementById('adminPassword').value;
            fetch('../api.php?action=admin_login', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ password: pass })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    document.getElementById('loginSection').style.display = 'none';
                    document.getElementById('panelSection').style.display = 'block';
                    loadAdminData();
                } else {
                    alert(data.message);
                }
            });
        }

        function loadAdminData() {
            // Cargar Trivial
            fetch('../api.php?action=admin_get_data')
            .then(res => res.json())
            .then(data => {
                const tbody = document.getElementById('playersTableBody');
                tbody.innerHTML = '';
                if(data.players) {
                    data.players.forEach(p => {
                        tbody.innerHTML += `
                            <tr>
                                <td><input type="text" id="name-${p.id}" value="${p.nombre}" style="padding:5px; background:none; border:1px solid var(--border); color:white; width:100%;"></td>
                                <td><input type="number" id="score-${p.id}" value="${p.puntuacion}" style="padding:5px; background:none; border:1px solid var(--border); color:white; width:70px;"></td>
                                <td>
                                    <div class="flex-actions">
                                        <button class="btn-small" onclick="editPlayer(${p.id})">Guardar</button>
                                        <button class="btn-danger btn-small" onclick="deletePlayer(${p.id})">Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                }
            });

            // Cargar Dedicatorias
            fetch('../api.php?action=admin_get_dedicatorias')
            .then(res => res.json())
            .then(data => {
                const tbody = document.getElementById('dedicatoriasTableBody');
                tbody.innerHTML = '';
                if(data.dedicatorias && data.dedicatorias.length > 0) {
                    data.dedicatorias.forEach(d => {
                        tbody.innerHTML += `
                            <tr>
                                <td><input type="text" id="dedi-name-${d.id}" value="${d.nombre}" style="padding:5px; background:none; border:1px solid var(--border); color:white; width:100%;"></td>
                                <td><textarea id="dedi-msg-${d.id}" style="padding:5px; background:none; border:1px solid var(--border); color:white; width:100%; height:60px;">${d.mensaje}</textarea></td>
                                <td>
                                    <div class="flex-actions">
                                        <button class="btn-small" onclick="editDedicatoria(${d.id})">Guardar</button>
                                        <button class="btn-danger btn-small" onclick="deleteDedicatoria(${d.id})">Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                } else {
                    tbody.innerHTML = '<tr><td colspan="3" style="text-align:center; color:var(--text-dim);">No hay dedicatorias creadas.</td></tr>';
                }
            });
        }

        // Acciones Trivial
        function editPlayer(id) {
            const nuevoNombre = document.getElementById(`name-${id}`).value;
            const nuevaPuntuacion = document.getElementById(`score-${id}`).value;
            fetch('../api.php?action=admin_edit_player', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ id: id, nombre: nuevoNombre, puntuacion: nuevaPuntuacion })
            }).then(() => { alert('Jugador actualizado'); loadAdminData(); });
        }

        function deletePlayer(id) {
            if(confirm('¿Eliminar participante?')) {
                fetch(`../api.php?action=admin_delete_player&id=${id}`).then(() => loadAdminData());
            }
        }

        // Acciones Dedicatorias
        function addDedicatoria() {
            const nombre = document.getElementById('nuevaDediNombre').value;
            const mensaje = document.getElementById('nuevaDediMensaje').value;
            if(!nombre || !mensaje) { alert('Rellena todos los campos'); return; }

            fetch('../api.php?action=admin_add_dedicatoria', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nombre: nombre, mensaje: mensaje })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    document.getElementById('nuevaDediNombre').value = '';
                    document.getElementById('nuevaDediMensaje').value = '';
                    loadAdminData();
                }
            });
        }

        function editDedicatoria(id) {
            const nombre = document.getElementById(`dedi-name-${id}`).value;
            const mensaje = document.getElementById(`dedi-msg-${id}`).value;
            fetch('../api.php?action=admin_edit_dedicatoria', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ id: id, nombre: nombre, mensaje: mensaje })
            }).then(() => { alert('Dedicatoria actualizada'); loadAdminData(); });
        }

        function deleteDedicatoria(id) {
            if(confirm('¿Seguro que quieres eliminar esta dedicatoria?')) {
                fetch(`../api.php?action=admin_delete_dedicatoria&id=${id}`).then(() => loadAdminData());
            }
        }

        function logout() {
            fetch('../api.php?action=admin_logout').then(() => {
                document.getElementById('loginSection').style.display = 'block';
                document.getElementById('panelSection').style.display = 'none';
            });
        }
    </script>
</body>
</html>