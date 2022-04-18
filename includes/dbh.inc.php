<?php

$servername = "localhost:3306";
$dBUsername = "mahs_welovecats";
$dBPassword = "mustangs";
$dBName = "mahs_welovecats";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
} 