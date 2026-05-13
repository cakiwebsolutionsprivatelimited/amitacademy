
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
        <link rel="canonical" href="https://amitcollege.org.in/page.php" />


<?php 
	include "header.php";
	$page_id = $crud->escape_string($_REQUEST['page']);
	$countRec = $crud->countRec("SELECT COUNT(1) as total FROM tbl_pages WHERE id = '$page_id'");
	if($countRec['total'] == 0){ ?>
		<script>window.location = 'index.php';</script>
	<?php exit; }
	//echo $countRec['total'];exit;
	$imgsql      = ("SELECT * FROM tbl_pages WHERE status = 1 AND id = '$page_id'");
	$fetchpage   = $crud->getData($imgsql);
	//print_r($fetchpage);exit;
?>

<div role="main" class="main" >
				<section class="page-header page-header-modern  page-header-md" style="background:linear-gradient(to left, #d22523 0%, #592776 100%) !important;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="font-weight-bold text-8" style="color: white;"><?php echo $fetchpage[0]['page_name'];?></h1>

							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="index.php">Home</a></li>
									<li class="active"><?php echo $fetchpage[0]['page_name'];?></li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container pb-1">
					<div class="container-fluid">	
                    	<?php echo html_entity_decode($fetchpage[0]['description']);?>
					</div>
				</div>

					
					
				</div>
				<!-- <section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
					<div class="container py-4">

						<div class="row align-items-center">
							<div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
								<div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
									<div>
										<img alt="" class="img-fluid" src="img/generic/generic-corporate-3-2-full.jpg">
									</div>
									<div>
										<img alt="" class="img-fluid" src="img/generic/generic-corporate-3-3-full.jpg">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="overflow-hidden mb-2">
									<h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
								</div>
								<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
								<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
							</div>
						</div>

					</div>
				</section> -->

				

				<!-- <section class="section section-default border-0 my-5">
					<div class="container py-4">

						<div class="row">
							<div class="col pb-4 text-center">
								<h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
								<p>Rockstars lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>
							</div>
						</div>
						<div class="row pb-4 mb-2">
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="img/team/team-1.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">John Doe</span>
												<span class="thumb-info-type">CEO</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="img/team/team-2.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Jessica Doe</span>
												<span class="thumb-info-type">Marketing</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="img/team/team-3.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Rick Edward Doe</span>
												<span class="thumb-info-type">Developer</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="img/team/team-4.jpg" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Melinda Wolosky</span>
												<span class="thumb-info-type">Design</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
						</div>
					</div>
				</section>
 -->
				<!--<div class="container">
					<div class="row py-5 my-5">
						<div class="col">
					
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
								</div>
							</div>
							
						</div>
					</div>
				</div>

			</div>
-->
	<?php 
	include "footer.php";
?>	
