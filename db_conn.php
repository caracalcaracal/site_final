<?php

$sname= "localhost";
$unmae= "root";
$password = "20132015.Bc";

$db_name = "db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Bağlantı hatası!";
}