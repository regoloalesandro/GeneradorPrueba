<?php

namespace GeneradorPrueba;

use PHPUnit\Framework\TestCase;

class GeneradorTest extends TestCase {
    public function testGenerar() {
        $file = './preguntas.yml';
        $generador = new Generador($file);

        $this->assertEquals($generador->getCantPreguntas(), 25);
    }
}
