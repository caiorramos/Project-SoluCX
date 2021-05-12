<?php

$host = "104.197.107.179";
$user = "server";
$pass = "Server#2021";
$db = "website";

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
