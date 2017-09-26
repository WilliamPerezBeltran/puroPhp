<!DOCTYPE html>
<html>
<head>
<style type="text/css">
div{

	border:1px solid blue;
	width: 200px;
	height: 200px;
	float: left;
	margin-right: 20px;
	margin-left: 20px;
	margin-bottom: 10px;

}

	
</style>
	<title></title>
</head>
<body>
    <?php for ($i = 1; $i <= 12; $i++) {?>

    	<div id="div<?php echo $i?>" onmouseover="funcion1('div<?php echo $i?>')"  ><img onclick="funcion2('imagen<?php echo $i?>',<?php echo $i?>)" id="imagen<?php echo $i?>" src="imagenesTaller/imagen<?php echo $i.'.png'?>" alt="Smiley face" height="200" width="200"></div>

	<?php }?>
    
	



<script type="text/javascript">
	
	function funcion1(paradiv){
            document.getElementById(paradiv).style.border= "10px solid green";

	}
	function funcion2(imagen,i){
            document.getElementById(imagen).src = 'comics/'+i+'.jpg';

	}


</script>
</body>
</html>