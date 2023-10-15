<?php
$host = 'localhost:3308';
$user = 'root';
$password = '#Jandru2007';
$database = 'cosmetics';

$conex = mysqli_connect($host, $user, $password, $database);

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
} 
?>