<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;

class GeneradorTest extends TestCase {
    public function testGenerar() {
        $generador = new Generador('preguntas.yml');

        $this->assertEquals($generador->getCantPreguntas(), 25);
    }
}
