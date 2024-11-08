<!DOCTYPE html>
<html lang="es">

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
            <h2>Gestion de Productos</h2>
            <p>Gestion y administracion de Productos </p>
        </section>
        <section class="content-body">
            <div class="form-container">
                <form action="">
                    <div class="form-group">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese el nombre de la categoria" required>
                    </div>
                    <div class="form-group">
                        <label for="txtDescripcion">Descripcion</label>
                        <textarea name="txtDescripcion" id="txtDescripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtcategories">categorias</label>
                        <select name="idcategories" id="idcategories">
                            <option value="seleccione una categoria "></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtduedate">Fecha de vencimiento</label>
                        <input type="text" name="txtduedate" id="txtduedate" placeholder="Ingresa la fecha de vencimiento" required>
                    </div>
                    <div class="form-group">
                        <label for="txtcostPrice">Precio constante</label>
                        <input type="text" name="txtcostPrice" id="txtcostPrice" placeholder="Precio constante" required>
                    </div>
                    <div class="form-group">
                        <label for="txtsaleprice">Precio de venta</label>
                        <input type="text" name="txtsaleprice" id="txtsaleprice" placeholder="ingresar el Precio de ventas" required>
                    </div>
                    <div class="form-group">
                        <label for="txtdiscount">Descuento</label>
                        <input type="text" name="txtdiscount" id="txtsaleprice" placeholder="ingresar el descuento" required>
                    </div>
                    <div class="form-group">
                        <label for="txtstock">stock</label>
                        <input type="text" name="txtstock" id="txtstock" placeholder="stock" required>
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
                            <th>Descripcion</th>
                            <th>Fecha de vencimiento</th>
                            <th>Precio constante</th>
                            <th>Precio de venta</th>
                            <th>Descuento</th>
                            <th>stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Reks</td>
                            <td>categoria 1</td>
                            <td>40/90/4390</td>
                            <td>$50</td>
                            <td>$100</td>
                            <td>25%</td>
                            <td>30</td>
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