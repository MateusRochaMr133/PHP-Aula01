<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>
    
            <?php

                $valor01 = $_POST['valor1'];

                $valor02 = $_POST['valor2'];
    
                echo "O valor digitado em valor1 foi:"  .$valor01."<br>";
                
                echo "<br> O valor digitado em valor1 foi:"  .$valor02;

                $resultado = $valor01 + $valor02;

                echo "<br> A soma de" .$valor01. "e" .$valor02. "da:" .$resultado;
            ?>

    </body>

</html>




