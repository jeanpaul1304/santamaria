<?php
//Configuracion de la conexion a base de datos
$bd_host = "127.0.0.1";
$bd_usuario = "root";
$bd_password = "";
$bd_base = "comsant_bd_santa_maria";
$con  = mysqli_connect($bd_host, $bd_usuario, $bd_password,$bd_base);
mysqli_set_charset($con,'utf8');
//mysql_select_db($bd_base, $con);



//Configuracion de la conexion a base de datos
/*$bd_host = "127.0.0.1";
$bd_usuario = "comsant_louis";
$bd_password = "694ndroid69";
$bd_base = "comsant_bd_santa_maria";
$con  = mysqli_connect($bd_host, $bd_usuario, $bd_password,$bd_base);
mysqli_set_charset($con,'utf8');*/
//mysql_select_db($bd_base, $con);

?>	