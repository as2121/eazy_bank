<?php include "navbar.php";
$row=mysqli_query($conn,"SELECT * FROM basic_info");
$basic_info=mysqli_fetch_assoc($row);
$feature=mysqli_query($conn,"SELECT * FROM feature ORDER BY id DESC LIMIT 3");
$our_team=mysqli_query($conn,"SELECT * FROM our_team ");
$data=mysqli_query($conn,"SELECT * FROM banking_solution");
$banking_solution=mysqli_fetch_assoc($data);

?>
<div class="site-section cta-big-image" id="about-section">
      
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">About Us</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100"><?=$basic_info['heading']?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img width="100%" src="admin/uploaded/<?=$basic_info['image']?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="text-black "><?=$basic_info['title']?></h3>

            <p><?=$basic_info['details']?></p>
            
          </div>
        </div>    
       
    </div>
    </div>
    <div class="site-section" id="next">
      <div class="container">
        <div class="row mb-5">
          <?php
          foreach($feature as $value){
           ?>
          
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
            <img src="admin/uploaded/<?=$value['image']?>" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title"><?=$value['title']?></h3>
            <p><?=$value['details']?></p>
          </div>
          <?php 
          }
          ?>
        

        </div>

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="admin/uploaded/<?=$banking_solution['image']?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black"><?=$banking_solution['title']?></h3>
              <p><?=$banking_solution['heading']?></p>
              
            </div>
              
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li><?=$banking_solution['list_1']?></li>
                <li><?=$banking_solution['list_2']?></li>
                <li><?=$banking_solution['list_3']?></li>
              </ul>
              
            </div>

            
            
            
          </div>
        </div>
      </div>
    </div>
    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Meet Team</h2>
          </div>
        </div>
        <div class="row">
          

          <?php
          foreach($our_team as $row){
            ?>
           
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="admin/uploaded/<?=$row['profile']?>" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3><?=$row['name']?></h3>
                <span class="position"><?=$row['position']?></span>
              </div>
            </div>
          </div>
          <?php
          }
          ?>

          
          

          

          
          
        </div>
      </div>
    </section>
<?php include "footer.php" ?>
