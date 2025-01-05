<?php 
include "navbar.php";
$res=mysqli_query($conn,"SELECT * FROM slider_image");
$slide=mysqli_query($conn,"SELECT * FROM slide");
$slider_image=mysqli_fetch_assoc($res);
$row=mysqli_query($conn,"SELECT * FROM basic_info");
$basic_info=mysqli_fetch_assoc($row);
$how_it_work=mysqli_query($conn,"SELECT * FROM how_it_work");
$blog=mysqli_query($conn,"SELECT * FROM blog ORDER BY blog_id DESC LIMIT 3");
$feature=mysqli_query($conn,"SELECT * FROM feature ORDER BY id DESC LIMIT 6");
$customer=mysqli_query($conn,"SELECT * FROM customer ORDER BY customer_id DESC LIMIT 2");
$gallary=mysqli_query($conn,"SELECT * FROM gallary ORDER BY gallary_id DESC LIMIT 12");
$service_feature=mysqli_query($conn,"SELECT * FROM service_feature");
$data=mysqli_fetch_assoc($service_feature);
extract($data);
$contact_page=mysqli_query($conn,"SELECT * FROM contact");
$contact=mysqli_fetch_assoc($contact_page);




?>
    <div class="site-blocks-cover overlay" style="background-image:url(admin/uploaded/<?=$slider_image['slider_image']?>);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

         
          <div class="col-md-10 mt-lg-5 text-center ">
            <div class="single-text owl-carousel">
            <?php
          foreach($slide as $row){
          ?>
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up"style="white-space:nowrap"><?=$row['slide_title']?></h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100"><?=$row['slide_details']?></p>
                <!-- <div data-aos="fade-up" data-aos-delay="100">
                  <a href="<?=$row['slide_button_link']?>" target="_blank" class="btn  btn-primary mr-2 mb-2"><?=$row['slide_button_text']?></a>
                </div> -->
              </div>
              <?php
              }
              ?>
            </div>
          </div>
            
        </div>
      </div>

      <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  


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
            <img width="100%" src="admin/uploaded/<?=$basic_info['image']?>" alt="Free Website Template by 
            Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="text-black mb-4"><?=$basic_info['title']?></h3>

            <p><?=$basic_info['details']?></p>
            
          </div>
        </div>    
        
      </div>  
    </div>

   
   




    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">How It Works</h2>
          </div>
        </div>
        
        <div class="row align-items-lg-center" >
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
        <div class="owl-carousel slide-one-item-alt">
            <?php
           foreach($how_it_work as $row){
           ?>
              <img src="admin/uploaded/<?=$row['image']?>" alt="Image" class="img-fluid">
              <?php
            }
            ?>
            </div>
           
            <div class="custom-direction">
              <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <?php
           foreach($how_it_work as $row){
           ?>
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <h2 class="section-title mb-3"><?=$row['title']?></h2>
                <p><?=$row['description']?></p>
              </div>
              <?php
            }
            ?>
              


             
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
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
         

        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Happy Customers</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>

              <?php
               foreach($customer as $data){
              ?>

            <div class="testimonial">
              <blockquote class="mb-5">
                <p>&ldquo;<?=$data['heading']?>&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="admin/uploaded/<?=$data['image']?>" class="w-50 h-100 img-fluid mb-3"> 
                </div>
                <p><?=$data['name']?></p>
              </figure>
              
            </div>
         
          </div>
           <?php
            }
            ?>
          <div>
        </div>
    </section>

    <section class="site-section" id="gallery-section" data-aos="fade">
      

      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Gallery</h2>
          </div>
        </div>

        
        
        <div id="posts" class="row no-gutter">
          <?php
          foreach($gallary as $data){
          ?>
          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="admin/uploaded/<?=$data['image']?>" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="admin/uploaded/<?=$data['image']?>">
            </a>
          </div>
          <?php
          }
          ?>
         
          
        </div>
      </div>

    </section>

    <section class="site-section" id="about-section">
      <div class="container">

        <div class="row">
        <div class="col-12 text-center">
            <h2 class="section-title mb-3">Service Feature</h2><br><br>
          </div>
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="admin/uploaded/<?=$image?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            

            <div class="row">

              
              
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3 text-primary"><i class="<?=$icon_1?>" style="font-size:40px;" ></i></div>
                  <div>
                    <h3><?=$title_1?></h3>
                    <p><?=$details_1?></p>
                  
                  </div>
                </div>
              </div>
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                  <div class=" mr-4 mb-3 text-primary"><i class="<?=$icon_2?> " style="font-size:40px;" ></i></div>
                  <div>
                    <h3><?=$title_2?></h3>
                    <p><?=$details_2?></p>
                   
                  </div>
                </div>
              </div>
            </div>


            
          </div>
        </div>

        
      </div>
    </section>
  
    
    

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Blog</h2>
          </div>
        </div>
        
        <div class="row">
          <?php
          foreach($blog as $value){
            

          ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="view_blog.php?id=<?=$value['blog_id']?>">
                <img src="admin/uploaded/<?=$value['image']?>" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="view_blog.php?id=<?=$value['blog_id']?>"><?=$value['title']?></a></h2>
              <div class="meta mb-4"><?=$value['author']?> <span class="mx-2">&bullet;</span><?=date('d M Y', strtotime($value['date']))?><span class="mx-2">&bullet;</span> </div>
              <p>
                <?php
                echo substr($value['details'],0,150);
                ?> ...
              </p>
              <p><a href="view_blog.php?id=<?=$value['blog_id']?>">Continue Reading...</a></p>
            </div> 
          </div>
          <?php 
          }

          ?>
          
          
        </div>
      </div>
    </section>

   


    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          


          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h2 text-primary"></span>
              <span><?=$contact['location']?></span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 text-primary"></span>
              <a href="#"><?=$contact['mobile']?></a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h2 text-primary"></span>
              <a href="#"><?=$contact['email']?></a>
            </p>
          </div>
        </div>
      
      </div>
    </section>
<?php include "footer.php";

?>


