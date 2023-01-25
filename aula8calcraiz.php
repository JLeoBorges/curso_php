<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Raiz</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET["v"];
            echo "Valor enviado: $valor";
            $rq = sqrt($valor);
            echo "</br>A raiz do Valor é: " .number_format($rq,2);
            echo "</br>";
        ?>
        <a href="aula8.html" >voltar</a>
    </div>
</body>
</html>