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
        
        $tamanho = strlen($txt);
        echo "</br></br></br>Quantidade de caracteres acima: $tamanho";

        $cont = str_word_count($txt);
        echo "</br></br></br>Quantidade de palavras: $cont";

        echo "</br></br></br></br></br>";
        $vetor = explode(" ",$txt);
        print_r($vetor);


        echo "</br></br></br></br></br>";
        $meunick = "Xeke";
        $vet = str_split($meunick);
        print_r($vet);

        echo "</br></br></br>";
        print(str_repeat("-",400));
        echo "</br></br></br>";
        
        $vetor3[0]= "mucho";
        $vetor3[1]= "texto";
        $texto= join(" ",$vetor3);
        print($texto);


        echo "</br></br></br></br></br>";
        $letra = "L";
        $cod = ord($letra);
        print("o código de $letra é $cod");

        echo "</br></br></br></br></br>";
        $nome = "Teste InsirA um NomE mais UM Teste";
         $nome2 = ucwords(strtolower($nome));
         echo "Meu nome é: $nome2";
         print("</br>meu nome é : ".strtolower($nome));
         print("</br>meu nome é : ".strtoupper($nome));

         print("</br>Nome ao contrário: ");
         print(strrev($nome));


         echo "</br></br></br></br></br>";
        $pos = stripos($nome, "UM");
        echo "$nome </br>posição do nome é : $pos";


        $cont = substr_count($nome, "Teste");
        Print("</br>InsirA foi encontrado $cont vez(es)");

        $sub = substr($nome, 0, 12);
        echo "</br> $sub";

        echo "</br></br></br></br></br>";
        /*$espaçamento = "espaçamento";
        $novoespa = str_pad($espaçamento, 40, " ",STR_PAD_LEFT);
        $newespa = str_replace(" ", "  .", $novoespa);
        print("</br></br>Aqui NÃO tem um $newespa até aqui");
        */

        echo "</br>";
        print(str_repeat("-",400));
        echo "</br>";
        $umtxt = str_repeat("Repetindo", 7);
        print("</br>$umtxt");

        
        

?>  

</body>
</html>