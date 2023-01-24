<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>Estudos</title>
    <h1>Operador Unário</h1>
</head>
<body>
    
<?php    
    // operador unário //
    // colocar valores na url exemplo.php"?x=1&y=2"//
    $varx = $_GET["x"];
    $vary = $_GET["y"];
    $op = $_GET["z"];
    $maior = $varx>$vary ? $varx:$vary;
echo "</br>O maior valor da operação Unária é: $maior"; 

    $operacao = ($op == "soma")? $varx+$vary : $varx-$vary ;   
    echo "</br> O Valor da operação : $operacao"

?>    

</body>
</html>
