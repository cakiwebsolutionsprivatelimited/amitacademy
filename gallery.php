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
        <link rel="canonical" href="https://amitcollege.org.in/gallery.php" />
      <?php 
	include "header.php";
?>

<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background:linear-gradient(to left, #d22523 0%, #592776 100%) !important;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-dark font-weight-bold text-8" style="color:#fff !important;">Visit Gallery</h1>

							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active" style="color:#ddd !important;">Gallery</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">
					
					<div class="row">
						<div class="col">
							<div class="blog-posts">

								<div class="row">

								<?php	
                                	$imgsql      = ("SELECT * FROM tbl_category WHERE status = 1 ");
                                	$res   = $crud->getData($imgsql);
                                	foreach($res as $keys=> $vl){
								?>
                                        <div class="col-md-4 col-lg-3">
                                            <article class="post post-medium border-0 pb-0 mb-5">
                                                <div class="post-image">
                                                    <a href="category_image.php?img_id=<?php echo $vl['id'];?>" style="text-decoration:none;">
                                                        <h4 style="text-align:center;"><?php echo $vl['title'];?></h4>
                                                        <img src="gallery/<?php echo $vl['image'];?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""  style="height:194px;"/>
                                                        <p><?php echo $vl['description'];?></p>
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
