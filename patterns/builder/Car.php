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
    public function __construct(){
    }    
   /**
     * set Model name
     *
     * @param  string $model
     * @return self
     */
    public function setModel(string $model){
        $this->model = $model;
        return $this;
    }    
    /**
     * set Car Name
     *
     * @param  string $name
     * @return self
     */
    public function setName(string $name){
        $this->name = $name;
        return $this;
    }    
    /**
     * set model year
     *
     * @param  \DateTime $year
     * @return self
     */
    public function setYear(\DateTime $year){
        $this->year = $year;
        return $this;
    }    
    /**
     * set Brand name
     *
     * @param  string $brand
     * @return self
     */
    public function setBrand(string $brand){
        $this->brand = $brand;
        return $this;
    }
    public function getName(){
        return $this->name;
    }
}