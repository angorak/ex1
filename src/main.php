<?php

namespace main;

use Hosek\App\Decorator\FilterRequest;
use Hosek\App\Decorator\LogRequest;
use Hosek\App\Decorator\MainProcess;
use Hosek\App\Decorator\RequestHelper;
use Hosek\App\MessageProvider;
use Hosek\Boss;
use Hosek\Minion;
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

print(PHP_EOL);

$boss = new Boss();
$boss->addEmployee(new Minion('Mary'));
$boss->addEmployee(new Minion('John'));
$boss->projectFails();
$boss->projectFails();

$msg = new MessageProvider('Ahoj');
$msg->printMessage();

$pr = new FilterRequest(new LogRequest(new MainProcess()));
$pr->process(new RequestHelper());

function genTest()
{
    yield 1;
    yield 'a';
}

$range = range(1, 5);
print_r($range);

list($aa, $bb) = [1, 2];

$g = genTest();

foreach ($g as $item) {
    print($item);
}

// added second text