<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class PreguntaTest extends TestCase {
    public function testGenerarPreg() {
        $preg_text = Yaml::parse("descripcion: El término pixel hace referencia a
        respuestas_correctas:
          - La unidad mínima de información de una imagen.
        respuestas_incorrectas:
          - La longitud de la diagonal de una imagen en pulgadas.
          - La cantidad de puntos por pulgada.
          - La cantidad de colores de un punto.
        ocultar_opcion_todas_las_anteriores: true");

        $pregunta = new Pregunta($preg_text);
        
        $this->assertTrue(isset($pregunta));   
    }

    public function TestCantPreguntas() {
        $generador = new Generador('./tests/preguntas.yml');
        $this->assertEquals(25, $generador->getCantPreguntas());   

    }
}
