
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
        <link rel="canonical" href="https://amitcollege.org.in/department_gallery.php" />


<?php 
	include "header.php";
	if(isset($_GET['img_id'])){
	    $img_id = $_GET['img_id'];
	}
	if(isset($_GET['dep_id'])){
	    $dep_id = $_GET['dep_id'];
	}
	
	$imgsql      = ("SELECT * FROM tbl_department_category WHERE id=$img_id");
    $res   = $crud->getData($imgsql);

?>
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 84px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>


<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background:linear-gradient(to left, #d22523 0%, #592776 100%) !important;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-dark font-weight-bold text-8" style="color:#000 !important;"><?php echo $res[0]['title'];?></h1>

							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="index.php">Home</a></li>
									<li class="active" style="color:#000 !important;">Photo gallery</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">
					
					<div class="row">
						<div class="col">
						    <button class="button" onclick="goBack()">Go Back</button><br>
							<div class="blog-posts">

								<div class="row  lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
								
                                       <?php 
										$imgsql      = ("SELECT * FROM tbl_department_gallery WHERE image_category='$img_id' AND dep_category='$dep_id'");
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
			
			<script>
function goBack() {
  window.history.back();
}
</script>

	<?php 
		include "footer.php";
	?>
