<?php

require_once  './vendor/autoload.php';

session_start(); 
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

$prueba=$_SESSION['prueba'];

echo $twig->render('respuestas.html', ['preguntas' => $prueba->getPreguntas()] );