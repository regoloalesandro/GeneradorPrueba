<?php
namespace GeneradorPrueba;

require_once  'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

$prueba = new Generador('./preguntas.yml');

echo $twig->render('index.html', ['preguntas' => $prueba->getPreguntas()] );