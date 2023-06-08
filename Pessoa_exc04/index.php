<?php

require "./Pessoa.php";
require "./Funcionario.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>
<body>
    <?php

    //Metodo Construtor de Pessoa
    $fc = new Funcionario("Jão Claudio", 16, 
    "Jao pedro de quatro", 000, "VIla Bananinha", "00000-000", "Sao Paulo - Sp");

    // Herdado de Pessoa
    $fc->mostrar();

    
    $fc->setSalario(4500.00);
    $fc->setCargo("Funcionario Publico");

    $fc->mostrar_dados();

    $fc->calcular_salario_dia();
    ?>
</body>
</html>