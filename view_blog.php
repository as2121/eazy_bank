<?php
include "navbar.php";

?>
<?php
 $blog_id=$_GET['id'];
$sql="SELECT * FROM blog WHERE blog_id='$blog_id'";
$res=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($res);

?>

<div class="site-blocks-cover overlay" style="background-image:url('admin/uploaded/<?=$data['image']?>');" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
    
    
          <div class="col-md-12 mt-lg-5 text-center">
            <h1><?=$data['title']?></h1>
            <p class="post-meta"><?= date('M d,Y',strtotime( $data['date']))?> &bull; Posted by <a href="#"><?=$data['author']?></a> 
            </p>
    
          </div>
    
        </div>
      </div>
    </div>
    
    
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p>
                    <?=$data['details']?>
                </p>
            </div>
          
        </div>
      </div>
    </section>


<?php
include "footer.php";
?>