<?php
$withdraw_fund=$_POST['withdraw_fund'];
$id=$_POST['user_id'];
$balance=$_POST['ac_balance'];
$date=date('Y-m-d');
date_default_timezone_set('Asia/Kolkata');
$time=date("H:i:s",time());
 $tot_balance=$balance-$withdraw_fund;
if($tot_balance>=0){
$conn=mysqli_connect("localhost:3307","root","","php_bank");
$sql="UPDATE user_register SET ac_balance='$tot_balance' WHERE user_id='$id'";
$sql2="INSERT INTO `transation history`(`user_id`, `date`, `time` , `credit`, `debit`, `acount_balance`) VALUES ('$id','$date','$time','-','$withdraw_fund','$tot_balance')";
$fire=mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
if($fire){
    ?>
    <script>
        alert("Withdraw Amount Successfully...!");
        location.href='user_acount.php';
    </script>
    <?php

}
}
else{
    ?>
    <script>
        alert("Influence Balance...!");
        location.href='user_acount.php';
    </script>
    <?php
}
?>