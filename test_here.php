<?php
require_once(__DIR__.'\vendor\autoload.php');
use Desing\Pattern\proxy\ProxyPattern;
use Desing\Pattern\proxy\SimpleClass;
use Desing\Pattern\factoryMethod\creator\Pix;
use Desing\Pattern\builder\CarBuilder;
use Desing\Pattern\builder\Car;
//Proxy Pattern
echo "------ Proxy Pattern ------------ \n";
$proxy = new ProxyPattern(new SimpleClass("Bruno Venancio Alves"));
$proxy->show();

//FactoryMethod -> Pix Payment
echo "\n ----------- Factory Method -> Pix Payment ---------- \n\n";
$pix = new Pix();
var_dump($pix->create([], [], 1));

//Builder Tests

$car = new Car(
    (new CarBuilder)
    ->setName('Volkswagen Gol Comfortline')
    ->setModel('Gol')
    ->setYear(new \DateTime())
    ->setBrand('VOLKSWAGEN')
);
echo $car->getName();


