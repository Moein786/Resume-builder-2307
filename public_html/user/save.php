<?php
require '../env.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
$sql = "INSERT INTO user(name, phone, email, password) VALUES('$name', '$phone', '$email',sha('$password'))";
mysqli_query($con, $sql);
header("location: login.php");