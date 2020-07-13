<!--Escreva um algoritmo em PHP que leia uma variável “n” inteiro. Em seguida 
o programa de verá mostrar a tabuada do valor lido. Mostre o resultado. Por exemplo, 
se você digitar 2 deverá ser mostrado a tabuada do 2 de 1 a 10.-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="" method="get">
        Valor da tabuada: <input type="text" name="n">
        <input type="submit" value="Rodar esse treco">
    </form>
</body>
</html>
<?php
    if($_GET){
        $n = intval($_GET['n']);
        echo "Tabuada do $n:<br><br>";
        for($i = 1; $i <= 10; $i++){
            $resp = $i *$n;
            
            echo "$i - $resp <br>";
        }
    }
?>