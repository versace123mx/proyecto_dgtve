<?php

$con = mysql_connect("localhost","Alejandra","pumas123"); //conexion a El servidor de Base de Datos
$bd = "dgtve"; //Nombre de la base de datos a acessar

//****************************************************************************************************
function saludo(){
	echo "hola mundo";
}
//****************************************************************************************************

//Convertir los acentos a  formato HTML
function chao_tilde($entra){
	$traduce = array('�' => '&aacute;', '�' => '&eacute;', '�' => '&iacute;', '�' => '&oacute;', '�' => '&uacute;', 
					 '�' => '&ntilde;', '�' => '&Ntilde;', '�' => '&auml;', '�' => '&ouml;', '�' => '&uuml;');
					 
	$sale = strtr( $entrada, $traduce );
	return $sale;
}
?>
