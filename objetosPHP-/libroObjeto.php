<?php

class Biblioteca{
	public $titulo='programando desde cero';
	public $autor='rodrigo leal ';
	public $fechaPublicacion=1998;
	public $editorial='Cannes editorial';
	public $genero='Educativo';
	public $disponibilidadLibro=0;
	public $persona='';
	public $fechaPrestamo=0;
	public $fechaDevolucion=0;
	public $devolucionLibro=0;
	public $multa=0;

	public function publicarCaracteristicasLibro()
	{
		echo "titulo:".$this->titulo;echo "<br>";
		echo "autor:".$this->autor;echo "<br>";
		echo "fecha de publicacion:".$this->fechaPublicacion;echo "<br>";
		echo "editorial:".$this->editorial;echo "<br>";
		echo "genero:".$this->genero;echo "<br>";

	}
	
	public function prestarLibro($persona,$fechainicio){
		$this->disponibilidadLibro=1;
		$this->persona=$persona;
		$this->fechaPrestamo=$fechainicio;
		$this->fechaDevolucion=$fechainicio+(10);
		
		
	}
	public function entregarLibro($fechaDeEntrega){
		$this->persona='';
		$this->fechaPrestamo=0;
		$this->disponibilidadLibro=0;
		$this->devolucionLibro=$fechaDeEntrega;
		if($this->devolucionLibro>$this->fechaDevolucion){
			$this->multa=($this->devolucionLibro-$this->fechaDevolucion)*5000;
		}

		

		
	}

}

$instanciaBiblioteca = new Biblioteca();

$instanciaBiblioteca->publicarCaracteristicasLibro();

echo "el libro esta ".$instanciaBiblioteca->disponibilidadLibro."  (0=disponible 1=No disponible) <br>";

$instanciaBiblioteca->prestarLibro("cesar garcia",2);
echo "el nombre del usuario es: ".$instanciaBiblioteca->persona."<br> fecha de prestamo es".$instanciaBiblioteca->fechaPrestamo."  de abril <br> ";

echo " fecha de devolucion: ".$instanciaBiblioteca->fechaDevolucion."  de abril <br> ";

$instanciaBiblioteca->entregarLibro(27);
echo "usted entrego el libro el  ".$instanciaBiblioteca->devolucionLibro." de abril<br>";
echo "Multa ".$instanciaBiblioteca->multa." pesos";
 
?>