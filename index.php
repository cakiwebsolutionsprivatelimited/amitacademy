
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>  Amit College - Bhubaneswar  </title>	

		<meta name="keywords" content="Amit  College Bhubaneswar" />
		<meta name="description" content="Amit  College Bhubaneswar">
		<meta name="author" content="Amit  College Bhubaneswar">
        <link rel="canonical" href="https://amitcollege.org.in" />

<?php include"header.php";?>
<style>

.about-principal-section{
    background:#f5f7fb;
}

/* Card Design */

.custom-card{
    background:#fff;
    padding:40px;
    border-radius:24px;
    box-shadow:0 10px 35px rgba(0,0,0,0.08);
    transition:0.4s ease;
    position:relative;
    overflow:hidden;
    border:1px solid #eee;
}

.custom-card:hover{
    transform:translateY(-6px);
}

/* Tag */

.section-tag{
    display:inline-block;
  background: #00fff0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0083fe, #00fff0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0083fe, #00fff0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    color:#fff;
    font-size:13px;
    padding:8px 18px;
    border-radius:30px;
    margin-bottom:18px;
    letter-spacing:1px;
    text-transform:uppercase;
}

/* Title */

.section-title{
    font-size:36px;
    font-weight:700;
    margin-bottom:20px;
    color:#111;
}

/* Text */

.section-text{
    font-size:16px;
    line-height:1.9;
    color:#555;
}

/* Principal */

.principal-card{
    background:linear-gradient(135deg,#ffffff,#f9fbff);
}

.principal-img{
    width:90px;
    height:90px;
    object-fit:cover;
    border-radius:50%;
    border:4px solid #111;
}

.principal-name{
    font-size:24px;
    font-weight:700;
    color:#111;
}

.principal-designation{
    color:#777;
    font-size:15px;
}

/* Responsive */

@media(max-width:768px){

    .custom-card{
        padding:28px;
    }

    .section-title{
        font-size:28px;
    }

}

.info-section{
    background:#eef5ff;
}

/* Card */

.info-card{
    background:#fff;
    border-radius:22px;
    overflow:hidden;
    box-shadow:0 10px 35px rgba(0,0,0,0.08);
    height:100%;
    transition:0.4s ease;
    border:1px solid rgba(0,0,0,0.05);
}

.info-card:hover{
    transform:translateY(-6px);
}

/* Header */

.card-header-custom{
    background:linear-gradient(135deg,#005bea,#003b95);
    padding:22px 25px;
}

.card-header-custom h3{
    color:#fff;
    margin:0;
    font-size:24px;
    font-weight:700;
}

/* Body */

.card-body-custom{
    padding:25px;
}

/* News */

.news-item{
    border-bottom:1px solid #e8e8e8;
    padding-bottom:18px;
    margin-bottom:18px;
}

.news-date{
    display:block;
    font-size:13px;
    color:#005bea;
    margin-bottom:6px;
    font-weight:600;
}

.news-item a{
    text-decoration:none;
    color:#222;
    font-weight:600;
    line-height:1.6;
    transition:0.3s;
}

.news-item a:hover{
    color:#005bea;
}

/* Quick Links */

.quick-links{
    list-style:none;
    padding:0;
    margin:0;
}

.quick-links li{
    margin-bottom:15px;
}

.quick-links li:last-child{
    margin-bottom:0;
}

.quick-links a{
    display:flex;
    align-items:center;
    text-decoration:none;
    background:#f5f9ff;
    padding:14px 18px;
    border-radius:12px;
    color:#222;
    font-weight:600;
    transition:0.3s;
    border:1px solid transparent;
}

.quick-links a::before{
    content:"➜";
    margin-right:12px;
    color:#005bea;
    font-size:16px;
}

.quick-links a:hover{
    background:#005bea;
    color:#fff;
    transform:translateX(5px);
}

.quick-links a:hover::before{
    color:#fff;
}

/* Result */

.result-box{
    background:#f7fbff;
    border:1px solid #dbe8ff;
    border-radius:18px;
    padding:22px;
    margin-bottom:20px;
}

.result-box h5{
    font-weight:700;
    margin-bottom:10px;
    color:#003b95;
}

.result-box p{
    color:#666;
    margin-bottom:18px;
}

/* Button */

.custom-btn{
    display:inline-block;
    text-decoration:none;
    background:linear-gradient(135deg,#005bea,#003b95);
    color:#fff;
    padding:12px 22px;
    border-radius:40px;
    font-weight:600;
    transition:0.3s;
}

.custom-btn:hover{
    background:linear-gradient(135deg,#003b95,#005bea);
    color:#fff;
    transform:translateY(-2px);
}

/* Responsive */

@media(max-width:768px){

    .card-header-custom h3{
        font-size:21px;
    }

    .card-body-custom{
        padding:20px;
    }

}




</style>
<div role="main" class="main">
				<div class="slider-container light rev_slider_wrapper" style="height: 650px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider datM.Sc. Biotechnologya-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 550, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-big arrows-dark' }, 'bullets': {'enable': false, 'style': 'bullets-style-1 bullets-color-primary', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
						    <?php 
						        $sel = "select * from tbl_banner where status=1";
						        $banner = $crud->getData($sel);
						        foreach($banner as $img=>$v){
						      
						    ?>
							<li class="" data-transition="fade">
								<img src="banner/<?php echo $v['banner_img'];?>" 
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
<section style="background:linear-gradient(to left, #d22523 0%, #592776 100%) !important;">
				    <div clas="ntfct">
				        <marquee behavior="scroll" direction="left" scrollamount="6" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body">
				            <h4 style="padding-top:5px !important;color:#fff; margin-bottom:-0px !important;"><a href="admissionform.php" target="_blank" style="color:#fff; text-decoration:none;"> "Online Registration is Open for Admission Batch 2025-26" <img src="img/img/new.gif" style="height:45px; width:50px;"></a></h4>
				        </marquee>
				    </div>
				</section>
				<section class="about-principal-section py-5">
    <div class="container">
        
        <div class="row g-4 align-items-stretch">
            
            <!-- About Section -->
            <div class="col-lg-6">
                <div class="custom-card h-100">
                    
                    <div class="section-tag">About Us</div>

                    <h2 class="section-title">
                        Welcome to Amit Academy
                    </h2>

                    <p class="section-text">
                        Amit Academy is dedicated to providing quality education
                        with modern learning methods, experienced faculty, and
                        student-focused development programs. Our mission is to
                        inspire students to achieve academic excellence and build
                        strong careers for the future.
                    </p>

                    <p class="section-text">
                        We focus on discipline, innovation, and practical learning
                        to help students grow confidently in today’s competitive
                        world.
                    </p>

                </div>
            </div>

            <!-- Principal Message -->
            <div class="col-lg-6">
                <div class="custom-card principal-card h-100">

                    <div class="section-tag">Principal Message</div>

                    <div class="d-flex align-items-center mb-4">
                        
                        <img src="https://images.pexels.com/photos/18143810/pexels-photo-18143810.jpeg" alt="Principal"
                            class="principal-img">

                        <div class="ml-3">
                            <h4 class="principal-name mb-1">
                                Dr. Amit Kumar
                            </h4>

                            <span class="principal-designation">
                                Principal
                            </span>
                        </div>

                    </div>

                    <p class="section-text">
                        “Education is not only about academic success but also
                        about building character, confidence, and leadership.
                        At Amit Academy, we continuously strive to create an
                        inspiring environment where every student can discover
                        their true potential.”
                    </p>

                    <p class="section-text mb-0">
                        We believe in nurturing creativity, discipline, and
                        responsibility to prepare students for future challenges.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>
				
				
				<!-- <section class="section bg-color-light border-0 m-0">
					<div class="container">
						<div class="row text-center text-md-left mt-4">
							<div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-4">
										<img class="img-fluid mb-4" src="img/icons/seo-grey.png" alt="">
									</div>
									<div class="col-lg-8">
										<h2 class="font-weight-bold text-5 line-height-5 mb-1">SEO Optimization</h2>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-4">
										<img class="img-fluid mb-4" src="img/icons/marketing-grey.png" alt="">
									</div>
									<div class="col-lg-8">
										<h2 class="font-weight-bold text-5 line-height-5 mb-1">Pro Marketing Ads</h2>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="row justify-content-center justify-content-md-start">
									<div class="col-4">
										<img class="img-fluid mb-4" src="img/icons/support-grey.png" alt="">
									</div>
									<div class="col-lg-8">
										<h2 class="font-weight-bold text-5 line-height-5 mb-1">Secure Support</h2>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->


				<section class="info-section py-5">
    <div class="container">

        <div class="row g-4">

            <!-- News Section -->
            <div class="col-lg-4">
                <div class="info-card">

                    <div class="card-header-custom">
                        <h3>Latest News</h3>
                    </div>

                    <div class="card-body-custom">

                        <div class="news-item">
                            <span class="news-date">12 May 2026</span>
                            <a href="#">Admission Open for 2026 Session</a>
                        </div>

                        <div class="news-item">
                            <span class="news-date">10 May 2026</span>
                            <a href="#">Annual Science Exhibition Announcement</a>
                        </div>

                        <div class="news-item">
                            <span class="news-date">08 May 2026</span>
                            <a href="#">New Computer Lab Inauguration</a>
                        </div>

                        <div class="news-item border-0 pb-0">
                            <span class="news-date">05 May 2026</span>
                            <a href="#">Scholarship Program for Meritorious Students</a>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4">
                <div class="info-card">

                    <div class="card-header-custom">
                        <h3>Quick Links</h3>
                    </div>

                    <div class="card-body-custom">

                        <ul class="quick-links">
                            <li><a href="#">Online Admission</a></li>
                            <li><a href="#">Student Login</a></li>
                            <li><a href="#">Academic Calendar</a></li>
                            <li><a href="#">Examination Schedule</a></li>
                            <li><a href="#">Library Portal</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>

                    </div>

                </div>
            </div>

            <!-- Results Section -->
            <div class="col-lg-4">
                <div class="info-card">

                    <div class="card-header-custom">
                        <h3>Results</h3>
                    </div>

                    <div class="card-body-custom">

                        <div class="result-box">
                            <h5>Class 10 Result 2026</h5>
                            <p>Published on 02 May 2026</p>
                            <a href="#" class="custom-btn">
                                View Result
                            </a>
                        </div>

                        <div class="result-box mb-0">
                            <h5>Class 12 Result 2026</h5>
                            <p>Published on 28 April 2026</p>
                            <a href="#" class="custom-btn">
                                View Result
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

				<section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Amit College</strong></h2>
								<?php 
								$about   = ("SELECT description FROM tbl_pages WHERE status = 1 AND id = 132");
	                            $fetpage   = $crud->getData($about);?>
	                            
								<p class="pr-5 mr-5" style="color:black; text-align:justify;"><?php echo substr(trim(strip_tags(html_entity_decode($fetpage[0]['description']))),0,712);?></p>
								<a href="http://amitcollege.org.in/page.php?page=132" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">READ MORE</a>
							</div>
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
								<center><h2 class="text-color-dark font-weight-normal text-6 mb-2">Principal's<strong class="font-weight-extra-bold"> Message</strong></h2></center>
								<center><img src="img/img/principal2.jpeg" style="height:150px; width:150px;border-radius:50%;"></center>
							
								<center><p style="color:black;"><?php echo substr(trim(strip_tags(html_entity_decode($fetpage[0]['description']))),0,434);?></p></center>
								<center><a href="https://amitcollege.org.in/principal.php" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">READ MORE</a></center>
							</div>
						</div>
					</div>
				</section>
				



				<div class="container-lg">
					
							<div class="col text-center" style="margin-top:30px;">
								<h2 class="font-weight-normal mb-5">Why <strong class="font-weight-extra-bold">Amit College</strong></h2>
							</div>
						
					<div class="row">
					    <div class="col-lg-3">
					        <aside class="sidebar">
					            <center><h5 class="font-weight-bold pt-3">Quick Links</h5></center>
					            <ul class="nav nav-list flex-column">
									<li class="nav-item"><a class="nav-link" href="http://nyayabati.com/" target="_blank">E-NEWS(The Nayabati)</a></li>
									<li class="nav-item"><a class="nav-link" href="https://ndl.iitkgp.ac.in/" target="_blank">E-Learning through National Digital Learning (NDL, IIT Kharagpur) </a></li>
									<li class="nav-item"><a class="nav-link" href="https://swayam.gov.in/" target="_blank">E-LEARNING through SWAYAM </a></li>
									<li class="nav-item"><a class="nav-link" href="php/process.docx">ON LINE REGISTRATION FOR ADMISSION 2022-23 IS OPEN. 
</a></li>
								
								<!--	<li class="nav-item"><a class="nav-link" href="#">Sports & Outdoors</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Tools & Home Improvement</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Toys & Games</a></li>-->
								</ul>
					        </aside>
					    </div>
						<div class="col-sm-10 col-md-7 col-lg-3 mb-4 mb-lg-0">
							<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<i class="icon-featured far fa-file-alt text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">News</strong></h2>
										<!--<marquee behavior="scroll" direction="up" scrollamount="6" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body">
										    <ul style="color:#990000;">
										        <li>Now Online classes will be Conducted</li>
										        <li>College Is Closed due to Corona Virus.</li>
										    </ul>
										 </marquee>-->
										 <marquee behavior="scroll" direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body" >
								 <?php 
										$limit = 4;  
        						        $sel = "select * from tbl_news ORDER BY id DESC LIMIT $limit";
        						        $notification = $crud->getData($sel);
        						        foreach($notification as $ky=>$vl){
						         ?>
						                
										<h6 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php echo $vl['image'];?>" target="_blank" style="font-size:16px;text-decoration:none; color:#b30000;"><?php echo $vl['news_title'];?></a>&nbsp;<img src="img/img/new4.gif"></h6>
										
							<?php } ?>
							
							</marquee>
										<a href="#" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">VIEW MORE</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-10 col-md-7 col-lg-3 mb-4 mb-lg-0">
							<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<i class="icon-featured fa fa-bell text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">Notification</strong></h2>
										<marquee behavior="scroll" direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body" >
										<?php 
										$limit = 4;  
        						        $sel = "select * from tbl_notification ORDER BY id DESC LIMIT $limit";
        						        $notification = $crud->getData($sel);
        						        foreach($notification as $ky=>$vl){
						         ?>
						                
										<h6 class="font-weight-semibold"><a href="<?php if($vl['type']==3){
                                		 echo $vl['link'];
                                		 }else{?>
                                		 notification/<?php echo $vl['file'];
		                         }?>" target="_blank" style="font-size:16px; text-decoration:none; color:#b30000;"><?php echo $vl['notification'];?></a>&nbsp;<img src="img/img/new4.gif"></h6>
		                         <?php } ?>
							 </marquee>
										<a href="#" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">VIEW MORE</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-10 col-md-7 col-lg-3 mb-4 mb-lg-0">
							<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<i class="icon-featured fa fa-gavel text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">Results</strong></h2>
										<marquee behavior="scroll" direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body" >
										    <?php 
										$limit = 5;  
        						        $sel = "select * from tbl_result ORDER BY id ASC LIMIT $limit";
        						        $link = $crud->getData($sel);
        						        foreach($link as $ky=>$vl){
						         ?>
						                
										<h4 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php if($vl['type']==3){
                                		 echo $vl['link'];
                                		 }else{?>
                                		 notification/<?php echo $vl['file'];
		                         }?>" target="_blank" style="font-size:16px;text-decoration:none; color:#b30000;"><?php echo $vl['title'];?></a></h4>
										
							        <?php } ?> 
										</marquee>
										<a href="#" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">VIEW MORE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<section class="section section-background section-center overlay overlay-show overlay-op-8 my-0" style="background-image: url(img/img/sl4.jpg); background-position: 50% 100%; min-height: 615px;" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row">
							<div class="col text-center" style="margin-top:10px;">
								<h2 class="font-weight-normal text-light mb-5">Our <strong class="font-weight-extra-bold">Department</strong></h2>
							</div>
						</div>
						<div class="row mb-5 pb-3">
						
						<div class="col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							

							<div class="card">
								<img class="card-img-top" src="img/img/bca2.jpg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">BCA</h4>
									<p class="card-text" style="color:black;">Bachelor of Computer Applications (BCA) is a three-year undergraduate degree course in India...</p>
									<a href="bca.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
						<div class=" col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							

							<div class="card">
								<img class="card-img-top" src="img/img/bba2.jpg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">BBA</h4>
									<p class="card-text" style="color:black;">The Bachelor of Business Administration BBA or B.B.A. is a three year certification in business organization...</p>
									<a href="bba.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
						<div class=" col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							

							<div class="card">
								<img class="card-img-top" src="img/img/chem2.jpg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">Biotechnology</h4>
									<p class="card-text" style="color:black;">M.Sc. Biotechnology is a new scientific multi-disciplinary professional course, it trains and updates scientific knowledge...</p>
									<a href="biotechnology.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row mb-5 pb-3">
						<div class="col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="card">
								<img class="card-img-top" src="img/img/mba2.jpg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">MBA</h4>
									<p class="card-text" style="color:black;">Master of Business Administration or MBA is one of the most popular post-graduate programmes in India and abroad... </p>
									<a href="mba.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
						<div class=" col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="card">
								<img class="card-img-top" src="img/img/msc2.jpg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">M.Sc (Computer Science)</h4>
									<p class="card-text" style="color:black;">M.Sc. in Computer Science is a two-year post-graduate programme with the objective to develop human resources...</p>
									<a href="msc.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
						<div class=" col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<div class="card">
								<img class="card-img-top" src="img/img/physics2.jpg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">+2 Sc.</h4>
									<p class="card-text" style="color:black;">The only criterion token Into consideration at alstages is merit. Students capability Isthe only recommendation needed to get admission throh the e-counsellr19 (SAMS).</p>
									<a href="+2science.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row mb-5 pb-3">
						
						<div class="col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							

							<div class="card">
								<img class="card-img-top" src="img/img/graduation2.jpeg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">+3 (Sc. & Comm)</h4>
									<p class="card-text" style="color:black;">The +3 Science (Hons.) programme having Physics, Chemistry, Mathematics, Botany, Zoology, Geology, Comp. Science, IT of AMIT.</p>
									<a href="+3sc&comm.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
						<div class=" col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							

							<div class="card">
								<img class="card-img-top" src="img/img/dmlt2.jpg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">DMLT</h4>
									<p class="card-text" style="color:black;">A medical laboratory scientist (MLS), also traditionally referred to as a clinical laboratory scientist...</p>
									<a href="dmlt.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
						<div class=" col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							

							<div class="card">
								<img class="card-img-top" src="img/img/mjmc2.jpg" alt="Card Image">
								<div class="card-body">
									<h4 class="card-title mb-1 text-4 font-weight-bold" style="color:#990000;">MJMC</h4>
									<p class="card-text" style="color:black;">MJMC (Master of Journalism & Mass Communication) is a postgraduate mass communication course of two years...</p>
									<a href="mjmc.php" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				</section>

				<div class="container">
					<div class="row">
							<div class="col text-center" style="margin-top:30px;">
								<h2 class="font-weight-normal mb-5">Our <strong class="font-weight-extra-bold">Facilities</strong></h2>
							</div>
						</div>
					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
						

							<div class="card text-center">
								<div class="card-header text-5 text-uppercase" style="color:#990000; background-color:#2faadc;">
									<b>Computer Lab</b>
								</div>
								<div class="card-body">
									<!--<h4 class="card-title mb-1 text-4 font-weight-bold">Card Title</h4>-->
									<img src="img/img/comp.png" style="height:100px; width:100px; border-radius:50%;">
									<p class="card-text" style="color:black;">The Computer Laboratory is well equipped with adequate number of   computers with Internet facilities and latest bioscience software with NT Server...</p>
									
								</div>
								<div class="card-footer bg-color-grey text-1 text-uppercase">
									<a href="http://amitcollege.org.in/page.php?page=159" class="btn btn-primary btn-modern">Read More</a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							

							<div class="card text-center">
								<div class="card-header text-5 text-uppercase" style="color:#990000; background-color:#2faadc;">
									<b>Library</b>
								</div>
								<div class="card-body">
									<!--<h4 class="card-title mb-1 text-4 font-weight-bold">Card Title</h4>-->
									<img src="img/img/library.png" style="height:100px; width:100px; border-radius:50%;">
									<p class="card-text" style="color:black;">The institute has a well-furnished and computerized library. It has an   excellent collection of books on Bioscience, Journalism, Mass Communication...</p>
									
								</div>
								<div class="card-footer bg-color-grey text-1 text-uppercase">
									<a href="http://amitcollege.org.in/page.php?page=158" class="btn btn-primary btn-modern">Read More</a>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
							

							<div class="card text-center">
								<div class="card-header text-5 text-uppercase" style="color:#990000; background-color:#2faadc;">
									<b>Training & Placement</b>
								</div>
								<div class="card-body">
									<!--<h4 class="card-title mb-1 text-4 font-weight-bold">Card Title</h4>-->
									<img src="img/img/workshop.jpg" style="height:100px; width:100px; border-radius:50%;">
									<p class="card-text" style="color:black;">The institute has a training and placement division functioning under a Placement Officer. Special training is laid on training that promise for...</p>
									
								</div>
								<div class="card-footer bg-color-grey text-1 text-uppercase">
									<a href="#" class="btn btn-primary btn-modern">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br/><br/>

  
  
  <div class="container">
					<div class="row">
							<div class="col text-center" style="margin-top:30px;">
								<h2 class="font-weight-normal mb-5">Our <strong class="font-weight-extra-bold">Placement Students</strong></h2>
							</div>
						</div>
					<div class="row justify-content-center">
					 <table border="1" cellpadding="6" cellspacing="0">
	<thead>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Company / Organization</th>
			<th>No.</th>
			<th>Name</th>
			<th>Company / Organization</th>
			<th>No.</th>
			<th>Name</th>
			<th>Company / Organization</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>SIPRA DASH</td>
			<td>TECHNO SOLUTION</td>
			<td>2</td>
			<td>SANJAY SINGH</td>
			<td>ORTEL COMMUNICATION, BBSR</td>
			<td>3</td>
			<td>GURDEEP KAUR</td>
			<td>MASCAT, MUMBAI</td>
		</tr>
		<tr>
			<td>4</td>
			<td>SIBASIS DAS</td>
			<td>ANDROID, NEW DELHI</td>
			<td>5</td>
			<td>KRISHNA CHANDAN</td>
			<td>ICICI BANK</td>
			<td>6</td>
			<td>BHABANI DIXIT</td>
			<td>ACCENTURE INDIA, BANGALORE</td>
		</tr>
		<tr>
			<td>7</td>
			<td>ROSALIN NANDA</td>
			<td>TECHNO SOLUTION</td>
			<td>8</td>
			<td>PRITIKHSYA BISWAL</td>
			<td>SPECTRA.NET, AHMEDABAD</td>
			<td>9</td>
			<td>ANULITA MISHRA</td>
			<td>BEDANTAALUMINA, JHARSUGUDA</td>
		</tr>
		<tr>
			<td>10</td>
			<td>PRAVASIN MOHAPATRA</td>
			<td>UCO BANK</td>
			<td>11</td>
			<td>SANDIP SINGH</td>
			<td>DRDA, GOVT. OF ODISHA</td>
			<td>12</td>
			<td>GOUTAM PADHI</td>
			<td>TCS, MUMBAI</td>
		</tr>
		<tr>
			<td>13</td>
			<td>DIPSA ROUTRAY</td>
			<td>EKLABYA MODEL SCHOOL</td>
			<td>14</td>
			<td>SUBHRANSHU DASH</td>
			<td>DAV, ROURKELA</td>
			<td>15</td>
			<td>CHABI SETHI</td>
			<td>UTKAL UNIVERSITY, BBSR</td>
		</tr>
		 
	</tbody>
</table>


					 
					</div>
    
    <br> <br>
    	<div class="row" style="margin-bottom:-60px !important;">
							<div class="col text-center" style="margin-top:-30px !important; ">
								<a href="https://amitcollege.org.in/page.php?page=166" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">VIEW MORE</a>
							</div>
						</div>
    
    
    <br> <br>
    <br> <br>
				</div>
				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0" data-appear-animation="fadeIn">
					<div class="container container-xl">
						<div class="row">

  <div class="col-md-6">
  	<h4 style="text-align:center;">Mjmc 21 University Topper</h4>
  	<center><img src="img/mjmctopper.jpeg" class="img-fluid" alt="testimonial" style="height:150px; width:210px;"></center>
  </div>

						     <div class="col-md-6">
						          <h2 class="mt-4 mb-2 text-dark text-center">What Student's Say<strong> About Us</strong></h2>
					    <hr class="custom-divider m-0">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								
								<!--<div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-dark nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 3000}">-->
									<div>
										<div class="testimonial mb-0">
											
												<center><img src="user.png" class="img-fluid rounded-circle" alt="testimonial" style="height:70px; width:70px;"></center>
											
											
												<p class="text-color-dark  mb-0">Regular classes held at our college to help us with our aptitude and technical skills were of great help. Our placement administration officers also guided and  helps us in our work...</p>
											
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- Swasha singh</strong></p>
											</div>
										</div>
									</div>
									<!--<div>
										<div class="testimonial testimonial-style-2 mb-0">
											<div class="testimonial-author">
												<img src="img/cls/tl2.jpg" class="img-fluid rounded-circle" alt="">
											</div>
											<blockquote>
												<p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
											</div>
										</div>
									</div>-->
									<!--<div>
										<div class="testimonial testimonial-style-2 mb-0">
											<div class="testimonial-author">
												<img src="img/cls/tl3.jpg" class="img-fluid rounded-circle" alt="">
											</div>
											<blockquote>
												<p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
											</div>
										</div>
									</div>-->
								<!--</div>-->

							</div>
						</div>
						<!-- <div class="col-md-6">
						    <section   >
						        <div class="container">
						            <center><h4 style="background-color:#AEB6BF; border-radius:8px; padding:10px; color:#fff; font-size:24px; font-family:sans-serif;">Enquiry or Request a Call Back</h4></center>
						
										<?php include "eform.php";?>
							
						
					                </div>
						    </section>
						</div> -->
						</div>
					</div>
				</section>

				<!-- <section class="section bg-color-light section-height-3 border-0 m-0">
					<div class="container pb-2">
						<div class="row">
							<div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
								<div class="row justify-content-center my-5">
									<div class="col-8 text-center col-md-4">
										<img src="img/logos/logo-1.png" class="img-fluid hover-effect-3" alt="" />
									</div>
									<div class="col-8 text-center col-md-4 my-3 my-md-0">
										<img src="img/logos/logo-2.png" class="img-fluid hover-effect-3" alt="" />
									</div>
									<div class="col-8 text-center col-md-4">
										<img src="img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="" />
									</div>
								</div>
								<a href="#" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">LEARN MORE</a>
							</div>
							<div class="col-lg-6">
								<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
									<div>
										<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
											<div class="testimonial-author">
												<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
											</div>
											<blockquote>
												<p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
											</div>
										</div>
									</div>
									<div>
										<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
											<div class="testimonial-author">
												<img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
											</div>
											<blockquote>
												<p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->

				<section class="section bg-color-light section-height-3 border-0 m-0">
					<div class="container container-xl py-3">
						<div class="row" style="margin-top:-70px !important;">
							<div class="col text-center">
								<h2 class="font-weight-normal mb-5">Our <strong class="font-weight-extra-bold">Gallery</strong></h2>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col" style="margin-top:-40px !important;">
								
								<div class="owl-carousel owl-theme nav-style-1 stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}}, 'margin': 3, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="img/img/1.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="img/img/2.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="img/img/3.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="img/img/4.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="img/img/5.jpg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="m-3">
										<div class="hover-effect-3d">
											<div class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom rounded-0">
												<div class="thumb-info-wrapper">
													<img src="img/img/6.jpeg" class="img-fluid rounded-0 hover-effect-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row" style="margin-bottom:-60px !important;">
							<div class="col text-center" style="margin-top:-30px !important; ">
								<a href="http://amitcollege.org.in/gallery.php" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">VIEW MORE</a>
							</div>
						</div>
					</div>
				</section>

  
  
  
				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
				<div class="container">
					<div class="row">
							<div class="col text-center" style="margin-bottom:-75px; margin-top:-50px !important;">
								<h2 class="font-weight-normal mb-5" >Our <strong class="font-weight-extra-bold"> Recruiters</strong></h2>
							</div>
						</div>
					<div class="row py-5 my-5" >
						<div class="col" style="margin-bottom:-125px !important; margin-top:-60px !important;">
					
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
						 
								<div>
									<img class="img-fluid " src="img/img/tata.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/wipro.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid " src="img/img/tcs-2.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/android.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/bajaj-m.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/wipro.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/tech-mahindra.png" alt="" style="padding:20px !important;">
								</div>
                              <div>
									<img class="img-fluid" src="img/img/oracle.png" alt="" style="padding:20px !important;">
								</div>
                              
                      
							</div>
							
						</div>
					</div>
                  	<div class="row" style="margin-bottom:-60px !important;">
							<div class="col text-center" style="margin-top:-30px !important; ">
								<a href="https://amitcollege.org.in/page.php?page=168" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">VIEW MORE</a>
							</div>
						</div>
				</div>
			</section>
		</div>
		<?php include "footer.php";?>


