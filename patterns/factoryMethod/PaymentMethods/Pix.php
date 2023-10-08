<?php
namespace Desing\Pattern\factoryMethod\PaymentMethods;
use Desing\Pattern\factoryMethod\interface\PaymentInterface;
class Pix implements PaymentInterface{

    public function create(array $preference, array $items, ?float $total) : bool{

        if ($total<=0 || $total == null){
            return false;
        }   

        return true;
    }
    public function get(int $id) : string{

        return "dados do pagamento";

    }

}