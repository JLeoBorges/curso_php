<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula vetores</title>
</head>
<body>
    <pre>
    <?php
      /*  $n = array (3,5,7,8);
        echo "O vetor tem " . count($n) . " elementos"; 
        print_r($n);
         var_dump($n);
        */
    
        $v = array(7,8,9,10);
        print_r($v);
        array_push($v, 11);
        print_r($v);
        array_pop($v);
        array_pop($v);
        print_r($v);
        array_unshift($v,6);
        print_r($v);
        array_shift($v);
        array_shift($v);
        print_r($v);

        echo "</br></br></br>";
        $ordem = array(3,65,33,31,2,7,33,16,64);
        print_r($ordem);
        sort($ordem);
        print_r($ordem);
        rsort($ordem);
        print_r($ordem);
        asort($ordem);
        print_r($ordem);
        arsort($ordem);
        print_r($ordem);
        $ordem = array(2=>3,4=>65,33,31,3=>2,77=>7,33,16,11=>64);
        print_r($ordem);
        ksort($ordem);
        print_r($ordem);
        krsort($ordem);
        print_r($ordem);
  
    ?>
    </pre>
</body>
</html>