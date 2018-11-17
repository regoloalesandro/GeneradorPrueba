<?php
namespace GeneradorPrueba;
require_once  './vendor/autoload.php';


session_start();

$prueba = new Generador('./preguntas.yml');
$prueba2 = new Generador('./preguntas.yml');

$_SESSION['prueba'] = $prueba;
$_SESSION['prueba2'] = $prueba2;


header('Location: index.php');

