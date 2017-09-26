<?php
class Estudiante{

	public $nombre='';
	public $apellido='';
	public $telefono=0;
	public $direccion='';
	public $celular=0;
	public $grado=0;
	public $curso='';
	public $notaMatematica=0;

	public function cambiarELTelefono($numero){
		$this->telefono=$numero;
		
	

	}
	public function cambiarNota($nota){
		$this->notaMatematica=$nota;
	
	}
}
$william = new Estudiante();
$william ->nombre= "william";
echo $william ->nombre;

$william->cambiarELTelefono(8032306);
echo $william ->telefono; echo "<br>";

$william->cambiarNota(5);
echo $william->notaMatematica;echo "<br>";


		
	

	
 



	
?>