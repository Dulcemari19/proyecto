<?php
require_once './checa_sesion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php
    readfile('./menu.html');
    ?>
    <a href="casas.php" class="btn btn-light btn-sm float-right"><i class="fa fa-reply"></i> regresar</a>
    <img src="img/sdihouse.png"width="250" alt="img_conference" class="rounded float-left mr-4"><div class="jumbotron text-center">
     <h1>SDI House</h1>
      <p>¿Por cuánto tiempo me quedo con una propiedad? Mi preferencia: para siempre</p> 
    </div>
    <div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Recilencia las palmas</h4>
      </div>
      <div class="card-body">
      <img src="img/a1.jpg"width="300" alt="img_conference" class="rounded float-left mr-4">
        <ul class="list-unstyled mt-3 mb-4">
          <li>"El compromiso </li>
          <li>es Contigo"</li>
          <li>La mejor calidad aqui en SDI</li>
        </ul>
        <a href="aguascalientescasa1.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Observar</button></a>
      </div>
      </div>
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Residencial con Roof Garden</h4>
      </div>
      <div class="card-body">
      <img src="img/a13.jpg"width="300" alt="img_conference" class="rounded float-left mr-4">
        <ul class="list-unstyled mt-3 mb-4">
          <li>"El compromiso </li>
          <li>es Contigo"</li>
          <li>La mejor calidad aqui en SDI</li>
        </ul>
        <a href="aguascalientescasa2.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Observar</button></a>
      </div>
      </div>
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Punta Dorada Coto al Norponiente</h4>
      </div>
      <div class="card-body">
      <img src="img/casa3.jpg"width="300" alt="img_conference" class="rounded float-left mr-4">
        <ul class="list-unstyled mt-3 mb-4">
          <li>"El compromiso </li>
          <li>es Contigo"</li>
          <li>La mejor calidad aqui en SDI</li>
        </ul>
        <a href="aguascalientescasa3.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Observar</button></a>
      </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>