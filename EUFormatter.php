<?php

// On remarque l'utilisation de classes finales
final class EUFormatter implements PriceFormatter
{
    public function format(float $price): string
    {
        return $price.' €';
    }
}