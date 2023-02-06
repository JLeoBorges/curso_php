<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $n= isset($_GET["num"]) ?$_GET["num"]: 0;
        $o= isset($_GET["ope"]) ?$_GET["ope"]: 1;
       switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ** 3;
                break;
            case 3:
                $r = sqrt($n);
       } 

       echo "Resultado da Informação solicitada: $r <br/>";

    ?>

       <a href="exerciciot3.html">Retornar</a>

</div>
    
</body>
</html>