<?php
namespace GeneradorPrueba;
require_once  './vendor/autoload.php';


session_start();

$prueba = new Generador('./preguntas.yml');

$_SESSION['prueba'] = $prueba;

header('Location: index.php');

