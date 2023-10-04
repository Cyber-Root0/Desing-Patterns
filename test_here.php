<?php
require_once(__DIR__.'\vendor\autoload.php');
use Desing\Pattern\proxy\ProxyPattern;
use Desing\Pattern\proxy\SimpleClass;

//Proxy Pattern
$proxy = new ProxyPattern(new SimpleClass("Bruno Venancio Alves"));
$proxy->show();

