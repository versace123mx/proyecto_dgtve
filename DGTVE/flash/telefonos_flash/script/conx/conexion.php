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
	$traduce = array('�' => '&aacute;', '�' => '&eacute;', '�' => '&iacute;', '�' => '&oacute;', '�' => '&uacute;', 
					 '�' => '&ntilde;', '�' => '&Ntilde;', '�' => '&auml;', '�' => '&ouml;', '�' => '&uuml;');
					 
	$sale = strtr( $entrada, $traduce );
	return $sale;
}
?>
