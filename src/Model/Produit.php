<?php

declare(strict_types=1);

namespace Mbar\Model;

use Mbar\Interfaces\Affichable;

class Produit implements Affichable
{
    public function __construct(protected string $nom, protected string $description, protected float $prix) {}
    public function calculerPrixTotal(float $taxe): float
    {
        // Calcul d'une taxe, division de la taxe par 100, et multiplication du chiffre obtenu par le prix pour obtenir le coût de la taxe.
        if ($taxe > 0) {
            $divide = $taxe / 100;
            return ($this->prix * $divide) + $this->prix;
        }
        return throw new \Exception('Erreur ! La taxe saisie est négative !');
    }
    public function afficher() {}
}
