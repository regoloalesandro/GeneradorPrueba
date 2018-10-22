<?php

namespace GeneradorPrueba;

use Symfony\Component\Yaml\Yaml;

class Generador {
    protected $preguntas;
    
	public function __construct($file){
        $this->preguntas = Yaml::parseFile(file_get_contents($file));	
    }

    public function getCantPreguntas(){
        return count($this->preguntas);
    }
}
