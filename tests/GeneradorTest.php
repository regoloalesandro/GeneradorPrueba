<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;

class GeneradorTest extends TestCase {
    public function testGenerar() {
        $generador = new Generador('./tests/preguntas.yml');
        $this->assertTrue(isset($generador));   
    }

    public function testCantPreguntas() {
        $generador = new Generador('./tests/preguntas.yml');
        $this->assertEquals(25, $generador->getCantPreguntas());   
    }
}
