<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verificar </title>
</head>
<body>
    <?php
            $valor1 = $_POST["intValor1"];
            $valor2 = $_POST["intValor2"];


            $loop = $valor1;
            $contador = 0;

            while ($loop <= $valor2 ){
                if ($loop %2 ==1) {
                    echo "$loop <br> ";
                    $contador = $contador+$loop;
                }
                $loop++;

            }
            echo "A soma de todos os valores impares é:  $contador<br> ";
            //echo "$contador <br> ";

    ?>

</body>
</html>



