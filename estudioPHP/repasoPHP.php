<?php 
/**
* 
*/
class williamFer{
	public $nombre="william Pérez";
	public $dato1=12;
	public $dato2=34;
	
	function cambiarNombre($nombre){
		$this->nombre=$nombre;
	}
	function multiplicar(){
	    $mult=$this->dato1*$this->dato2;
	    return  $mult;
	}
	function multiplcar1($data1, $data2){
		$this->data1=$data1;
		$this->data2=$data2;
		$multi=$data1*$data2;
		return $multi;

	}
}

$william =new williamFer();
echo $william->nombre;
echo "<br>";
$william-> cambiarNombre("oscarCesar rocio");
echo $william->nombre;
echo "<br>";
echo "dato1: ".$william->dato1." dato2: ".$william->dato2."";
echo "<br>";
echo $william->dato1."*".$william->dato2."=".($william->dato1*$william->dato2);
echo "<br>";

echo $william->dato1."*".$william->dato2."=".$william->multiplicar();
echo "<br>";

echo "la multiplicacion de 2*3=".$william->multiplcar1(2,3);

?>




