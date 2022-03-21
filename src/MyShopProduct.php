<?php

namespace Hosek;

#[MyClass]
class MyShopProduct extends ShopProduct
{

    public function getProducer(): string
    {
        return parent::getProducer() . ' testik';
    }
}
