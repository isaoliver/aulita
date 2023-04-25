<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Randomicos utilizando looping while</title>
</head>
<body style=color:red>
 <?php 
     echo "<h3>Numeros Randomicos-Looping While: </h3>";
     $numero = 0;
     $contador = 1;
     for($numero = 0; $contador < 7; $numero++ )
     {
         $numero = rand(1,100); // Comando ran, gera números randomicos(aleatorias).
         echo "$contador" . "número gerado foi " .
         $numero . "<br>";
         $contador++; // Soma mais 1 na variavel $contador e armazena nela mesmo
     }
     echo "<hr><h2>Fim do looping <strong><em>FOR</em></strong></h2>";

?>

</body>
</html>