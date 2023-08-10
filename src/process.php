<?php
require_once 'AllDogs.php';

$dogType = $_POST['dog_type'] ?? '';
$action = $_POST['action'] ?? '';

$result = '';

switch($dogType) {
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
        $dog = new PlushLabrador();
        break;

    case 'rubber_taxa':
        $dog = new RubberTaxaWithSqueaker();
        break;

    default:
        header('Location: ../index.php?result=Невідома порода');
        exit;
}

switch($action) {
    case 'sound':
        $result = $dog->sound();
        break;
    case 'hunt':
        $result = $dog->hunt();
        break;
    default:
        header('Location: ../index.php?result=Невідома дія');
        exit;
}

header('Location: ../index.php?result=' . urlencode($result));
