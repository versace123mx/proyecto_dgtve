<?php
require_once("../conx/conexion.php");
$sql = "insert into usuarios values(null,'".$_POST["login"]."','".$_POST["pass"]."')";
$res = mysql_query($sql,$con);
echo "<script type= ''>
	alert('User added successfully');
	window.location='../list/list.php';
</script>";
?>