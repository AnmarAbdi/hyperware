<?php
$servername = "localhost:3306";
$dBUsername = "mahs_eggplantemoji"; 
$dBPassword = "mustangs";
$dBName = "mahs_eggplantemoji";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}