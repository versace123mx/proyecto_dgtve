<?php
session_start();
if ( isset ($_SESSION["usuario"] ) ){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>::.Add Register.::</title>
	<script language="javascript" type="text/javascript" src="../js/funciones.js"></script>
	<style type="text/css">
		.encabezado{ background-color:#F5F6CE; color:#000; font-weight:bold }
		.registros{ background-color:#F5F6CE }
		.development{ background-color:#F5F6CE; color:#000; font-weight:Arial; font-size: 13px; }
	</style>
</head>
<body onload="limpiar()">
<form action="add.php" method="post" name="form">
<table align="center" width="400">
	<tr>
		<td valign="top" align="center" width="400" colspan="2">
			<a href="../list/list.php" title="Back"><img src="../../img/Back.png" width="40" height="40" /></a>&nbsp;&nbsp;&nbsp;
			<?php echo "<b>Hola " . $_SESSION["usuario"] . " Bienvenid@</b>"; ?>
			&nbsp;&nbsp;&nbsp;<a href="../exit/exit.php" title="Exit"><img src="../../img/logout.png" width="20" height="20" /></a>
		</td>	
	</tr>
	<tr>
		<td valign="top" align="center" width="400" colspan="2">
		<h3 class="encabezado" >Add Register</h3>
		</td>
				
		<tr>
			<td align="right" valign="top" width="200">
				Nombre
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="nom" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Appaterno
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="appaterno" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Apmaterno
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="apmaterno" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Area
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="area" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Modelo
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="modelo" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Inventario
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="inventario" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Serie
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="serie" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				IPTel
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="iptel" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				MAC
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="mac" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Ext
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="ext" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Core
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="core" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Clan
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="clan" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Vlan
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="vlan" />
			</td>
		</tr>
		
		<tr>
			<td align="right" valign="top" width="200">
				Compañia
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="compania" />
			</td>
		</tr>
		<tr>
			<td align="right" valign="top" width="200">
				Foto
			</td>
			<td valign="top" align="left" width="200">
				<input type="text" name="foto" />
			</td>
		</tr>
		
		<tr>
			<td valign="top" align="center" colspan="2" width="400">
				<input type="button" value="Volver" title="Volver" onClick="history.back();" />
				&nbsp;&nbsp;||&nbsp;&nbsp;
				<input type="button" value="Ingresar Registro" title="Ingresar Registro" onClick="validar()">
			</td>
		</tr>
		<tr>
		<td valign="top" align="center" width="400" colspan="3">
			<p class="development">GNU / Developed by Gustavo J. Marchena B.</p>
		</td>
	</tr>
	</tr>
</table>
</form>
</body>
</html>
<?php
}else{
	echo "<script type='text/javascript'>
	alert('Usted no tiene permiso para ver el contenido, si es un usuario registrado, por favor autentifiquese');
	window.location='../index.php';
	</script>";
}
?>