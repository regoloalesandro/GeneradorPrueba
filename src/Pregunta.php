<?php

namespace GeneradorPrueba;

use Symfony\Component\Yaml\Yaml;

class Pregunta {
    protected $descripcion;
    protected $respuestas_correctas;
    protected $respuestas_incorrectas;
    protected $ocultar_opcion_todas_las_anteriores=false;
    protected $ocultas_opcion_ninguna_de_las_anteriores=false;
    protected $texto_ninguna_de_las_anteriores = "Ninguna de las anteriores";

    
	public function __construct($info){
        $this->descripcion=$info["descripcion"];
        $this->respuestas_correctas = $info["respuestas_correctas"];
        $this->respuestas_incorrectas = $info["respuestas_incorrectas"];

        if( isset($info["ocultar_opcion_todas_las_anteriores"]) ){
            $this->ocultar_opcion_todas_las_anteriores = $info["ocultar_opcion_todas_las_anteriores"];
        }

        if( isset($info["ocultas_opcion_ninguna_de_las_anteriores"]) ){
            $this->ocultas_opcion_ninguna_de_las_anteriores = $info["ocultas_opcion_ninguna_de_las_anteriores"];
        }

        if( isset($info["texto_ninguna_de_las_anteriores"])){
            $this->texto_ninguna_de_las_anteriores = $info["texto_ninguna_de_las_anteriores"];
        }

    }

    public function getRespCorrectas(){
        return $this->respuestas_correctas;
    }

    public function getRespIncorrectas(){
        return $this->respuestas_incorrectas;
    }
}
