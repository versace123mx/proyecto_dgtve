<?php
	/*La session_start deve de ir primero que cualquier cosa, para poder validar*/
	session_start();
	require_once('../conx/conexion.php');
	
	//$sql ="select user, pass from usuarios where user = ". $_POST['login']."  and pass = ".$_POST['pass'].";
	$sql = "select user from usuarios where user='".$_POST['login']."'";
	$res=mysql_query($sql,$con) or die("Error en $sql: " . mysql_error());

/*Aqui nos muestra si en n fila existe ese registro devuelve true de lo contrario false*/
//$num_filas = mysql_num_rows($res);
//echo "$num_filas Filas\n";	


	if (mysql_num_rows($res) == 0) {
		echo "<script type='text/JavaScript'>
			alert('El usuario " . $_POST["login"] . " no existe en la base de datos');
			window.location='../index.php';
		</script>
		";
	}else{
		/*Ahora comprobamos si el usuario y el login es correcto*/
		$sql ="select * from usuarios where user = '" . $_POST['login'] . "'  and pass = '" . $_POST['pass'] ."' ";
		$res=mysql_query($sql,$con) or die("Error en $sql: " . mysql_error());

		if (mysql_num_rows($res) == 0) {
		echo "<script type='text/JavaScript'>
			alert('El usuario " . $_POST["login"] . " y el password no coinciden.');
			window.location='../index.php';
		</script>
		";
	}else{
			/* Ahora le damos acceso a nuestro contenido restrinjido*/

			$_SESSION["usuario"] = $_POST["login"];
			header("Location: ../list/list.php");
		}
	}
?>