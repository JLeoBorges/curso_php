<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        $txt = isset ($_GET["t"]) ? $_GET["t"] : "Texto Genérico"; 
        $tam = isset ($_GET["tam"]) ? $_GET["tam"] : "10pt"; 
        $cor = isset ($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
        <style>
            span.texto{
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
            </style>

    <meta charset="UTF-8">
    <title>exercícioT1</title>
</head>
<body>
    <div>
        <?php

            echo "<span class ='texto'> $txt </span> <br/>" ;
                    
        ?>
        <a href= "exerciciot1.html" >Retornar </a>

    </div>



</body>
</html>
