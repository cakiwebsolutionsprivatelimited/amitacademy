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
         :root{
    --primary:#0083fe;
    --secondary:#000;
    --light:#f5f9ff;
    --white:#fff;
}
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
         width:120px;
         height:120px;
         object-fit:contain;
         border-radius:50%;
		 border:3px solid var(--primary);
        
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
         .card-header-custom{
         background:var(--primary);
         padding:22px 25px;
         }
         .card-header-custom h3{
         color:#fff;
         margin:0;
         font-size:24px;
         font-weight:700;
         }
         /* Arrow Button */
         .header-arrow{
         width:42px;
         height:42px;
         background:rgba(255,255,255,0.15);
         border:1px solid rgba(255,255,255,0.25);
         border-radius:50%;
         display:flex;
         align-items:center;
         justify-content:center;
         color:#fff;
         text-decoration:none;
         font-size:22px;
         transition:0.4s ease;
         backdrop-filter:blur(4px);
         }
         .header-arrow:hover{
         background:#fff;
         color:#005bea;
         transform:translateX(4px);
         }
         a {
         text-decoration:none !important;
         }
         /* course section  */
         /* SECTION */
         .course-section{
         padding:40px 0;
         position:relative;
         overflow:hidden;
         background-color: #f0f4f8;
         }
         /* HEADER */
         .stats-header{
         text-align:center;
         margin-bottom:60px;
         }
         .stats-tag{
         display:inline-flex;
         align-items:center;
         gap:10px;
         background:rgba(255,199,4,0.15);
         color:var(--primary);
         padding:12px 22px;
         border-radius:50px;
         font-weight:700;
         margin-bottom:22px;
         font-size:15px;
         }
         .stats-header h2{
         font-size:48px;
         font-weight:800;
         color:var(--primary);
         margin-bottom:18px;
         }
         .stats-header h2 span{
         color:var(--secondary);
         }
         .stats-header p{
         max-width:720px;
         margin:auto;
         color:#666;
         line-height:1.8;
         font-size:17px;
         }
         /* CARD */
         .course-card{
         background:#fff;
         border-radius:24px;
         overflow:hidden;
         position:relative;
         transition:0.5s ease;
         box-shadow:0 12px 35px rgba(0,0,0,0.07);
         height:100%;
         }
         .course-card:hover{
         transform:translateY(-12px);
         box-shadow:0 25px 50px rgba(1,56,147,0.18);
         }
         /* IMAGE */
         .course-img{
         height:240px;
         overflow:hidden;
         position:relative;
         }
         .course-img img{
         width:100%;
         height:100%;
         object-fit:cover;
         transition:0.6s ease;
         }
         .course-card:hover .course-img img{
         transform:scale(1.12) rotate(2deg);
         }
         .course-img::after{
         content:"";
         position:absolute;
         inset:0;
         background:linear-gradient(to top,
         rgba(1,56,147,0.8),
         rgba(1,56,147,0.1));
         }
         /* CONTENT */
         .course-content{
         padding:30px;
         position:relative;
         }
         .course-tag{
         position:absolute;
         top:-18px;
         left:30px;
         background:var(--secondary);
         color:#fff;
         padding:10px 20px;
         border-radius:50px;
         font-size:14px;
         font-weight:700;
         box-shadow:0 10px 25px rgba(255,199,4,0.35);
         }
         .course-content .course-title{
         /* font-size:28px; */
         color:var(--primary);
         margin-bottom:15px;
         margin-top:12px;
         font-weight:700;
         transition:0.3s;
         text-transform:capitalize;
         }
         .course-card:hover h3{
         color:var(--secondary);
         }
         .course-content p{
         color:#666;
         line-height:1.8;
         margin-bottom:28px;
         }
         /* BUTTON */
         .course-btn{
         display:inline-flex;
         align-items:center;
         gap:10px;
         background:var(--primary);
         color:#fff;
         text-decoration:none;
         padding:14px 26px;
         border-radius:50px;
         font-weight:600;
         overflow:hidden;
         position:relative;
         transition:0.4s ease;
         }
         .course-btn::before{
         content:"";
         position:absolute;
         top:0;
         left:0;
         width:0%;
         height:100%;
         background:var(--secondary);
         transition:0.5s ease;
         z-index:0;
         }
         .course-btn span,
         .course-btn i{
         position:relative;
         z-index:1;
         }
         .course-btn:hover{
         color:#fff;
         transform:translateY(-3px);
         }
         .course-btn:hover::before{
         width:100%;
         }
         .course-btn i{
         transition:0.4s ease;
         }
         .course-btn:hover i{
         transform:translateX(6px);
         }
         /* FLOAT EFFECT */
         .course-card::before{
         content:"";
         position:absolute;
         width:130px;
         height:130px;
         border-radius:50%;
         background:rgba(255,199,4,0.12);
         top:-45px;
         right:-45px;
         transition:0.6s ease;
         }
         .course-card:hover::before{
         transform:scale(1.5);
         }
         /* RESPONSIVE */
         @media(max-width:991px){
         .stats-header h2{
         font-size:38px;
         }
         }
         @media(max-width:768px){
         .course-section{
         padding:70px 0;
         }
         .stats-header h2{
         font-size:32px;
         }
         .course-content h3{
         font-size:24px;
         }
         }
         .news-image{
         width:100%;
         height:250px;
         overflow:hidden;
         border-radius:20px;
         background:#f1f1f1;
         display:flex;
         align-items:center;
         justify-content:center;
         }
         .news-image img{
         width:100%;
         height:100%;
         object-fit:cover;
         object-position:center;
         display:block;
         }
         /* Why Choose Us  */
         :root{
         --primary:#0083fe;
         --secondary:#000;
         --dark:#06111f;
         --light:#f5f9ff;
         --white:#fff;
         }
         /* SECTION */
         .parallax-section{
         position:relative;
         padding:60px 0;
         overflow:hidden;
         background:
         linear-gradient(rgba(3,10,22,0.88),
         rgba(3,10,22,0.88)),
         url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1600&auto=format&fit=crop');
         background-size:cover;
         background-position:center;
         background-attachment:fixed;
         }
         /* GLOW EFFECT */
         .parallax-section::before{
         content:"";
         position:absolute;
         width:400px;
         height:400px;
         border-radius:50%;
         background:rgba(0,131,254,0.15);
         top:-120px;
         right:-100px;
         filter:blur(30px);
         }
         .parallax-section::after{
         content:"";
         position:absolute;
         width:300px;
         height:300px;
         border-radius:50%;
         background:rgba(255,255,255,0.04);
         bottom:-100px;
         left:-100px;
         filter:blur(20px);
         }
         /* CONTENT */
         .parallax-content{
         position:relative;
         z-index:2;
         }
         .parallax-tag{
         display:inline-flex;
         align-items:center;
         gap:10px;
         background:rgba(255,255,255,0.08);
         border:1px solid rgba(255,255,255,0.08);
         color:#fff;
         padding:12px 24px;
         border-radius:50px;
         font-weight:600;
         margin-bottom:25px;
         backdrop-filter:blur(10px);
         }
         .parallax-content h2{
         font-size:58px;
         font-weight:800;
         color:#fff;
         line-height:1.2;
         margin-bottom:24px;
         }
         .parallax-content h2 span{
         color:var(--primary);
         }
         .parallax-content p{
         color:rgba(255,255,255,0.75);
         font-size:17px;
         line-height:1.9;
         margin-bottom:35px;
         max-width:650px;
         }
         /* BUTTONS */
         .parallax-btns{
         display:flex;
         flex-wrap:wrap;
         gap:18px;
         }
         .primary-btn{
         background:var(--primary);
         color:#fff;
         padding:16px 32px;
         border-radius:50px;
         text-decoration:none;
         font-weight:600;
         transition:0.4s ease;
         display:inline-flex;
         align-items:center;
         gap:10px;
         }
         .primary-btn:hover{
         background:#fff;
         color:#111;
         transform:translateY(-4px);
         }
         .outline-btn{
         border:1px solid rgba(255,255,255,0.20);
         color:#fff;
         padding:16px 32px;
         border-radius:50px;
         text-decoration:none;
         font-weight:600;
         transition:0.4s ease;
         display:inline-flex;
         align-items:center;
         gap:10px;
         backdrop-filter:blur(10px);
         }
         .outline-btn:hover{
         background:#fff;
         color:#111;
         transform:translateY(-4px);
         }
         /* ILLUSTRATION */
         .parallax-illustration{
         position:relative;
         z-index:2;
         text-align:center;
         }
         .parallax-illustration img{
         width:100%;
         max-width:520px;
         animation:float 4s ease-in-out infinite;
         filter:drop-shadow(0 20px 40px rgba(0,0,0,0.35));
         }
         /* FLOAT ANIMATION */
         @keyframes float{
         0%{
         transform:translateY(0px);
         }
         50%{
         transform:translateY(-18px);
         }
         100%{
         transform:translateY(0px);
         }
         }
         /* STATS */
         .parallax-stats{
         margin-top:45px;
         display:flex;
         flex-wrap:wrap;
         gap:30px;
         }
         .stat-box h3{
         color:#fff;
         font-size:42px;
         font-weight:800;
         margin-bottom:5px;
         }
         .stat-box p{
         margin:0;
         color:rgba(255,255,255,0.65);
         font-size:15px;
         }
         /* RESPONSIVE */
         @media(max-width:991px){
         .parallax-section{
         background-attachment:scroll;
         text-align:center;
         }
         .parallax-content h2{
         font-size:42px;
         }
         .parallax-btns{
         justify-content:center;
         }
         .parallax-stats{
         justify-content:center;
         }
         .parallax-illustration{
         margin-top:50px;
         }
         }
         @media(max-width:768px){
         .parallax-section{
         padding:40px 0;
         }
         .parallax-content h2{
         font-size:32px;
         }
         .parallax-content p{
         font-size:15px;
         }
         }

		 

/* Company SECTION */

.recruiter-section{
    padding:20px 0;
    overflow:hidden;
    position:relative;
}

/* HEADER */

.recruiter-header{
    text-align:center;
    margin-bottom:60px;
}

.recruiter-tag{
    display:inline-flex;
    align-items:center;
    gap:10px;
    background:rgba(0,131,254,0.10);
    color:var(--primary);
    padding:12px 24px;
    border-radius:50px;
    font-weight:700;
    margin-bottom:20px;
}

.recruiter-header h2{
    font-size:48px;
    font-weight:800;
    color:var(--secondary);
    margin-bottom:18px;
}

.recruiter-header h2 span{
    color:var(--primary);
}

.recruiter-header p{
    max-width:700px;
    margin:auto;
    color:#666;
    line-height:1.9;
}

.recruiter-card{
    min-width:180px;
    height:110px;
    background:#fff;
    border-radius:24px;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.06);
    transition:0.4s ease;
    border:1px solid rgba(0,0,0,0.05);
}

.recruiter-card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,131,254,0.15);
}

.recruiter-logo{
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    overflow:hidden;
}

.recruiter-logo img{
    max-width:100%;
    max-height:70px;
    object-fit:contain;
    object-position:center;
    transition:0.4s ease;
    filter:grayscale(0%);
}

.recruiter-card:hover .recruiter-logo img{
    transform:scale(1.08);
}

/* MARQUEE */

.marquee-wrapper{
    overflow:hidden;
    margin-bottom:25px;
}

.marquee-track{
    display:flex;
    gap:25px;
    width:max-content;
    animation:scrollLeft 10s linear infinite;
}

.marquee-track.reverse{
    animation:scrollRight 10s linear infinite;
}

@keyframes scrollLeft{

    0%{
        transform:translateX(0);
    }

    100%{
        transform:translateX(-50%);
    }

}

@keyframes scrollRight{

    0%{
        transform:translateX(-50%);
    }

    100%{
        transform:translateX(0);
    }

}

.marquee-wrapper:hover .marquee-track{
    animation-play-state:paused;
}
      </style>
      
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
                        <div class="section-tag">Director Message</div>
                        <div class="d-flex align-items-center mb-4">
                           <img src="img/director.jpeg" alt="Principal"
                              class="principal-img">
                           <div class="ml-3">
                              <h4 class="principal-name mb-1">
                               Prof. Dr. Suprita Palit
                              </h4>
                              <span class="principal-designation">
                             Director
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
			 <section class="parallax-section">
            <div class="container position-relative">
               <div class="row align-items-center g-5">
                  <!-- CONTENT -->
                  <div class="col-lg-6">
                     <div class="parallax-content">
                        <div class="parallax-tag">
                           <i class="fas fa-rocket"></i>
                           Next Generation Learning
                        </div>
                        <h2>
                           Transform Your Future With
                           <span>Smart Education</span>
                        </h2>
                        <p>
                           Experience immersive digital learning, industry-focused
                           programs, and innovative educational technologies designed
                           to empower students for tomorrow’s opportunities.
                        </p>
                        <!-- 
                           <div class="parallax-btns">
                           
                               <a href="#" class="primary-btn">
                                   Explore Courses
                                   <i class="fas fa-arrow-right"></i>
                               </a>
                           
                               <a href="#" class="outline-btn">
                                   Watch Video
                                   <i class="fas fa-play"></i>
                               </a>
                           
                           </div> -->
                        <!-- STATS -->
                        <div class="parallax-stats">
                           <div class="stat-box">
                              <h3>15K+</h3>
                              <p>Students Enrolled</p>
                           </div>
                           <div class="stat-box">
                              <h3>120+</h3>
                              <p>Expert Mentors</p>
                           </div>
                           <div class="stat-box">
                              <h3>98%</h3>
                              <p>Placement Rate</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ILLUSTRATION -->
                  <div class="col-lg-6">
                     <div class="parallax-illustration">
                        <img src="img/wh-img.png">
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="course-section">
            <div class="container">
               <!-- HEADER -->
               <div class="stats-header" data-aos="fade-up" data-aos-duration="800">
                  <h2>Explore  <span>industry-focused programs</span></h2>
                  <!-- 
                     <p>
                         Real metrics reflecting our commitment to transforming
                         education across the nation.
                     </p> -->
               </div>
               <!-- COURSE ROW -->
               <div class="row g-4">
                  <!-- CARD 1 -->
                  <div class="col-lg-4 col-md-6">
                     <div class="course-card">
                        <div class="course-img">
                           <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop" alt="">
                        </div>
                        <div class="course-content">
                           <div class="course-tag">
                              MBA
                           </div>
                           <h3 class="course-title">Human Resources</h3>
                           <p>
                              MBA in HR focuses on developing leadership, recruitment, employee management, organizational behavior, training, payroll, and strategic human resource planning skills. T
                           </p>
                           <a href="#" class="course-btn">
                           <span>Explore Course</span>
                           <i class="fas fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- CARD 2 -->
                  <div class="col-lg-4 col-md-6">
                     <div class="course-card">
                        <div class="course-img">
                           <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop" alt="">
                        </div>
                        <div class="course-content">
                           <div class="course-tag">
                              MBA
                           </div>
                           <h3  class="course-title">Digital Marketing</h3>
                           <p>
                              Learn branding, SEO, advertising, social media growth,
                              and performance marketing strategies from experts.
                           </p>
                           <a href="#" class="course-btn">
                           <span>Explore Course</span>
                           <i class="fas fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- CARD 3 -->
                  <div class="col-lg-4 col-md-6">
                     <div class="course-card">
                        <div class="course-img">
                           <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1200&auto=format&fit=crop" alt="">
                        </div>
                        <div class="course-content">
                           <div class="course-tag">
                              MBA
                           </div>
                           <h3 class="course-title">Finance</h3>
                           <p>
                              MBA in Finance focuses on financial management, investment analysis, banking, taxation, accounting, risk management, and corporate finance.
                           </p>
                           <a href="#" class="course-btn">
                           <span>Explore Course</span>
                           <i class="fas fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         
        

         <section class="info-section py-5">
            <div class="container">
               <div class="row g-4">
                  <!-- News Section -->
                  <div class="col-lg-6">
                     <div class="info-card">
                        <div class="card-header-custom d-flex justify-content-between align-items-center">
                           <h3>Latest News</h3>
                           <a href="#" class="header-arrow">
                           <i class="fa-solid fa-arrow-down fa-rotate-270"></i>
                           </a>
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
                  <div class="col-lg-6">
                     <div class="info-card">
                        <div class="card-header-custom     d-flex justify-content-between align-items-center">
                           <h3>Events</h3>
                           <a href="#" class="header-arrow">
                           <i class="fa-solid fa-arrow-down fa-rotate-270"></i>
                           </a>
                        </div>
                        <div class="card-body-custom">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="owl-carousel owl-theme dots-morphing" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items':1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
                                    <div>
                                       <div class="news-image"> 
                                          <img alt="" class="img-fluid rounded" src="https://images.pexels.com/photos/8106659/pexels-photo-8106659.jpeg">
                                       </div>
                                    </div>
                                    <div>
                                       <div class="news-image"> 
                                          <img alt="" class="img-fluid rounded" src="https://images.pexels.com/photos/26937961/pexels-photo-26937961.jpeg">
                                       </div>
                                    </div>
                                    <div>
                                       <div class="news-image"> 
                                          <img alt="" class="img-fluid rounded" src="https://images.pexels.com/photos/37296595/pexels-photo-37296595.jpeg">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
	<section class="parallax section section-text-light section-parallax section-center mt-0 mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="https://images.pexels.com/photos/8093042/pexels-photo-8093042.jpeg">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
									<div>
										<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
											<div class="testimonial-author">
												<img src="https://images.pexels.com/photos/34397884/pexels-photo-34397884.jpeg" class="img-fluid rounded-circle" alt="">
											</div>
											<blockquote>
												<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
											</div>
										</div>
									</div>
									<div>
										<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
											<div class="testimonial-author">
												<img src="https://images.pexels.com/photos/15092996/pexels-photo-15092996.jpeg" class="img-fluid rounded-circle" alt="">
											</div>
											<blockquote>
												<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
         
 

 

<section class="recruiter-section">

    <div class="container">

        <!-- HEADER -->

        <div class="recruiter-header">

            <div class="recruiter-tag">
                <i class="fas fa-briefcase"></i>
                Top Recruiters
            </div>

            <h2>
                Trusted By <span>Leading Companies</span>
            </h2>

            <p>
                Our students are placed in top multinational companies,
                startups, and industry-leading organizations worldwide.
            </p>

        </div>

    </div>

    <!-- ROW 1 -->

  <!-- ROW 1 -->

<div class="marquee-wrapper">

    <div class="marquee-track">

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/tcs.png" alt="TCS">
            </div>

            

        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/infosys.png" alt="Infosys">
            </div>

             
        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/wipro.png" alt="Wipro">
            </div>

            

        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/cognizant.png" alt="Cognizant">
            </div>

            
        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/ibm.png" alt="IBM">
            </div>

             
        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/oracle.png" alt="Oracle">
            </div>

            
        </div>

        <!-- DUPLICATE -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/tcs.png" alt="TCS">
            </div>

             
        </div>

    </div>

</div>


<!-- ROW 2 -->

<div class="marquee-wrapper">

    <div class="marquee-track reverse">

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/icci-bank.png" alt="ICICI Bank">
            </div>
 
        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/tech-mahindra.png" alt="Tech Mahindra">
            </div>

            

        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/dell.png" alt="Dell">
            </div>

           

        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/mahindra.png" alt="Mahindra">
            </div>

             

        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/tata.png" alt="Tata">
            </div>

           

        </div>

        <!-- CARD -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/uco-bank.png" alt="UCO Bank">
            </div>
 

        </div>

        <!-- DUPLICATE -->

        <div class="recruiter-card">

            <div class="recruiter-logo">
                <img src="img/company/icci-bank.png" alt="ICICI Bank">
            </div>

             
        </div>

    </div>

</div>

   

    
</section>
      <?php include "footer.php";?>