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
    <a href="quintanarooc.php" class="btn btn-light btn-sm float-right"><i class="fa fa-reply"></i> regresar</a>
    <img src="img/sdihouse.png"width="250" alt="img_conference" class="rounded float-left mr-4"></td><div class="jumbotron text-center">
     <h1>SDI House</h1>
      <p>¿Por cuánto tiempo me quedo con una propiedad? Mi preferencia: para siempre</p> 
    </div>
    <main role="main" class="container">
  <div class="jumbotron">
    <h1>Quintana Roo</h1>
    <body class="w3-content w3-border-left w3-border-right" ></body>
    <center><b><strong><h2 class="w3-text-black">Residencial Roo</h2></strong></b></center>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="" data-slide-to="0" class="active"></li>
        <li data-target="" data-slide-to="1"></li>
        <li data-target="" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/casa2quintanaroo.jpg" alt="First slide">
    </div>
    </div>
      <h4><strong>Servicios</strong></h4>
              <div class="w3-row w3-large">
                <div class="w3-col s6">
                  <p><i class="fa fa-fw fa-water"></i> Agua Potable</p>
                  <p><i class="fa fa-fw fa-rss"></i> Internet </p>
                  <p><i class="fa fa-fw fa-phone"></i> Telefonia </p>
                  <p><i class="fa fa-fw fa-broadcast-tower"></i> Energia Electrica</p>
                  <p><i class="fa fa-fw fa-bezier-curve"></i> Gas </p>
                </div>
              </div>
    <hr>
    <h4><strong>Detalles</strong></h4>
                  <div class="w3-row w3-large">
                    <div class="w3-col s6">
                      <p><i class="fa fa-fw fa-bed"></i> 4 Recámaras</p>
                      <p><i class="fa fa-fw fa-door-open"></i> 7 Habitaciones(en total)</p>
                      <p><i class="fa fa-fw fa-toilet"></i> 3 baños</p>
                      <p><i class="fa fa-fw fa-warehouse"></i> Almacen </p>
                      <p><i class="fa fa-fw fa-warehouse"></i> Cocina </p>
                      <p><i class="fa fa-fw fa-arrows-alt"></i> Jardin</p>
                      <p><i class="fa fa-fw fa-user-cog"></i> Construido (año) 2015</p>
                      <p><i class="fa fa-fw fa-compress"></i> Construidos (m²) 210 </p>
                      <p><i class="fa fa-fw fa-arrows-alt"></i> Terreno (m²) 185</p>
                    </div>
                 </div>
    <hr>
    
    <h4><strong>Descripción</strong></h4>
    <p>La casa Residencial Roo es de 2 niveles en la planta de arriba cuenta con 3 recamaras y 2 baños,
    en la planta de abajo cuenta con 1 recamara mas, 1 baño, almacen, 1 cocina y en la parte de afuera 
    cuenta con un pequeño jardin. Es un lugar muy bueno para tu comodidad. </p>
    <hr>
    <h4><strong>Calcula tu Hipoteca</strong></h4>
    <p>$ 3,770,000  Condominio en Venta</p>
    <hr>
  <!-- Contact -->
  <div class="w3-container" id="contact">
    <h4><strong>Contacto</strong></h4>
    <i class="fa fa-map-marker" style="width:30px"></i>Ciudad de Mexico<br>
    <i class="fa fa-phone" style="width:30px"></i>Telefono 55 7234679810<br>
    <i class="fa fa-envelope" style="width:30px"> </i>Correo SDI12@gmail.com<br>
    <form action="/action_page.php" target="_blank">
    <button type="submit" class="w3-button w3-black w3-third">Comprar</button>
    </form>
  </div>
  <hr>
  
</main>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
    