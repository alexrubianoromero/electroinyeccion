<?php
$tabla1 = "datos";
//$tabla2 = "cxp";
$tabla3 ="cliente0";
$tabla4 ="carros";
//$tabla5 ="parametros";
$tabla10 = "empresa"; 
$tabla11 = "facturas";
$tabla12 = "productos";
$tabla13 = "item_factura";
$tabla14 = "ordenes";
$tabla15 = "item_orden";
$tabla16 = "usuarios";
$tabla17 = "iva";
$tabla18 = "item_temporal";
$tabla19 = "movimientos_inventario";
$tabla20 = "retefuente";
$tabla21 = "tecnicos";
$tabla22 = "salin_salfin_caja";
$tabla23 = "recibos_de_caja";
$tabla24 = "nombres_items_carros";
$tabla25 = "relacion_orden_inventario";
/*valores para pc*/


// $servidor = "127.0.0.1";
// $usuario = "root";
// $clave  = "peluche2016";
// $nombrebase = "base_electroinyeccion";


$servidor = "localhost";
$usuario = "ctwtvsxj_admin";
$clave  = "ElMejorProgramador***";
$nombrebase = "ctwtvsxj_base_electroinyeccion";




$conexion =mysql_connect($servidor,$usuario,$clave);
$la_base =mysql_select_db($nombrebase,$conexion);




?>
