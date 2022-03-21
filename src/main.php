<?php

namespace main;

use Hosek\MyClass;
use Hosek\MyShopProduct;
use Hosek\ShopProduct;
use Hosek\StaticExample2;


require_once(__DIR__ . '/../vendor/autoload.php');

StaticExample2::sayHello();
$mc = new MyClass('Frank', 54);
print_r(get_class($mc) . PHP_EOL);
// print_r(get_declared_classes());

$msp = new MyShopProduct('Jogurt');

// print_r($msp instanceof ShopProduct);
// print_r(get_class_vars(MyShopProduct::class));
// print_r(is_callable([$msp, 'getProducer']));

$rc = new \ReflectionClass(MyShopProduct::class);
// print($rc->isUserDefined());


$attrs = $rc->getAttributes();

foreach ($attrs as $value) {
    print($value->getName());
}

function getClassSource(\ReflectionClass $class): string
{
    $path = $class->getFileName();
    $lines = @file($path);
    $from = $class->getStartLine();
    $to = $class->getEndLine();
    $len = $to - $from + 1;
    return implode(array_slice($lines, $from - 1, $len));
}
