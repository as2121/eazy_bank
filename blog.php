<?php include "navbar.php";
$blog=mysqli_query($conn,"SELECT * FROM blog ORDER BY blog_id DESC LIMIT 3");

?>

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
    
    </section>
<?php include "footer.php" ?>
