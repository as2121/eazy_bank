<?php
include "navbar.php";

?>
<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost:3307","root","","php_bank");
$sql="SELECT * FROM `transation history` WHERE user_id='$id'";
$sql1="SELECT * FROM `user_register` WHERE user_id='$id'";
$fire=mysqli_query($conn,$sql);
$row=mysqli_query($conn,$sql1);
$data=mysqli_fetch_assoc($row);
?>





<div class="site-blocks-cover bg-white"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
    <div class="col-md-12 text-dark5 mt-5 ">
    <h1 class="font-weight-bold text-center mb-5  text-dark">TRANSATION HISTORY</h1>

        <b class="mt-3">ACOUNT HOLDER ID :</b> <span><?=$data['user_id']?></span><br>
       <b class=""> ACOUNT HOLDER NAME : </b><span><?=$data['username']?></span>
    <table border="1" class="table mt-2  table-border table-white  table-hover">
        <tr class="table-active">
            <th>DATE</th>
            <th>TIME</th>
            <th>CREDIT</th>
            <th>DEBIT</th>
            <th>AVAILABLE BALANCE</th>
        </tr>
        <?php
    
    foreach($fire as $key => $value){
        ?>
        <tr>
           
            <td><?=$value['date']?></td>
            <td><?=$value['time']?></td>
            <td><?=$value['credit']?></td>
            <td><?=$value['debit']?></td>
            <td> &#8377; <?=$value['acount_balance']?>.00</td>
        </tr>
        <?php
    }
    ?>
   <tr class="bg-light">
    <th colspan="4">AVAILABLE BALANCE</th>
    <th > &#8377; <?=$data['ac_balance']?>.00</th>
   </tr>
    </table>
    </div>
            </div>
    
    
        </div>
      </div>
    </div>
    
    
    
   


<?php
include "footer.php";
?>