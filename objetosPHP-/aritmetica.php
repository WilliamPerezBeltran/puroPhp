<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="aritmetica.php" method="post" name="descendencia de equipos ">
Ingrese los valores de los equipos <br>
equipo1<input type="text" name="equipo1"/><br>
equipo2<input type="text" name="equipo2"/><br>
equipo3<input type="text" name="equipo3"/><br>
<input type="submit" name="btnenviar" value="Calular"/>
<?php 
if (isset($_POST['btnenviar'])) {
	$equipo1=$_POST['equipo1'];
	$equipo2=$_POST['equipo2'];
	$equipo3=$_POST['equipo3'];


	echo "el area del rectangulo es ".$equipo1*$equipo2*$equipo3;


}

?>
	
</form>

</body>
</html>



<?php




//1 ejercicio
$partidoVerdecarlos=45;
$partidoVerdewilliam=23;
$liberalOscar=43;
$liberalSebastian=49;
$conservadorRodrigo=78;
$unidosrigoberto=65;
$unidosGertrudis=85;
$SumaTotalDeVotos=0;
$SumaTotalDePartidoVerde=0;
$SumaTotalDePartidoLiberal=0;
$SumaTotalDePartidoConservador=0;
$SumaTotalDePartidoUnidos=0;
$abstinencia=0;
$porcentajeDeVotosVerde=0;
$porcentajeDeVotosLiberal=0;
$porcentajeDeVotosConservador=0;
$porcentajeDeVotosUnidos=0;



$SumaTotalDeVotos=$partidoVerdecarlos+$partidoVerdewilliam+$liberalOscar+$liberalSebastian+$conservadorRodrigo+$unidosrigoberto+$unidosGertrudis;

echo "la suma total de votos es ".$SumaTotalDeVotos;
echo "<br>";





$SumaTotalDePartidoVerde=$partidoVerdecarlos+$partidoVerdewilliam;
$SumaTotalDePartidoLiberal=$liberalOscar+$liberalSebastian;
$SumaTotalDePartidoConservador=$conservadorRodrigo;
$SumaTotalDePartidoUnidos=$unidosrigoberto+$unidosGertrudis;
echo "la suma total de votos para el partido verde  ".$SumaTotalDePartidoVerde;echo "<br>";

echo "la suma total de votos para el partido liberal  ".$SumaTotalDePartidoLiberal;echo "<br>";

echo "la suma total de votos para el partido conservador  ".$SumaTotalDePartidoConservador;echo "<br>";

echo "la suma total de votos para el partido unidos  ".$SumaTotalDePartidoUnidos;
$abstinencia=($abstinencia/$SumaTotalDeVotos)*100;echo "<br>";

echo "abstinencia es =".$abstinencia."%";echo "<br>";


$porcentajeDeVotosVerde=($SumaTotalDePartidoVerde/$SumaTotalDeVotos)*100;
$porcentajeDeVotosLiberal=($SumaTotalDePartidoLiberal/$SumaTotalDeVotos)*100;
$porcentajeDeVotosConservador=($SumaTotalDePartidoConservador/$SumaTotalDeVotos)*100;
$porcentajeDeVotosUnidos=($SumaTotalDePartidoUnidos/$SumaTotalDeVotos)*100;

echo "Porcentaje de votos para partido verde =".$porcentajeDeVotosVerde."%";echo "<br>";
echo "Porcentaje de votos para partido liberal =".$porcentajeDeVotosLiberal."%";echo "<br>";
echo "Porcentaje de votos para partido conservador =".$porcentajeDeVotosConservador."%";echo "<br>";
echo "Porcentaje de votos para partido unidos =".$porcentajeDeVotosUnidos."%";echo "<br>";

//2 ejercicio
echo "<br>";
echo "<br>";

$valormoneda=2000000;
$AU=2205.35912;
$tasaDeCambioAustraliaColombia=$valormoneda/$AU;
echo "1 AUD =2205.35912 COP";echo "<br>";

echo "El valor a converitir es ".$valormoneda."COP a dolar australianos es= ".$tasaDeCambioAustraliaColombia."dolar australianos";echo "<br>";
echo "<br>";
echo "<br>";


//3 ejercicio

echo "/3 ejercicio";

$carlos=45;
$william=23;
$oscar=43;
echo "Los candidatos son carlos con 45 votos william con 23 votos y oscar con 43 votos ";
echo "<br>";
if($carlos>$william){
	$ganador=45;
}
else{
	$ganador=23;
}



if($ganador>$oscar){
	echo "el ganador tiene ".$ganador;
}
else{
	echo "el ganador tiene ".$oscar;
}

echo " votos";
//4 ejercicio Traductor a español de números en inglés (1 - 10).
echo "<br>";
echo "<br>";

echo "Traductor a español de números en inglés (1 - 10).";
echo "<br>";




$uno=1;
$dos=2;
$tres=3;
$cuatro=4;
$cinco=5;

$seis=6;
$siete=7;
$ocho=8;
$nueve=9;
$diez=10;
$variable=10;
if($variable==$uno){
	echo $uno." = one";
}
if($variable==$dos){
	echo $dos." = two";
}
if($variable==$tres){
	echo $tres." = three";
}
if($variable==$cuatro){
	echo $cuatro." = four";
}
if($variable==$cinco){
	echo $cinco." = five";
}
if($variable==$seis){
	echo $seis." = six";
}
if($variable==$siete){
	echo $siete." = seven";
}
if($variable==$ocho){
	echo $ocho." = eight";
}
if($variable==$nueve){
	echo $nueve." = nine";
}
if($variable==$diez){
	echo $diez." = ten";
}

/*Dados los puntajes de 3 equipos de futbol encontrar el equipo que desciende de división.*/

$equipo1=5;
$equipo2=3;
$equipo3=6;
$desciende=4;
echo "Los equipos descienden de divison si los puntos obtenidos son menores a 4 puntos"; echo "<br>";
echo "equipo 1 = ".$equipo1."puntos"; echo "<br>";
echo "equipo 2 = ".$equipo2."puntos"; echo "<br>";
echo "equipo 3 = ".$equipo3."puntos"; echo "<br>";
if($equipo1<$desciende){
	echo "el equipo 1 desciende de divison ";echo "<br>";
}

if($equipo2<$desciende){
	echo "el equipo 2 desciende de divison ";echo "<br>";
}

if($equipo3<$desciende){
	echo "el equipo 3 desciende de divison ";echo "<br>";
}

/*Dados dos gemelos y un hermano, encontrar al hermano.*/
echo "oeeeee";
$william=30;
$oscar=30;
$cesar=2;
echo "<br>";
echo "<br>";

echo "Las edades son: william con ".$william." anios oscar con ".$oscar." anios y cesar ".$cesar." anios";echo "<br>";
if ($william==$oscar) {
	echo "Los hermanos gemelos son : william y oscar con ".$william." anios";echo "<br>";
}elseif ($william==$cesar) {
	echo "Los hermanos gemelos son : william y cesar con ".$william." anios";echo "<br>";
}elseif ($oscar==$cesar){
	echo "Los hermanos gemelos son : oscar y cesar con ".$cesar." anios";echo "<br>";
}else{
	echo "No hay gemelos. Todas las edades son diferentes";echo "<br>";
}

echo "<br>";
echo "<br>";


/*Dados 3 hermanos encontrar el mayor, el menor y el del medio.*/
/*
$william=20;
$oscar=40;
$cesar=35;
echo "Las edades son: william con ".$william." anios oscar con ".$oscar." anios y cesar ".$cesar." anios";echo "<br>";
if ($william>$oscar AND $william>$cesar) {
	echo "El hermano mayor es william con ".$william." anios";echo "<br>";
}if($oscar >$cesar ) {
	echo "El hermano del medio es ".$oscar." anios";echo "<br>";
	echo "El hermano menor es ".$cesar." anios";echo "<br>";
}elseif ($oscar <$cesar) {
	echo "El hermano mayor es cesar con ".$cesar." anios";echo "<br>";
	echo "El hermano del medio es ".$oscar." anios";echo "<br>";
	echo "El hermano menor es ".$william." anios";echo "<br>";
}
*/

/*Dadas tres edades encontrar si pueden entrar a un bar (mayores de edad).*/
$william=30;
$oscar=32;
$cesar=12;

if($william>18 and $oscar>18 and $cesar>18 ){
    echo "pueden entrar al bar tiene ";
}else{
	echo "no puede entrar al bar tiene ".$william;echo "<br>";
 
}

echo "<br>";
echo "<br>";
/*Dadas tres edades encontrar si pueden entrar a un cine (un adulto responsable).*/
$william=30;
$oscar=32;
$cesar=12;

if($william >18 Or $oscar>18 Or $cesar>18 ){
	echo "OScar , william y cesar pueden entrar al cine ";echo "<br>";

}else{
	echo "OScar , william y cesar no pueden entrar al cine ya que debe haber alguien menor de edad";echo "<br>";
}
echo "<br>";
echo "<br>";
/*Dados dos gemelos y un hermano, encontrar los gemelos sin anidar.*/
$william=30;
$oscar=30;
$cesar=12;
echo "Las edades son: william con ".$william." anios oscar con ".$oscar." anios y cesar ".$cesar." anios";echo "<br>";

if ($william==$oscar) {
	echo "Los gemelos son oscar william y el hermano es cesar";echo "<br>";
}
if ($cesar==$oscar) {
	echo "Los gemelos son oscar y cesar y el hermano es william ";echo "<br>";
}
if ($william==$cesar) {
	echo "Los gemelos son william y cesar y el hermano es oscar ";echo "<br>";
}

if ($william<>$oscar and $oscar<>$cesar) {
	echo "No hay gemelos todas las edades son diferentes ";echo "<br>";
}
echo "<br>";
echo "<br>";
/*Dadas 3 edades encontrar si aplican a una promoción para únicamente grupos de menores de 8 años o grupos de mayores a 60 años.*/

$william=30;
$oscar=32;
$cesar=12;
echo "Las edades son: william con ".$william." anios oscar con ".$oscar." anios y cesar ".$cesar." anios";echo "<br>";

$sumatoria=$william+$oscar+$cesar;
if($sumatoria<8 or $sumatoria>60){
	echo "aplica a la promocion las sumas de las edades es".$sumatoria;echo "<br>";
}else{
	echo "No aplica a la promocion las sumas de las edades deben ser menores a 8 y la sumatoria es ".$sumatoria;echo "<br>";
}
echo "<br>";
echo "<br>";


/*Dado el género de tres niños indicar si pueden ingresar a una atracción que sólo acepta 3 niños o 3 niñas.*/
$william="masculino";
$oscar="masculino";
$cesar="masculino";
echo "Los generos son ".$william." y ".$oscar." y ".$cesar;echo "<br>";
if ($william==$oscar and $oscar==$cesar) {
	echo "Si pueden ingresar a la atraccion todos los generos son iguales "; echo"<br>";
}else {
	echo "No pueden ingresar a la atraccion los generos son diferentes "; echo"<br>";
}
echo "<br>";
echo "<br>";

/*Dadas dos edades, el precio de la boleta y la información “tienen boleta?” determinar el precio de la boleta si:

Cuando ya tienen boleta deben cancelar 0 pesos
Cuando no tienen boleta y son estudiantes (Hasta los 20 años) deben cancelar el 50% de la boleta
Cuando no tienen boleta y al menos uno es estudiante (Hasta los 20 años) deben cancelar el 75% de la boleta
Cuando no tienen boleta y no son estudiantes deben cancelar el 100% del a boleta
*/
$william=45;
$oscar=23;

$precioBoleta=5000;
$tuBoleta="no";
echo "Las edades son: william con ".$william." anios oscar con ".$oscar." anios y cesar ";echo "<br>";
if ($tuBoleta=="si") {
	echo"Ya tiene boleta, no tienen que pagar nada";
}else{

	if ($william<=20 AND $oscar<=20) {
		$precioBoleta=5000*0.5;
		echo "Los estudiantes deben cancelar ".(2*$precioBoleta)." pesos";echo "<br>";
	}elseif ($william<=20 OR $oscar<=20) {
		$precioBoleta=5000*0.75;
		echo "Los estudiantes deben cancelar ".(2*$precioBoleta)." pesos";echo "<br>";
	}else{
		echo "Los estudiantes deben cancelar ".(2*$precioBoleta)." pesos";echo "<br>";
	}

}

echo "<br>";
echo "<br>";
/*Dado el día y mes de nacimiento de una persona, determinar el signo zodiacal al que pertenece.*/


/*
$dia=21;
$mes=5;

echo "El dia  ".$dia." y el mes  ". $mes;echo "<br>";
if ($mes==3 or $mes==4) {
    if (($dia>=21 AND $dia<=31)OR($dia>=1 AND $dia<=19) ) {
	    echo "Usted es Aries";echo "<br>";
     }
}

if ($mes==4 or $mes==5) {
    if (($dia>=20 AND $dia<=30)OR($dia>=1 AND $dia<=20) ) {
	    echo "Usted es Tauro";echo "<br>";
     }
}






    if (($dia>=21 AND $mes==5)OR(($dia>=1 AND $dia<=20) and $mes==6) ) {
	    echo "Usted es Geminis";echo "<br>";
     }


*/


echo "<br>";
echo "<br>";




/*Un supermercado ha puesto en oferta la venta al por mayor de cierto producto, ofreciendo un descuento del 15% por la compra de más de 3 docenas y 10% de descuento en caso contrario. Además por la compra de más de 3 docenas se obsequia una unidad del producto por cada docena en exceso sobre 3. Dada la cantidad de docenas del producto a comprar y el precio por docena, determine el monto de la compra, el monto del descuento, el monto a pagar, y el número de unidades de obsequio.*/

$docena=3;
$precioPorDocena=2000;
$montoAPagar=$docena*$precioPorDocena;
$obsequio=$docena-3;
echo "usted compro ".$docena." docenas y el precio de cada docena es ".$precioPorDocena."pesos ";echo "<br>";

if($docena>3){
	$montoAPagarDescuento=($docena*$precioPorDocena)*0.15;
	
	echo "Se le aplica el 15% de descuento";echo "<br>";
	echo "Monto a pagar es ".($montoAPagar-$montoAPagarDescuento);echo "<br>";
	echo "Monto de descuento ".$montoAPagarDescuento;echo "<br>";
	echo "Numero de obsequios ".$obsequio;echo "<br>";
	
}




if ($docena==1 or $docena==2 or $docena==3) {

	$montoAPagarDescuento=(($docena*$precioPorDocena)*0.10);
	echo "Se le aplica el 10% de descuento"; echo "<br>";
	echo "Monto a pagar es ".($montoAPagar-$montoAPagarDescuento);echo "<br>";
	echo "Monto de descuento ".$montoAPagarDescuento;echo "<br>";	
} 


echo "<br>";
echo "<br>";

/*Calcular el Índice de Masa Corporal de una persona (IMC = peso [kg] / altura [m]^2) dados el peso y la altura e indicar en qué estado se encuentra esa persona (“infrapeso”, “bajo peso”, “peso normal”, “sobre peso”, “sobre peso crónico”, “obesidad pre-mórbida”, “obesidad mórbida”).*/

$peso=70;
$altura=1.81;
$imc=($peso/($altura*$altura));
	echo "Su peso es ".$peso."kilogamos y su altura en metros es ".$altura;echo "<br>";
	echo "Estado de su peso es ";

	echo "IMC	Clasificación";echo "<br>";
	echo "<18,5	    Peso insuficiente";echo "<br>";
	echo "<18,5	    Peso insuficiente";echo "<br>";
	echo "18,5-24,9	Normopeso";echo "<br>";
	echo "25-26,9	    Sobrepeso grado I";echo "<br>";
	echo "27-29,9	    Sobrepeso grado II (preobesidad)";echo "<br>";
	echo "30-34,9	    Obesidad de tipo I";echo "<br>";
	echo "35-39,9	    Obesidad de tipo II";echo "<br>";
	echo " 40-49,9	    Obesidad de tipo III (mórbida)";echo "<br>";
	echo ">50	    Obesidad de tipo IV (extrema)";echo "<br>";
    echo "<br>";

     echo "Su indice de masa corporal es ".$imc;echo "<br>";

	if($imc<18.5){
		echo "Peso insuficiente";echo "<br>";
	}
	if ($imc>=18.5 and $imc<=24.9) {
		echo "Normopeso";
	}
	if ($imc>=25 and $imc<=26.9) {
		echo "Sobrepeso grado I";echo "<br>";
	}
	if ($imc>=27 and $imc<=29.9) {
		echo "Sobrepeso grado II (preobesidad)";echo "<br>";
	}
	if ($imc>=30 and $imc<=34.9) {
		echo "Obesidad de tipo I";echo "<br>";
	}
	if ($imc>=35 and $imc<=39.9) {
		echo "Obesidad de tipo II";echo "<br>";
	}
	
	if ($imc>=40 and $imc<=49.9) {
		echo "Obesidad de tipo III (mórbida)";echo "<br>";
	}
	if ($imc>50) {
		echo "No sea marrano, tragon . Cuide su salud baboso Obesidad de tipo IV (extrema) ";echo "<br>";
	}



/*Dado un año, indique si es bisiesto. Un año es bisiesto cuando es múltiplo de 4 pero no es múltiplo de 100, también es bisiesto si es múltiplo de 400.*/
$anio=1644;

if (($anio%4==0) and ($anio%100!=0)) {
	echo "el anio ".$anio."es bisiesto";
}elseif ($anio%400==0) {
	echo "el anio ".$anio."es bisiesto";
}else{
	echo "El anio es ".$anio." no es bisiesto";
}  

echo "<br> <br>";
/*Se ponen a la venta, las entradas para un partido de fútbol internacional, cuyo precio depende de la tribuna, así: tribuna norte y sur cuesta 25 usd, tribuna oriente cuesta 45 usd y tribuna occidente cuesta 65 usd. Diseñe usted, la solución a un programa que controle la venta de dichas entradas a fin de poder saber la cantidad de personas que asisten a cada tribuna, la cantidad total de personas (Asistencia) y el monto total recaudado por la venta de todas las entradas. (Recaudación), dar el recaudo en Pesos Colombianos.*/


/*Ejercicios de Ciclos - (While y For)*/
/*Dada una variable que toma valores de 1 a 5, muestre por pantalla el doble del valor de esa variable, es decir, que muestre 2, 4, 6, 8, 10.*/
$x=1;
while($x<=5){
	echo " ".(2*$x);
	$x=$x+1;
}
echo "<br> <br>";

/*Sumar los números del 1 al 1000 de 3 en 3.*/
$x=0;
while($x<1000){
	echo " ".$x;
	$x=$x+3;
}echo "<br> <br>";

/*Dado un número de 1 al 10, pintar la tabla de multiplicar de ese número. Por ejemplo con el número 5:*/
echo "5 * ".$x."=".(5*$x)."<br>";
$x=1;
while($x<=10){
	
	echo '<table border="1px"><tr><td>5</td><td>*</td><td>'.$x.'</td><td>=</td><td>'.(5*$x).'</td></tr></table>';
	$x=$x+1;
}echo "<br> <br>";


/**/
$x=1;
$color="white";
$colorBlue="blue";
while($x<=10){

	if($x%2==0){
		$color="blue";
	}else{
		$color="white";
	}
?>
     <?php?>
	<table border="1px"><tr bgcolor= <?php echo$color;?> ><td>5</td><td>*</td><td><?php echo $x ?></td><td>=</td><td><?php echo 5*$x ?></td></tr></table>
	<?php $x =$x+1; 
}echo "<br> <br>";

/* Dado el color inicial de un semáforo (verde, amarillo o rojo), el sentido y el número de repeticiones, mostrar todos los colores por los que pasa el semáforo. */
$x=8;
$contador=1;
$semaforo=1;
$pivote1=0;
while($contador<=$x){
    if($pivote1==0){

    	if($semaforo<=3){
		echo $semaforo;
		$semaforo=$semaforo+1;

		if($semaforo==3){
			echo $semaforo;
		$pivote1=1;
	      }
	    }
     }   

    
	
	
	if($pivote1==1){

		$semaforo=$semaforo-1;
		echo $semaforo;

		if($semaforo==1){
			$pivote1=0;   
		}
	}
	
	$contador=$contador+1;

}
echo "<br> <br>";
/*Dado un valor “X” y un valor “Y” mostrar X elevado a la Y potencia*/
$base=6;
$pot=2;
$contador=1;
$b=1;
echo "La base es ".$base." y la potencia es ".$pot."<br>";
while($contador<=$pot){
	$b=$b*$base;
	$contador=$contador+1;
}
echo "el resultado es ".$b;
echo "<br> <br>";
/*Dados 2 números, imprima los números naturales que hay entre ambos empezando por el más pequeño, contar cuántos números hay y cuántos de ellos son pares.*/
$limite1=1;
$limite2=10;
$contador=1;
$contador1=1;
echo "el numero uno es: ".$limite1." y el limite dos es ".$limite2."<br>";
while($limite1<=$limite2){
	echo $limite1." " ;
	
	$limite1=$limite1+1;
	$contador=$contador+1;
	if($limite1%2==0){
		$contador1=$contador1+1;
	}

}
echo "El numero de repeticiones es: ".($contador-1)."<br>";
echo "El numero de pares que hay es: ".($contador1-1);

/*Desarrolle un algoritmo que permita determinar a partir de un número de días, variable, ¿Cuántos años, meses, semanas y días; constituyen el número de días proporcionado utilizando la estructura de Ciclo.*/
$numero=365;

/*Imprima la siguiente secuencia:
	
	151413121110987654321
	1413121110987654321
13121110987654321
121110987654321
1110987654321
10987654321
987654321
87654321
7654321
654321
54321
4321
321

21
1 
*/





echo "<br><br>";

$numero=15;
$x=$numero;
for ($i=1; $i <=$numero; $i++) { 
	       for ($duplicadoI=$x; $duplicadoI >= 1; $duplicadoI--) 
	          { 
	            echo "".$duplicadoI;
              }
    echo "<br><br>";

    $x--;
  }


/*Una Compañía de seguros tiene contratado 3 vendedores. Cada uno hace tres ventas a la semana. Su política de pagos es que un vendedor recibe un sueldo base, y un 10 % extra por comisiones de sus ventas. El gerente de su compañía desea saber cuánto dinero obtendrá en la semana cada vendedor por concepto de comisiones por las tres ventas realizadas, y cuanto tomando en cuenta su sueldo base y sus comisiones. Simule un Mes de Ventas.*/


$sueldoBase=100;
$numeroDeVentas=3;
$precioPOrVenta=2;
$numeroDeVendedores=3;
$comision=0.1;//esto no se toca
$contador=1;//esto no se toca
$contador1=1;//esto no se toca
$a=0;//esto no se toca
$b=0;//esto no se toca
$montoMensualAPAgarTotal=0;//esto no se toca

echo "sueldo base".$sueldoBase."<br> numero de ventas " .$numeroDeVentas."<br> precio por venta " .$precioPOrVenta."<br> numero de vendedores ". $numeroDeVendedores."<br>";


$montoApagarPorComision=($numeroDeVentas*$precioPOrVenta)*($comision);
$montototalApagar=$sueldoBase+$montoApagarPorComision;

echo "Monto a pagar por comisiones por vendedor por semana :  ".$montoApagarPorComision." dolares <br> ";
echo "Monto total a pagar por vendedor (sueldo base mas comisiones ) por semana :  ".$montototalApagar; echo "<br>";


while ( $contador<= 4) {

	$a=$a+$montoApagarPorComision;
	$contador++;

}
$montoMensualAPAgarTotal=$sueldoBase+$a;

echo "Monto total a pagar por vendedor (sueldo base mas comisiones ) por mes :  ".$montoMensualAPAgarTotal."dolares"; echo "<br>";

while ( $contador1<= $numeroDeVendedores) {

	$b=$b+$montoMensualAPAgarTotal;
	$contador1++;

}
echo "Monto total a pagar por ".$numeroDeVendedores." vendedores ".$b."dolares mensualmente<br>";
echo "<br><br>";
echo "<br><br>";

/*Programa multiplica dos números enteros sin usar el operador*/

$numero1=9;
$numero2=6;
$i=1;
$a=0;
while ($i<=$numero2 ) {
	$a=$a+$numero1;
	$i++;

}
echo $numero1." * ".$numero2."=".$a;
echo "<br><br>";

/*Desarrolle un programa que dibuje un gráfico como el siguiente:

			3. * * *
			5. * * * * *
			7. * * * * * * *
			9. * * * * * * * * * 
			10. * * * * * * * * * *
*/
$numero1=5;//no se toca 
$numero2=3;//no se toca 

for ($i=0; $i <$numero1 ; $i++) { 
	
	for ($i1=0; $i1< $numero2; $i1++) { 
		echo "* ";
	}

	echo "<br> ";
	$numero2=$numero2+2;
}

/*Programa en el que el ordenador lanza 50 veces un dado y cuenta las veces sale el nº 1. */
/*

package javaapplication54;

import java.util.Random;


public class JavaApplication54 {

    
    public static void main(String[] args) {
        Random numerosAleatorios=new Random();
        int numero;
        int contador=0;
        for (int i = 0; i < 100; i++) {
            numero=0+numerosAleatorios.nextInt(50);
            System.out.print(" "+numero);
            
            while (numero==1) {                
                contador++;
            }
        }
        System.out.println();
        
        System.out.println("El numero de veces que se repitio 1 es:"+contador);
    }
    
}


*/
	echo "<br> ";
$contador=0;

for ($i=0; $i < 50; $i++) { 
	$rand=rand(1,50);
     echo $rand." ";
     if ($rand==1) {
     	$contador=$contador+1;
     }
     
}
echo "<br> ";
echo "Las veces que salio uno fueron: ".$contador;echo "<br> ";echo "<br> ";


$saldo=0;

$array= array(100,0,-500,2000,2000,200,100,-1000,-2000,5000);

echo '<pre>',print_r($array,true),'<pre>';//este es DSLKFDJKADJFKLAJSFKLJSAKFLJSALKFJKLSAJFKLAKLFJALKJFLKAJFSL
for ($i=0; $i <10; $i++) { 
	echo $array[$i]." ";
	$saldo=$saldo+$array[$i];

}
echo "<br> ";
echo "<br> ";
echo "El saldo de la alcancia es ".$saldo." ";
echo "<br> ";echo "<br> ";
?> 
<table border =1px ><tr><td>clave</td><td>valor</td></tr></table>
<?php
for ($i=0; $i <10; $i++) { 
?><table border =1px ><tr><td><?php echo$i; ?></td><td><?php echo$array[$i];?> </td></tr></table><?php 

}
echo "<br> ";
echo "<br> ";
echo "5 * ".$x."=".(5*$x)."<br>";
$x=1;
while($x<=10){
	
	echo '<table border="1px"><tr><td>5</td><td>*</td><td>'.$x.'</td><td>=</td><td>'.(5*$x).'</td></tr></table>';
	$x=$x+1;
}echo "<br> <br>";







/*Hacer un programa que dada alguna de las siguientes palabras: “programación”, “diseño”, “repositorio”, “pruebas”, “producción”, “entorno”, “dato”, “información”, “sistema” ó “metodología”; responda con el sinónimo. Se sugiere utilizar un arreglo de la siguiente manera:*/
echo "<br><br>";

$palabra="sistema";
$arrayName = array(
	'programacion'=>'programa',
	'diseno'=>'boceto',
	'repositorio'=>'oportunidad',
	'pruebas'=>'verificacion',
	'produccion'=>'elaboracion',
	'entorno'=>'ambiente',
	'dato'=>'noticia',
	'informacion'=>'comunicacion',
	'sistema'=>'procedimiento',
	'metodologia'=>'Sistematizacion',
	);

    echo "La palabra elegida es ".$palabra." y su sinonimo es ".$arrayName[$palabra]."<br>";

    echo "Abajo podemos ver el listado de palabras";
    



echo '<pre>',print_r($arrayName,true),'<pre>';
echo "<br><br>";echo "<br><br>";

$array = array('A','B','C','D','E','F','G','H','I','J');

$numero=8;
echo "El numero es ".$numero." y su letra correspondiente es ".$array[$numero]."<br>";
echo $array[$numero]."<br>"; 
echo "Abajo podemos ver el listado de palabras <br>";
echo '<pre>',print_r($array,true),'</pre>';// LJKLJJKLJKLJLKJLKJLKJKJKJKJKJLJKJKLJLKJKLJLKJLKJLKJLKJLKJLKJLKJLKJL

// LJKLJJKLJKLJLKJLKJLKJKJKJKJKJLJKJKLJLKJKLJLKJLKJLKJLKJLKJLKJLKJLKJL

for ($i=0; $i <10 ; $i++) { 
	echo $array[$i];  // imprimir varialbes en array 
}
echo "<br>";

echo"Genere un arreglo que indique las 5 capitales Latinoamericanas más importantes para usted, <br>donde su llave sea el país y el valor su capital.<br> Imprima el arreglo. Finalmente Dado un país en la variable “País” muestre su capital<br>";

$palabra="venezuela";
echo "Las capitales latinoamericanas son:";


$arrayPaises = array(
	'brazil'=>'brazilia',
	'chile'=>'santiago de chile',
	'colombia'=>'bogota',
	'ecuador'=>'quito',
	'nicaragua'=>'managua',
	'pero'=>'lima',
	'venezuela'=>'caracas',
	
	);
echo '<pre>',print_r($arrayPaises,true),'<pre>';
echo "<br><br>";echo "<br><br>";echo "<br><br>";echo "<br><br>";
print_r($arrayPaises);

echo "la capital de ".$palabra." es: ".$arrayPaises[$palabra];
echo "<br><br>";echo "<br><br>";echo "<br><br>";echo "<br><br>";



/*Genere un arreglo de solo capitales (Cuyo Índice estará indicado de 0 a 9), y haga un programa que muestre aleatoriamente 10 veces una capital indicando la siguiente frase:
	
	El Numero obtenido es: 9 → Brasilia
Hint: El arreglo es:  $capitales = array ("Bogotá", "Caracas", "Lima","Quito","La Paz","Santiago de Chile","Buenos Aires","Montevideo","Asunción","Brasilia");*/
echo "/*Genere un arreglo de solo capitales (Cuyo Índice estará indicado de 0 a 9), <br> haga un programa que muestre aleatoriamente 10 veces una capital indicando la siguiente frase:";
$capital=

$capitales=array('brazilia','santiago de chile','bogota','quito','managua','lima','caracas','berlin','viena','tokio');
echo "string";
print_r($capitales);

for ($i=0; $i < 10; $i++) { 
	$randon=rand(0,9);

	echo $i.") ".$capitales[$randon]."<br>";
}


echo "<br><br>";echo "<br><br>";echo "<br><br>";echo "<br><br>";

/*Dado un Arreglo de 10 notas de un alumno, haga un programa que imprima:
La peor nota que obtuvo.
La mejor nota que obtuvo.
El promedio de la materia.*/
echo "Dado un Arreglo de 10 notas de un alumno, haga un programa que imprima:<br>
La peor nota que obtuvo.<br>
La mejor nota que obtuvo.<br>
El promedio de la materia.<br>
";

$arrayNotas=array(rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9));

$mayor=$arrayNotas[0];
$menor=$arrayNotas[0];
$promedio=0;
print_r($arrayNotas);

for ($i=0; $i <10 ; $i++) { 
	if ($mayor<$arrayNotas[$i]) {
		$mayor=$arrayNotas[$i];
		
	}
	if ($menor>$arrayNotas[$i]) {
		$menor=$arrayNotas[$i];
		
	}
	$promedio=($promedio+$arrayNotas[$i]);
}


echo "mayor ".$mayor; echo "<br>";
echo "menor ".$menor;echo "<br>";
echo "promedio ".$promedio/10;echo "<br>";

echo "<br><br>";echo "<br><br>";echo "<br><br>";echo "<br><br>";



/*Genere un arreglo de numeros aleatorios*/




/*$arrayNotas=array(rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9));
print_r($arrayNotas);
$pivote=$arrayNotas[0];
$peor=0;
$mayor=0;

for ($i=0; $i <10 ; $i++) { 
	if ($pivote>$arrayNotas[$i]) {
		$peor=$arrayNotas[$i];
	}
	if ($pivote<$arrayNotas[$i]) {
		$mayor=$arrayNotas[$i];
	}
}
echo "La nota peor es: ".$peor."<br>";
echo "La nota peor es: ".$mayor."<br>";*/
/*Un palíndromo (del griego palin dromein, volver a ir hacia atrás) es una palabra, número o frase que se lee igual hacia adelante que hacia atrás. Si se trata de un número, se llama capicúa.
	Algunos ejemplo de palabras palíndromos son: 
Ana
Anilina
Menem
Arenera
Ojo
Oro
*/
echo "<br><br>";echo "<br><br>";echo "<br><br>";echo "<br><br>";



$str = "willanilina";
$arr1 = str_split($str);
$ultimo=count($arr1);
$a=0;
echo "La palabra es ".$str." y ";
for ($i=0; $i <$ultimo; $i++) { 
	if ($arr1[$i]!=$arr1[$ultimo-1]) {
		$a=1;
	}
   $ultimo=$ultimo-1;
}
if ($a==0) {
	echo "la palabra  es palindromo";
}else{
	echo "la palabra no  es palindromo";
}


function tabla($Nombre, $Apellido, $Cargo, $DíadeNacimiento, $MesdeNacimiento){
 ?><table border=1px><tr><td><?php echo $Nombre;?></td><td><?php echo $Apellido;?></td><td>  <?php echo $Cargo;?></td><td><?php echo $DíadeNacimiento;?></td></tr></table>
<?php 
}



tabla("Yepe", "Redondo", "Tenista","23 ","julio" );
tabla("Yepe", "Redondo", "Tenista","23 ","julio" );
tabla("Yepe", "Redondo", "Tenista","23 ","julio" );

echo "<br><br><br><br>";

/*Desarrolle una función que reciba dos operandos y un operador y devuelva la operación entre ellos. Atención: Trate los casos especiales según la operación.
*/

function operadores($numero1,$numero2,$operador){
	echo "los numeros son ".$numero1." y ".$numero2."<br>";

	if ($operador=="+") {
		echo "suma los numeros: ";
		Echo $numero1+$numero2;
	}

	if ($operador=="-") {
		echo "resta los numeros: ";
		Echo $numero1-$numero2;
	}

	if ($operador=="*") {
		echo "multiplica los numeros ";
		Echo $numero1*$numero2;
	}

	if ($operador=="/") {
		echo "divide los numeros ";
		Echo $numero1/$numero2;
	}

}

operadores(23,23,"*"); 

echo "<br><br><br><br>";

/*Desarrolle una función que dado un valor que representa una temperatura en grados Celsius, devuelva su equivalente en grados Fahrenheit o Kelvin.
	Hint: Para convertir use las siguientes fórmulas.

(°F  -  32)  x  5/9 = °C
T(K) = T(°C) + 273.15
*/



function grados($gradosCelsios){
	$f=((9*$gradosCelsios)/5)-32;
	$k=$gradosCelsios+273.15;
	echo $gradosCelsios." grados celsius equivalen a ".$f." grados fahrenheit o ".$k." grados kelvin";

}

grados(23);

echo "<br><br><br><br>";



/*componer la cancion de regeton */



function regeton($parrafo){

	$regeton= array('mami','yo quiero','castigarte','duro','hasta que salga el sol ','sin miedo');
for ($ia=0; $ia <$parrafo ; $ia++) { 
	for ($i=0; $i <count($regeton) ; $i++) { 
	$randon=rand(0,count($regeton)-1);
	echo $regeton[$randon]." ";
   }
   echo "<br>";
}


}

regeton(7);
echo "<br><br><br><br>";
/*Desarrolle un programa por medio de funciones que adivine un numero entre [Número MÍNIMO] y [Número MÁXIMO] e imprima cuantos intentos utilizó para llegar al número.
*/

function rango($limite1,$limite2, $numero,$adivinar){
	echo "limite inferior: ".$limite1." limite superior: ".$limite2."<br>";
$contador=0;
	while ($numero!=$adivinar) {
		if (($numero >= $limite1) and ($numero<=  $limite2)) {
		if($numero<$adivinar){
			echo "El numero".$numero."  y debe ser mayor <br>";
     
		}
		if ($numero>$adivinar) {
			echo"El numero".$numero." y debe ser menor <br>";
		}
		
		$numero=rand($limite1,$limite2);
		$contador=$contador+1;
	  }
	}

echo "el numero de veces fueron  ".$contador."<br>";

if ($numero==$adivinar) {
			echo "El numero es ".$numero." es igual a ".$adivinar;
		}





	

}
rango(1,9,8,2);//rango(limiteInferior,limiteSuperior,Numero que toca ingresar,numero a adivinar)


echo "<br><br><br><br>";
/*ENCRIPTAR ENCRIPTAR ENCRIPTAR ENCRIPTAR ENCRIPTAR ENCRIPTAR ENCRIPTAR */

function encriptar($palabra){
	$aregloDeFraseEncriptada = str_split($palabra);

	$william = array(
	'a'=>1,
	'b'=>2,
	'c'=>3,
	'd'=>4,
	'e'=>5,
	'f'=>6,
	'g'=>7,
	'h'=>8,
	'i'=>9,
	'j'=>10,
	'k'=>11,
	'l'=>12,
	'm'=>13,
	'n'=>14,
	'o'=>15,
	'p'=>16,
	'q'=>17,
	'r'=>18,
	's'=>19,
	't'=>20,
	'u'=>21,
	'v'=>22,
	'w'=>23,
	'x'=>24,
	'y'=>25,
	'z'=>26,
	);
	$arreglo=array();
echo "Arreglo encriptado = <br>";
for ($i=0; $i <count($aregloDeFraseEncriptada) ; $i++) { 
	
	
	$arreglo[$i]=(($william[$aregloDeFraseEncriptada[$i]])*234)-20;
	echo $arreglo[$i]." ";
}
echo "<br>";
$arregloDePalabrarebelada=array();

for ($i=0; $i < count($arreglo); $i++) { 
	$arregloDePalabrarebelada[$i]=($arreglo[$i]+20)/234;
}
echo "palabra es  = ";
for ($i=0; $i <count($arregloDePalabrarebelada) ; $i++) { 
	
	echo array_search($arregloDePalabrarebelada[$i],$william);

}




}
encriptar('oscar');


echo "<br><br><br><br>";






/*Crear un Objeto para manejar un Parqueadero (con un único sitio).
Debe permitir saber si el parqueadero está ocupado o no.
Debe permitir saber la hora en que fué ocupado y desocupado.
Debe permitir saber la placa que lo ocupó.
Debe conocer cuál es la tarifa por minuto que se cobra.
Se debe poder calcular el total a pagar.
Crear la Clase Parqueadero, con sus propiedades y métodos. Luego crear una Instancia de dicha clase. Usando dicha instancia de la clase:
Ocupar el parqueadero con la siguiente placa: BFK 279 en una hora dada.
Fijar la hora de salida.
Tarifa 1000 pesos por hora
Imprimir la tarifa que se debe pagar y la placa que lo debe pagar.
*/


/**/
/**/

/**/
/**/
/**/
/**/
/**/
/**/
/**/
/**/
/**/
/**/
/**/


?>

