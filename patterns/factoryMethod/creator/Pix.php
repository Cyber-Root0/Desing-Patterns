<?php
namespace Desing\Pattern\factoryMethod\creator;
use Desing\Pattern\factoryMethod\factory\PaymentFactory;
use Desing\Pattern\factoryMethod\interface\PaymentInterface;
use Desing\Pattern\factoryMethod\PaymentMethods\Pix as Pix2;

class Pix extends PaymentFactory{

    public function ObjectCreator() : PaymentInterface{
        return new Pix2();
    }
    
}