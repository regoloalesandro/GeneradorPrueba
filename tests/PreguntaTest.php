<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class PreguntaTest extends TestCase {
    public function testGenerarPreg() {
        $pregs = Yaml::parseFile('./tests/preguntas.yml');

        $pregunta = new Pregunta($pregs['preguntas'][0]);
        
        $this->assertTrue(isset($pregunta));   
    }
}
