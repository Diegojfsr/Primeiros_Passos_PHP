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
        // Código PHP para verificar a string Palindrome em PHP.
        // Maneira recursiva usando substr(). Como solicitado.
        // Referência para pesquisas: Acervo do PHP.

        $string = $_POST["txtSequencia"];
        Palindrome($string);

        function Palindrome($string){
            
            // Condição para encerrar o processo
            if ((strlen($string) == 1) || (strlen($string) == 0)){
                echo " <h2> É um Palindromo! </h2> ";
                }else{
                    if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)){    // Compara o primeiro caractere com o último 
                        return Palindrome(substr($string,1,strlen($string) -2));    // As letras marcadas são descartadas e passadas para a próxima chamada
                        }else{
                            echo " <h2> Não é um Palindromo! </h2> ";  
                            }
            }
        }

    ?> 

</body>
</html>



