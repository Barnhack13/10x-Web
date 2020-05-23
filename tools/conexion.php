<?php
$host = "localhost";
$userdb = "root";
$passworddb = "1111";
$namedb = "10x";

$conexion = mysqli_connect($host,$userdb,$passworddb) or die ("Cannot connect to the database in file conexion");
$db = mysqli_select_db($conexion,$namedb)or die ("Cannot connect to the database in file conexion");

?>