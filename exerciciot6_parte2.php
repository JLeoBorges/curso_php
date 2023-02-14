<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        for($c=1;$c<=10;$c++){
            $r = $n * $c;
            echo "$n x $c = $r<br/>";
        }
        
        ?>

        <p><a href="exerciciot6_parte1.php">Retornar</a></p>
</div>
    
</body>
</html>
