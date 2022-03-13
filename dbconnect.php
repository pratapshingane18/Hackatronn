<?php

$servername = "localhost";
$username = "root";
$password= "";
$database = "patient";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry Cannot Connect".mysqli_connect_error());
}
?>
