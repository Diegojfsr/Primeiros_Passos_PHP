<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Distacia entre Pontos </title>
</head>
<body>

    <?php

        $valor1 = $_POST["intValorXa"];
        $valor2 = $_POST["intValorXb"];
        $valor3 = $_POST["intValorYa"];
        $valor4 = $_POST["intValorYb"];

        //d=raiz de (xb-xa)ao quadrado + (yb-ya)ao quadrado
        //(Xa-Xb)^2+(Ya-Yb)^2

       // $parte1 =  $valor2 - $valor1;
       // $parte2 =  $valor4 - $valor3;

       // $distancia = $parte1 + $parte2;

        $distancia = ($valor1-$valor2)^2+($valor3-$valor4)^2;

        //Exibindo o resultado
        echo "<h1> A distancia do ponto A ate o ponto B é:  $distancia</h1>";   
    ?>

</body>
</html>




