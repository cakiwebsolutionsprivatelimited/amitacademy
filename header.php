<?php
//ob_start();

session_start();
require_once("cms-admin/controller/clsCrud.php");
require_once("cms-admin/controller/clsCommon.php");
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
		<link rel="shortcut icon" href="../img/img/logo.jpg" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../img/img/logo.jpg">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="../vendor/animate/animate.min.css">
		<link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../css/theme.css">
		<link rel="stylesheet" href="../css/theme-elements.css">
		<link rel="stylesheet" href="../css/theme-blog.css">
		<link rel="stylesheet" href="../css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="../vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="../vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="../vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="../css/skins/skin-corporate-3.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">

		<!-- Head Libs -->
		<script src="../vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-hide" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 128, 'stickySetTop': '-137px', 'stickyChangeLogo': true}">
				<div class="header-body border-color-primary border-top-0 box-shadow-none">
				    
				    <div class="header-top header-top-default border-bottom-0 bg-color-primary">
						<div class="container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-anim-icon">
													<a class="nav-link pl-0 text-light " href="mailto: amiteducation.ordc@gmail.com
" style="color:#fff;"> amiteducation.ordc@gmail.com
</a>|
												</li>
<li class="nav-item nav-item-anim-icon">
													<a class="nav-link pl-0 text-light " href="call:8018890756
" style="color:#fff;">Contact:+91 8018890756
</a>|
												</li>

												<li class="nav-item nav-item-anim-icon">
													<a class="nav-link text-light " href="../contact.php"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
                                              
                                              
                                              <li class="nav-item nav-item-anim-icon">
                                                <a class="nav-link text-light  " href="../apply.php"><span class="btn btn-primary"> APPLY FOR ADMISSION </span>   </a>
												</li>
                                              
                                              
                                                  
                                              <li class="nav-item nav-item-anim-icon">
                                                <a class="nav-link text-light  " href="https://amitcollege.org.in/online-exam/index.php/login/register"><span class="btn btn-secondary">  Student register</span>   </a>
												</li> 
                                              
                                              
                                                  
                                              <li class="nav-item nav-item-anim-icon d-none">
                                                <a class="nav-link text-light  " href="https://amitcollege.org.in/online-exam/index.php/login/student"><span class="btn btn-success">     Student Login </span>   </a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light">
											<li class="social-icons-facebook"><a href="https://www.facebook.com/people/Academy-Of-Management-Information-Technology/100064082461646/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="https://www.linkedin.com/in/academy-of-management-and-information-technology-khordha-00261635b/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                          
                                          <li class="social-icons-instagram"><a href="https://www.instagram.com/academyofmgt.it/" target="_blank" title="Linkedin"><i class="fab fa-instagram"></i></a></li>
                                          <li class="social-icons-youtube"><a href="https://www.instagram.com/academyofmgt.it/" target="_blank" title="Linkedin"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				

					<div style="background-color:#fff;">
				<div class="header-container container" style="padding-top:0px! important; ">
						<div class="header-row py-3" style="padding-top:0px! important;padding-bottom:2px! important;">
							<div class="header-column justify md-2">
								<div class="header-row">
									<ul class="header-extra-info">
										<li class="m-0">
											<div class="feature-box feature-box-style-2 align-items-center">
												
												<div class="feature-box-info">
													<a href="index.php"><img src="../img/img/logo2.png" style="width:128px; height:90px;" alt="Amit College"></a>
												</div>

											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="header-column justify-content-left">
								<div class="header-row">
									<ul class="header-extra-info d-flex align-items-left">
										
										<li>
											<div class="header-extra-info-text">
												<label style="font-weight:bold;color:#32a7ba;font-size:20px;">Academy of Management & Information Technology</label>
												<a href="tel:8001234567"><b style="color:#d1271f;">Recognized by Govt of Odisha,</b> <b style="color:#5c2877;">Affiliated to Utkal University/BPUT</b></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							 <!--<div class="header-column justify-content-end w-50 order-2 order-md-3">
								<div class="header-row">
									<ul class="header-extra-info">
										<li class="m-0">
											<div class="feature-box reverse-allres feature-box-style-2 align-items-center">
												<!-- <div class="feature-box-icon">
													<i class="fab fa-whatsapp text-7 p-relative" style="top: -2px;"></i>
												</div>
												<div class="feature-box-info">
													<p class="pb-0 font-weight-semibold line-height-5 text-2">(123) 456-7890<br>(123) 456-7891</p>
												</div> -->
										<!--	</div>
										</li>
									</ul>
								</div>
							</div> -->
						</div>
					</div>
				</div>
					<div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#00cc00'}">
						<div class="container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav header-nav-force-light-text justify-content-start py-2 py-lg-3" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '35px'}" data-sticky-header-style-deactive="{'margin-left': '0'}" style="max-height:17px;">
											<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
												<nav class="collapse">
											   
												<ul class="nav nav-pills" id="mainNav"><!--first level start-->
											<li class="dropdown">
												<a class="dropdown-item dropdown-toggle " href="../index.php">
													Home
												</a>
											</li>
                                            <?php 
												$menulist = ("SELECT *,(SELECT page_name FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as pagename, (SELECT page_type FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as pagetype,(SELECT file FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as file, (SELECT link FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as link, (SELECT plugin_id FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as plugin_id FROM tbl_menu WHERE status = 1 AND parent = 0");
												$getParentmenu = $crud->getData($menulist);
												if(!empty($getParentmenu)){
													foreach($getParentmenu as $pmenus){
													$firstlvlmn = $pmenus['menu'];
													if($pmenus['pagetype'] == 1){
														$href = '../page.php?page='.$pmenus['menu'];
														$target = '';
													}else if($pmenus['pagetype'] == 2){
														$href = '../pages/'.$pmenus['file'];
														$target = 'target="_blank"';
													}else if($pmenus['pagetype'] == 3){
														$href = $pmenus['link'];
														$target = 'target="_blank"';
													}else if($pmenus['pagetype'] == 4){
														$href = $pageArr[$pmenus['plugin_id']];
														$target = '';
													}else if($pmenus['pagetype'] == 5){
														$href = 'javascript:void(0);';
														$target = '';
													}
													$firstchild = ("SELECT *,(SELECT page_name FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as pagename, (SELECT page_type FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as pagetype,(SELECT file FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as file, (SELECT link FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as link, (SELECT plugin_id FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as plugin_id FROM tbl_menu WHERE status = 1 AND parent = '$firstlvlmn'");
													$getfirstlvlmenu = $crud->getData($firstchild);
													//print_r($getfirstlvlmenu);
													
											?>
                                                        <li class="dropdown" data-menu="<?php echo $firstlvlmn;?>">
                                                            <a class="dropdown-item dropdown-toggle" <?php echo $target;?> href="<?php echo $href;?>">
                                                                <?php echo $pmenus['pagename'];?>
                                                            </a>
                                                            <?php 
																if(!empty($getfirstlvlmenu)){
																echo '<ul class="dropdown-menu">';//<!--second level start-->
																foreach($getfirstlvlmenu as $chmenu){
																$scndlvlmn = $chmenu['menu'];
																if($chmenu['pagetype'] == 1){
																	$href1 = '../page.php?page='.$chmenu['menu'];
																	$target1 = '';
																}else if($chmenu['pagetype'] == 2){
																	$href1 = '../pages/'.$chmenu['file'];
																	$target1 = 'target="_blank"';
																}else if($chmenu['pagetype'] == 3){
																	$href1 = $chmenu['link'];
																	$target1 = 'target="_blank"';
																}else if($chmenu['pagetype'] == 4){
																	$href1 = $pageArr[$chmenu['plugin_id']];
																	$target1 = '';
																}else if($chmenu['pagetype'] == 5){
																	$href1 = 'javascript:void(0);';
																	$target1 = '';
																}
																$secondchild = ("SELECT *,(SELECT page_name FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as pagename, (SELECT page_type FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as pagetype,(SELECT file FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as file, (SELECT link FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as link, (SELECT plugin_id FROM tbl_pages WHERE tbl_pages.id = tbl_menu.menu) as plugin_id FROM tbl_menu WHERE status = 1 AND parent = '$scndlvlmn'");
																$getsndlvlmenu = $crud->getData($secondchild);
															?>
                                                                    
                                                                        <li <?php if(!empty($getsndlvlmenu)){?>class="dropdown-submenu"<?php }?>><!--second level start-->
                                                                        <a class="dropdown-item" <?php echo $target1;?> href="<?php echo $href1;?>"><?php echo $chmenu['pagename'];?></a>
                                                                        <?php if(!empty($getsndlvlmenu)){
																			echo '<ul class="dropdown-menu">';//<!--third level start-->
																			foreach($getsndlvlmenu as $sndmenu){
																			if($sndmenu['pagetype'] == 1){
																				$href2 = '../page.php?page='.$sndmenu['menu'];
																				$target2 = '';
																			}else if($sndmenu['pagetype'] == 2){
																				$href2 = '../pages/'.$sndmenu['file'];
																				$target2 = 'target="_blank"';
																			}else if($sndmenu['pagetype'] == 3){
																				$href2 = $sndmenu['link'];
																				$target2 = 'target="_blank"';
																			}else if($sndmenu['pagetype'] == 4){
																				$href2 = $pageArr[$sndmenu['plugin_id']];
																				$target2 = '';
																			}else if($sndmenu['pagetype'] == 5){
																				$href2 = 'javascript:void(0);';
																				$target2 = '';
																			}
																		?>
                                                                        
                                                                            <li>
                                                                            	<a class="dropdown-item" <?php echo $target2;?> href="<?php echo $href2;?>"><?php echo $sndmenu['pagename'];?></a>
                                                                            </li>
                                                                        
                                                                        <?php } echo '</ul>'; }?><!--third level end-->
                                                                        </li>
                                                                        
                                                                    
                                                            <?php } echo '</ul>';}?><!--second level end-->
                                                        </li>
                                            <?php }}?>    
										</ul><!--first level end-->
											</nav>
											</div>
											<button class="btn header-btn-collapse-nav my-2" data-toggle="collapse" data-target=".header-nav-main nav">
												<i class="fas fa-bars"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
					

<style> .blog-posts p{
    font-size:15px;
     color:black;
     
     
  } </style>





