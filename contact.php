<?php

$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));
if(isset($_POST['submit'])){
    $first_name = mysqli_real_escape_string($con, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
   
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $insertquery="insert into contact(first_name,last_name,email,subject,message) values('$first_name','$last_name','$email','$submit','$message')";
             $iquery=mysqli_query($con, $insertquery);
             if($iquery){
                 ?> <script>
                     alert("Form submitted!Thank you for getting in touch with us");
                     location.replace("home.html");
                     </script>
                     <?php
             }else{
                 ?><script>
                     alert("Form not submitted!!Please fill again");
                     location.replace("contact.html");
                     </script>
                     <?php
             }
    
}
?>