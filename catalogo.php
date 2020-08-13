<?php
require_once './conexion.php';
require_once './checa_sesion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php
    readfile('./menu.html');
    ?>
    <div class="container mt-3">
        <div class="card">
           
                        <?php
                        $sql = 'select estados.idestado, municipios.idmunicipio from estados
                        inner join estados on estados.iestados=municpios.idestado';                       
                        foreach ($conexion->query($sql) as $registro) {
                        
                            echo <<<fin
                            <div class="container">
                            <div class="card-deck mb-3 text-center">
                              <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                  <h4 class="my-0 font-weight-normal">Terreno en venta </h4>
                                </div>
                                <div class="card-body">
                                <img src="img/Terrenos/Baja california/Terreno 1/1.webp"width="300" alt="img_conference" class="rounded float-left mr-4">
                                  <ul class="list-unstyled mt-3 mb-4">
                                    <li>"El compromiso </li>
                                    <li>es Contigo"</li>
                                    <li>La mejor calidad aqui en SDI</li>
                                  </ul>
                                  <a href="bajat.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Observar</button></a>
                                </div>
                                </div>
                                </div>
                            
fin;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>