<?php
namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;

class GeneradorTest extends TestCase {
    public function testGenerar() {
        $generador = new Generador('./tests/preguntas.yml');
        
        $this->assertTrue(isset($generador));   
        $this->assertEquals($generador->getCantPreguntas(), 25);
    }

    public function TestCantPreguntas() {
        $generador = new Generador('./tests/preguntas.yml');
        $this->assertEquals(25, $generador->getCantPreguntas());   

    }
}
