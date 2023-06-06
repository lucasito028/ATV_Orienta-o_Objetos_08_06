<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Animal Abstracao</title>
</head>
<body>
    <?php
    
        require "./Vaca.php";
        require "./Gato.php";
        require "./Cachorro.php";
        

        $vaca = new Vaca();
        $vaca -> emitirSom();

        $gato = new Gato();
        $gato -> emitirSom();

        $cao = new Cachorro();
        $cao -> emitirSom(); 

        

    ?>
</body>
</html>