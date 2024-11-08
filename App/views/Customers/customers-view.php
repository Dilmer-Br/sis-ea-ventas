<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Principal</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>App/assets/css/style.css">
</head>

<body>
    <!-- Menú lateral -->
    <div class="sidebar" id="sidebar">
        <h2 class="logo">Mi Sistema</h2>
        <ul class="menu">
            <li><a href="#dashboard" class="menu-link">Dashboard</a></li>
            <li><a href="#usuarios" class="menu-link">Usuarios</a></li>
            <li><a href="#reportes" class="menu-link">Reportes</a></li>
            <li><a href="#configuracion" class="menu-link">Configuración</a></li>
            <li><a href="#soporte" class="menu-link">Soporte</a></li>
        </ul>
    </div>

    <!-- Contenedor principal -->
    <div class="main-content">
        <!-- Menú superior -->
        <header class="header">
            <h1 class="system-name">Mi Sistema de Gestión</h1>
            <button class="logout-btn" onclick="logout()">Cerrar Sesión</button>
        </header>

        <!-- Área de contenido -->
        <section class="content">
            <h2>GESTION DE CLIENTES</h2>
            <p>Gestion y administracion de clientes </p>
        </section>
        <section class="content-body">
            <div class="form-container">
                <form action="">
                    <div class="form-group">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese el nombre de la categoria" required>
                    </div>
                    <div class="form-group">
                        <label for="txtLatsname">Apellidos</label>
                        <input type="text" name="txtLatsname" id="txtLatsname" placeholder="Ingresa su Apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="txtdni">DNI</label>
                        <input type="text" name="txtdni" id="txtdni" placeholder="Ingrese su dni de 8 digitos" required>
                    </div>
                    <div class="form-group">
                        <label for="txtnationality">Nacionalidad</label>
                        <input type="text" name="txtnationality" id="txtnationality" placeholder="Nacionalidad" required>
                    </div>
                    <div class="form-group">
                        <label for="txtdateBirth">Fecha de Nacimiento</label>
                        <input type="text" name="txtdateBirth" id="txtdateBirth" placeholder="Ingrese su fecha de nacimiento" required>
                    </div>
                    <div class="form-group">
                        <label for="txtnumberPhone">Numero De Celular</label>
                        <input type="text" name="txtnumberPhone" id="txtnumberPhone" placeholder="Ingrese su numero de Telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="txtemail">correo electronico</label>
                        <input type="text" name="txtemail" id="txtemail" placeholder="Ingrese su Correo Electronico" required>
                    </div>
                    <div class="form-actions">
                        <button type="reset" class="btn btn-secondary">Limpiar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Nacionalidad</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Numero De Celular</th>
                            <th>correo electronico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Reks</td>
                            <td>wuis</td>
                            <td>40904390</td>
                            <td>N.T</td>
                            <td>Extrangero</td>
                            <td>0903432</td>
                            <td>@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <script>
        let base_url = "<?= BASE_URL ?>";
    </script>
    <script src="<?= BASE_URL ?>App/assets/js/main.js"></script>
</body>
</html>