<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>sem título</title>
</head>
<body>
    <div>
        <form method="get" action="exerciciot6_parte2.php">
            <select name="num">
                <?php
                for ($c=1;$c<=10;$c++){
                    echo "<option>$c</option>";
                }
                
                ?>
            </select>
            <input type="submit" value="Tabuada">

            </form>
</div>  
    
</body>
</html>