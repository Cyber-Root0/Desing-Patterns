<?php

namespace Desing\Pattern\proxy;
class SimpleClass{
    
    protected $name;
    public function __construct(?string $name){
        $this->name = $name;
    }

    public function show(){
        echo $this->name;
    }

}