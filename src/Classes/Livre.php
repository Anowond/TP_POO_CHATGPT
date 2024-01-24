<?php declare(strict_types=1);

namespace Mbar\Classes;

use Mbar\Model\Produit;

class Livre extends Produit {
    public function __construct( $nom, $description, $prix, protected string $auteur) {
        parent::__construct($nom,$description,$prix);
    }
}