<?php

namespace Hosek;


class ShopProduct
{
    use PriceUtilities;

    public const NECO = 42;




    public static function sayHi(): void
    {
        print('Hi');
    }

    public function __construct(
        public string $title,
        public string $producerMainName = '',
        public string $producerFirstName = '',
        public float $price = 0,
    ) {
    }

    public function getProducer()
    {
        $this->calculateTax(10.2);
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}
