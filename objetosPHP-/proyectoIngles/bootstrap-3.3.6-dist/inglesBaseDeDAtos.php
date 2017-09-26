<?php 
var_dump($_GET);

echo " <br> hola mundo <br> ";
 ?>

 <?php

 $link=mysqli_connect("localhost","root","","inglesBasededatos");
 if ($link) {
 	echo "Data base connected succesfully <br>" ;
 } else {
 	echo "Data base NOT connected <br>" ;
 }
 
 if ($_GET['presentTense']=='') {
 	echo("debe rellenar el campo present tense ");
 }elseif ($_GET['pastTense']=='') {
 	echo("debe rellenar el campo past tense ");
 }elseif ($_GET['participleTense']=='') {
 	echo("debe rellenar el campo participle tense ");
 }else{
 	$query="INSERT INTO word (Present_tense, Past_tense, Participle_tense) values ('".$_GET['presentTense']."','".$_GET['pastTense']."','".$_GET['participleTense']."')";

 	$result=mysqli_query($link,$query) or die('error sentencia');
 	echo("Palabras anexadas a la base de datos");
 }

 ?>