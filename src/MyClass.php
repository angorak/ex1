<?php

declare(strict_types=1);

namespace Hosek;

class MyClass
{

    /**
     * Class constructor.
     */
    public function __construct(
        private string $name,
        private float $price,
    ) {
    }
}
