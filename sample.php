<?php
$con = mysqli_connect("localhost","root","","signup") or die(mysqli_error($con));
if(isset($_POST['submit'])){
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $trip_date = mysqli_real_escape_string($con, $_POST['trip_date']);
     $place = mysqli_real_escape_string($con, $_POST['place']);
      $person = mysqli_real_escape_string($con, $_POST['person']);
      $price = mysqli_real_escape_string($con, $_POST['price']);
    
    $insertquery="insert into sample(first_name,last_name,age,trip_date,place,person,price) values('$first_name','$last_name','$age','$trip_date','$place','$person','$price')";
             $iquery=mysqli_query($con, $insertquery);
             if($iquery){
                 ?> <script>
                     
                     location.replace("payment.html");
                     </script>
                     <?php
             }else{
                 ?><script>
                     location.replace("sample.html");
                     </script>
                     <?php
             }
         
     
?>
