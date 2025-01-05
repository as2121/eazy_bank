<?php
$conn=mysqli_connect("localhost:3307","root","","php_bank");
echo "<pre>";
extract($_POST);
$passport=time().rand(111111,999999).$_FILES['passport_photo']['name'];
$adhar=time().rand(11111,99999).$_FILES['adhar_card']['name'];
$signature=time().rand(11111,99999).$_FILES['signature']['name'];
move_uploaded_file($_FILES['passport_photo']['tmp_name'],'admin/uploaded/'.$passport);
move_uploaded_file($_FILES['adhar_card+']['tmp_name'],'admin/uploaded/'.$adhar);
move_uploaded_file($_FILES['signature']['tmp_name'],'admin/uploaded/'.$signature);
$sql="UPDATE user_register SET type='$type',address='$address',passport='$passport',adhar='$adhar',signature='$signature' WHERE user_id='$user_id'";
$fire=mysqli_query($conn,$sql);
if($fire){
    header("location:user_acount.php");
}

?>