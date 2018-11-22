<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class PreguntaTest extends TestCase {
    public function testGenerarPreg() {
        $pregs = Yaml::parseFile(dirname(__DIR__) . '/preguntas.yml');

        $pregunta = new Pregunta($pregs['preguntas'][0], 1);
        
        $this->assertTrue(isset($pregunta));   
    }
}
