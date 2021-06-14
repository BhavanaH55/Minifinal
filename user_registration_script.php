<?php
//connection established
$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));

//Store form values into variables

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$phone = $_POST['number'];

//Store insert query in a variable. Use double quotes to let PHP treat variables as variables only.
$user_registration_query = "insert into registration(first_name, last_name, password1, password2, email, number) values ('$first_name', '$last_name', '$password1', '$password2', '$email', '$phone')";

//Execute the query
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

//If this echo is executed, this means query successfully executed. Otherwise, die function with mysqli_query function would have stopped the execution of the code.
echo "User successfully inserted";
?>