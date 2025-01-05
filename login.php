<?php
session_start();
$conn=mysqli_connect("localhost:3307","root","","php_bank");
extract($_POST);
$sql="SELECT * FROM user_register WHERE mobile='$mobile' AND password='$password'";
$fire=mysqli_query($conn,$sql);
if(mysqli_num_rows($fire)>0){
    $row=mysqli_fetch_assoc($fire);
    // print_r($row);
    $_SESSION['login_user_id']=$row['user_id'];
    header("location:index.php");
}
else{
    ?>
    <script type="text/javascript">
    alert("Invalid Details..");
    location.href='user_login.php';
</script>
  <?php
  

}
?>