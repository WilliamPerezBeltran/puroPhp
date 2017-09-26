
 <?php
$link= mysqli_connect("localhost", "root", "", "crudbasededatos") or die('error en la conexcion ');
$query="UPDATE palabras SET ID=".$_GET['ID'].", present='".$_POST['present']."',past='".$_POST['past']."',participle='".$_POST['participle']."' ,definition='".$_POST['definition']."' where ID=".$_GET['ID']."";
$result= mysqli_query($link, $query)or die('erroe en la sentencia');



?>
 	

<img src=""  ">