<?php

require "Hamming.php";

class HammingTest extends PHPUnit\Framework\TestCase
{

    public function testSinDiferenciaConCadenasIdenticas()
    {
        $this->assertSame(0, distancia('A', 'A'));
    }

    public function testConUnSoloCaracter()
    {
        $this->assertSame(1, distancia('A', 'G'));
    }

    public function testConCadenasCortas()
    {
        $this->assertSame(2, distancia('AG', 'CT'));
    }

    public function testConCadenasLargas()
    {
        $this->assertSame(1, distancia('GGACG', 'GGTCG'));
    }

    public function testConCadenasMasLargas()
    {
        $this->assertSame(4, distancia('GATACA', 'GCATAA'));
    }

    public function testConCadenasMuchoMasLargas()
    {
        $this->assertSame(9, distancia('GGACGGATTCTG', 'AGGACGGATTCT'));
    }

    public function testDevuelveFalseConLongitudesDiferentes()
    {
        $this->assertSame(false, distancia('GGACG', 'AGGACGTGG'));
    }
}

