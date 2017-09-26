<?php
$link= mysqli_connect("localhost", "root", "", "world");
if($link){
	echo "true";
}
else
{
	echo "false";
}

$query="select name,population from city limit 3";
$result= mysqli_query($link, $query);
var_dump($result);

while ($william=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	echo $william["name"]." - ".$william["population"]; 
	echo"<br> ";
  }
  /*
echo= para imprimir 
varialbes siempre con el signo $_nombrede_la_variable 
$result= mysqli_query($link, $query);===ejecute esa sentencia bajo la conexin tal 

var_dump($result);====imprime lo que tiene una variable con sus tipos en php 


*/
?>
