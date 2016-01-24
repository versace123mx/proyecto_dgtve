<?php
	/*Inicioamos y eliminamos la session*/
	session_start();
	//session_unregister("usuario");
	unset($_SESSION['usuario']);
	//session_destroy();

	/* Mandamos al usuario al loguin*/
	header("Location: ../index.php");
?>