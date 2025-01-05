<?php
include "navbar.php";

if (!isset($_SESSION['login_user_id'])){
  header("location:user_login.php");
}
$id=$_SESSION['login_user_id'];
$conn=mysqli_connect("localhost:3307","root","","php_bank");
$sql="SELECT * FROM user_register WHERE user_id='$id' ";
$row=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($row);


?>
<script src="https://kit.fontawesome.com/331cd755fd.js" crossorigin="anonymous"></script>
<style>
      .text-success:hover{
        font-weight:bold;
        /* transform: scale(1.5); */
        text-decoration: underline;
        cursor:pointer;
      }
      .a1{
       
        background-image:url('https://img.freepik.com/premium-vector/interbank-currency-exchange_387612-259.jpg');
        backdrop-filter:brightness(10%);
        background-size:100% 100%;
        text-shadow:2px 2px black;
       font-weight:bold;
       border-radius:2%


      }
      h3{
        color:#a9f505;
      }
      .b1{
        color:#f20765;
      }
      p{
        font-family:cursive;
        font-weight:bold;
      }
      .c1:hover{
        transform:scale(1.1);
      }
      .transation{
        color:#e3d620;
        text-decoration:underline;
      }
      .transation:hover{
        transform:scale(1.3);
      }
    </style>
<div class="site-blocks-cover overlay" style="background-image:url('https://wallpapers.com/images/hd/profile-picture-background-10tprnkqwqif4lyv.jpg');" data-aos="fade">
      <div class="container-fluid" style="padding-top:100px">
        <div class="row justify-content-center ">

           <div class="col-md-5 mt-5 bg-white p-5 a1 mb-5"  >
            <div class="col-md-12 text-right">Logout
            <a onclick="return confirm('Are You Sure Logout This Acount...!')" href="logout.php"><i class="fa-solid fa-right-from-bracket text-danger"></i></a>
            </div>
          <div class="col-md-12">
          <h3 class="mt-4 font-weight-bold text-center" >ACOUNT DETAILS</h3>
           <p class="mt-3 font-weight-bold text-uppercase">ACOUNT HOLDER ID :<span class="font-weight-bold b1">  <?=$data['user_id']?></span></p>
           <p class="mt-2 font-weight-bold text-uppercase">ACOUNT HOLDER NAME :<span class="font-weight-bold b1">  <?=$data['username']?></span></p>
           <p class="mt-2 font-weight-bold text-uppercase">ACOUNT HOLDER MOBILE NO :<span class="font-weight-bold b1">  <?=$data['mobile']?></span></p>
           <p class="mt-2 font-weight-bold text-uppercase">ACOUNT HOLDER EMAIL :<span class="font-weight-bold b1">  <?=$data['email']?></span></p>
           <p class="mt-2 font-weight-bold text-uppercase">Check Acount Balance :<span class="font-weight-bold c1" data-toggle="modal" data-target="#exampleModal" type="button" style="font-family:Arial Black;color:#0ff6fa;text-decoration:underline">  Check Balance<span></p>
          </div>
          <?php 
          if($data['type']!=""){
            ?>
          
          <div class="col-md-12 mt-5 text-center" >
           <button class="btn-lg btn-warning" data-toggle="modal" data-target="#exampleModalCenter" >Add Fund</button>
           <button class="btn-lg btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">Withdraw Amount</button>
          </div>
          <div class="col-md-12 text-center mt-5">
            <a class="transation" href="transation_history.php?id=<?=$data['user_id']?>">See All Transation History</a>
            </div><br>

            <?php
          }
          ?>
          <?php
           if($data['type']==""){
            ?>
          <div class="col-md-12 text-center mt-5">
            <button class=" btn-sm btn-primary text-center" style="cursor:pointer"  data-toggle="modal" data-target="#exampleModalCenter3">Fill Some More Information,Then Feature Used
    </button></div>
    <?php
          }
          ?>
         
           </div>
    
          </div>
    
       
      </div>
    </div>
    
    
    
   
<?php
include "footer.php";
?>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EAZY BANK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ACOUNT HOLDER NAME : <span class="font-weight-bold ">  <?=$data['username']?></span><br>
       ACOUNT BALANCE : <span class="font-weight-bold ">  &#8377; <?=$data['ac_balance']?>.00</span>
      </div>
     
    </div>
  </div>
</div>


<!-- add fund -->
<!-- Modal 1 -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">EAZY BANK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ACOUNT HOLDER NAME : <span class="font-weight-bold ">  <?=$data['username']?></span><br>
       <form action="add_fund.php"method="post" class="mt-3">
       <input value="<?=$data['user_id']?>" type="number" name="user_id"  hidden>
       <input value="<?=$data['ac_balance']?>" type="text" name="ac_balance"  hidden>
        AMOUNT : <input type="number" name="add_fund" placehoder="INR" required><br>
        <button class="btn btn-dark mt-3">Add Fund</button>
           
       </form>
       
      </div>
     
    </div>
  </div>
</div>



<!-- Withdraw Fund fund -->
<!-- Modal 2 -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle1">EAZY BANK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ACOUNT HOLDER NAME : <span class="font-weight-bold ">  <?=$data['username']?></span><br>
       <form action="withdraw_fund.php"method="post" class="mt-3">
       <input value="<?=$data['user_id']?>" type="number" name="user_id"  hidden>
       <input value="<?=$data['ac_balance']?>" type="text" name="ac_balance"  hidden>
        AMOUNT : <input type="number" name="withdraw_fund" placehoder="INR" required><br>
        <button class="btn btn-dark mt-3">Withdraw Amount</button>
           
       </form>
       
      </div>
     
    </div>
  </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Acount Holder Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form action="some_info.php" enctype="multipart/form-data" method="post">
     <div class="row mb-4 justify-content-center">
                    <div class="col-md-6 mt-4 ">
                        <label class="font-weight-bold text-dark">Acount Type <span class="text-danger">*</span></label>
                        <input value="<?=$data['user_id']?>" name="user_id" placeholder="Acount Type" class="form-control" hidden>
                        <input type="text" name="type" placeholder="Acount Type" class="form-control" required>
                    </div>
                    
                   
                    <div class="col-md-6 mt-4 ">
                        <label class="font-weight-bold text-dark">Passport Photo <span class="text-danger">*</span></label>
                        <input type="file" accept="image/*" name="passport_photo" class="form-control" required>
                    </div>
                    
                    <div class="col-md-6 mt-4 ">
                        <label class="font-weight-bold text-dark">Adhar Card</label>
                        <input type="file" accept="image/*" name="adhar_card" class="form-control" >
                    </div>
                    
                    
                    <div class="col-md-6 mt-4 ">
                        <label class="font-weight-bold text-dark">Signature </label>
                        <input type="file" accept="image/*" name="signature" class="form-control" >
                    </div>
                   
                    <div class="col-md-12 mt-4 ">
                        <label class="font-weight-bold text-dark">Address <span class="text-danger">*</span></label>
                        <textarea  rows="2" type="text" name="address" placeholder="Address" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-4 mt-3 mb-5  ">
        <button class="btn-primary btn">Save Info</button>
      </div>
                </div>
      </div>
     
      
     </form>
     
    </div>
  </div>
</div>
