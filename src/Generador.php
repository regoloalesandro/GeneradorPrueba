<?php

namespace GeneradorPrueba;

use Symfony\Component\Yaml\Yaml;

class Generador {
    protected $preguntas;
    
	public function __construct($file){
        $pregs_text = Yaml::parseFile($file);;
        $pregs = $pregs_text['preguntas'];

        shuffle($pregs);

        for($i = 0; $i < 10; $i++){
            $this->preguntas[$i] = new Pregunta($pregs[$i]);
        }

    }

    public function getCantPreguntas(){
        return count($this->preguntas);
    }
}
