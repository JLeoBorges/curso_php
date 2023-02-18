<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $a = isset ($_GET["ano"])?$_GET["ano"] : "não informado";
            if($a == "não informado")
                    {echo "Idade Não informada";}
            else
            {
            $i = date("Y") - $a; 
            echo "A sua idade é: $i";
                if($i >= 18 && $i <=65){
                    $v = "obrigação com o voto";
                    $d = "apitidão a digirir";
                }
                else{
                    $v = "nenhuma obrigatoriedade com voto";
                    $d = "que verificar mais informações sobre a posse da CNH";
                }                
                              
            }
            echo "</br>Você tem $v e $d"; 
        ?>
</div>
</body>
</html>
