<?php
require_once("../conx/conexion.php");
$sql = "delete from general_tel where id_empleado=".$_GET["id_empleado"]."";
$res = mysql_query($sql,$con);
//echo $res;
echo "<script type=''>
	alert('The record was deleted successfully');
	window.location='../list/list.php';
</script>";
?>