<?php

class Car {
    // properties - are variables indside the class
    public $comp; //property without a value
    public $color = "blue";
    
    // methods - functions inside a class
    public function setColor($car_color) {
        $this->color = $car_color;
        
        // return $this->color;
    }
    // access anywhere
    function getColor() {
        return $this->color;
    }

    // access in this class only
    private function getPrivate(){
        return "I am a private function";
    }    

    // access in this class and child classes
    protected function getProtected(){
        return "I am a protected function";
    }    
}

class Truck{
    public $brand;
    public $model;
    public $color;
    
    function setValues($brand, $model, $color){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    function getBrand(){
        return $this->brand;
    }

    function getModel(){
        return $this->model;
    }

    function getColor(){
        return $this->color;
    }
}
?>


