<?php
require_once("script/conx/conexion.php");
//$conexion = mysql_connect('localhost','Alejandra','pumas123') or die("Problemas en la conexion");
//mysql_select_db('dgtve',$conexion) or die("Problemas en la conexion");
$registros = mysql_query("select * from general_tel");
$contador=0;
while($row=mysql_fetch_array($registros)){
	$nombre = $row['nombres'];
	$apaterno = $row['appaterno'];
	$apmaterno = $row['apmaterno'];
	$area = $row['area'];
	$modelo = $row['modelo'];
	$compañia = $row['compañia'];
	$id = $row['id_empleado'];
	$iptel = $row['iptel'];
	$core = $row['core'];
	$mac = $row['mac'];
	$inventario = $row['inventario'];
	$ext = $row['ext'];
	$serie = $row['serie'];
	$vlan = $row['vlan'];
	$clan = $row['clan'];
		
	echo "&nombre$contador=" . $nombre . 
		 "&apaterno$contador=" . $apaterno . 
		 "&apmaterno$contador=" . $apmaterno . 
		 "&area$contador=" . $area .
		 "&modelo$contador=" . $modelo .
		 "&compania$contador=" . $compañia .
	     "&id$contador=" . $id .
		 "&ip$contador=" . $iptel .
		 "&core$contador=" . $core .
	     "&mac$contador=" . $mac .
		 "&inventario$contador=" . $inventario .
		 "&ext$contador=" . $ext .
	     "&serie$contador=" . $serie . 
		 "&vlan$contador=" . $vlan .
		 "&clan$contador=" . $clan;

		 $contador++;
}
//ir a x direccion
//on (realese){
	//getURL("google.com");
//}

//pantalla completa
//fscommand("fullscreen",true);

//quitar opcciones boton derecho
//fscommand("showmenu",false);
?>