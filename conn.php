<?php


$host = "localhost";
$user = "root";
$password = "";
$db = "ikn";

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    die("ERROR : ". mysqli_connect_error());
}

?>