<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>exercício de repetição</title>
</head>
<body>
    <div>
        <?php 
        $i= 1;
        while ($i <= 5 ){
            $v = "num".$i;
            $sr = "v".$i;
            $$v = isset ($_GET[$sr]) ? $_GET[$sr] : 0;
            $i++;

        
        }
        
        /* echo "valores inseridos: $num1 $num2 $num3 $num4 $num5";
        
        / $i = 1;
        while($i <=5){
            $v = "num".$i;
            echo "Valor $i : ". $$v . "<br/>";
            $i++;
        }
        */
        
        
        
        
        
        
        
        ?>

</div>

    
</body>
</html>