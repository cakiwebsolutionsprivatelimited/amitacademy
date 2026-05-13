<?php include"header.php";

?>
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
				
				<div class = "row">
					<div class = "col-12" style="background:linear-gradient(to left, #d22523 0%, #592776 100%) !important;">
						<div class = "row">
							<div class = "col-xl-2 col-lg-2 col-md-2 col-12" style = "background-color: #3498DB;">
								<p style = "text-align: center;margin-top: 10px;font-size: 20px;color:#fff;"><b>Announcements</b></p>
							</div>
							<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
								<section>
								    <div clas="ntfct">
								        <marquee behavior="scroll" direction="left" scrollamount="6" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body">
								            <h4 style="padding-top:5px !important;color:#fff; margin-bottom:-0px !important;"><a href="admissionform.php" target="_blank" style="color:#fff; text-decoration:none;"> "Online Registration is Open for Admission Batch 2022-23" <img src="img/img/new.gif" style="height:45px; width:50px;"></a></h4>
								        </marquee>
								    </div>
								</section>
							</div>
						</div>
					</div>
				</div>

				<div class = "row">
			<div class = "col-12 announcement_div">
				<div class = "row">

					<div class = "col-xl-2 col-lg-2 col-md-2 col-6 all_container" style = "background-color: #1ABC9C; height: auto;">
						<center>
							<img src = "img/e_learning.png" />
							<h4>E-Learning</h4>
						</center>
						<div class = "overlay_div">
							<center>
								<img src = "img/e_learning.png" />
								<h4>E-Learning</h4>
							</center>
						</div>
					</div>

					<div class = "col-xl-2 col-lg-2 col-md-2 col-6 all_container" style = "background-color: #8E44AD; height: auto;">
						<center>
							<img src = "img/e_admission.png" />
							<h4>E-Admission</h4>
						</center>
						<div class = "overlay_div">
							<center>
								<img src = "img/e_admission.png" />
								<h4>E-Admission</h4>
							</center>
						</div>
					</div>

					<div class = "col-xl-2 col-lg-2 col-md-2 col-6 all_container" style = "background-color: #3498DB; height: auto;">
						<center>
							<img src = "img/examination.png"/>
							<h4>Examination</h4>
						</center>
						<div class = "overlay_div">
							<center>
								<img src = "img/examination.png"/>
								<h4>Examination</h4>
							</center>
						</div>
					</div>

					<div class = "col-xl-2 col-lg-2 col-md-2 col-6 all_container" style = "background-color: #EB984E; height: auto;">
						<center>
							<img src = "img/library1.png" />
							<h4>Library</h4>
						</center>
						<div class = "overlay_div">
							<center>
								<img src = "img/library1.png" />
								<h4>Library</h4>
							</center>
						</div>
					</div>

					<div class = "col-xl-2 col-lg-2 col-md-2 col-6 all_container" style = "background-color: #34495E; height: auto;">
						<center>
							<img src = "img/result.png" />
							<h4>Results</h4>
						</center>
						<div class = "overlay_div">
							<center>
								<img src = "img/result.png" />
								<h4>Results</h4>
							</center>
						</div>
					</div>

					<div class = "col-xl-2 col-lg-2 col-md-2 col-6 all_container" style = "background-color: #D4AC0D; height: auto;">
						<center>
							<img src = "img/examination.png" />
							<h4>Courses</h4>
						</center>
						<div class = "overlay_div">
							<center>
								<img src = "img/examination.png" />
								<h4>Courses</h4>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
				
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


<!-- ********************About & Principal Message********************* -->

				<!-- <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
								<div class = "container" style = "border:3px solid #3498DB;border-style: dashed;padding-bottom: 25px;">
									<div class = "row">
										<div class = "col-12" style = "background-color: #3498DB;">
			                                <h2 class="text-white font-weight-normal text-6 text-center mb-2 mt-3">About <strong class="font-weight-extra-bold">Amit College</strong></h2>
			                            </div>
			                             <div class = "offset-xl-3 offset-lg-3 offset-md-2 col-xl-6 col-lg-6 col-md-8 col-12">
			                                <center>
			                                    <img src = "gallery/Gallery_1590569183.jpg" style = "height: 150px;width: 150px;margin-top: 25px; border-radius:50%;"/>
			                                </center>
			                            </div>
									</div>
									<?php 
									$about   = ("SELECT description FROM tbl_pages WHERE status = 1 AND id = 132");
	                           		 $fetpage   = $crud->getData($about);?>
	                            
									<p class="" style="color:black; text-align:justify; margin-top:15px;"><?php echo substr(trim(strip_tags(html_entity_decode($fetpage[0]['description']))),0,712);?></p>
									<center>
										<a href="http://amitcollege.org.in/page.php?page=132" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">READ MORE</a>
									</center>
								</div>
							</div>
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
								<div class = "container" style = "border:3px solid #3498DB;border-style: dashed;padding-bottom: 25px;">
									<div class = "row">
										<div class = "col-12" style = "background-color: #3498DB;">
			                                <h2 class="text-white font-weight-normal text-6 text-center mb-2 mt-3">Principal <strong class="font-weight-extra-bold">Message</strong></h2>
			                            </div>
			                             <div class = "offset-xl-3 offset-lg-3 offset-md-2 col-xl-6 col-lg-6 col-md-8 col-12">
			                                <center>
			                                    <img src = "img/img/principal2.jpeg" style = "height: 150px;width: 150px;margin-top: 25px; border-radius:50%;"/>
			                                </center>
			                            </div>
									</div>
									<center><p style="color:black;"><?php echo substr(trim(strip_tags(html_entity_decode($fetpage[0]['description']))),0,434);?></p></center>
									<center><a href="https://amitcollege.org.in/principal.php" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">READ MORE</a></center>
								</div>
							</div>
						</div>
					</div>
				</section> -->

<!-- ********************About & Principal Message********************* -->
				

				<div class = "row">
					<div class = "col-12 about_mission" style = "background-image: url('img/bg_1.png');">
						<div class = "container">
				<div class = "row">
					<div class = "col-xl-4 col-lg-4 col-md-6 col-12 mt-4">
						<div class="column">
					      <div class="card" >
					        <div class="content">
					          <div class="front">
					             <img class="profile" width="100%" src="gallery/Gallery_1590569183.jpg" alt="Ronaldo">
					          </div>
					          <div class="back from-bottom">
					            <h3>About Us</h3>
					            <p class="des text-white">
					            The Academy of Management & Information Technology (AMIT) is recognised by the Govt. of Odisha, Department of Higher Education and affiliated to Utkal University ..
					            </p>
					            <center>
					            	<a href = "page.php?page=132">
					            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;">Read More</button>
					            	</a>
					            </center>
					          </div>
					        </div>
					      </div>
					    </div>
					    	<center>
				            	<a href = "page.php?page=132">
				            		<button type="button" class="btn btn-primary" style="background-color: #04B7D6; border:1px solid #04B7D6;margin-top: 15px;">Read More</button>
				            	</a>
				            </center>
					</div>
					<div class = "col-xl-4 col-lg-4 col-md-6 col-12 mt-4">
						<div class="column">
					      <div class="card">
					        <div class="content">
					          <div class="front">
					            <img class="profile" width="100%" src="img/vision_img.jpg" alt="Ronaldo">
					          </div>
					          <div class="back from-bottom">
					            <h3>Mission & Vission</h3>
					            <p class="des text-white">
					             With the best industry veterans, experienced in providing and managing services for businesses for over some time we have acquired a very..
					            </p>
					            <center>
					            	<a href = "page.php?page=135">
					            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;">Read More</button>
					            	</a>
					            </center>
					          </div>
					        </div>
					      </div>
					    </div>
					    <center>
			            	<a href = "page.php?page=135">
			            		<button type="button" class="btn btn-primary" style="background-color: #04B7D6; border:1px solid #04B7D6;margin-top: 15px;">Read More</button>
			            	</a>
			            </center>
					</div>
					<div class = "col-xl-4 col-lg-4 col-md-6 col-12 mt-4">
						<div class="column">
					      <div class="card">
					        <div class="content">
					          <div class="front">
					            <img class="profile" width="100%" src="img/img/principal2.jpeg" alt="Ronaldo">
					          </div>
					          <div class="back from-bottom">
					            <h3>Principal Message</h3>
					            <p class="des text-white">
					             Initially, we have started with banking as a service with our banking partners and we have a lot on our plate to accomplish beyond banking service..
					            </p>
					            <center>
					            	<a href = "page.php?page=133">
					            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;">Read More</button>
					            	</a>
					            </center>
					          </div>
					        </div>
					      </div>
					    </div>
					     <center>
			            	<a href = "page.php?page=133">
			            		<button type="button" class="btn btn-primary" style="background-color: #04B7D6; border:1px solid #04B7D6;margin-top: 15px;">Read More</button>
			            	</a>
			            </center>
					</div>
				</div>
			</div>
					</div>
				</div>
				
				<!-- <div class="container-lg">
					
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
								
								</ul>
					        </aside>
					    </div>
						<div class="col-sm-10 col-md-7 col-lg-3 mb-4 mb-lg-0">
							<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<i class="icon-featured far fa-file-alt text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">News</strong></h2>
										
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
				</div> -->

				<div class = "row">
					<div class = "col-12">
						<div class = "container">
							<div class = "row">

								<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation mt-5" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<div class="row">
									<div class="col">
									<div class="owl-carousel owl-theme show-nav-title" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
										<div>
											<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<i class="icon-featured far fa-file-alt text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">News & Events</strong></h2>
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
						                
										<h6 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php echo $vl['image'];?>" target="_blank" style="font-size:16px;text-decoration:none; color:#b30000;"><?php echo $vl['news_title'];?></a>&nbsp;<img src="img/img/new4.gif" style = "height:25px; width:30px;"></h6>
										
							<?php } ?>
							
							</marquee>
										<a href="#" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">VIEW MORE</a>
									</div>
								</div>
							</div>
										</div>
										<div>
											<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<i class="icon-featured far fa-file-alt text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">News & Events</strong></h2>
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
						                
										<h6 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php echo $vl['image'];?>" target="_blank" style="font-size:16px;text-decoration:none; color:#b30000;"><?php echo $vl['news_title'];?></a>&nbsp;<img src="img/img/new4.gif" style = "height:25px; width:30px;"></h6>
										
							<?php } ?>
							
							</marquee>
										<a href="#" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">VIEW MORE</a>
									</div>
								</div>
							</div>
										</div>
										<div>
											<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<i class="icon-featured far fa-file-alt text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">News & Events</strong></h2>
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
						                
										<h6 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php echo $vl['image'];?>" target="_blank" style="font-size:16px;text-decoration:none; color:#b30000;"><?php echo $vl['news_title'];?></a>&nbsp;<img src="img/img/new4.gif" style = "height:25px; width:30px;"></h6>
										
							<?php } ?>
							
							</marquee>
										<a href="#" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">VIEW MORE</a>
									</div>
								</div>
							</div>
										</div>
										<div>
											<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<i class="icon-featured far fa-file-alt text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">News & Events</strong></h2>
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
						                
										<h6 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php echo $vl['image'];?>" target="_blank" style="font-size:16px;text-decoration:none; color:#b30000;"><?php echo $vl['news_title'];?></a>&nbsp;<img src="img/img/new4.gif" style = "height:25px; width:30px;"></h6>
										
							<?php } ?>
							
							</marquee>
										<a href="#" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">VIEW MORE</a>
									</div>
								</div>
							</div>
										</div>
									</div>
									</div>
								</div>
							</div>

							<div class = "col-xl-8 col-lg-8 col-md-8 col-12">
								<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary my-4" style = "margin-top:72px!important;">
								<div class="featured-box">
									<div class="box-content px-lg-4 px-xl-5 py-lg-5">
										<div class = "row">
											<div class = "col-6">
												<i class="icon-featured fa fa-bell text-color-primary" style="margin-bottom:-15px !important;" id = "notification"></i>
												<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">Notification</strong></h2>
											</div>
											<div class = "col-6">
												<i class="icon-featured far fa-file-alt text-color-primary" id = "quick_link" style="margin-bottom:-15px !important;"></i>
												<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">Quick Links</strong></h2>
											</div>
										</div>
										<!-- <i class="icon-featured far fa-file-alt text-color-primary" style="margin-bottom:-15px !important;"></i>
										<h2 class="font-weight-normal text-5"><strong class="font-weight-extra-bold">News & Events</strong></h2> -->
										<!--<marquee behavior="scroll" direction="up" scrollamount="6" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body">
										    <ul style="color:#990000;">
										        <li>Now Online classes will be Conducted</li>
										        <li>College Is Closed due to Corona Virus.</li>
										    </ul>
										 </marquee>-->
										 <marquee behavior="scroll" direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body" id = "notification_content">
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

							 <marquee behavior="scroll" direction="up" scrollamount="3" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',3,0); this.start()" class="moving-body" id = "quick_link_content" style = "display: none;">
							 		<p>
							 			
							 		</p>
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


							</div>
						</div>
					</div>
				</div>

				

				
				<!-- <section class="section section-background section-center overlay overlay-show overlay-op-8 my-0" style="background-image: url(img/img/sl4.jpg); background-position: 50% 100%; min-height: 615px;" data-appear-animation="fadeIn">
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
				</section> -->

				<!-- <div class = "row">
					<div class = "col-12" style = "background-color: #EDEEEE;padding-bottom: 25px;">
						<div class="col text-center" style="margin-top:10px;">
								<h2 class="font-weight-normal text-black mb-5">Our <strong class="font-weight-extra-bold">Department</strong></h2>
							</div>
						<div class = "container">
							<div class = "row">
								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">BCA</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/bca.jpg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												The specialty of BCA course is to provide computer knowledge . in theory and practical as well. So that students. can able to work as a SYSTEM ENGINEER, SYSTEM DEVELOPER, PROGRAMMER...
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "bca.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">BBA</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/bba.jpg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												The Bachelor of Business Administration degree is considered by many as the degree of the future. It is a professional degree that is rising in popularity among students..
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "bba.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">Biotechnology</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/bio.jpg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												M.Sc. Biotechnology is a new scientific multi-disciplinary professional course, it trains and updates scientific knowledge and skills required for a research fellow ...
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "biotechnology.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">MBA</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/mba.jpg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												Master of Business Administration or MBA is one of the most popular post-graduate programmes in India and abroad. The two-year programme is a gateway to a plethora of job opportunities in the corporate world.
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "mba.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">M.Sc (Computer Science)</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/msc.jpg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												The programme includes software engineering, system development, natural computation, mathematical foundations and artificial intelligence. Other modules include programming, data analytics, software development,
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "msc.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">+2 Sc.</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/+2sc.jpg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												The only criterion token Into consideration at alstages is merit. Students capability Isthe only recommendation needed to get admission throh the e-counsellr19 (SAMS). We Invite application from students who are strongly
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "+2science.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">+3 (Sc. & Comm)</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/+3sc.jpeg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												Academy Of Management and Information Technology (AMIT) Degree College is recognized by Govt. Of Odisha, Dept. Of Higher Education, approved by AICTE and affiliated to Utkal University & BPUT the premier Institute in the state of Odisha to impart education and research
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "+3sc&comm.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">DMLT</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/dmlt.jpg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												A healthcare professional who performs chemical, hematological, immunologic, histopathological, cytopathological, microscopic, and bacteriological diagnostic analyses on body fluids such as blood, urine, sputum, stool, cerebrospinal fluid (CSF), peritoneal fluid, pericardial
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "dmlt.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

								<div class = "offset-xl-1 offset-lg-1 offset-md-1 col-xl-3 col-lg-3 col-md-3 col-12 mt-4" style = "background-color: #04B7D6; height:auto; padding-bottom:15px;">
									<h3 style = "color:#fff; text-align:center;margin-top: 15px;">MJMC</h3>
									<div class = "row">
										<div class = "col-xl-2 col-lg-2 col-md-2 col-12">
											<img src = "img/mjmc.jpg" class = "dept_img" style = "height: 125px;width: 125px; margin-left: -85px;border-radius: 50%; margin-top:35px!important;"/>
										</div>
										<div class = "col-xl-10 col-lg-10 col-md-10 col-12">
											<p style = "color:#fff;text-align: justify;">
												MJMC (Master of Journalism & Mass Communication) is a postgraduate mass communication course of two years duration. The course involves the study of different forms of mass media including newspapers, radio, television, films, etc to convey information to a large audience.
											</p>
										</div>
									</div>
									 <center>
						            	<a href = "mjmc.php">
						            		<button type="button" class="btn btn-primary" style="background-color: transparent; border:1px solid #fff;margin-top: 15px;">Read More</button>
						            	</a>
						            </center>
								</div>

							</div>
						</div>
					</div>
				</div> -->

				<section class="section bg-quaternary border-0 m-0 appear-animation" data-appear-animation="fadeIn" id="ourservices" style = "background-color: #592577!important;">
					<div class="container container-xl-custom">
						<div class="row">
							<div class="col text-center">
								<div class="overflow-hidden mb-4">
									<h2 class="text-color-light font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Departments</h2>
								</div>
							</div>
						</div>
						<div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
							<div class="row mb-2">
								<div class="col-md-6 col-xl-4">
									<a href="bca.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content">
												<img src = "img/bca.jpg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">BCA</h3>
												<p class="font-weight-light text-white mb-0">The specialty of BCA course is to provide computer knowledge . in theory and practical as well. So that students... </p>
											</div>
											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="bca.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-xl-4">
									<a href="bba.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content">
												<img src = "img/bba.jpg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">BBA</h3>
												<p class="font-weight-light text-white mb-0">The Bachelor of Business Administration degree is considered by many as the degree of the future. It is a professional...</p>
											</div>
											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="bba.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-xl-4">
									<a href="biotechnology.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content">
												<img src = "img/bio.jpg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">BIOTECHNOLOGY</h3>
												<p class="font-weight-light text-white mb-0">M.Sc. Biotechnology is a new scientific multi-disciplinary professional course, it trains and updates scientific knowledge and...</p>
											</div>
											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="biotechnology.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-xl-4">
									<a href="mba.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content" >
												<img src = "img/mba.jpg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">MBA</h3>
												<p class="font-weight-light text-white mb-0">Master of Business Administration or MBA is one of the most popular post-graduate programmes in India and abroad. The two-year...</p>
											</div>


											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="mba.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-xl-4">
									<a href="msc.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content">
												<img src = "img/msc.jpg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">M.SC (COMPUTER SCIENCE)</h3>
												<p class="font-weight-light text-white mb-0">The programme includes software engineering, system development, natural computation, mathematical foundations and...</p>
											</div>
											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="msc.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-xl-4">
									<a href="+2science.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content">
												<img src = "img/+2sc.jpg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">+2 SC.</h3>
												<p class="font-weight-light text-white mb-0">The only criterion token Into consideration at alstages is merit. Students capability Isthe only recommendation needed to get admission throh...</p>
											</div>
											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="+2science.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-xl-4">
									<a href="+3sc&comm.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content">
												<img src = "img/+3sc.jpeg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">+3 (SC. & COMM)</h3>
												<p class="font-weight-light text-white mb-0">Academy Of Management and Information Technology (AMIT) Degree College is recognized by Govt. Of Odisha, Dept. Of Higher Education, approved by AICTE and affiliated to...</p>
											</div>
											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="+3sc&comm.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-xl-4">
									<a href="dmlt.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content">
												<img src = "img/dmlt.jpg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">DMLT</h3>
												<p class="font-weight-light text-white mb-0">A healthcare professional who performs chemical, hematological, immunologic, histopathological, cytopathological, microscopic, and bacteriological diagnostic analyses on body...</p>
											</div>
											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="dmlt.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-xl-4">
									<a href="mjmc.php" class="text-decoration-none simple-ajax-popup">
										<div class="featured-box featured-box-primary featured-box-effect-5 appear-animation border_hover" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style = "box-shadow: 1px 2px 17px 7px #fff;padding-top: 25px;padding-bottom: 25px;">
											<div class="box-content">
												<img src = "img/mjmc.jpg" class = "dept_img" style = "height: 125px;width: 125px;border-radius: 50%;"/>
												<h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">MJMC</h3>
												<p class="font-weight-light text-white mb-0" >MJMC (Master of Journalism & Mass Communication) is a postgraduate mass communication course of two years duration. The course involves the study of different...</p>
											</div>
											<center>
												<a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="mjmc.php" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 border-width-4 appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="background:#b30000; border-color:#fff; border-radius:10px;">Read More</a>
											</center>
										</div>
									</a>
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

				<!-- <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0" data-appear-animation="fadeIn">
					<div class="container container-xl">
						<div class="row">
						     <div class="col-md-6">
						          <h2 class="mt-4 mb-2 text-dark text-center">What Student's Say<strong> About Us</strong></h2>
					    <hr class="custom-divider m-0">
							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								
								
									<div>
										<div class="testimonial mb-0">
											
												<center><img src="user.png" class="img-fluid rounded-circle" alt="testimonial" style="height:70px; width:70px;"></center>
											
											
												<p class="text-color-dark  mb-0">Regular classes held at our college to help us with our aptitude and technical skills were of great help. Our placement administration officers also guided and  helps us in our work...</p>
											
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- Swasha singh</strong></p>
											</div>
										</div>
									</div>
									

							</div>
						</div>
						<div class="col-md-6">
						    <section   >
						        <div class="container">
						            <center><h4 style="background-color:#AEB6BF; border-radius:8px; padding:10px; color:#fff; font-size:24px; font-family:sans-serif;">Enquiry or Request a Call Back</h4></center>
						
										<?php include "eform.php";?>
							
						
					                </div>
						    </section>
						</div>
						</div>
					</div>
				</section> -->


				<div class = "row">
					<div class = "col-12">
						<section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background-image: url(img/demos/law-firm-2/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
					<div class="container pt-5 pb-3">
						<div class="row">
							<div class="col text-center">
								<h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">Satisfied Students Stories</h3>
								<p class="custom-font-secondary text-color-light custom-font-size-1 font-weight-extra-bold">“</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-7 text-center px-lg-0">
								<div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-light mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': true, 'autoplay': false, 'autoplayTimeout': 7000}">
									<div>
										<p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Regular classes held at our college to help us with our aptitude and technical skills were of great help. Our placement administration officers also guided and helps us in our work.... ”</p>
										<div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
											<hr class="my-4 mx-auto">
										</div>
										<strong class="d-block text-color-light text-4 mb-4">- Swasha singh</strong>
									</div>
									<div>
										<p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Regular classes held at our college to help us with our aptitude and technical skills were of great help. Our placement administration officers also guided and helps us in our work.... ”</p>
										<div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
											<hr class="my-4 mx-auto">
										</div>
										<strong class="d-block text-color-light text-4 mb-4">- Swasha singh</strong>
									</div>
									<div>
										<p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Regular classes held at our college to help us with our aptitude and technical skills were of great help. Our placement administration officers also guided and helps us in our work.... ”</p>
										<div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
											<hr class="my-4 mx-auto">
										</div>
										<strong class="d-block text-color-light text-4 mb-4">- Swasha singh</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="row counters counters-sm py-5">
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								<div class="counter">
									<strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="50" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
									<label class="text-color-light font-weight-bold text-4 mb-0">Years Of Starting</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								<div class="counter">
									<strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="240" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
									<label class="text-color-light font-weight-bold text-4 mb-0">Classrooms</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
								<div class="counter">
									<strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="2000" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
									<label class="text-color-light font-weight-bold text-4 mb-0">Satisfied Students</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="counter">
									<strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="20" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
									<label class="text-color-light font-weight-bold text-4 mb-0">Faculties</label>
								</div>
							</div>
						</div>
					</div>
				</section>
					</div>
				</div>

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


				<div class = "row">
					<div class = "col-12 bg-color-grey-scale-1 pb-4">
							<div class="col text-center" style="margin-top:10px;">
								<h2 class="font-weight-normal text-black mb-2">Our <strong class="font-weight-extra-bold">Blogs</strong></h2>
							</div>
						<div class = "container">
							<div class = "row">
								<div class = "col-xl-3 col-lg-3 col-md-3 col-12">
									<article>
											<div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
												<div class="card-body p-4 z-index-1">
													<a href="demo-business-consulting-2-blog-post.html">
														<img class="card-img-top border-radius-0" src="img/blog-1.png" alt="Card Image">
													</a>
													<p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>
													<div class="card-body p-0">
														<h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">An Interview with John Doe</a></h4>
														<p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
														
													</div>
												</div>
											</div>
										</article>
								</div>
								<div class = "col-xl-3 col-lg-3 col-md-3 col-12">
									<article>
											<div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
												<div class="card-body p-4 z-index-1">
													<a href="demo-business-consulting-2-blog-post.html">
														<img class="card-img-top border-radius-0" src="img/blog-2.png" alt="Card Image">
													</a>
													<p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>
													<div class="card-body p-0">
														<h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">How to Grow your Business</a></h4>
														<p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
														
													</div>
												</div>
											</div>
										</article>
								</div>
								<div class = "col-xl-3 col-lg-3 col-md-3 col-12">
									<article>
											<div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
												<div class="card-body p-4 z-index-1">
													<a href="demo-business-consulting-2-blog-post.html">
														<img class="card-img-top border-radius-0" src="img/blog-1.png" alt="Card Image">
													</a>
													<p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>
													<div class="card-body p-0">
														<h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">An Interview with John Doe</a></h4>
														<p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
														
													</div>
												</div>
											</div>
										</article>
								</div>
								<div class = "col-xl-3 col-lg-3 col-md-3 col-12">
									<article>
											<div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
												<div class="card-body p-4 z-index-1">
													<a href="demo-business-consulting-2-blog-post.html">
														<img class="card-img-top border-radius-0" src="img/blog-2.png" alt="Card Image">
													</a>
													<p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>
													<div class="card-body p-0">
														<h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="demo-business-consulting-2-blog-post.html">How to Grow your Business</a></h4>
														<p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
														
													</div>
												</div>
											</div>
										</article>
								</div>

							</div>
						</div>
						
							<div class="col text-center" style="margin-top:25px !important; ">
								<a href="#" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">VIEW MORE</a>
							</div>
						
					</div>
				</div>

			<section class="section  section-height-3 border-0 m-0">
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
									<img class="img-fluid " src="img/img/tcs.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid " src="img/img/tata.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/wipro.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid " src="img/img/tcs.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/wipro.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/tata.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/wipro.png" alt="" style="padding:20px !important;">
								</div>
								<div>
									<img class="img-fluid" src="img/img/mahindra.jpg" alt="" style="padding:20px !important;">
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include "footer.php";?>