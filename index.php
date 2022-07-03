<?php
include  __DIR__ . '/vendor/autoload.php';

/*
======== SOLID =========

S  - SRP - Single Responsiblity Principle = A class should have one, and only one, reason to change.
O  - OCP - Open/Close Princeple = Entities (Function, Class ...) should be open for extenstion, but closed for modification.
L  - LSP - Liskov Substitution Princeple = Derived classes must be substitutable for their base classes.
I  - ISP - Interface Segregation Princeple = A client should not be forced to implement an interface that it dose not use.
O  - DIP - Dependency Inversion Princeple = Hight-level modules should not depend no low-level modules instead on anstractions , not on concretions.

*/

use App\Foo;
use App\Bar;

use App\Singleton;
use App\Factory;
use App\FedEx;
use App\Strategy;
use App\UPS;
use App\Iterator;
use App\Observer;

var_dump(Singleton::getInstance()); // #1
var_dump(Singleton::getInstance()); // #1

$employees = [
    Factory::create('reza', 'developer'),
    Factory::create('ali', 'developer'),
    Factory::create('sara', 'tester')
];

for ($i = 0; $i < count($employees); $i++) {
    var_dump($employees[$i]);
}

$strategy = new Strategy();

$strategy->setStrategy(new FedEx('FedEx'));

echo 'FedEx: ' . $strategy->calculate() . PHP_EOL;

$strategy->setStrategy(new UPS('UPS'));

echo 'UPS: ' . $strategy->calculate() . PHP_EOL;


$iterator = new Iterator([1, 2, 3, 'reza', 'hani']);

while ($iterator->hasNext()) {
    echo $iterator->next() . PHP_EOL;
}

$observer = new Observer();

$observer->subscribe(function () {
    echo 'Observer 1 fired !' . PHP_EOL;
});

$observer->subscribe(function () {
    echo 'Observer 2 fired !' . PHP_EOL;
});

$observer->unsubscribe($observer->observers[0]);
$observer->fire();
