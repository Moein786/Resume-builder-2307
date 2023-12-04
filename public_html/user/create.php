<?php
session_start();
require '../env.php';

$email = $_POST['username'];
$password = $_POST['password'];
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
$sql = "SELECT * FROM user WHERE email='$email' AND password=sha('$password')";
$result = mysqli_query($con, $sql);
if ($result->num_rows > 0) {

  $_SESSION['email'] = $email;

  header("location: ../dashboard.php");
} else {
  header("location:login.php");
 
}
