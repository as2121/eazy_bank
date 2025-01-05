<?php
// print_r($_POST);
extract($_POST);
$date=date('Y-m-d');
$conn=mysqli_connect("localhost:3307","root","","php_bank");
$sql="INSERT INTO user_register (username,mobile,email,password,date,ac_balance) VALUES('$username','$mobile','$email','$password','$date','0')";
$fire=mysqli_query($conn,$sql);
if($fire){
   ?>
    <script type="text/javascript">
               alert("Create Acount Successfully..");
               location.href='user_login.php';
    </script>
   <?php
  
}

?>