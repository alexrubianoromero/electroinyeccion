<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es"  class"no-js">
<head>
	<meta charset="UTF-8">
	<title>Menu Ayudas Financeras </title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<? include("../empresa.php"); ?>
<Div id="contenidos">
		<header>
			<h1><? echo $empresa; ?></h1>
			<h2><? echo $slogan; ?><h2>
		</header>
		<nav>
		<ul class="menu">
		<li><a href="cxc/index.php" class="menu">CUENTAS X COBRAR </a></li>
	    <li><a href="resumen_cuentas_por_pagar.php" class="menu">CUENTAS POR PAGAR</a></li>
	    <li><a href="../menu_principal.php" class="menu">MENU PRINCIPAL</a></li>
		 
		

		</ul>
	</nav>
</Div>
	
</body>
</html>
<script src="../js/modernizr.js"></script>   
<script src="../js/prefixfree.min.js"></script>
<script src="../js/jquery-2.1.1.js"></script>   
