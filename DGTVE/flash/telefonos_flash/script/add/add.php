<?php
//print_r($_POST);
//'".$_POST["foto"]."'
require_once("../conx/conexion.php");
$sql="insert into general_tel 
values 
(null,
'".$_POST["nom"]."',
'".$_POST["appaterno"]."',
'".$_POST["apmaterno"]."',
'".$_POST["area"]."',
'".$_POST["modelo"]."',
'".$_POST["inventario"]."',
'".$_POST["serie"]."',
'".$_POST["iptel"]."',
'".$_POST["mac"]."',
'".$_POST["ext"]."',
'".$_POST["core"]."',
'".$_POST["clan"]."',
'".$_POST["vlan"]."',
'".$_POST["compania"]."',
null
)";
$res = mysql_query($sql,$con);
echo "<script type= ''>
	alert('The record was entered correctly');
	window.location='../list/list.php';
</script>";
?>