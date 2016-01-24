<?php
session_start();
if ( isset ($_SESSION["usuario"] ) ){
require_once("../conx/conexion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>::.DGTVE - List Telephone.::</title>
<style type="text/css">
	.encabezado{ background-color:#F5F6CE; color:#000; font-weight:bold }
	.registros{ background-color:#F5F6CE }
	.development{ background-color:#F5F6CE; color:#000; font-weight:Arial; font-size: 13px; }
	
</style>
<script language="javascipt" type="text/javascript">
	function eliminar(id)
	{
		if(confirm("I really want to delete the record")){
			window.location="../delete/eliminar.php?id_empleado="+id;
		}
	}
</script>
</head>
<body>
	<table width="850" align="center" border="0">
		<tr>
			<td valign="top" align="center" width="800" colspan="9">
				<!-- secion-->
				<?php echo "<b>Hola " . $_SESSION["usuario"] . " Bienvenid@</b>"; ?>
				&nbsp;&nbsp;&nbsp;<a href="../exit/exit.php" title="Exit"><img src="../../img/logout.png" width="20" height="20" /></a>
			</td>
			<td valign="top" align="center" width="800" colspan="9">
				<a href="../add_user_admin/administrator_user.php" title="Add User Administrator"><img src="../../img/add_user.png" width="20" height="20" /></a>
			</td>
		</tr>
		<tr>
			<td valign="top" align="center" width="800" colspan="18">
				<h3>List the Telephone</h3>
			</td>
		</tr>
		<tr>
			<td valign="top" align="right" colspan="18">
				<form action="seach" method="posth">
					<label for="buscar">search</label>
					<input type="text" name="buscar" align="rigth" />
					<a href="#"title="Search" ><img src="../../img/search2.png" width="25" height="25" /></a>
				</form>
			</td>
			
		</tr>
		<tr class="encabezado">
			<td valign="top" align="center" width="30">
				ID
			</td>
			<td valign="top" align="center" width="100">
				Nombre(s)
			</td>
			<td valign="top" align="center" width="100">
				Appaterno
			</td>
			<td valign="top" align="center" width="100">
				Apmaterno
			</td>
			<td valign="top" align="center" width="100">
				Area
			</td>
			<td valign="top" align="center" width="40">
				Modelo
			</td>
			<td valign="top" align="center" width="40">
				Inventario
			</td>
			<td valign="top" align="center" width="30">
				Serie
			</td>
			<td valign="top" align="center" width="30">
				IPTel
			</td>
			<td valign="top" align="center" width="30">
				MAC
			</td>
			<td valign="top" align="center" width="30">
				Ext
			</td>
			<td valign="top" align="center" width="30">
				Core
			</td>
			<td valign="top" align="center" width="30">
				Clan
			</td>
			<td valign="top" align="center" width="30">
				Vlan
			</td>
			<td valign="top" align="center" width="30">
				Compañia
			</td>
			<td valign="top" align="center" width="50">
				Foto
			</td>
			<td valign="top" align="center" width="25">
				&nbsp;
			</td>
			<td valign="top" align="center" width="25">
				&nbsp;
			</td>
		</tr>
		
		<!-- Script php -->
		<?php 
			$sql = "select * from general_tel";
			$res=mysql_query($sql,$con);
			while( $reg=mysql_fetch_array($res)){
		?>
		<tr class="registros">
			<td valign="top" align="center" width="30">
				<?php echo $reg["id_empleado"]; ?>
			</td>
			<td valign="top" align="center" width="100">
				<?php echo $reg["nombres"]; ?>
			</td>
			<td valign="top" align="center" width="100">
				<?php echo $reg["appaterno"]; ?>
			</td>
			<td valign="top" align="center" width="100">
				<?php echo $reg["apmaterno"]; ?>
			</td>
			<td valign="top" align="center" width="100">
				<?php echo $reg["area"]; ?>
			</td>
			<td valign="top" align="center" width="40">
				<?php echo $reg["modelo"]; ?>
			</td>
			<td valign="top" align="center" width="40">
				<?php echo $reg["inventario"]; ?>
			</td>
			<td valign="top" align="center" width="30">
				<?php echo $reg["serie"]; ?>
			</td>
			<td valign="top" align="center" width="30">
				<?php echo $reg["iptel"]; ?>
			</td>
			<td valign="top" align="center" width="30">
				<?php echo $reg["mac"]; ?>
			</td>
			<td valign="top" align="center" width="30">
				<?php echo $reg["ext"]; ?>
			</td>
			<td valign="top" align="center" width="30">
				<?php echo $reg["core"]; ?>
			</td>
			<td valign="top" align="center" width="30">
				<?php echo $reg["clan"]; ?>
			</td>
			<td valign="top" align="center" width="30">
				<?php echo $reg["vlan"]; ?>
			</td>
			<td valign="top" align="center" width="30">
				<?php echo $reg["compañia"]; ?>
			</td>
			<td valign="top" align="center" width="50">
				<?php echo $reg["foto"]; ?>
			</td>
			
			<td valign="top" align="center" width="25">
				<a href="../update/modificar.php?id_empleado=<?php echo $reg["id_empleado"]?>" title="Update"><img src="../../img/file_edit.png" border="0" /></a>
			</td>
			<td valign="top" align="center" width="25">
				<a href="javascript:void(0)" onClick="eliminar('<?php echo $reg["id_empleado"]?>')" title="Delete" ><img src="../../img/file_remove.png" border="0" /></a>
			</td>
		</tr>
		<?php 
			}
		?>
		<tr>
			<td align="top" align="right" width="850" colspan="18">
				<a href="../add/agregar.php" title="Add Register"><img src="../../img/file_add.png" border="0" align="right"></a>
			</td>
		</tr>
		<tr>
			<td valign="top" align="center" width="850" colspan="18">
				<p class="development">GNU / Developed by Gustavo J. Marchena B.</p>
			</td>
		</tr>	
	</table>
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