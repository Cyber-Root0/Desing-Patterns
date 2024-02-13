<?php
namespace Desing\Pattern\builder;
use Desing\Pattern\builder\CarBuilder;
class Car{
    private string $model;
    private string $name;
    private \DateTime $year;
    private string $brand;    
    /**
     * define Car from Builder
     *
     * @param  CarBuilder $carBuilder
     * @return void
     */
    public function __construct(CarBuilder $carBuilder){
        $this->model = $carBuilder->model;
        $this->brand = $carBuilder->brand;
        $this->name = $carBuilder->name;
        $this->year = $carBuilder->year;
    }    
    /**
     * get Car Name
     *
     * @return string
     */
    public function getName(){
        return $this->name;
    }
}