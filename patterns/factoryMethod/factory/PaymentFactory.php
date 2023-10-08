<?php

namespace Desing\Pattern\factoryMethod\factory;
use Desing\Pattern\factoryMethod\interface\PaymentInterface;
abstract class PaymentFactory{

    abstract public function ObjectCreator() : PaymentInterface;
    public function create(array $preference, array $items, ?float $total){

        $payment = $this->ObjectCreator();
        return $payment->create($preference, $items, $total);
           
    }

} 