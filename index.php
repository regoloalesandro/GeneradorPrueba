<?php
    require_once  './vendor/autoload.php';

    session_start();

    $prueba = $_SESSION['prueba'];
    $prueba2 = $_SESSION['prueba2'];

?>
<html>
    <head>
        <style>
            body{
               background: rgb(121, 134, 203);
            }
            .button--moema {
                padding: 1.5em 3em;
                border-radius: 50px;
                background: #7986cb;
                color: #fff;
                -webkit-transition: background-color 0.3s, color 0.3s;
                transition: background-color 0.3s, color 0.3s;
            }
            .button--moema.button--inverted {
                background: #ECEFF1;
                color: #37474f;
            }
            .button--moema::before {
                content: '';
                position: absolute;
                top: -20px;
                left: -20px;
                bottom: -20px;
                right: -20px;
                background: inherit;
                border-radius: 50px;
                z-index: -1;
                opacity: 0.4;
                -webkit-transform: scale3d(0.8, 0.5, 1);
                transform: scale3d(0.8, 0.5, 1);
            }
            .button--moema:hover {
                -webkit-transition: background-color 0.1s 0.3s, color 0.1s 0.3s;
                transition: background-color 0.1s 0.3s, color 0.1s 0.3s;
                color: #ECEFF1;
                background-color: #3f51b5;
                -webkit-animation: anim-moema-1 0.3s forwards;
                animation: anim-moema-1 0.3s forwards;
            }
            .button--moema.button--inverted:hover {
                color: #ECEFF1;
                background-color: #7986cb;
            }
            .button--moema:hover::before {
                -webkit-animation: anim-moema-2 0.3s 0.3s forwards;
                animation: anim-moema-2 0.3s 0.3s forwards;
            }
            @-webkit-keyframes anim-moema-1 {
                60% {
                    -webkit-transform: scale3d(0.8, 0.8, 1);
                    transform: scale3d(0.8, 0.8, 1);
                }
                85% {
                    -webkit-transform: scale3d(1.1, 1.1, 1);
                    transform: scale3d(1.1, 1.1, 1);
                }
                100% {
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
                }
            }
            @keyframes anim-moema-1 {
                60% {
                    -webkit-transform: scale3d(0.8, 0.8, 1);
                    transform: scale3d(0.8, 0.8, 1);
                }
                85% {
                    -webkit-transform: scale3d(1.1, 1.1, 1);
                    transform: scale3d(1.1, 1.1, 1);
                }
                100% {
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
                }
            }
            @-webkit-keyframes anim-moema-2 {
                to {
                    opacity: 0;
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
                }
            }
            @keyframes anim-moema-2 {
                to {
                    opacity: 0;
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
                }
            }
            .button {
                float: left;
                min-width: 150px;
                max-width: 250px;
                display: block;
                margin: 1em;
                padding: 1em 2em;
                border: none;
                background: none;
                color: inherit;
                vertical-align: middle;
                position: relative;
                z-index: 1;
                -webkit-backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
            }
            .button:focus {
                outline: none;
            }
            .button > span {
                vertical-align: middle;
            }
            /* Text color adjustments (we could stick to the "inherit" but that does not work well in Safari) */
            .bg-1 .button {
                color: #37474f;
                border-color: #37474f;
            }
            .bg-2 .button {
                color: #ECEFF1;
                border-color: #ECEFF1;
            }
            .bg-3 .button {
                color: #fff;
                border-color: #fff;
            }

            /* Sizes */
            .button--size-s {
                font-size: 14px;
            }
            .button--size-l {
                font-size: 25px;
            }
            }

            /* Typography and Roundedness */
            .button--text-upper {
                letter-spacing: 2px;
                text-transform: uppercase;
            }
            .button--text-thin {
                font-weight: 300;
            }
            .button--text-medium {
                font-weight: 500;
            }
            .button--text-thick {
                font-weight: 600;
            }
            .button--round-s {
                border-radius: 5px;
            }
            .button--round-m {
                border-radius: 15px;
            }
            .button--round-l {
                border-radius: 60px;
            }

            /* Borders */
            .button--border-thick {
                border: 3px solid;
            }
            .centrar{
                position: absolute;
                /*nos posicionamos en el centro del navegador*/
                top:40%;
                left:50%;
                /*determinamos una anchura*/
                /*indicamos que el margen izquierdo, es la mitad de la anchura*/
                margin-left:-200px;
                /*determinamos una altura*/
                height:300px;
                /*indicamos que el margen superior, es la mitad de la altura*/
                margin-top:-150px;

            }
            .centrar2{
                position: absolute;
                /*nos posicionamos en el centro del navegador*/
                top:20%;
                left:50%;
                /*determinamos una anchura*/
                /*indicamos que el margen izquierdo, es la mitad de la anchura*/
                margin-left:-200px;
                /*determinamos una altura*/
                height:300px;
                /*indicamos que el margen superior, es la mitad de la altura*/
                margin-top:-150px;

            }
            .centro{
                text-align: center;
            }
        </style>
    </head>
    <body >
    <h1 class=centro>Generado de prubas multiple choice</h1>
    <div class="centrar">  
                <div class="centrar2">
                <a href="generarPrueba.php" class="button button--moema button--border-thick button--size-l">Generar Pruebas</a>
                </div>
                <br></br>
                <h1>Tema 1</h1>
                <a href="pruebaRender.php" class="button button--moema button--border-thick button--size-s">Ver Prueba</a>
                <a href="respuestasRender.php" class="button button--moema button--border-thick button--size-s">Ver Respuestas</a>
                <br></br>
                <h1>Tema 2</h2>
                <a href="prueba2Render.php" class="button button--moema button--border-thick button--size-s">Ver Prueba</a>
                <a href="respuestas2Render.php" class="button button--moema button--border-thick button--size-s">Ver Respuestas</a>

        </div>
    </body>
</html>