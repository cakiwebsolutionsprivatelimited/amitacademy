
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Amit College - Bhubaneswar  </title>	

		<meta name="keywords" content="Amit  College Bhubaneswar" />
		<meta name="description" content="Amit  College Bhubaneswar">
		<meta name="author" content="Amit  College Bhubaneswar">
        <link rel="canonical" href="https://amitcollege.org.in/category_image.php" />




<?php 
	include "header.php";
	if(isset($_GET['img_id'])){
	    $img_id = $_GET['img_id'];
	}
	
	$imgsql      = ("SELECT * FROM tbl_category WHERE id=$img_id");
    $res   = $crud->getData($imgsql);

?>

<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background:linear-gradient(to left, #d22523 0%, #592776 100%) !important;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-dark font-weight-bold text-8" style="color:#fff !important;"><?php echo $res[0]['title'];?></h1>

							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="index.php">Home</a></li>
									<li class="active" style="color:#ddd !important;">Photo gallery</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">
					
					<div class="row">
						<div class="col">
						    <a href="http://amitcollege.org.in/gallery.php"><img src="img/img/back.png" style="width:54x; height:44px;"></a>
							<div class="blog-posts">

								<div class="row  lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
								
                                       <?php 
										$imgsql      = ("SELECT * FROM tbl_gallery WHERE image_category='$img_id'");
										$getAllimg   = $crud->getData($imgsql);
										foreach($getAllimg as $keys=> $image){
									?>
                                        <div class="col-md-4 col-lg-3 lightbox mb-4">
                                            <article class="post post-medium border-0 pb-0 mb-5">
                                                <div class="post-image">
                                                    <a href="gallery/<?php echo $image['image'];?>" class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox">
                                                        <img src="gallery/<?php echo $image['image'];?>" style="height:174px;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                    </a>
                                                </div>
    
                                                
                                            </article>
                                        </div>
                                    
                                    <?php }?>
                                    
                                 
								</div>
	
								

							</div>
						</div>

					</div>

				</div>

			</div>

	<?php 
		include "footer.php";
	?>
