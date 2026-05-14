
</div>	
			 
 

<style>
 

/* FOOTER */

.modern-footer{
    position:relative;
    overflow:hidden;
    background:
    linear-gradient(rgba(7,7,56,0.92),
    rgba(7,7,56,0.94)),
    url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1600&auto=format&fit=crop');

    background-size:cover;
    background-position:center;
    background-attachment:fixed;
    padding-top:90px;
    color:#fff;
}

/* OVERLAY GLOW */

.modern-footer::before{
    content:"";
    position:absolute;
    width:450px;
    height:450px;
    background:rgba(0,131,254,0.12);
    border-radius:50%;
    top:-180px;
    right:-120px;
    filter:blur(40px);
}

.modern-footer::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,255,255,0.04);
    border-radius:50%;
    bottom:-150px;
    left:-120px;
    filter:blur(30px);
}

/* TOP */

.footer-wrapper{
    position:relative;
    z-index:2;
}

/* LOGO */

.footer-logo{
    font-size:42px;
    font-weight:800;
    margin-bottom:18px;
}

.footer-logo span{
    color:var(--primary);
}

.footer-about{
    color:rgba(255,255,255,0.75);
    line-height:1.9;
    margin-bottom:25px;
}

/* HEADINGS */

.footer-title{
    font-size:24px;
    font-weight:700;
    margin-bottom:28px;
    position:relative;
	color: #fff;
}

.footer-title::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-10px;
    width:55px;
    height:4px;
    border-radius:20px;
    background:var(--primary);
}

/* LINKS */

.footer-links{
    list-style:none;
    padding:0;
    margin:0;
}

.footer-links li{
    margin-bottom:16px;
}

.footer-links a{
    color:rgba(255,255,255,0.75);
    text-decoration:none;
    transition:0.4s ease;
    display:inline-flex;
    align-items:center;
    gap:10px;
}

.footer-links a i{
    color:var(--primary);
    font-size:13px;
}

.footer-links a:hover{
    color:#fff;
    transform:translateX(6px);
}

/* CONTACT */

.footer-contact p{
    color:rgba(255,255,255,0.75);
    display:flex;
    align-items:flex-start;
    gap:12px;
    margin-bottom:18px;
    line-height:1.8;
}

.footer-contact i{
    color:var(--primary);
    margin-top:5px;
}

/* SOCIAL */

.footer-social{
    display:flex;
    gap:15px;
    margin-top:20px;
}

.footer-social a{
    width:48px;
    height:48px;
    border-radius:50%;
    background:rgba(255,255,255,0.08);
    border:1px solid rgba(255,255,255,0.08);
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    font-size:18px;
    transition:0.4s ease;
    backdrop-filter:blur(10px);
}

.footer-social a:hover{
    background:var(--primary);
    transform:translateY(-6px) rotate(6deg);
}

/* MAP */

.footer-map{
    overflow:hidden;
    border-radius:24px;
    box-shadow:0 15px 40px rgba(0,0,0,0.25);
}

.footer-map iframe{
    width:100%;
    height:240px;
    border:0;
}

/* NEWSLETTER */

.newsletter-box{
    margin-top:40px;
    background:rgba(255,255,255,0.06);
    border:1px solid rgba(255,255,255,0.08);
    border-radius:28px;
    padding:35px;
    backdrop-filter:blur(14px);
}

.newsletter-box h4{
    font-size:28px;
    font-weight:700;
    margin-bottom:15px;
}

.newsletter-box p{
    color:rgba(255,255,255,0.70);
    margin-bottom:25px;
}

.newsletter-form{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.newsletter-form input{
    flex:1;
    min-width:240px;
    height:58px;
    border:none;
    border-radius:50px;
    padding:0 24px;
    outline:none;
}

.newsletter-form button{
    height:58px;
    border:none;
    border-radius:50px;
    padding:0 30px;
    background:var(--primary);
    color:#fff;
    font-weight:600;
    transition:0.4s ease;
}

.newsletter-form button:hover{
    background:#fff;
    color:#111;
}

/* COPYRIGHT */

.footer-bottom{
    position:relative;
    z-index:2;
    border-top:1px solid rgba(255,255,255,0.08);
    margin-top:70px;
    padding:28px 0;
}

.footer-bottom p{
    margin:0;
    color:rgba(255,255,255,0.72);
}

.footer-bottom a{
    color:#fff;
    text-decoration:none;
}

.visitor-box{
    color:#fff;
    font-weight:600;
}

/* RESPONSIVE */

@media(max-width:991px){

    .modern-footer{
        background-attachment:scroll;
    }

    .footer-logo{
        font-size:34px;
    }

}

@media(max-width:768px){

    .modern-footer{
        padding-top:70px;
    }

    .footer-title{
        margin-top:15px;
    }

    .newsletter-box{
        padding:25px;
    }

    .newsletter-box h4{
        font-size:24px;
    }

    .footer-bottom{
        text-align:center;
    }

}

</style>

<footer class="modern-footer">

    <div class="container footer-wrapper">

        <div class="row g-5">

            <!-- ABOUT -->

            <div class="col-lg-4 col-md-6">

                <h2 class="footer-logo text-light">
                    AMIT <span>Academy</span>
                </h2>

                <p class="footer-about">
                    Empowering students with modern education, innovation,
                    practical learning, and industry-focused career opportunities
                    for a brighter future.
                </p>

                <!-- SOCIAL -->

                <div class="footer-social">

                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-youtube"></i>
                    </a>

                </div>

            </div>

            <!-- LINKS -->

            <div class="col-lg-2 col-md-6">

                <h4 class="footer-title">
                    Quick Links
                </h4>

                <ul class="footer-links">

                    <li>
                        <a href="#">
                            <i class="fas fa-angle-right"></i>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-angle-right"></i>
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-angle-right"></i>
                            Courses
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-angle-right"></i>
                            Admission
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-angle-right"></i>
                            Blogs
                        </a>
                    </li>

                </ul>

            </div>

            <!-- USEFUL -->

            <div class="col-lg-3 col-md-6">

                <h4 class="footer-title">
                    Useful Links
                </h4>

                <ul class="footer-links">

                    <li>
                        <a href="https://nptel.ac.in/" target="_blank">
                            <i class="fas fa-angle-right"></i>
                            NPTEL
                        </a>
                    </li>

                    <li>
                        <a href="https://swayam.gov.in/" target="_blank">
                            <i class="fas fa-angle-right"></i>
                            SWAYAM
                        </a>
                    </li>

                    <li>
                        <a href="https://www.edx.org/" target="_blank">
                            <i class="fas fa-angle-right"></i>
                            edX
                        </a>
                    </li>

                    <li>
                        <a href="https://www.coursera.org/" target="_blank">
                            <i class="fas fa-angle-right"></i>
                            Coursera
                        </a>
                    </li>

                </ul>

            </div>

            <!-- CONTACT -->

            <div class="col-lg-3 col-md-6">

                <h4 class="footer-title">
                    Contact Us
                </h4>

                <div class="footer-contact">

                    <p>
                        <i class="fas fa-envelope"></i>
                        amiteducation.ordc@gmail.com
                    </p>

                    <p>
                        <i class="fas fa-location-dot"></i>
                        Bhubaneswar, Odisha, India
                    </p>

                    <p>
                        <i class="fas fa-phone"></i>
                        +91 9876543210
                    </p>

                </div>

            </div>

        </div>

        <!-- NEWSLETTER -->

        <!-- <div class="newsletter-box">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <h4>
                        Subscribe Newsletter
                    </h4>

                    <p>
                        Get latest updates, admission notifications,
                        and educational news directly in your inbox.
                    </p>

                </div>

                <div class="col-lg-6">

                    <form class="newsletter-form">

                        <input type="email"
                        placeholder="Enter Your Email Address">

                        <button type="submit">
                            Subscribe
                        </button>

                    </form>

                </div>

            </div>

        </div> -->

        <!-- MAP -->

        <div class="footer-map mt-5">

            <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14980.818296431193!2d85.644093!3d20.167206!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde472c82b05318ba!2sAMIT%20College!5e0!3m2!1sen!2sin!4v1590563865996!5m2!1sen!2sin"
            allowfullscreen=""
            loading="lazy">
            </iframe>

        </div>

        <!-- COPYRIGHT -->

        <div class="footer-bottom">

            <div class="row align-items-center gy-3">

                <div class="col-lg-6">

                    <p>
                        © 2026 All Rights Reserved |
                        Developed By
                        <a href="http://cakiweb.com/" target="_blank">
                            Cakiweb Solutions
                        </a>
                    </p>

                </div>

                <div class="col-lg-6 text-lg-end">

                    <div class="visitor-box">
                        No of Visitors :
                        <strong>30000+</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>
		</div>

		<!-- Vendor -->
		<script src="<?php echo $base_url ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/popper/umd/popper.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/common/common.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/vide/jquery.vide.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo $base_url ?>js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?php echo $base_url ?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo $base_url ?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo $base_url ?>js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo $base_url ?>js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo $base_url ?>js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>







