<?php
//ob_start();

session_start();
require_once("cms-admin/controller/clsCrud.php");
require_once("cms-admin/controller/clsCommon.php");
$base_url =("https://localhost/amitacademy/");
$curPage  = basename($_SERVER['PHP_SELF']); 
$crud = new Crud();
if(isset($_POST['sub'])){
       $fname = $_POST['fname']; 
       $lname = $_POST['lname'];
       $dob = $_POST['dob'];
       $mail = $_POST['mail'];
       $phn = $_POST['phn'];
       $adds = $_POST['adds'];
       $stream = $_POST['stream'];
       $dep = $_POST['dep'];
       $stdref = $_POST['stdref'];
       $nameofclg = $_POST['nameofclg'];
       $marks = $_POST['marks'];
       $caste = $_POST['caste'];
       $entry_date = date("Y-m-d",strtotime($_REQUEST['entry_date']));
       
     $sql = "INSERT into tbl_enquiry SET firstname = '$fname', lastname = '$lname', dob = '$dob', email = '$mail', phone = '$phn', address ='$adds', depart ='$dep', refname='$stdref', passclgname='$nameofclg',	stream='$stream',marks ='$marks',caste='$caste', entry_date = '$entry_date'";
		$res = $crud->execute($sql);
    }
$pageArr = array('1' => 'news.php', '2' => 'gallery.php', '3' => 'contact.php', '4' => 'notification.php','5' => 'video.php');
?>


		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo $base_url ?>img/img/logo.jpg" type="image/x-icon" />
		<link rel="apple-touch-icon" href=".<?php echo $base_url ?>img/img/logo.jpg">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo $base_url ?>css/theme.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php echo $base_url ?>vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo $base_url ?>css/skins/skin-corporate-3.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo $base_url ?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo $base_url ?>vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-hide" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 85}">
				<div class="header-body header-body-bottom-border border-top-0">
					 
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="#">
											<img src="img/logo.png" class="custom-logo"   alt="" />
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links">
										<div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li><a href="#" class="nav-link active">Home</a></li>
													<li><a href="# " class="nav-link">About</a></li>
													<li><a href="# " class="nav-link">Courses</a></li>
													<li><a href="#" class="nav-link">Gallery</a></li>
													<li><a href="#" class="nav-link">Blogs</a></li>
												 
													<li><a href="#" class="nav-link">Contact</a></li>
												</ul>
											</nav>
										</div>
									</div>
									<!-- <div class="feature-box feature-box-style-2 align-items-center ms-lg-4">
										<div class="feature-box-icon d-none d-sm-inline-flex">
											<img class="icon-animated" width="48" src="img/demos/cleaning-services/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary position-relative bottom-3'}" />
										</div>
										<div class="feature-box-info ps-2">
											<p class="font-weight-semibold line-height-1 text-2 pb-0 mb-1">CALL US NOW</p>
											<a href="tel:+1234567890" class="text-color-tertiary text-color-hover-primary text-decoration-none font-weight-bold line-height-1 custom-font-size-1 pb-0">800-123-4567</a>
										</div>
									</div> -->
									<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
 <style>
	.header-logo{
    display:flex;
    align-items:center;
}

.custom-logo{
    width:auto;
    max-width:300px !important;
    height:90px !important;
    object-fit:contain;
    transition:0.3s ease;
}

/* Large Screens */

@media(max-width:992px){

    .custom-logo{
        max-width:350px !important;
        height:80px !important;
    }

}

/* Tablet */

@media(max-width:768px){

    .custom-logo{
        max-width:170px !important;
        height:52px !important;
    }

}

/* Mobile */

@media(max-width:480px){

    .custom-logo{
        max-width:140px !important;
        height:45px !important;
    }

}
	</style>

<div role="main" class="main">



