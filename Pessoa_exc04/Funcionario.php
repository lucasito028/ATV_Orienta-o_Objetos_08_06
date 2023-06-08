<?php

//Classe filha de pessoa
class Funcionario extends Pessoa{

    
    private $cargo;
    private $salario;

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }
    public function getCargo(){
        return $this->cargo;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }

    public function mostrar(){
        $i = 0;
        echo "Nome: $this->nome <br>";
        echo "Idade: $this->idade <br><br><br>";
        echo "Endereco:<br>";
        foreach($this->endereco as $v){
            echo "$v <br>";
        }
    }

    public function mostrar_dados(){
        echo "<br>Cargo: $this->cargo<br>";
        echo "Salario: $this->salario<br>";
    }

    public function calcular_salario_dia(){
        echo "<br>Salario mensal: $this->salario<br>";

        $this->salario =  $this->salario / 4;
        echo "Salario Semanal: $this->salario<br>";

        $this->salario =  $this->salario / 5;
        echo "Salario Dia: $this->salario<br>";

        $this->salario =  $this->salario / 8;
        echo "Salario Hora: $this->salario<br>";
    }
}