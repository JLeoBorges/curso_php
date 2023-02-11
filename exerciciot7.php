<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        function soma (){
        $p = func_get_args();
        $tot = func_num_args();
        $s= 0;

            for ($i=0;$i<$tot;$i++){
                $s = $s + $p[$i];
            }
            return $s;
        
        }
        
        $res = soma(7,7,84,53,243,99,9);
        echo"$res";
    
    
    ?>
    
</body>
</html>