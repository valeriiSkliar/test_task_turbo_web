<?php
require_once 'AbstractDog.php';

class ShibaInu extends AbstractDog {
    public function sound() {
        return " woof!";
    }
    public function hunt() {
        return "Hunting...";
    }
}

class Mops extends AbstractDog {
    public function sound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "I'm too lazy to hunt.";
    }
}

class Taxa extends AbstractDog {
    public function hunt() {
	return 'Hunting...';	
    }
    public function sound() {
        return "woof!";
    }
}

class PlushLabrador extends AbstractDog {
    public function sound() {
        return "no any sound"; 
    }

    public function hunt() {
        return " I can't hunt.";
    }
}

class RubberTaxaWithSqueaker extends AbstractDog {
    public function sound() {
        return "Squeak!";
    }

    public function hunt() {
        return "I can't hunt.";
    }
}

