<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';


use Mbar\Model\Produit;
use Mbar\Classes\Livre;

$produit1 = new Produit('banane', 'banane de côte d\'ivoire', 8.25);
$produit2 = new Produit('Chocolat', 'Chocolat Neslet douteux', 28);

$livre1 = new Livre('Gatsby le Magnifique', 'Un chef-d\'oeuvre sur un milliardaire qui perd tout par amour', 15, 'F.Scott Fitzgerald');

var_dump($livre1->calculerPrixTotal(-100));
