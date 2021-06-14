<?php

//connection established
$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));

//store form values into variable
$first_name = $_POST['first_name'];
$last_name =  $_POST['last_name'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$number = $_POST['number'];

//Database connection
$user_registration_query = "insert into registration(first_name,last_name,password1,password2,email,number)
values('$first_name','$last_name','$password1','$password2','$email','$number')";

$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

echo "User successfully inserted";

?>