<?php

require_once 'USFormatter.php';
require_once 'EUFormatter.php';

interface PriceFormatter
{
    // Tous nos PriceFormatter devront implémenter cette méthode. Cela nous permet de l'utiliser dans nos produits.
    public function format(float $price): string;
}
