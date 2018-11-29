<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "pl_mobile";

$conn = new mysqli ($host,$username,$password,$db);

if($conn->connect_error) {

	die('Eroare la conectare:'.$conn->connect_error);
}

?>