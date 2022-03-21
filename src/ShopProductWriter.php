<?php

namespace Hosek;

class ShopProductWriter
{
    public function write(ShopProduct $shopProduct): void
    {
        $str = $shopProduct->title . ": "
            . $shopProduct->getProducer()
            . " (" . $shopProduct->price . ")\n";
        print $str;
    }
}
