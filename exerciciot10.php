<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula Vetores</title>
</head>
<body>

    <!-- <table border = 1><tr> -->
    <?php
    
    $n = array(5,6,7,9,8);
    $n[] = 7;  
    print_r($n);

    echo "</br></br>";

    $c = range(5,20,3);
    //print_r($c);  
    //echo "</br></br>";

    foreach($c as $valor){
        echo "<td>$valor ";
    }

    echo "</br></br></br>";

    $v = array( 0 => 1,
                5 => 6, 
                10 => 3, 
                15 => 7 );
    $v[] = 32;
    print_r($v);
    unset($v[0]);
    print("</br>");
    print_r($v);

    echo "</br></br></br>";

    $cad = array(   "nome" => "Bresque",
                    "idade" => 25,
                    "peso" => 130.7);

    foreach($cad as $k => $j){
        echo "o Campo $k possui o conteúdo $j</br>";
    }

    ?>
    </table>
</body>
</html>