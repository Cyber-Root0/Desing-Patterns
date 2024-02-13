<?php
namespace Desing\Pattern\prototype;
class Customer{
    private string $name;
    public function __construct(string $name){
        $this->name = $name;
    }    
    /**
     * get customer names
     *
     * @return void
     */
    public function getName(){
        return $this->name;
    }
}