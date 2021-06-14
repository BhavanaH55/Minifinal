<?php
$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password1'];
    
    $email_search = " select * from register where email='$email'";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);
    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password1'];
        $pass_decode = password_verify($password,$db_pass);
        if($pass_decode){
            ?> <script>
                alert("Login successfull!");
                location.replace("sample.html");
            </script>
            <?php
             
        }else{
           ?> <script>
                alert("Invalid password!");
                location.replace("login.html");
            </script>
            <?php
           
        }
        
    }else{
        ?> <script>
                alert("Login unsuccessfull!Invalid email!");
                location.replace("login.html");
            </script>
            <?php
            
    }
}
?>
