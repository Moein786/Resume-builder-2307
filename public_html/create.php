<?php
  require'env.php';

  $email=$_POST['username'];
  $password=$_POST['password'];
  $con=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
  $sql="INSERT INTO login(email,password)VALUES('$email','$password')";

  mysqli_query($con,$sql);
  $can->close();
  header("localation:login.php");