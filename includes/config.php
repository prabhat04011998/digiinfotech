<?php

// getting req. variables for connection string from env vars
$localhost = 'localhost';
$DBNAME = 'ydp';
$USERNAME = 'phpmyadmin';
$PASSWORD = 'prabhat';
$DBPORT='3306';

$db=mysqli_connect($localhost,$USERNAME,$PASSWORD,$DBNAME);
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
