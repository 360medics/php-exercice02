<?php
// enable errors reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "vendor/autoload.php";

use App\TreeBuilder;

$input = [
    '1. Dénomiation du médicament',
    '2. Effets indésirables',
    '2.1. Effet sur la grossesse',
    '2.1.1. Effets bruts',
    '2.1.2. Effets simples',
    '2.2. Effet sur le travail',
    '3. Forme pharmaceutique',
    '3.1. Contres indications',
    '3.1.1. Pour indicatons',
    '4. Données pharmaceutiques',
    '4.1. Données de sécurité préclinique'
];

$tree = new TreeBuilder($input);
$tree->build();

echo '<pre>';
print_r($tree->getTree());
echo '</pre>';
