<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="login";

$mysqli = new mysqli($servername, $username, $password,$dbname);
if($mysqli -> connect_error){
    die("Connection failed: " . $mysqli -> connect_error);
}
echo "Successfully connected to the database";
?>