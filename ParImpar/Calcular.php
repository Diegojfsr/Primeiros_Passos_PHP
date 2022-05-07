<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calcular </title>
</head>
<body>
    <?php
        $valor = $_POST["intValor"];

        //Positivo ou negativo
        if($valor>0){
            echo " <h1> O numero informado e positivo. </h1> <br>";
        } else {
            echo " <h1> O numero informado e negativo. </h1> <br>";
        }
        
        //Par ou inpar
        if($valor % 2 == 0){
            echo " <h1> O numero informado e par. </h1> <br>";
       } else {
            echo " <h1> O numero informado e impar. </h1> <br>";
       }

    ?>
</body>
</html>