<?php include 'navbar.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/331cd755fd.js" crossorigin="anonymous"></script>
<style type="text/css">
       .center{
			height:500px;
			width:400px;
			background: white;
			float:left;
			position: absolute;
     background-image:url(https://static.vecteezy.com/system/resources/thumbnails/003/685/386/small/grey-geometric-striped-seamless-pattern-light-grey-and-white-texture-vector.jpg);
        background-size:100% 100%;
            box-shadow: 0px 0px 10px 3px black;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
            border-radius:10px;
       }
       .background{
        height:850px;
			width:100%;
        background-image:url(https://t4.ftcdn.net/jpg/01/19/11/55/360_F_119115529_mEnw3lGpLdlDkfLgRcVSbFRuVl6sMDty.jpg);
        background-size:100%,100%;
       }
</style>
<div class="background">
<div class="container-fluid p-3 center  ">
<form action="save_registration.php" method="post" enctype="multipart/form-data">
 <div class="form-row p-4 mb-2">
    <h1 class="text-primary font-weight-bold ml-3" style="text-shadow:2px 2px black">Create Acount</h1>
    </div>
    <div class="col-12">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
        </div>
        <input name="username" required type="text" class="form-control "  placeholder="User Name">
      </div>
    </div>
    <div class="col-12 mt-3">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa-solid fa-mobile-retro"></i></div>
        </div>
        <input  name="mobile" required type="number" class="form-control "  placeholder="Mobile">
      </div>
    </div>
    <div class="col-12 mt-3">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
        </div>
        <input  name="email" required type="email" class="form-control "  placeholder="Email">
      </div>
    </div>
    <div class="col-12 mt-3">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
        </div>
        <input  name="password" required type="password" class="form-control"  placeholder=" Password">
        </div>
      </div>
      <div class="col-12 mt-2">
      <input required type="checkbox"  >
      <label class="text-danger font-weight-bold">I accept all term & condition</label>
    </div>
      <div class="col-12 mt-2">
    <button class="form-control btn btn-primary font-weight-bold ">Create Acount</button>
    </div>
   <div class="font-weight-bold mt-3 text-dark text-center mb-0" style="font-size:15px;">ALREADY HAVE AN ACOUNT ? <a href="user_login.php" ><u style="font-size:15px;" class="font-weight-bold  text-info text-sm "> Login Now</u></a></div>
    </div>
   
</form>
</div>
    </div>
<?php include 'footer.php'; ?>