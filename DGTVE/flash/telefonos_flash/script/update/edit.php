<?php
require_once("../conx/conexion.php");
$sql = "update general_tel 
set
nombres='".$_POST["nom"]."',
appaterno='".$_POST["appaterno"]."',
apmaterno='".$_POST["apmaterno"]."',
area='".$_POST["area"]."',
modelo='".$_POST["modelo"]."',
inventario='".$_POST["inventario"]."',
serie='".$_POST["serie"]."',
iptel='".$_POST["iptel"]."',
mac='".$_POST["mac"]."',
ext='".$_POST["ext"]."',
core='".$_POST["core"]."',
clan='".$_POST["clan"]."',
vlan='".$_POST["vlan"]."',
compañia='".$_POST["compania"]."',
foto='".$_POST["foto"]."'
where 
id_empleado=".$_POST["id_empleado"]."";
//echo $sql;

$res = mysql_query($sql,$con);
echo "<script type=''>
	alert('The record was changed successfully');
	window.location='../list/list.php';
</script>";
?>