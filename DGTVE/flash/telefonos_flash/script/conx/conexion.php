<?php
$con = mysql_connect("localhost","tavoo","pumas123");
$db = "dgtve";
mysql_select_db($db,$con);


//****************************************************************************************************
function saludo(){
	echo "hola mundo";
}
//****************************************************************************************************

//Convertir los acentos a  formato HTML
function chao_tilde($entra){
	$traduce = array('á' => '&aacute;', 'é' => '&eacute;', 'í' => '&iacute;', 'ó' => '&oacute;', 'ú' => '&uacute;', 
					 'ñ' => '&ntilde;', 'Ñ' => '&Ntilde;', 'ä' => '&auml;', 'ö' => '&ouml;', 'ü' => '&uuml;');
					 
	$sale = strtr( $entrada, $traduce );
	return $sale;
}
?>
