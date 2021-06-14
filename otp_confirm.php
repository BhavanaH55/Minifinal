<?php
include "mail_function.php";
 date_default_timezone_set("Asia/Kolkata");
 $sucess="";
 $error_message="";
 $con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));
if(!empty($_POST["submit_otp"])){
         $result=mysqli_query($con,"SELECT * FROM otp_expiry WHERE otp='".$_POST["otp"]."'AND is_expired!=1 AND NOW() <= DATE_ADD(create_at,INTERVAL 15 MINUTE");
         $count=mysqli_num_rows($result);
         if(!empty($count)){
             $result=mysqli_query($con,"UPDATE otp_expiry SET is_expired=1 WHERE otp='".$_POST["otp"]."'");
             $success=2;
             header('location:confirmation_page.html');
         }else{
             $success=1;
             $error_message="INVALID OTP!";
         }
     }

?>