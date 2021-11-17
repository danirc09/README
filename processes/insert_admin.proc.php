<?php
require_once '../services/config.php';
require_once '../services/connection.php';

$name=$_POST['name'];
$apellido=$_POST['apellido'];
$password=$_POST['password'];
$email=$_POST['email'];

$result = mysqli_query($conn,"INSERT INTO tbl_empleados VALUES (NULL, '{$name}', '{$apellido}', MD5('{$password}'), '{$email}', 'Admin')");

$nuevaURL = "../view/index.php";
header('Location: '.$nuevaURL);