<?php
    require_once  './vendor/autoload.php';

    session_start();

    $prueba = $_SESSION['prueba'];
    $prueba2 = $_SESSION['prueba2'];

?>
<html>
    <head>

    </head>
    <body>
        <a href="generarPrueba.php"> Generar Pruebas</a>

        <br/><br/>

        <h1>Tema 1</h1>
        <a href="pruebaRender.php">Ver Prueba</a>
        <a href="respuestasRender.php">Ver Respuestas</a>

        <h1>Tema 2</h2>
        <a href="prueba2Render.php">Ver Prueba</a>
        <a href="respuestas2Render.php">Ver Respuestas</a>


    </body>
</html>