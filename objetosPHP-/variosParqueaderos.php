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

	public function imprimirDatos($contador){
		?>
		<table border=1px><tr><td>Disponibilidad</td><td>Hora de entrada</td><td>hora de salida</td><td>Placa</td><td>Valor Minuto</td><td>total a pagar</td><td>Parqueadero</td></tr>

		    <tr><td><?php echo $this->ocupado; ?></td><td><?php echo $this->horaEntrada; ?></td><td><?php echo $this->horaSalida; ?></td><td><?php echo $this->placa; ?></td><td><?php echo $this->minuto; ?></td><td><?php echo $this->totalaPagar; ?></td><td> <?php echo $contador ?></td></tr></table>




		<?php 



	}
}
	
class Parking{
	

	public $arregloParquedero= array();

	public function IngresarArreParq($parqueadero1){
		$this->arregloParquedero[]=$parqueadero1;

	}

	public function ingresarCarroParking($pPlaca,$pHoraEntrada,$posicionArregloParking){
		
		$this->arregloParquedero[$posicionArregloParking]->entracarro($pPlaca,$pHoraEntrada);
		
		
	}

	public function saleCarroParking($pHoraSalida,$posicionArregloParking){
		$this->arregloParquedero[$posicionArregloParking]->salecarro($pHoraSalida);
	}

	public function pagoParking($posicionArregloParking){
		$this->arregloParquedero[$posicionArregloParking]->pago();
	}

	public function imprimirParking(){
		$contador=0;//la variable contador es la posicion del arreglo 
		while($contador<count($this->arregloParquedero)){
			$this->arregloParquedero[$contador]->imprimirDatos($contador);
			$contador=$contador+1;
		}
	}



}


$numeroDeParqueaderos=5;
$contador=1;
$miParking= new Parking();

while($contador<=$numeroDeParqueaderos){
	$MiPrimerParqueadero = new Parqueadero();
	$miParking->IngresarArreParq($MiPrimerParqueadero);

	$contador=$contador+1;
}




$miParking->imprimirParking();
$miParking->ingresarCarroParking("ESA 234",2,0);
echo "<br>";echo "<br>";
$miParking->imprimirParking();
$miParking->ingresarCarroParking("ESA 123",2,1);
echo "<br>";echo "<br>";
$miParking->imprimirParking();
$miParking->saleCarroParking(4,0);
echo "<br>";echo "<br>";
$miParking->imprimirParking();
echo "<br>";echo "<br>";
$miParking->pagoParking(0);
$miParking->imprimirParking();











?>

