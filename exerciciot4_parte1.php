<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>exercício de repetição</title>
</head>
<body>
    <div>
        <form method="get" action="exerciciot4_parte2.php">
            <?php
            $c = 1;
            while ($c <= 5){
            echo "Valor $c : <input type='number' name='v$c' min='0' max='100' value='0'/><br/>";
            $c++;
        
        }
            ?>

            <input type="submit" value="Enviar" class="botao"/>
    </div>   
    
</body>
</html>