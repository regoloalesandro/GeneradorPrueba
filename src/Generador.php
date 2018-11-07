<?php

namespace GeneradorPrueba;

use Symfony\Component\Yaml\Yaml;

class Generador {
    protected $preguntas;
    
	public function __construct($file){
        $preg_text = Yaml::parseFile($file);
        
        for($i = 0; $i < count($preg_text['preguntas']); $i++){
            $this->preguntas[$i] = new Pregunta($preg_text['preguntas'][$i]);
        }

    }

    public function getCantPreguntas(){
        return count($this->preguntas);
    }
}
