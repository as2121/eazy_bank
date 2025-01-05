<?php
$add_fund=$_POST['add_fund'];
$id=$_POST['user_id'];
$balance=$_POST['ac_balance'];
$date=date('Y-m-d');
date_default_timezone_set('Asia/Kolkata');
$time=date("H:i:s",time());
$tot_balance=$add_fund+$balance;
$conn=mysqli_connect("localhost:3307","root","","php_bank");
$sql="UPDATE user_register SET ac_balance='$tot_balance' WHERE user_id='$id'";
$sql2="INSERT INTO `transation history`(`user_id`, `date`, `time`, `credit`, `debit`, `acount_balance`) VALUES ('$id','$date','$time','$add_fund','-','$tot_balance')";
mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
?>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {                                                        
    "key": "rzp_test_cMIGOkBXClJR3Y", 
    "amount": "<?=$add_fund?>00", 
    "currency": "INR",
    "name": "EAZY BANK",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "callback_url": "user_acount.php",
    "prefill": { 
        "name": "EAZY BANK", 
        "email": "eazybank@example.com",
        "contact": "1234567890" 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
// }
</script>

