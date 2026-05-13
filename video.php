
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
        <link rel="canonical" href="https://amitcollege.org.in/video.php" />



<?php 
	include "header.php";
?>

<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background:linear-gradient(to left, #d22523 0%, #592776 100%) !important;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-dark font-weight-bold text-8" style="color:#fff !important;">Video</h1>

							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="#">Home</a></li>
									<li class="active" style="color:#000 !important;">Gallery</li>
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
                                 $vdosql      = ("SELECT * FROM tbl_gallery WHERE type = 2 AND status = 1");
                                	$r   = $crud->getData($vdosql);
                                	foreach($r as $keys => $val){
								?>
                                        <div class="col-md-4 col-lg-3">
                                            <iframe width="244" height="204" src="<?php echo $val['embedlink'];?>" frameborder="0" allow="accelerometer; autoplay; 
                                            encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
