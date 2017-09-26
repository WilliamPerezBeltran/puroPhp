




 <?php
$link= mysqli_connect("localhost", "root", "", "crudbasededatos") or die('error en la conexcion ');
$query="delete from palabras where ID='".$_GET['ID']."'";
$result= mysqli_query($link, $query);
var_dump($result);
?>
 