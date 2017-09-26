<?php
$link=mysqli_connect("localhost", "root","","world");

if($link){
	echo "true";

}
else{
	echo "false";
}
$query="select name,population,CountryCode from city limit 56";
$result= mysqli_query($link,$query);
echo '<table border="1px"><tr><td>Name</td><td>Population</td><td>Country Code</td></tr>';
while ($william=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	
	echo '<tr><td>'.$william["name"].'</td><td>'.$william["population"].'</td><td>'.$william["CountryCode"].'</td></tr>';



}

echo '</table>';

?>


