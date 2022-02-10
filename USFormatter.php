<?php

final class USFormatter implements PriceFormatter
{
    public function format(float $price): string
    {
        return '$'.$price;
    }
}