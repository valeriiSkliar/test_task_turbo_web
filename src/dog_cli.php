#!/usr/bin/env php
<?php

require_once 'Dog.php';
require_once 'AllDogs.php';

if ($argc < 3) {
    echo "Usage: dog_cli.php [dog type] [action]\n";
    exit(1);
}

$type = $argv[1];
$action = $argv[2];
$dog = null;

switch ($type) {
    case 'shiba-inu':
        $dog = new ShibaInu();
        break;
    case 'mops':
        $dog = new Mops();
        break;
    case 'taxa':
        $dog = new Taxa();
	break;
    case 'plush_labrador':
	$dog =  new PlushLabrador();
	break;
    case 'rubber_taxa':
        $dog = new RubberTaxaWithSqueaker();
	break;
    default:
        echo "Unknown type of dog!\n";
        exit(1);
}

switch ($action) {
    case 'sound':
        echo $dog->sound() . "\n";
        break;
    case 'hunt':
        echo $dog->hunt() . "\n";
        break;
    default:
        echo "Unknown action.\n";
        exit(1);
}
