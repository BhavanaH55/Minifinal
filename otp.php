<?php

 include "mail_function.php";
 date_default_timezone_set("Asia/Kolkata");
 $sucess="";
 $error_message="";
 $con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));
 if(!empty($_POST["submit_email"])){
     $result=mysqli_query($con,"SELECT * FROM register WHERE email='".$_POST["email"]."'");
     $count=mysqli_num_rows($result);
     if($count>0){
         $otp=rand(100000,999999);
         $mail_status=sendOTP($_POST["email"],$otp);
         if($mail_status == 1){
             $result=mysqli_query($con,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('". $otp . "', 0, '".date("Y-m-d H:i:s")."')");
             $current_id=mysqli_insert_id($con);
             if(!empty($current_id)){
                 $sucess=1;
                
             }
              
         }
         header('location: OTP.html');
     }else{
         $error_message="Email not exists";
     }
     
     
 }

