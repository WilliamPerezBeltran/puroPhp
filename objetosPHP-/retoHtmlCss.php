

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
	<title>retoHtmlCss</title>
	<style type="text/css">

	div {
		border: 1px solid blue;
		float: left;

	}

	img{
		text-align: center ;
		float: center;
		margin-left:auto;
		margin-right: auto;
	}

	.iFrame{
		width: 1000px;
		height: 150px;
		margin-bottom:5px;
	}
	.encabezado{
		border: white;
		width: 1000px;
		height: 90px;
		margin-bottom:5px;
		
	}

	.cajasDeEncabezado{

		    color: black;
			font-size:17px; 
			text-align: center ;
			text-transform: uppercase;
			font-family: Arial;
			font-style: italic;



		width: 152px;
		height: 75px;
		margin-top: 5px;
		margin-right: 5px;
		margin-left: 5px;
		
		
			
	}
	.menuLateralIzquierdo{
		
		border: white;
		clear: left;
		width: 150px;
		height:700px;
		margin-right: 5px;

	}

	.cajaMenuLateralIzquierdo{
		
		    color: black;
			font-size:17px; 
			text-align: center;
			text-transform: uppercase;
			font-family: Arial;
			font-style: italic;
			vertical-align: text-bottom;

		clear: left;
		margin-right: 5px;
		margin-top: 5px;
		margin-left: 5px;
		margin-bottom: 5px;
		width: 137px;
		height: 50px;
		

	}

	
	.contenido{
		border: white;
		width: 750px;
		height:700px;
		
		margin-bottom:5px;
	}

	.cajasContenido{
		width: 180px;
		height: 140px;
		margin-right: 10px;
		margin-top: 10px;
		margin-left: 10px;
		margin-bottom: 10px;
		text-align: center;


	}

	.carrito{
		width: 170px;
		height: 40px;
		margin-right: 5px;
		margin-top: 5px;
		margin-left: 5px;
		margin-bottom:5px;
		border:  white;

	}
	.cacharro{
		float: right;


	}
	.bote{
		float: left;

	}

	.subclaseDeContenido{
		
		
		border:  solid white;	
		margin-top: 15px;
		margin-bottom: 15px;
		margin-left: 15px;
		margin-right: 15px;

		
	}
	.piedePagina{

		clear: left;
		width: 1000px;
		height: 150px;
		
	}
	
	

		



	</style>
	
</head>
<body>
    <div class="iFrame" >
    	<iFrame  width= "100%" src="http://www.livingcode.camp/"></iFrame>
    </div>


    <div class="encabezado">

    
          <div class="cajasDeEncabezado">Logo</div>
          <div class="cajasDeEncabezado">Menu</div>
          <div class="cajasDeEncabezado">Ventana</div>
          <div class="cajasDeEncabezado"> Marcas</div>
          <div class="cajasDeEncabezado">Tendero</div>
          <div class="cajasDeEncabezado">Tienda</div>
          

    </div>


    <div class="menuLateralIzquierdo">
        
          <div class="cajaMenuLateralIzquierdo">Home</div>
          <div class="cajaMenuLateralIzquierdo">Quienes somos</div>
          <div class="cajaMenuLateralIzquierdo">contact</div>
          <div class="cajaMenuLateralIzquierdo">Como funciona</div>
          <div class="cajaMenuLateralIzquierdo">clima</div>
          <div class="cajaMenuLateralIzquierdo">william</div>
          <div class="cajaMenuLateralIzquierdo">Instrumentos</div>
          <div class="cajaMenuLateralIzquierdo">clik aqui</div> 
    </div>

    <div class="contenido">
    <div  class="subclaseDeContenido">  
    	  <?php
   					$link=mysqli_connect("localhost", "root","","base de datos productos");

					
					$query="select ID,Nombre,Imagen,Precio from productos limit 6";
					$result= mysqli_query($link,$query);
					
					while ($william=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
						
						/*echo '<tr><td>'.$william["Nombre"].'</td><td>'.$william["Imagen"].'</td><td>'.$william["Precio"].'</td></tr>';*/

						?>
					     
                         <div id="<?php echo $william["ID"] ?>" class="cajasContenido"  onmouseover="miFuncion1('<?php echo $william["ID"] ?>')"  onmouseout="miFuncion2('<?php echo $william["ID"] ?>');" onclick="miFuncion3('<?php echo $william["ID"] ?>')"  ondblclick="miFuncion4('<?php echo $william["ID"] ?>')"      onmouseout="miFuncion6('<?php echo $william["ID"] ?>')" ><img id="img0" src="imagenesTaller/<?php echo  $william["Imagen"]?>" width="80px" height="70px" ><br>
                         <?php echo $william["Nombre"] ?>
                         <br><div class="carrito" ><img class="cacharro" src="imagenesTaller/carrito.png"><img class="bote"  src="imagenesTaller/basura.png" width="50px" height="35px" ></div></div>




                         <?php

						}
						?>
						 </div>

    	      </div>
   	  
     </div>
    <div class="piedePagina">
		    piedePagina
		    <table>
		    	<tr>

		    	
		    		<td>Productos</td>
		    		<td id=tdproductos>0</td>
		    	</tr>
		    </table>
    </div>


   

    <script>
         var productos=0;
         var color = 'blue';
    	function miFuncion1(paraDiv){
    		document.getElementById(paraDiv).style.border='3px solid ' + color;
    		
    	}

    	function miFuncion2(paraDiv){
    		document.getElementById(paraDiv).style.border='1px solid ' + color;

    	}

    	function miFuncion3(paraDiv){
    		document.getElementById(paraDiv).style.border='4px solid green';
    		color='green';

    		productos=productos+1;
    		document.getElementById('tdproductos').innerHTML=productos;


    	}
    	
   		function miFuncion4(paraDiv){
   		document.getElementById(paraDiv).style.border='1px solid blue'; 
   		color='blue';  		
   	    }

   	    

   	    function cambiaImagen(elDiv, imagen ){
    		document.getElementById(elDiv).src='Img/' +imagen;

    	}

    	function returnaImagen(elDiv, imagen ){
    		document.getElementById(elDiv).src='imagenesTaller/' +imagen;

    	}

    	



    	

    	
    </script>
    
</body>
</html>

