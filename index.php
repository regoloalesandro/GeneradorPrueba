<?php
    require_once  './vendor/autoload.php';

    session_start();

    $prueba = $_SESSION['prueba'];
?>
<html>
    <head>

    </head>
    <body>
        <a href="generarPrueba.php"> Generar Prueba </a>

        <br/>

        <a href="pruebaRender.php">Ver Prueba</a>
        <a href="respuestasRender.php">Ver Respuestas</a>




    </body>
</html>