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
        $divD = $_POST["intDividendo"];
        $divS = $_POST["intDivisor"];

        $cociete = 0;
        $cont = $divD;

        while ($cont >= $divS ){
              $cont = $cont - $divS;
            }
            $cociete++;

        $resto = $cont;
        
        echo "O resto de: $divD / $divS é:   $resto <br> ";
    ?>
</body>
</html>