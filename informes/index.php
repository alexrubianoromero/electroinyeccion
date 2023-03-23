<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es"  class"no-js">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body id="estilo_body">
<? include("../empresa.php"); ?>
<Div id="contenidos_informes">
   <header id="estilo_header">
			<h3><? echo $empresa; ?></h3>
		</header>
	<div id="arriba">
		MES
	<select name="id_mes" id="id_mes">
	<option value = "">...</option>
	<option value = "1">Enero </option>
	<option value = "2">Febrero </option>
	<option value = "3">Marzo </option>
	<option value = "4">Abril </option>
	<option value = "5">Mayo </option>
	<option value = "6">Junio </option>
	<option value = "7">Julio </option>
	<option value = "8">Agosto </option>
	<option value = "9">Septiembre </option>
	<option value = "10">Octubre </option>
	<option value = "11">Noviembre </option>
	<option value = "12">Diciembre </option>
	</select>
	<input name="ano" id="ano" type="text" placeholder="ANO" size ="4" class="fila_llenar" >
	    <input type="button"  name = "consultar" id = "consultar" value="consultar">
	   <br><br>
	   
	   <label for ="todas" >TODAS LAS FACTURAS </label><input name="todas" id="todas" type="checkbox" value="1"> <br><br>
	   
	</div>
	<div id="abajo">
	</div>
</Div>
	
</body>
</html>
<script src="../js/modernizr.js"></script>   
<script src="../js/prefixfree.min.js"></script>
<script src="../js/jquery-2.1.1.js"></script>   
<script type="text/javascript" >
$(document).ready(function(){

     $("#consultar").click(function(){
	 	var data ='id_mes=' + $("#id_mes").val();
	 	data += '&ano=' + $("#ano").val();
	 	data += '&todas=' + $("#todas:checked").val();
	 	$.post('mostrar_facturas_rango.php',data,function(a){
			$("#abajo").html(a);
	 	});//fin del post
	 });//finde click
});
</script>
