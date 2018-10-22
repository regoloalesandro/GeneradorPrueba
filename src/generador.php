<?php

namespace GeneradorPrueba;

use Symfony\Component\Yaml\Yaml;

class Generador {
    protected $archivo;
	protected $preguntas;
    
	public function __construct($file){
        $this->archivo = Yaml::parseFile($file);
		$this->preguntas = $archivo['preguntas'];
    }

	public function getPreguntas(){
		return $this->preguntas;
	}

    public function getCantPreguntas(){
        return count($this->preguntas);
    }
}
