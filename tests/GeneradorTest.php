<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;

class GeneradorTest extends TestCase {
    public function testGenerar() {
        $generador = new Generador('./tests/preguntas.yml');
        
        $this->assertTrue(isset($generador));
        $this->assertEquals($generador->getCantPreguntas(), 25);
   
    }
}
