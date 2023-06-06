<?php
//Filha da Classe Shape
class Retangulo extends Shape{

    public $altura;
    public $comprimento;

    public function __construct($altura , $comprimento){
        $this->altura = $altura;
        $this->comprimento = $comprimento;

    }

    public function calcularArea(){
        return $this->area = $this->comprimento * $this->altura;
    }

}