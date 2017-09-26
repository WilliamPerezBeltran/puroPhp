

 <?php
$link= mysqli_connect("localhost", "root", "", "crudbasededatos") or die('error en la conexcion ');


$query="INSERT into palabras (present, past, participle, definition) 
		values ('".$_POST['present']."','".$_POST['past']."','".$_POST['participle']."','".$_POST['definition']."')";
		


$result= mysqli_query($link, $query)or die('erroe en la sentencia');



?>
 		 
	<?php
   header('Location: traerDatosDeLaBaseDeDatos.php');
 //esta funcion simplemente en ele momento de hacer clik en el boton submit me lo envia directamente a traerDatosDeLaBaseDeDatos.php

 ?>

