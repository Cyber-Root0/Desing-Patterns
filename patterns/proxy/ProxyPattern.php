<?php

namespace Desing\Pattern\proxy;

class ProxyPattern{

    protected $proxyObject;
    public function __construct($proxyObject){
        $this->proxyObject = $proxyObject;
    }

    public function __call($method_name, $args){
        
        echo "Metódo Interceptado \n";

        $this->proxyObject->$method_name($args);
    
    }

}
