<?php
namespace Desing\Pattern\builder;
class CarBuilder{

    private string $model;
    private string $name;
    private \DateTime $year;
    private string $brand;
    private Car $object;
    public function __construct(){
        $this->object = new Car();
    }
    /**
     * set Model name
     *
     * @param  string $model
     * @return self
     */
    public function setModel(string $model){
        $this->object->setModel($model);
        return $this;
    }    
    /**
     * set Car Name
     *
     * @param  string $name
     * @return self
     */
    public function setName(string $name){
        $this->object->setName($name);
        return $this;
    }    
    /**
     * set model year
     *
     * @param  \DateTime $year
     * @return self
     */
    public function setYear(\DateTime $year){
        $this->object->setYear($year);
        return $this;
    }    
    /**
     * set Brand name
     *
     * @param  string $brand
     * @return self
     */
    public function setBrand(string $brand){
        $this->object->setBrand($brand);
        return $this;
    }
    public function build(){
        return $this->object;
    }
}