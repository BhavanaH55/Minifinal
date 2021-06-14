<?php
$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));
if(isset($_POST['submit'])){
  
     $email = mysqli_real_escape_string($con, $_POST['email']);
     
    
    $emailquery="select * from register where email='$email'";
    $query = mysqli_query($con,$emailquery);
     $emailcount=mysqli_num_rows($query);
     if($emailcount){
         $password1 = mysqli_real_escape_string($con, $_POST['password1']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
        $pass = password_hash($password1, PASSWORD_BCRYPT);
     $cpass = password_hash($password2, PASSWORD_BCRYPT);
      if($password1 === $password2){
          $updatequery = "update register set password1='$pass' where email='$email'";
          $uquery = mysqli_query($con,$updatequery);
          if($uquery){
              ?><script>
                alert("Password is successfully updated");
                location.replace("login.html");
               </script>
                <?php
          }else{
              ?><script>
                alert("Password is not updated");
                location.replace("rp.html");
               </script>
                <?php
              
          }
      }else{
          ?><script>
                alert("Passwords are not matching");
                location.replace("rp.html");
               </script>
                <?php
      }
     }else{
         ?><script>
                alert("Email doesnt exist");
                location.replace("rp.html");
               </script>
                <?php
     }
}


?>