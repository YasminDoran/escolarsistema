<?php
$db_name = "poo";
$db_server = "localhost";
$db_user = "root";
$db_pass = "";

$db_connection = mysql_connect($db_server,$db_user,$db_pass) or die ("Error de Conexión");
mysql_select_db($db_name,$db_connection) or die ("La Base de Datos no existe");
mysql_query("SET NAMES 'UTF8'");

?>