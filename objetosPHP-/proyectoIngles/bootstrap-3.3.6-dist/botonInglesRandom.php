<?php

echo "/*Genere un arreglo de solo capitales (Cuyo Índice estará indicado de 0 a 9), <br> haga un programa que muestre aleatoriamente 10 veces una capital indicando la siguiente frase:";


$capitales=array('brazilia','santiago de chile','bogota','quito','managua','lima','caracas','berlin','viena','tokio');
echo "string";
print_r($capitales);

for ($i=0; $i < 10; $i++) { 
	$randon=rand(0,9);

	echo "esta es la respuesta".$i.") ".$capitales[$randon]."<br>";
}


echo "<br><br>";echo "<br><br>";echo "<br><br>";echo "<br><br>";




?>