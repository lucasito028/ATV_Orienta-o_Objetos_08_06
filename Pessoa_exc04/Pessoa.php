<?php

//Classe mãe
abstract class Pessoa{
    public $nome;
    public $idade;
    public $endereco;

    public function __construct($nome, $idade, 
    $rua, $numero, $bairro, $cep, $cidade_stado){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = array(
            "Rua" =>  $rua,
            "Numero Casa" => $numero,
            "Bairro" => $bairro,
            "Cep" => $cep,
            "Cidade_Stado" => $cidade_stado

        );
    }

    abstract public function mostrar();
}