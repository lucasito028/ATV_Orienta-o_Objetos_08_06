<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Carro</title>
</head>
<body>
    <?php 
    
    require './Carro.php';
    
        $c1 = new Carro();

        $c1->setModelo("Ford");
        $c1->setCor("Azul");
        $c1->setAno(1977);

        $c1->mostrar();

    ?>
</body>
</html>