<?php

namespace Desing\Pattern\factoryMethod\interface;
interface PaymentInterface{

    public function create(array $preference, array $items, ?float $total ) : bool;
    public function get(int $id) : string;
}   