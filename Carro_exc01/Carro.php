<?php

class Carro{

    private $modelo;
    private $cor;
    private $ano;

    //Metodos de Get(Pegar) e Setter(Inserir)
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo ;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getCor(){
        return $this->cor;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getAno(){
        return $this->ano;
    }

    //Funcao de Pegar 
    public function mostrar(){
        echo "<br>Modelo:" . $this->modelo;
        echo "<br>Ano:" . $this->ano;
        echo "<br>Cor:" . $this->cor;
    }
    

}