<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Do While</title>
</head>
<body>
    <?php 
    /* //somar//
    $c = 1;
    do {
        echo "$c </br>";

        $c+=2;
    }while ($c <= 10)
    */

    /*  //subtrair//
    $c = 10;
    do {
        echo "$c </br>";

        $c--;
    }while ($c >= 1)
    */
    
    $valor = isset($_GET["fat"])? ($_GET["fat"]):"valor não informado";
    
    $c = $valor;
    $calc = 1 ;
    do{
        $calc = $calc * $c;
        $c--;
    }while ($c >= 1);
    
    echo "Valor de $valor! = $calc";

    
    ?>

    <p><a href="exerciciot5.html">Voltar</a></p>

</body>
</html>
