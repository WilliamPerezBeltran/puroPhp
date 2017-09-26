<?php


//////////////////////////////////////////////////////////////////////////////////
/*Crear un Objeto para manejar un Parqueadero (con un único sitio).
Debe permitir saber si el parqueadero está ocupado o no.
Imprimir la tarifa que se debe pagar y la placa que lo debe pagar.
*/
class Parqueadero{
	public $ocupado=0;
	public $horaEntrada=0;
	public $horaSalida=0;
	public $placa='';
	public $minuto=100;
	public $totalaPagar=0;

	public function entracarro($pPlaca,$pHoraEntrada){
		
		$this->ocupado=1;
		$this->horaEntrada=$pHoraEntrada;
		$this->placa=$pPlaca;
	}

	public function salecarro($pHoraSalida){
		
		
		$this->horaSalida=$pHoraSalida;
		
	}

	public function pago(){
		
		$this->ocupado=0;
		$this->placa='';
		$this->totalaPagar=(($this->horaSalida-$this->horaEntrada)*60)*($this->minuto);
	}
}
	


	


$MiPrimerParqueadero = new Parqueadero();
$MiPrimerParqueadero->entracarro('TFD 345',3);
echo "el parqueadero esta ".$MiPrimerParqueadero->ocupado." (0=no ocupado 1= ocupado)<br>";
echo "la hora de entrada fue ".$MiPrimerParqueadero->horaEntrada."<br>";

$MiPrimerParqueadero->salecarro(6);
echo "el carro sale a las  ".$MiPrimerParqueadero->horaSalida."<br>";
$MiPrimerParqueadero->pago();
echo "el parqueadero esta ".$MiPrimerParqueadero->ocupado." (0=no ocupado 1= ocupado)<br>";
echo "el usuario debe pagar ".$MiPrimerParqueadero->totalaPagar." pesos" ;


/*Crear un Objeto para manejar el alquiler de un Libro (solo un libro).
Debe tener datos básicos de un libro, tales como: Título, autor, fecha publicación, editorial y género.


*/


?>