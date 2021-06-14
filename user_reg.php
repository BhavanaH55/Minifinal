<?php
$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));
if(isset($_POST['submit'])){
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $password1 = mysqli_real_escape_string($con, $_POST['password1']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['number']);
    
    $pass = password_hash($password1, PASSWORD_BCRYPT);
     $cpass = password_hash($password2, PASSWORD_BCRYPT);
     
     $emailquery = "select * from register where email='$email'";
     $query = mysqli_query($con,$emailquery);
     $emailcount=mysqli_num_rows($query);
     if($emailcount>0){
        ?> <script>
                     alert("Email already exists");
                     location.replace("register.html");
                     </script>
                     <?php
     }else{
         if($password1 === $password2){
             $insertquery="insert into register(first_name,last_name,password1,password2,email,number) values('$first_name','$last_name','$pass','$cpass','$email','$phone')";
             $iquery=mysqli_query($con, $insertquery);
             if($iquery){
                 ?> <script>
                     alert("Registration successfull");
                     location.replace("login.html");
                     </script>
                     <?php
             }else{
                 ?><script>
                     alert("Registration unsuccessfull");
                     location.replace("register.html");
                     </script>
                     <?php
             }
             
         }else{
             ?><script>
                     alert("Passwords are not matching");
                     location.replace("register.html");
                     </script>
                     <?php
         }
     }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>