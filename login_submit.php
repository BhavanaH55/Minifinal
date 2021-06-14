<?php

$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password1'];
$password = mysqli_real_escape_string($con, $password);

// Query checks if the email and password are present in the database.
$query = "SELECT email,password1 FROM registration WHERE email='" . $email . "' AND password1='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 1) {
    header('location: sample.html');
  
} else {  
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.html?error=' . $error);
  
}

