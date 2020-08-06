<?php
require_once './conexion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SDI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </nav>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-sign-in-alt"></i> Inicio de sesión 
           </div>
           <div class="card-body">
           <?php
                if (isset($_GET['info']) && !empty($_GET['info'])) {
                    $_GET['info'] = htmlentities($_GET['info']);
                    echo <<<fin

                <div class="alert alert-warning" role="alert">
                    {$_GET['info']}
                </div>
fin;
                }
                ?>
           <form action="inicio_sesion.php" method="POST">
                    <div class="form-group">
                        <label for="correo_electronico">Correo electrónico</label>
                        <input type="email" class="form-control form-control-sm" id="correo_electronico" name="correo_electronico" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-sign-in-alt"></i> Ingresar</button>
                </form><br>
                <a href="registrar.php" class="btn btn-light btn-sm float-right"><i class="fa fa-sign-in-alt"></i> Registrarse</a>
           </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>