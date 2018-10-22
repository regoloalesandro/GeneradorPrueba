<?php

namespace GeneradorPrueba;

use Symfony\Component\Yaml\Yaml;

class Generador {
    protected $preguntas;
    
	public function __construct($file){
        $this->preguntas = Yaml::parseFile($file);	
    }

    public function getCantPreguntas(){
        return count($this->preguntas);
    }
}
