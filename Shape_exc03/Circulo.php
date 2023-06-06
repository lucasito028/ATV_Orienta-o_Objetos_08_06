<?php
//Filha da Classe Shape
class Circulo extends Shape{

    public $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        return $this->area = ($this->raio * $this->raio) * 3.14;
    }

}