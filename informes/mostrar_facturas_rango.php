<?php
session_start();
include('../valotablapc.php');  
include('../funciones.php'); 
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
		
$sql_facturas = "select numero_factura,fecha,placa,total_factura,formapagotexto from $tabla11 
where anulado = '0'  and month(fecha)= '".$_REQUEST['id_mes']."'  and year(fecha) = '".$_REQUEST['ano']."'   ";

if($_REQUEST['todas']==1)
{

	//echo 'desea listar todas las facturas ';
	$sql_facturas = "select numero_factura,fecha,placa,total_factura,formapagotexto from $tabla11 
where anulado = '0'  ";
}


//echo '<br>'.$sql_facturas;
$consulta_facturas= mysql_query($sql_facturas,$conexion);

 echo'<h3><a  href= "mostrar_facturas_rango_excell.php?id_mes='.$_REQUEST['id_mes'].'&ano='.$_REQUEST['ano'].'&todas='.$_REQUEST['todas'].' " >ENVIAR A EXCEL </a></h3>';

echo '<div align="center">';
echo '<table border = "1" width="80%" >';
echo '<tr align="center">';
echo '<td>No Factura</td>';
echo '<td>Fecha</td>';
echo '<td>Placa</td>';
echo '<td >total</td>';
echo '<td>Forma Pago</td>';
echo '</tr>';
$gran_total = 0;
while($facturas = mysql_fetch_assoc($consulta_facturas))
	{
		echo '<tr align="right">';
		echo '<td align="right">'.$facturas['numero_factura'].'</td>';
		echo '<td>'.$facturas['fecha'].'</td>';
		echo '<td>'.$facturas['placa'].'</td>';
		echo '<td align="right">'.$facturas['total_factura'].'</td>';
		echo '<td>'.$facturas['formapagotexto'].'</td>';
		echo '</tr>';
		$gran_total = $gran_total + $facturas['total_factura'];
		
	}
echo '<tr>';
echo '<td>Total</td><td></td><td></td><td align="right">'.$gran_total.'</td><td></td>';
echo '</tr>';
echo '<table>';
echo '</div>';
?>