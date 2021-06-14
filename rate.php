<?php

$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $textarea = mysqli_real_escape_string($con, $_POST['textarea']);
    
    $insertquery="insert into review(name,textarea) values('$name','$textarea')";
             $iquery=mysqli_query($con, $insertquery);
             if($iquery){
                 ?> <script>
                     alert("Thank you for the feedback!");
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

