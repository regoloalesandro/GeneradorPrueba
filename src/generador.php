<?php

namespace GeneradorPrueba;
require_once __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

class Generador{
	protected $preguntas = [];

	public function __construct($archivo){
		$yaml = new Parser();
		$value = $yaml->parse(file_get_contents($archivo));
		$preguntasYaml = $value['preguntas'];

		for ($i=0; $i < count($preguntasYaml); $i++) {
			$this->preguntas[$i] = new Pregunta ($preguntasYaml[$i]);
		}	
	}
}

