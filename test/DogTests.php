<?php

use PHPUnit\Framework\TestCase;
require_once './src/AbstractDog.php';
require_once './src/AllDogs.php';
require_once './vendor/autoload.php';

class DogTests extends TestCase {

    public function testShibaInuSound() {
        $dog = new ShibaInu();
        $this->assertEquals(" woof!", $dog->sound());
    }

    public function testShibaInuHunt() {
        $dog = new ShibaInu();
        $this->assertEquals("Hunting...", $dog->hunt());
    }

    public function testMopsSound() {
        $dog = new Mops();
        $this->assertEquals("woof! woof!", $dog->sound());
    }

    public function testMopsHunt() {
        $dog = new Mops();
        $this->assertEquals("I'm too lazy to hunt.", $dog->hunt());
    }

    public function testTaxaSound() {
        $dog = new Taxa();
        $this->assertEquals("woof!", $dog->sound());
    }

    public function testTaxaHunt() {
        $dog = new Taxa();
        $this->assertEquals("Hunting...", $dog->hunt());
    }

    public function testPlushLabradorSound() {
        $dog = new PlushLabrador();
        $this->assertEquals("no any sound", $dog->sound());
    }

    public function testPlushLabradorHunt() {
        $dog = new PlushLabrador();
        $this->assertEquals(" I can't hunt.", $dog->hunt());
    }

    public function testRubberTaxaWithSqueakerSound() {
        $dog = new RubberTaxaWithSqueaker();
        $this->assertEquals("Squeak!", $dog->sound());
    }

    public function testRubberTaxaWithSqueakerHunt() {
        $dog = new RubberTaxaWithSqueaker();
        $this->assertEquals("I can't hunt.", $dog->hunt());
    }
}
