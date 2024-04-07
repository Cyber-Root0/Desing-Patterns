<?php
class Client
{

    private array $instances;
    private string $name ='';
    public function __construct(string $name){
        $this->name = $name;
        foreach(range(1, 1000) as $key){
            $this->instances[] = new DOMComment();
        }
    }   
    public function execute(){
        echo "\n".$this->name.' Executado';
    }
    
}
class FastLoading
{
    public function __construct(
        protected Client $client
    ){

    }
    public function execute(){
        echo "\nClass Fastloading";
    }
    public function executeClient(){
        $this->client->execute();
    }
}

class ProxyClient
{
    private $instance = null;
    public function __construct(
        private string $name,
        protected string $instanceName = Client::class,
        protected bool $isShared = false
    ){

    }
    private function getInstance(){
        if ($this->instance == null){
            $this->instance = new $this->instanceName($this->name);
        }
        return $this->instance;
    }
    public function __call($method, $args){
        $instance = $this->getInstance();
        return $instance->$method($args);
    }
}

class SlowLoadingWithProxy
{
    public function __construct(
        protected ProxyClient $client
    ){

    }

    public function execute(){
        echo "\nClass Fastloading";
    }
    public function executeClient(){
        $this->client->execute();
    }
}

function currentMemoryuse(){
    $bytes = memory_get_usage();
    return round(($bytes / 1024 / 1024),2) ." MB ";
}
echo "Start: ".currentMemoryuse();
$cliente1 = new Client('Bruno');
echo "\nAfter Cliente be Instanced: ".currentMemoryuse();
$fast1 = new FastLoading($cliente1);
echo "\nAfter FastLoading be Instanced: ".currentMemoryuse();
$fast1->execute();
echo "\nAfter execute: ".currentMemoryuse();
$fast1->executeClient();
echo "\nAfter executeClient: ".currentMemoryuse();
echo "\n ----- freeing memory -----";
unset($fast1);
unset($cliente1);
echo "\nMemoria Atual: ".currentMemoryuse();

/*  Diference using the Proxy Pattern */
echo "\n\n----------------------";
echo "\n2° Start : ".currentMemoryuse();
$cliente1 = new ProxyClient('Bruno');
echo "\nAfter Cliente be Instanced: ".currentMemoryuse();
$fast1 = new SlowLoadingWithProxy($cliente1);
echo "\nAfter FastLoading be Instanced: ".currentMemoryuse();
$fast1->execute();
echo "\nAfter execute: ".currentMemoryuse();
$fast1->executeClient();
echo "\nAfter executeClient: ".currentMemoryuse();
echo "\n ----- freeing memory -----";
unset($fast1);
unset($cliente1);
echo "\nCurrent Memory: ".currentMemoryuse();

