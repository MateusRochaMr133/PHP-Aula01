<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
 
<?php
/* Este aqui é o 1 Exercício que realizamos  */
/*$valor01=$_POST['valor01'];
$valor02=$_POST['valor02'];
echo " O valor digitado em valor01 foi: ".$valor01."<br>";
echo " O valor digitado em valor02 foi: ".$valor02;
$resultado=$valor01+$valor02;
echo"<br> A soma dos valores" .$valor01. "e" .$valor02. "são: " .$resultado;
 
$temperatura=$_POST['temperatura'];
$resultado=$temperatura*9/5+32;
echo " <br> O valor digitado em temperatura é: ".$resultado;
 
$valor01=$_POST['valor_volume'];
$valor02=$_POST['altura'];
$resultado=3.14159*($valor01*$valor01)*$valor02;
echo"<br> o volume da lata de óleo é ".$resultado;
 
 
 
$valor01=$_POST['tempo_viagem'];
$valor02=$_POST['velocidade_media'];
$distancia=$valor01*$valor02;
$litrosUsados=$distancia/12;
echo "<br> A distancia percorrida foi de: ".$distancia."km <br>e utilizou" .$litrosUsados. "litros";*/
 
 
$custo=$_POST['custo_produto'];
$resultado=$custo+(0.30*100);
echo " <br> O valor da venda é: ".$resultado;
 
 
$prestacao=$_POST['prestacao'];
$resultado=$prestacao+($prestacao*(20/100))*2;
echo " <br> O valor da prestação é: ".$resultado;
 
 
 
?>
 
</body>
 
</html>




