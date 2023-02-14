<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções</title>
</head>
<body>
    <?php
        $func = "um texto aqui";
        $valor = 7.7;
        printf("%s e seu valor R$%.2f", $func, $valor);
        printf("<br/><br/><br/><br/><br/>");

        $x = array (6,7,2,6,90);
        print_r($x);
        echo "<p>";
        var_dump($x);
        echo "<p>";
        var_export($x);
        printf("<br/><br/><br/><br/><br/>");

        $txt = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $res = wordwrap($txt, 50, "<br>\n",false);
        echo "$res";
        
?>  
     
</body>
</html>