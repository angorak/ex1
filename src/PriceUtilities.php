<?php

namespace Hosek;

trait PriceUtilities
{

    private float $taxRate = 20;


    public function calculateTax(float $price): float
    {
        return ($this->taxRate / 100) * $price;
    }
}
