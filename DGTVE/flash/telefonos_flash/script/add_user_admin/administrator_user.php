<?php
session_start();
if ( isset ($_SESSION["usuario"] ) ){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title>::.DGTVE - Add User Administrator.::</title>
		<script language="javascipt" type="text/javascript" src="../js/validar_user.js" ></script>
		<style type="text/css">
			.development{ background-color:#F5F6CE; color:#000; font-weight:Arial; font-size: 13px; }
			.ajuste{
					margin-top:160px;
					margin-right:auto;
					margin-bottom:0;
					margin-left:auto;
			}
		</style>
</head>
<body style="background-color:#F5F6CE" onLoad="limpiar()">
<div class="ajuste">
		<form action="add_user.php" method="post" name="form" />
			<table align="center" border="0" width="255" height="300">
				<tr>
					<td align="center">
						<a href="../list/list.php" title="Back"><img src="../../img/Back.png" width="30" height="30" /></a>
					</td>
					<td align="center">
						<img src="../../img/add_user.png" width="40" height="40" />
					</td>
					<td align="center">
						<a href="../exit/exit.php" title="Exit"><img src="../../img/logout.png" width="20" height="20" /></a>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="3">
						<h2>Add Data User Admin</h2><!--&nbsp;<a href="../exit/exit.php" title="Exit"><img src="../../img/lgout.png" width="20" height="20"></a>-->
						<br />
					</td>
				</tr>
				<tr>
					<td valign="top" align="center">
						Usser
					</td>	
					<td valign="top" align="center" colspan="2">
						<input type="text" name="login">
					</td>
				<tr>
					<td  valign="top" align="center">
						Password
					</td>
					<td valign="top" align="center" colspan="2">
						<input type="password" name="pass">
					</td>
				</tr>
				<tr>
					<td  valign="top" align="center">
						Confirm Password
					</td>
					<td valign="top" align="center" colspan="2">
						<input type="password" name="pass2">
					</td>
				</tr>
				<tr>
					<td align="center" colspan="3">
							<input type="button" value="Ingresar" title="Ingresar" onClick="validar()" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="center" width="" colspan="3">
						<br />
						<p class="development">GNU / Developed by Gustavo J. Marchena B.</p>
					</td>
				</tr>
				</tr>
				
		
			</table>
		</form>
</div>		
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