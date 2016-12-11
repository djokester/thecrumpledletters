<?php

$user_name = "u785315239_djoke";
$password = "Secretsam95#";
$database = "u785315239_tcl";
$server = "mysql.hostinger.in";

mysql_connect("$server","$user_name","$password");

mysql_select_db("$database");

if (isset($_POST['submit'])) {
$name = $_POST["name"];
$email = $_POST["email"];
$comments = $_POST["comments"];
}

?>

