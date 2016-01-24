<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title>::.DGTVE - Loggin.::</title>
		<script language="javascipt" type="text/javascript" src="js/validar_user.js" ></script>
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
		<form action="loggin/logueo.php" method="post" name="form">
			<table align="center" border="0" width="320" height="300">
				<tr>
					<td align="center" colspan="3">
						<h2>Ingrese sus Datos</h2>
						<br />
					</td>
				</tr>
				<tr>
					<td width="120" rowspan="3" align="center">
						<img src="../img/lock1.png">
					</td>
				</tr>
				<tr>
					<td valign="top" align="center">
						Login:
					</td>	
					<td valign="top" align="center">
						<input type="text" name="login" size="20">
					</td>
				</tr>	
				<tr>
					<td  valign="top" align="center">
						Password:
					</td>
					<td valign="top" align="center">
						<input type="password" name="pass">
					</td>
				</tr>	
				<tr>
					<td align="center" colspan="3">
							<input type="submit" value="Ingresar" title="Ingresar" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="center" width="" colspan="3">
						<br />
						<p class="development">GNU / Developed by Gustavo J. Marchena B.</p>
					</td>
				</tr>
				
				
		
			</table>
		</form>
</div>		
</body>
</html>