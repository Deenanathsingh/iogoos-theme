<?php 
/**
   *Theme Name: iogoos
   *Theme URI: iogoos.com
   *Description: dms
   * Template Name: frontpage
   *Version:1.1
   *Author: iogoos
   *Author URI: iogoos.com
   **/
get_header(); ?>
<?php $site_path=get_home_url();?>

	<?php include 'navigation.php'; ?>


    <div class="handy-pdp frnt-page homeimage_new_banner">
    <!-- main-banner -->  
<!--
    <section class="main-banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h1>We are Providing <br>
                <span class="txt-rotate hook-animated-type" data-period="2000" data-rotate="[ &quot;Mobile App Development Services.&quot;,&quot;Website Design Services.&quot;, &quot;Ecommerce Development Services.&quot;, &quot;UI/UX Design Services.&quot;, &quot;Digital Marketing Services.&quot;,&quot;SEO Services.&quot;]"><span class="wrap"></span></span> </h1>
              <p>A premium Web & Mobile App Development Company, and extension of your marketing team – bringing strategy, expertise, and execution to the areas that you need it most. </p>
<form method="post">
  <div class="form-text">
    <input type="text" name="emailaddress" class="emailaddress" placeholder="Enter Your Email Address">
	  	<div class="hide_btns">
		<a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>   
  </div>
  </div>
 <div class="form-button mn-btn_">
<a href="#" class="slide_from_left"><input type="button" value="Start Your Project" class="btnprj"></a>
  </div>
  <input type="hidden" name="prtabname" class="prtabname" value="Mobile App Development Services">
  <input type="hidden" name="action" value="project_form">
</form>

<div class="frmerrmsg" style="color:#FF0000;"></div>
              <div class="bottom_button mn-btn"> 
              <button class="slide_from_left"><a href="#"> <i class="fa fa-phone" aria-hidden="true"></i> +1-315 215 0919</a></button>
              <button class="slide_from_left"><a href="https://www.iogoos.com/portfolio/">Portfolio</a> </button>
				</div>
            </div>
            <div class="col-lg-6">
                <div class="element-box">
                <h4>Digital Marketing Service</h4>
              <img
                class="wow fadeInRight animated ban11"
                data-wow-duration="1s"
                data-wow-delay="0.1s"
                src="<?php echo get_template_directory_uri(); ?>/img/banner11.png" alt="img"
                alt="Banner"
                width="486"
                height="626"
              />
              <span class="main-bottom-shape"
                ><img
                  class="wow fadeInRight animated"
                  data-wow-duration="1s"
                  data-wow-delay="0.5s"
                  src="<?php echo get_template_directory_uri(); ?>/img/banner12.png" alt="img"
                  alt="Banner"
                  width="486"
                  height="626"
              /></span>
              <div class="masthead-home__stats">
                <div class="stat-counter">
                  <header class="stat-counter__title"><span>Qualified Leads</span> Generated</header>
                  <div class="stat-counter__numbers clearfix">4,577,349</div>
                </div>
                <div class="stat-counter">
                  <header class="stat-counter__title"><span>Qualified Calls</span> Generated</header>
                  <div class="stat-counter__numbers clearfix">1,759,827</div>
                </div>
                <div class="stat-counter">
                  <header class="stat-counter__title"><span>Ecommerce</span> Developed</header>
                  <div class="stat-counter__numbers clearfix">1609</div>
                </div>
                <div class="stat-counter">
                  <header class="stat-counter__title"><span>Mobile</span> App Developed</header>
                  <div class="stat-counter__numbers clearfix"> 1136 </div>	
                </div>
              </div>
        
              <span class="course-indicator"
                ><img
                  class="wow fadeInUp animated"
                  data-wow-duration="1s"
                  data-wow-delay="0.9s"
                  src="<?php echo get_template_directory_uri(); ?>/img/element59.png" alt="img"
                  alt="Banner"
                  width="363"
                  height="106"
              /></span>
               <div class="request_q_pos">
            <a
                href="#"
                class="pt18 desk_call chat-btn wow zoomIn animated"
                data-wow-duration="1s"
                data-wow-delay="0.3s"
                ><i class="fas fa-comments"></i
              ></a>
      </div> 
              
              <ul class="block-list shape-list">
                <li class="shape-1 motion-effects1">
                  <img
                    class="wow fadeInDown animated"
                    data-wow-duration="1s"
                    data-wow-delay="1.1s"
                    src="<?php echo get_template_directory_uri(); ?>/img/element45.png" alt="img"
                    alt="Element"
                    width="115"
                    height="127"
                  />
                </li>
                <li class="shape-2 motion-effects3">
                  <img
                    class="wow fadeInUp animated"
                    data-wow-duration="1s"
                    data-wow-delay="1.3s"
                    src="<?php echo get_template_directory_uri(); ?>/img/element46.png" alt="img"
                    alt="Element"
                    width="322"
                    height="322"
                  />
                </li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </section>
      -->
    <!-- main-banner --> 
     
     
     
   
     
     	<div id="tab-slid" class="loader-container"></div>
     	<div class="frontpage-tab">
     	    <div class="top-area">
     	        <h3>Our Services</h3>
     	       	<ul class="producttabs">
					<li><a href="#tab1" class="active">Website Design</a></li>
					<li><a href="#tab2">Mobile App</a></li>
					<li><a href="#tab3">Digital Marketing </a></li>
					</ul>
					
					</div>
					<div class="bottam-area">
					<div id="tab1">
					  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1><span>NEXT-GEN</span> Web Design Company</h1>
                <ul class="lists">
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">16k+ Websites Developed &amp; Delivered</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">16 years of experience in Website Design and Mobile App Development</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Empowering small, medium, and large agencies</p></li>
                  </ul>
              <p>We develop good user experience websites with backend to manage your website features easily as well as deliver readable source code, to give you complete control <a href="https://www.iogoos.com/website-design-services/">... read more</a></p>
<form method="post">
  <div class="form-text">
    <input type="text" name="emailaddress" class="emailaddress" placeholder="Enter Your Email Address">
	  
  </div>
 <div class="form-button mn-btn_">
<a href="#" class="slide_from_left"><i class="fas fa-long-arrow-alt-right"></i><input type="button" value="Start Your Project" class="btnprj"></a>
  </div>
  <input type="hidden" name="prtabname" class="prtabname" value="Mobile App Development Services">
  <input type="hidden" name="action" value="project_form">
</form>

<div class="frmerrmsg" style="color:#FF0000;"></div>
              <div class="bottom_button mn-btn"> 
              <button class="slide_from_left"><a href="tel:+13152150919"> <i class="fa fa-phone" aria-hidden="true"></i> +1-315 215 0919</a></button>
              <button class="slide_from_left"><a href="https://www.iogoos.com/portfolio/">Portfolio</a> </button>
				</div>
            </div>
            </div>
					      <div class="col-lg-6">
					          <div class="inner">
					              <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/digital_ruma.gif" alt="Web Design and Mobile App Development Company" >
					          <div class="inner-img">
					              <img class="pt18 desk_call chat-btn" src="https://www.iogoos.com/wp-content/themes/iogoos/img/element59.png" alt="Web Design and Mobile App Development Company">
					            </div>
					            </div>
					      </div>
					      </div>  
					    </div>
					<div id="tab2">
					    				  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1><span>Future-ready</span>Mobile App Development Company </h1>
                <ul class="lists">
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">12+ years of experience in mobile apps Development</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">900+ Mobile App developed and delivered</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">100% client satisfaction</p></li>
                  </ul>
              <p>We deliver apps with source code and backend for complete control<br>
We creating life-saving, life-changing, and problem-solving Hybrid, and Native mobile apps for your business using the latest & modern technology <a href="https://www.iogoos.com/mobile-app-development-services/">... read more</a></p>
<form method="post">
  <div class="form-text">
    <input type="text" name="emailaddress" class="emailaddress" placeholder="Enter Your Email Address">
	  	
  </div>
 <div class="form-button mn-btn_">
<a href="#" class="slide_from_left"><i class="fas fa-long-arrow-alt-right"></i><input type="button" value="Start Your Project" class="btnprj"></a>
  </div>
  <input type="hidden" name="prtabname" class="prtabname" value="Mobile App Development Services">
  <input type="hidden" name="action" value="project_form">
</form>

<div class="frmerrmsg" style="color:#FF0000;"></div>
              <div class="bottom_button mn-btn"> 
              <button class="slide_from_left"><a href="tel:+13152150919"> <i class="fa fa-phone" aria-hidden="true"></i> +1-315 215 0919</a></button>
              <button class="slide_from_left"><a href="https://www.iogoos.com/portfolio/">Portfolio</a> </button>
				</div>
            </div>
            </div>
					      <div class="col-lg-6">
					          <div class="inner">
					          <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/app-development_ruma.gif" alt="Web Design and Mobile App Development Company" >
					          <div class="inner-img">
					               <img class="pt18 desk_call chat-btn" src="https://www.iogoos.com/wp-content/themes/iogoos/img/element59.png" alt="Web Design and Mobile App Development Company">
					            </div>
					            </div>
					      </div>
					      </div>
					    </div>
					<div id="tab3">
					    				  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1><span>Performance-Driven</span> Digital Marketing Services </h1>
                <ul class="lists">
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Get high quality leads</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Increase your ROI</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Increase customer engagement</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Manage brand reputation</p></li>
                  </ul>
                  <p>Drive More Revenue With Digital Marketing Services. Our organic strategy helps your business to get traffic, leads to revenue <a href="https://www.iogoos.com/digital-marketing-services/">... read more</a></p>
<form method="post">
  <div class="form-text">
    <input type="text" name="emailaddress" class="emailaddress" placeholder="Enter Your Email Address">
	  
  </div>
 <div class="form-button mn-btn_">
<a href="#" class="slide_from_left"><i class="fas fa-long-arrow-alt-right"></i><input type="button" value="Start Your Project" class="btnprj"></a>
  </div>
  <input type="hidden" name="prtabname" class="prtabname" value="Mobile App Development Services">
  <input type="hidden" name="action" value="project_form">
</form>

<div class="frmerrmsg" style="color:#FF0000;"></div>
              <div class="bottom_button mn-btn"> 
              <button class="slide_from_left"><a href="tel:+13152150919"> <i class="fa fa-phone" aria-hidden="true"></i> +1-315 215 0919</a></button>
              <button class="slide_from_left"><a href="https://www.iogoos.com/portfolio/">Portfolio</a> </button>
				</div>
            </div>
            </div>
					      <div class="col-lg-6">
					          <div class="inner">
					         <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/web-design_ruma.gif" alt="Web Design and Mobile App Development Company" >
					          <div class="inner-img">
					             <img class="pt18 desk_call chat-btn" src="https://www.iogoos.com/wp-content/themes/iogoos/img/element59.png" alt="Web Design and Mobile App Development Company">
					            </div>
					            </div>
					      </div>
					      </div>
					</div>
					</div>
					</div>
     
     
     
    <!-- thirt-text-section -->
	<div class="text-third-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<p>Essence by the numbers</p>
				</div>
				<div class="col-lg-8">
					<p>We have a team of 350+ professionals working together as Web Developers, Android app developers, iOS app developers, PWA app developers, cross-platform app developers, eCommerce <a href="https://www.iogoos.com/shopify-development-services/">Expert &amp; Profesisonal Shopify Developer</a>, technology consulting, and Digital Marketing Services with an agile methodology that makes us the best <a href="https://www.iogoos.com/">Web Design and Mobile App Development Company</a>. We provide complete website designing services for all enterprises in making critical business decisions. Best web designers allows you to avoid unnecessary functionalities. Enlarge your brand fame with the best custom website design company. </p>
				</div>
			</div>
		</div>
	</div>  
    <!-- thirt-text-section --> 
    
 
	<!--services-main-section -->
	<div class="main-services-coundown" id="counter-stats">
		<div class="container">
			<div class="row">
				
					<div class="col-lg-4">
					    <div class="inner">
						<div class="first-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/aws.png" alt="Shopify development company">
						</div>
						<div class="second-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/sap.png" alt="Shopify Development Services">
						</div>	
						</div>	
					</div>
				<div class="col-lg-4">
						 <div class="stats">				
				<div class="conts"><span class="counting" data-count="20">0</span>
				<span class="kk_">K</span>
				<span class="plus">+</span>
				<span class="project">Projects Completed</span>
				</div>		
			</div>
					</div>
				<div class="col-lg-4">
						<div class="ggl_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/google_.jpg" alt="Google Developers- Certified Agency">
						</div>
					
					</div>
				</div>
				
				<div class="tenstats">
				    <div class="row">
					<div class="col-lg-3">
						<div class="images-box-section">
							<div class="first-images-section">
								<img src="<?php echo get_template_directory_uri(); ?>/img/col.PNG" alt="BigCommerce">							
							</div>
							<div class="second-images-section">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mag.png" alt="Magento Development company">
									 </div>
							</div>
						</div>
					
						<div class="col-lg-3">
						  <div class="inner">  
					  <div class="othr"></div>				
				<div class="tenconts"><span class="tencounting">16</span>
				<span class="tenplus">+</span>
				<span class="tenproject">Years <br>of experience</span>
				</div>	
				</div>
					</div>
						<div class="col-lg-4">
						    <div class="inner">  
						 <div class="etstats">				
				<div class="etconts"><span class="etcounting counting" data-count="108">0</span>
				<span class="etplus">%</span>
				<span class="etproject">Project <br>Predictability <br>Increase</span>
				</div>
				</div>
			</div>
					</div>
						<div class="col-lg-2">
						<div class="last-images">
				<img class="mob_img" src="<?php echo get_template_directory_uri(); ?>/img/cluthhs_.png" alt="Hire Certified Mobile App Developer">

						</div>
					</div>
					</div>
					
					</div>
				</div>
			</div>
	<!--services-main-section -->
		
	<!-- wrapper_io wrapper -->
    <div class="wrapper_io wrapper_io1 chk_fonts">
	<div class="container">
		<div class="heading_section">
			<p>SERVICES</p>
			<h2>Custom Software Development</h2>
			<p>For over 16 years, successfully delivered thousands of web applications and mobile apps to startups, small-medium enterprises, and top brands, empowering them with our digital intelligence and expertise. We deliver business-oriented outcomes 2X faster than our competitors and help our clients to earn millions of dollars using our simple digital marketing strategies and systems. Schedule a consultation with our Web Design and Mobile App Development Company consultant. We help to maximize your website potential with high converison rate.</p>
		</div>
		<div class="row">
			<ul>
				<li>
					<a class="market__A_1" href="<?php echo $site_path;?>/website-development-services/">
						<div class="c-badge__img">
							<svg role="img" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 74">
								<defs>
									<style>.wd-1{opacity:0.6;}wd-1,.wd-2{fill:currentColor;}</style>
								</defs>
								<title>Web Development</title>
								<g class="wd-1">
									<rect class="wd-2" x="43.94" y="58.97" width="2.31" height="9.25"/>
									<rect class="wd-2" x="30.06" y="58.97" width="2.31" height="9.25"/>
									<rect class="wd-2" x="27.75" y="67.06" width="20.81" height="2.31"/>
									<rect class="wd-2" x="27.75" y="48.56" width="25.44" height="2.31"/>
									<rect class="wd-2" x="37" y="53.19" width="2.31" height="2.31"/>
									<rect class="wd-2" x="27.75" y="57.81" width="25.44" height="2.31"/>
									<path class="wd-2" d="M74,37H71.69V6.94H2.31V27.75H0V6.94A2.32,2.32,0,0,1,2.31,4.63H71.69A2.32,2.32,0,0,1,74,6.94Z"/>
								</g>
								<rect class="wd-2" x="1.16" y="57.81" width="23.13" height="2.31"/>
								<path class="wd-2" d="M23.13,69.38H2.31A2.32,2.32,0,0,1,0,67.06V32.38a2.32,2.32,0,0,1,2.31-2.31H23.13a2.32,2.32,0,0,1,2.31,2.31V67.06A2.32,2.32,0,0,1,23.13,69.38Zm-20.81-37V67.06H23.13V32.38Z"/>
								<path class="wd-2" d="M71.69,69.38H57.81a2.32,2.32,0,0,1-2.31-2.31V41.63a2.32,2.32,0,0,1,2.31-2.31H71.69A2.32,2.32,0,0,1,74,41.63V67.06A2.32,2.32,0,0,1,71.69,69.38ZM57.81,41.63V67.06H71.69V41.63Z"/>
								<rect class="wd-2" x="56.66" y="62.44" width="16.19" height="2.31"/>
								<rect class="wd-2" x="9.25" y="62.44" width="6.94" height="2.31"/>
							</svg>
						</div>
					
						<span>WEB DEVELOPMENT</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_2" href="<?php echo $site_path;?>/mobile-app-development-services/">
						<div class="c-badge__img">
							<svg role="img" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 74">
								<defs>
									<style>.md-1{opacity:0.6;}md-1,.md-2{fill:currentColor;}</style>
								</defs>
								<title>Mobile App Development</title>
								<g class="md-1">
									<rect class="md-2" x="17.34" y="64.75" width="41.63" height="2.31"/>
									<path class="md-2" d="M53.19,74H23.13a7,7,0,0,1-6.94-6.94V34.69H18.5V67.06a4.63,4.63,0,0,0,4.63,4.63H53.19a4.63,4.63,0,0,0,4.62-4.62V55.5h2.31V67.06A7,7,0,0,1,53.19,74Z"/>
									<path class="md-2" d="M60.13,23.13H57.81V6.94a4.63,4.63,0,0,0-4.62-4.62H23.13A4.63,4.63,0,0,0,18.5,6.94v4.63H16.19V6.94A7,7,0,0,1,23.13,0H53.19a7,7,0,0,1,6.94,6.94Z"/>
									<rect class="md-2" x="57.81" y="30.06" width="2.31" height="9.25"/>
									<path class="md-2" d="M26.28,62h-4a1,1,0,0,1-1-1V57a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v4A1,1,0,0,1,26.28,62Zm-3-2h2V58h-2Z"/>
									<path class="md-2" d="M35.53,62h-4a1,1,0,0,1-1-1V57a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v4A1,1,0,0,1,35.53,62Zm-3-2h2V58h-2Z"/>
									<path class="md-2" d="M44.78,62h-4a1,1,0,0,1-1-1V57a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v4A1,1,0,0,1,44.78,62Zm-3-2h2V58h-2Z"/>
									<path class="md-2" d="M54,62H50a1,1,0,0,1-1-1V57a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v4A1,1,0,0,1,54,62Zm-3-2h2V58H51Z"/>
								</g>
								<path class="md-2" d="M1.16,31.22A1.16,1.16,0,0,1,0,30.06V15a1.16,1.16,0,0,1,1.16-1.16H24.28A1.16,1.16,0,0,1,25.44,15v9.25a1.16,1.16,0,0,1-1.16,1.16H7.42L2,30.88A1.15,1.15,0,0,1,1.16,31.22Zm1.16-15V27.27l3.81-3.81a1.16,1.16,0,0,1,.82-.34H23.13V16.19Z"/>
								<path class="md-2" d="M72.84,53.19H40.47A1.16,1.16,0,0,1,39.31,52V42.78a1.16,1.16,0,0,1,1.16-1.16H66.58L72,36.18A1.16,1.16,0,0,1,74,37V52A1.16,1.16,0,0,1,72.84,53.19ZM41.63,50.88H71.69V39.79L67.88,43.6a1.16,1.16,0,0,1-.82.34H41.63Z"/>
								<rect class="md-2" x="6.94" y="18.5" width="2.31" height="2.31"/>
								<rect class="md-2" x="11.56" y="18.5" width="2.31" height="2.31"/>
								<rect class="md-2" x="16.19" y="18.5" width="2.31" height="2.31"/>
								<path class="md-2" d="M38.16,39.31a8.09,8.09,0,1,1,8.09-8.09A8.1,8.1,0,0,1,38.16,39.31Zm0-13.87a5.78,5.78,0,1,0,5.78,5.78A5.79,5.79,0,0,0,38.16,25.44Z"/>
								<rect class="md-2" x="48.56" y="25.44" width="25.44" height="2.31"/>
								<rect class="md-2" x="62.44" y="18.5" width="11.56" height="2.31"/>
								<path class="md-2" d="M9.25,43.94H6.94V33.53a3.47,3.47,0,0,1,3.47-3.47H27.75v2.31H10.41a1.16,1.16,0,0,0-1.16,1.16Z"/>
								<path class="md-2" d="M8.09,57.81A5.78,5.78,0,1,1,13.88,52,5.79,5.79,0,0,1,8.09,57.81Zm0-9.25A3.47,3.47,0,1,0,11.56,52,3.47,3.47,0,0,0,8.09,48.56Z"/>
								<rect class="md-2" x="4.63" y="60.13" width="2.31" height="2.31"/>
								<rect class="md-2" x="9.25" y="60.13" width="2.31" height="2.31"/>
							</svg>
						</div>
					
						<span>MOBILE APPS DEVELOPMENT</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_3" href="<?php echo $site_path;?>/digital-marketing-services/">
						<div class="c-badge__img">
							<svg role="img" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 74">
								<defs>
									<style>.cs-1,.cs-2{fill:currentColor;}.cs-1{opacity:0.6;}</style>
								</defs>
								<title>Cloud Development Services</title>
								<path class="cs-1" d="M62.29,21.85c-.54-6.38-5-10.33-11.6-10.33h-.34A19.38,19.38,0,0,0,33.58,2.39,19.64,19.64,0,0,0,14,20.7a15.08,15.08,0,0,0,.09,30l.25,0L14.55,48l-.25,0a12.3,12.3,0,0,1,1-24.55h1.39V22A16.88,16.88,0,0,1,33.58,5.17a16.52,16.52,0,0,1,14.75,8.41l.4.72h2c6.54,0,8.88,4.58,8.88,8.88v1.39H61c5.71,0,10,4.8,10,11.16A12.36,12.36,0,0,1,59.7,48l-.25,0,.23,2.77.25,0a15.16,15.16,0,0,0,13.82-15C73.75,28.33,68.94,22.54,62.29,21.85Z"/>
								<path class="cs-2" d="M37,71.69a20.47,20.47,0,0,1-3-.24,1.16,1.16,0,0,1-.86-1.67,3.42,3.42,0,0,0,.39-1.56,3.47,3.47,0,0,0-3.47-3.47,3.44,3.44,0,0,0-3.31,2.48,1.15,1.15,0,0,1-1.78.61,20.76,20.76,0,0,1-5-5,1.15,1.15,0,0,1,.61-1.78,3.44,3.44,0,0,0,2.48-3.31,3.47,3.47,0,0,0-3.47-3.47,3.42,3.42,0,0,0-1.56.39,1.16,1.16,0,0,1-1.67-.86,18.88,18.88,0,0,1,0-6A1.16,1.16,0,0,1,18.09,47a3.43,3.43,0,0,0,1.56.39,3.47,3.47,0,0,0,3.47-3.47,3.44,3.44,0,0,0-2.48-3.31A1.15,1.15,0,0,1,20,38.86a20.76,20.76,0,0,1,5-5,1.15,1.15,0,0,1,1.78.61A3.44,3.44,0,0,0,30.06,37a3.47,3.47,0,0,0,3.47-3.47A3.42,3.42,0,0,0,33.14,32,1.16,1.16,0,0,1,34,30.3a18.41,18.41,0,0,1,6,0A1.16,1.16,0,0,1,40.86,32a3.42,3.42,0,0,0-.39,1.56A3.47,3.47,0,0,0,43.94,37a3.44,3.44,0,0,0,3.31-2.48A1.15,1.15,0,0,1,49,33.9a20.76,20.76,0,0,1,5,5,1.15,1.15,0,0,1-.61,1.78,3.44,3.44,0,0,0-2.48,3.31,3.47,3.47,0,0,0,3.47,3.47A3.42,3.42,0,0,0,55.9,47a1.16,1.16,0,0,1,1.67.86,18.88,18.88,0,0,1,0,6,1.16,1.16,0,0,1-1.67.86,3.42,3.42,0,0,0-1.56-.39,3.47,3.47,0,0,0-3.47,3.47,3.44,3.44,0,0,0,2.48,3.31A1.15,1.15,0,0,1,54,62.89a20.76,20.76,0,0,1-5,5,1.15,1.15,0,0,1-1.78-.61,3.44,3.44,0,0,0-3.31-2.48,3.47,3.47,0,0,0-3.47,3.47,3.43,3.43,0,0,0,.39,1.56A1.16,1.16,0,0,1,40,71.45,20.47,20.47,0,0,1,37,71.69Zm-1.27-2.37a14.86,14.86,0,0,0,2.54,0,5.5,5.5,0,0,1-.11-1.1,5.79,5.79,0,0,1,5.78-5.78,5.71,5.71,0,0,1,4.86,2.67,18.57,18.57,0,0,0,2.44-2.44,5.71,5.71,0,0,1-2.67-4.86A5.79,5.79,0,0,1,54.34,52a5.5,5.5,0,0,1,1.1.11c0-.44.05-.86.05-1.27s0-.82-.05-1.27a5.5,5.5,0,0,1-1.1.11,5.79,5.79,0,0,1-5.78-5.78,5.71,5.71,0,0,1,2.67-4.86,18.57,18.57,0,0,0-2.44-2.44,5.71,5.71,0,0,1-4.86,2.67,5.79,5.79,0,0,1-5.78-5.78,5.5,5.5,0,0,1,.11-1.1,14.86,14.86,0,0,0-2.54,0,5.5,5.5,0,0,1,.11,1.1,5.79,5.79,0,0,1-5.78,5.78,5.71,5.71,0,0,1-4.86-2.67,18.57,18.57,0,0,0-2.44,2.44,5.71,5.71,0,0,1,2.67,4.86,5.79,5.79,0,0,1-5.78,5.78,5.5,5.5,0,0,1-1.1-.11c0,.44-.05.86-.05,1.27s0,.82.05,1.27a5.5,5.5,0,0,1,1.1-.11,5.79,5.79,0,0,1,5.78,5.78,5.71,5.71,0,0,1-2.67,4.86,18.57,18.57,0,0,0,2.44,2.44,5.71,5.71,0,0,1,4.86-2.67,5.79,5.79,0,0,1,5.78,5.78A5.5,5.5,0,0,1,35.73,69.32Z"/>
								<path class="cs-2" d="M37,55.5a4.63,4.63,0,1,1,4.63-4.63A4.63,4.63,0,0,1,37,55.5Zm0-6.94a2.31,2.31,0,1,0,2.31,2.31A2.32,2.32,0,0,0,37,48.56Z"/>
							</svg>
						</div>
					
						<span>DIGITAL MARKETING</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_4" href="<?php echo $site_path;?>/ecommerce-development-service/">
						<div class="c-badge__img">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66 66" role="img" data-name="Layer 1" height="170">
								<defs>
									<style>.wd-1{opacity:0.6;}wd-1,.wd-2{fill:currentColor;}</style>
								</defs>
								<title>Ecommerce Development</title>
								<path class="sc-1" d="M38.162,30H29a4,4,0,0,0-4,4H19.414l-3.879-3.878a3.828,3.828,0,0,0-5.414,5.414L16.586,42H55V32H44.162ZM53,40H17.414l-5.879-5.878A1.829,1.829,0,0,1,12.828,31a1.839,1.839,0,0,1,1.293.536L18.586,36h6.951A4,4,0,0,0,29,38h9V36H29a2,2,0,0,1,0-4h8.838l6,2H53Z"></path>
								<path class="sc-1" d="M32,21a6,6,0,1,0-6-6A6.006,6.006,0,0,0,32,21Zm0-2a4,4,0,0,1-4-4,3.939,3.939,0,0,1,.142-1h7.716A3.939,3.939,0,0,1,36,15,4,4,0,0,1,32,19Zm2.618-7H29.382a3.927,3.927,0,0,1,5.236,0Z"></path>
								<g id="Outline" class="wd-1">
									<path class="sc-1" d="M41.534,12a9.858,9.858,0,0,0-.673-1.619l2.452-2.452L39.071,3.687,36.619,6.139A9.858,9.858,0,0,0,35,5.466V2H29V5.466a9.858,9.858,0,0,0-1.619.673L24.929,3.687,20.687,7.929l2.452,2.452A9.858,9.858,0,0,0,22.466,12H2V52H26v3.808L23.523,62H40.477L38,55.808V52H62V12ZM21,14h3.028l.177-.778a7.959,7.959,0,0,1,1.027-2.473l.426-.676L23.515,7.929l1.414-1.414,2.143,2.143.675-.425a7.934,7.934,0,0,1,2.475-1.027L31,7.029V4h2V7.029l.778.177a7.934,7.934,0,0,1,2.475,1.027l.675.425,2.143-2.143,1.414,1.414-2.143,2.144.426.676A7.959,7.959,0,0,1,39.8,13.222l.177.778H43v2H39.972l-.177.778a7.959,7.959,0,0,1-1.027,2.473l-.426.676,2.143,2.144-1.414,1.414-2.143-2.143-.676.425a7.913,7.913,0,0,1-2.474,1.027L33,22.971V26H31V22.971l-.778-.177a7.913,7.913,0,0,1-2.474-1.027l-.676-.425-2.143,2.143-1.414-1.414,2.143-2.144-.426-.676a7.959,7.959,0,0,1-1.027-2.473L24.028,16H21Zm5.477,46,1.2-3h8.646l1.2,3ZM36,55H28V52h8Zm24-5H4V46H60Zm0-36V44H4V14H19v4h3.466a9.858,9.858,0,0,0,.673,1.619l-2.452,2.452,4.242,4.242,2.452-2.451A9.9,9.9,0,0,0,29,24.534V28h6V24.534a9.9,9.9,0,0,0,1.619-.672l2.452,2.451,4.242-4.242-2.452-2.452A9.858,9.858,0,0,0,41.534,18H45V14Z"></path>
								</g>
							</svg>
						</div>
					
						<span>ECOMMERCE DEVELOPMENT</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_5" href="<?php echo $site_path;?>/ux-ui-design/">
						<div class="c-badge__img">
							<svg role="img" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 74">
								<defs>
									<style>.pm-1,.pm-2{fill:currentColor;}.pm-1{opacity:0.6;}</style>
								</defs>
								<title>Software Project Managment</title>
								<path class="pm-1" d="M6.94,13.88V57.81a2.31,2.31,0,0,1-4.62,0V4.63H21.49l4.63,4.63H67.06v2.31h2.31V6.94H27.07L22.45,2.31H0v55.5a4.63,4.63,0,0,0,4.63,4.63H21.85a20.71,20.71,0,0,1-1-2.31H8.63a4.59,4.59,0,0,0,.62-2.31V16.19H71.69V60.13H60.07a20.73,20.73,0,0,1-1,2.31H74V13.88Z"/>
								<path class="pm-2" d="M40.47,71.69A18.5,18.5,0,1,1,59,53.19,18.52,18.52,0,0,1,40.47,71.69Zm0-34.69A16.19,16.19,0,1,0,56.66,53.19,16.21,16.21,0,0,0,40.47,37Z"/>
								<rect class="pm-2" x="40.47" y="52.03" width="9.25" height="2.31"/>
								<rect class="pm-2" x="39.31" y="46.02" width="2.31" height="8.32"/>
								<circle class="pm-2" cx="40.47" cy="53.19" r="2.31"/>
								<rect class="pm-2" x="52.03" y="52.03" width="2.31" height="2.31"/>
								<rect class="pm-2" x="26.59" y="52.03" width="2.31" height="2.31"/>
								<rect class="pm-2" x="39.31" y="39.31" width="2.31" height="2.31"/>
								<rect class="pm-2" x="39.31" y="64.75" width="2.31" height="2.31"/>
								<rect class="pm-2" x="31.22" y="43.94" width="2.31" height="2.31"/>
								<rect class="pm-2" x="47.41" y="43.94" width="2.31" height="2.31"/>
								<rect class="pm-2" x="31.22" y="60.13" width="2.31" height="2.31"/>
								<rect class="pm-2" x="47.41" y="60.13" width="2.31" height="2.31"/>
							</svg>
						</div>
					
						<span>UI/UX <br>DESIGN</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_6" href="<?php echo $site_path;?>/virtual-employee-services/">
						<div class="c-badge__img">
							<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 74" role="img">
								<defs>
									<style>.sc-1,.sc-2{fill:currentColor;}.sc-2{opacity:0.6;}</style>
								</defs>
								<title>Strategic Software Consulting</title>
								<path class="sc-1" d="M9.25,53.19H6.94V40.61L2.35,22.25a1.14,1.14,0,0,1,0-.65L5.84,11.2a1.15,1.15,0,0,1,.53-.64L24.87.15a1.16,1.16,0,0,1,1.72,1V5L34,8.19a1.15,1.15,0,0,1,.36.25L45.91,20a1.16,1.16,0,0,1,.22,1.33L43.82,26a1.15,1.15,0,0,1-1.31.6L29,23.2l-6.55,3.28-1-2.07,6.94-3.47a1.14,1.14,0,0,1,.8-.09l13,3.24L43.69,21,32.87,10.23,25,6.84a1.16,1.16,0,0,1-.7-1.06V3.13L7.89,12.35,4.67,22,9.21,40.19a1.12,1.12,0,0,1,0,.28Z"/>
								<path class="sc-1" d="M37,53.19H34.69v-10L16.46,21.56l1.77-1.49,18.5,22a1.15,1.15,0,0,1,.27.74Z"/>
								<rect class="sc-1" x="27.75" y="10.41" width="2.31" height="2.31"/>
								<path class="sc-1" d="M43.94,74H0V64.75a4.63,4.63,0,0,1,4.63-4.63V55.5H39.31v4.63a4.63,4.63,0,0,1,4.63,4.63ZM2.31,71.69H41.62V64.75a2.32,2.32,0,0,0-2.31-2.31H37V57.81H6.94v4.63H4.62a2.32,2.32,0,0,0-2.31,2.31Z"/>
								<rect class="sc-1" x="9.25" y="60.13" width="25.44" height="2.31"/>
								<path class="sc-2" d="M67.06,25.18A25.47,25.47,0,0,0,41.63,0H31.22V2.31H41.63A23.15,23.15,0,0,1,64.75,25.44v.25l6.94,15v.9H64.75V53.19A5.79,5.79,0,0,1,59,59H48.56v2.31h2.31V74h2.31V61.28H59a8.1,8.1,0,0,0,8.09-8.09V43.94H74V40.22Z"/>
							</svg>
						</div>
					
						<span>VIRTUAL EMPLOYEE</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_7" href="<?php echo $site_path;?>/shopify-development-services/">
						<div class="c-badge__img">
							<svg height="170" viewBox="0 0 60 60" role="img" xmlns="http://www.w3.org/2000/svg">
								<defs>
									<style>.wd-1{opacity:0.6;}wd-1,.wd-2{fill:currentColor;}</style>
								</defs>
								<g class="wd-1" id="Page-1" fill="none" fill-rule="evenodd">
									<g fill="rgb(0,0,0)" fill-rule="nonzero" transform="translate(-1)">
										<path class="sc-1 Shapes" d="m58 0h-54c-1.70524172.05441563-3.04599736 1.47651044-3 3.182v43.636c-.04599736 1.7054896 1.29475828 3.1275844 3 3.182h17.382l-2 4h-3.382c-1.6568542 0-3 1.3431458-3 3s1.3431458 3 3 3h30c1.6568542 0 3-1.3431458 3-3s-1.3431458-3-3-3h-3.382l-2-4h17.382c1.7052417-.0544156 3.0459974-1.4765104 3-3.182v-43.636c.0459974-1.70548956-1.2947583-3.12758437-3-3.182zm-11 57c0 .5522847-.4477153 1-1 1h-30c-.5522847 0-1-.4477153-1-1s.4477153-1 1-1h30c.5522847 0 1 .4477153 1 1zm-6.618-3h-18.764l2-4h14.764zm17.618-6h-54c-.59661794-.0616152-1.03807599-.5834187-1-1.182v-2.818h4c.55228475 0 1-.4477153 1-1s-.44771525-1-1-1h-4v-38.818c-.03807599-.59858134.40338206-1.12038476 1-1.182h54c.5966179.06161524 1.038076.58341866 1 1.182v38.818h-48c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h48v2.818c.038076.5985813-.4033821 1.1203848-1 1.182z"></path>
										<path class="sc-1 Shape" d="m41.81 16.234-.786 4.806c-.1093116.6392386.1592915 1.2842754.69 1.657.5125248.3672444 1.190817.406182 1.742.1l4.044-2.23 4.045 2.23c.5496707.3070422 1.2270245.2700603 1.74-.095.530443-.3735028.7995312-1.0182257.692-1.658l-.787-4.806 3.328-3.4c.4454763-.4558846.5973415-1.1232414.393-1.727-.1944632-.5944885-.7067598-1.0290707-1.325-1.124l-4.552-.694-2.034-4.335c-.2693972-.58583004-.8551964-.9612167-1.5-.9612167s-1.2306028.37538666-1.5.9612167l-2.035 4.329-4.55.694c-.6187196.0943615-1.131576.5290905-1.326 1.124-.2048896.6034139-.0529354 1.2707751.393 1.726zm2.638-5c.5469612-.0831017 1.0165062-.4333852 1.252-.934l1.8-3.826 1.8 3.826c.2338999.5025507.7032102.85519 1.251.94l4.115.627-3.015 3.084c-.3758002.3863833-.5461031.9280875-.459 1.46l.7 4.295-3.6-1.987c-.4936818-.2733739-1.0933182-.2733739-1.587 0l-3.6 1.987.7-4.295c.0859618-.5318306-.0841826-1.0730308-.459-1.46l-3.016-3.084z"></path>
										<path class="sc-1 Shape" d="m7 33c.26519481-.0000566.51950727-.1054506.707-.293l9.293-9.293 6.793 6.793c.3904999.3903819 1.0235001.3903819 1.414 0l13.5-13.5c.3789722-.3923789.3735524-1.0160848-.0121814-1.4018186s-1.0094397-.3911536-1.4018186-.0121814l-12.793 12.793-6.793-6.793c-.3904999-.3903819-1.0235001-.3903819-1.414 0l-10 10c-.28590792.2859943-.37142191.7160366-.21667798 1.0896546.15474393.3736179.51928208.6172591.92367798.6173454z"></path>
										<path class="sc-1 Shape" d="m8 14h8c1.1045695 0 2-.8954305 2-2v-4c0-1.1045695-.8954305-2-2-2h-8c-1.1045695 0-2 .8954305-2 2v4c0 1.1045695.8954305 2 2 2zm0-6h8v4h-8z"></path>
										<path class="sc-1 Shape" d="m22 14h8c1.1045695 0 2-.8954305 2-2v-4c0-1.1045695-.8954305-2-2-2h-8c-1.1045695 0-2 .8954305-2 2v4c0 1.1045695.8954305 2 2 2zm0-6h8v4h-8z"></path>
										<path class="sc-1 Shape" d="m7 35c-.55228475 0-1 .4477153-1 1v3c0 .5522847.44771525 1 1 1s1-.4477153 1-1v-3c0-.5522847-.44771525-1-1-1z"></path>
										<path class="sc-1 Shape" d="m12 32c-.5522847 0-1 .4477153-1 1v6c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-6c0-.5522847-.4477153-1-1-1z">
										</path>
										<path class="sc-1 Shape" d="m22 32c-.5522847 0-1 .4477153-1 1v6c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-6c0-.5522847-.4477153-1-1-1z"></path>
										<path class="sc-1 Shape" d="m27 32c-.5522847 0-1 .4477153-1 1v6c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-6c0-.5522847-.4477153-1-1-1z">
										</path>
										<path class="sc-1 Shape" d="m47 24c-.5522847 0-1 .4477153-1 1v14c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-14c0-.5522847-.4477153-1-1-1z">   
										</path>
										<path class="sc-1 Shape" d="m32 27c-.5522847 0-1 .4477153-1 1v11c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-11c0-.5522847-.4477153-1-1-1z">
										</path>
										<path class="sc-1 Shape" d="m42 26c-.5522847 0-1 .4477153-1 1v12c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-12c0-.5522847-.4477153-1-1-1z"></path>
										<path class="sc-1 Shape" d="m52 26c-.5522847 0-1 .4477153-1 1v12c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-12c0-.5522847-.4477153-1-1-1z"></path>
										<path class="sc-1 Shape" d="m37 22c-.5522847 0-1 .4477153-1 1v16c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-16c0-.5522847-.4477153-1-1-1z"></path>
										<path class="sc-1 Shape" d="m17 27c-.5522847 0-1 .4477153-1 1v11c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-11c0-.5522847-.4477153-1-1-1z"></path>
									</g>
								</g>
							</svg>
						</div>
					
						<span>Shopify Development Services</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_8" href="<?php echo $site_path;?>/wordpress-development-services/">
						<div class="c-badge__img">
							<svg role="img" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 74">
								<defs>
									<style>.cls-1{opacity:0.6;}.cls-2{fill:currentColor;}</style>
								</defs>
								<title>Software Maintenance and Support</title>
								<g class="cls-1">
									<rect class="cls-2" x="13.88" y="18.5" width="2.31" height="2.31"/>
								</g>
								<g class="cls-1">
									<rect class="cls-2" x="18.5" y="18.5" width="2.31" height="2.31"/>
								</g>
								<g class="cls-1">
									<rect class="cls-2" x="23.13" y="18.5" width="2.31" height="2.31"/>
								</g>
								<g class="cls-1">
									<path class="cls-2" d="M74,60.12H4.62A4.62,4.62,0,0,1,0,55.5V0H22.45l4.62,4.62H69.38V9.25H67.06V6.94H26.11L21.49,2.31H2.31V55.5a2.32,2.32,0,0,0,4.63,0V11.56H74ZM8.63,57.81H71.69V13.88H9.25V55.5A4.64,4.64,0,0,1,8.63,57.81Z"/>
								</g>
								<path class="cls-2" d="M40.47,51.89a16,16,0,1,1,16-16A16.06,16.06,0,0,1,40.47,51.89Zm0-30.08a14,14,0,1,0,14,14A14,14,0,0,0,40.47,21.81Z"/>
								<rect class="cls-2" x="40.47" y="34.84" width="8.02" height="2.01"/>
								<rect class="cls-2" x="39.47" y="29.63" width="2.01" height="7.22"/>
								<circle class="cls-2" cx="40.47" cy="35.84" r="2.01"/>
								<rect class="cls-2" x="50.5" y="34.84" width="2.01" height="2.01"/>
								<rect class="cls-2" x="28.44" y="34.84" width="2.01" height="2.01"/>
								<rect class="cls-2" x="39.47" y="23.81" width="2.01" height="2.01"/>
								<rect class="cls-2" x="39.47" y="45.87" width="2.01" height="2.01"/>
								<rect class="cls-2" x="32.45" y="27.82" width="2.01" height="2.01"/>
								<rect class="cls-2" x="46.49" y="27.82" width="2.01" height="2.01"/>
								<rect class="cls-2" x="32.45" y="41.86" width="2.01" height="2.01"/>
								<rect class="cls-2" x="46.49" y="41.86" width="2.01" height="2.01"/>
								<path class="cls-2" d="M72.84,74h-22a1.23,1.23,0,0,1-.65-.19L47.55,72l-1.64,1.64a1.15,1.15,0,0,1-.82.34H41.62a1.16,1.16,0,0,1-1.15-1.16V63.59a1.15,1.15,0,0,1,1.15-1.15h3.47a1.15,1.15,0,0,1,.82.34l1.64,1.64,2.68-1.79a1.23,1.23,0,0,1,.65-.19h22A1.15,1.15,0,0,1,74,63.59v9.25A1.16,1.16,0,0,1,72.84,74ZM51.22,71.69H71.69V64.75H51.22l-3.17,2.12a1.15,1.15,0,0,1-1.46-.15l-2-2H42.78v6.94h1.83l2-2a1.15,1.15,0,0,1,1.46-.14Z"/>
								<rect class="cls-2" x="10.41" y="67.06" width="31.22" height="2.31"/>
								<path class="cls-2" d="M10.41,71.69H1.16A1.16,1.16,0,0,1,0,70.53V65.91a1.16,1.16,0,0,1,1.16-1.16h9.25a1.16,1.16,0,0,1,1.15,1.16v4.62A1.16,1.16,0,0,1,10.41,71.69Zm-8.1-2.31H9.25V67.06H2.31Z"/>
							</svg>
						</div>
					
						<span>WordPress Development Services</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
			<a href="<?php echo $site_path;?>/our-services/" class="explore_btn">EXPLORE ALL</a>
		</div>
	</div>
</div>
	<!-- wrapper_io wrapper -->





	<!-- teacher-feature-wrap-style-1 -->
     <section class="teacher-feature-wrap-style-1 motion-effects-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="teacher-feature-box style-1">
        
                <div
                  class="teacher-list-wrap wow animated fadeInDownMedium"
                  data-wow-duration="1s"
                  data-wow-delay="0.5s"
                >
                  <div class="teacher-list-header">
                    <p class="heading-title">
                      <span>270 +</span> Client Testimonial
                    </p>
                  </div>




          <ul class="thumb-nav block-list teacher-list">
            <li>
                <div class="figure-box">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/img/Sarah.jpg"
                          alt="Team"
                          width="50"
                          height="50"
                        />
                      </div>
                      <div class="content-box">
                        <h3 class="teacher-name">Sarah Kleban-New Canaan</h3>
                        <p class="subject">Company Owner, Taxi Tour Bahamas</p>
                      </div>
            </li>
            <li>  <div class="figure-box">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/img/Oscar.jpg"
                          alt="Team"
                          width="50"
                          height="50"
                        />
                      </div>
                      <div class="content-box">
                        <h3 class="teacher-name">Oscar Blazquez-Iberica LTD</h3>
                        <p class="subject">Partner, foodology</p>
                      </div>
                      </li>
            <li> <div class="figure-box">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/img/Jerome.jpg"
                          alt="Team"
                          width="50"
                          height="50"
                        />
                      </div>
                      <div class="content-box">
                        <h3 class="teacher-name">Jerome Holland-Vancouver</h3>
                        <p class="subject">Co-Founder, CopStore</p>
                      </div></li>
            <li>
                <div class="figure-box">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/img/Steve.jpg"
                          alt="Team"
                          width="50"
                          height="50"
                        />
                      </div>
                      <div class="content-box">
                        <h3 class="teacher-name">Steve Kilberg-SKRP Media</h3>
                        <p class="subject">CEO, Famous Dholis</p>
                      </div>
            </li>
            <li>  <div class="figure-box">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/img/Steven.jpg"
                          alt="Team"
                          width="50"
                          height="50"
                        />
                      </div>
                      <div class="content-box">
                        <h3 class="teacher-name">Steven Borrelli-cuts</h3>
                        <p class="subject">Owner, Regali Di Fiori </p>
                      </div>
                      </li>
          </ul>

              <div class="teacher-list-footer">
                      <div class="vew_servs"> 
						<a href="https://www.iogoos.com/about-us/" class="animated-button link-to arrow-scroll--bottom arrow-scroll showing show" target="_blank">
							<svg>
								<g>
									<line x2="227.62" y1="31.28" y2="31.28"></line>
									<polyline points="222.62 25.78 228.12 31.28 222.62 36.78"></polyline>
									<circle cx="224.67" cy="30.94" r="30.5" transform="rotate(180 224.67 30.94) scale(1, -1) translate(0, -61)"></circle>
								</g>
							</svg>
							<span class="font">See More</span>
						</a>
					  </div>
                  </div>
                </div>
                        <ul class="block-list shape">
                  <li
                    class="shape-1 wow animated fadeInUp"
                    data-wow-duration="1s"
                    data-wow-delay="0.9s"
                  >
                    <img
                      class="motion-effects5"
                      src="<?php echo get_template_directory_uri(); ?>/img/element27.png"
                      alt="Shape"
                      width="175"
                      height="165"
                    />
                  </li>
                  <li
                    class="shape-2 wow animated fadeInRight"
                    data-wow-duration="1s"
                    data-wow-delay="1.3s"
                  >
                    <img
                      class="motion-effects6"
                      src="<?php echo get_template_directory_uri(); ?>/img/element28.png"
                      alt="Shape"
                      width="176"
                      height="176"
                    />
                  </li>
                  <li
                    class="shape-3 wow animated fadeInLeft"
                    data-wow-duration="1s"
                    data-wow-delay="1.7s"
                  >
                    <img
                      class="motion-effects2"
                      src="<?php echo get_template_directory_uri(); ?>/img/element29.png"
                      alt="Shape"
                      width="58"
                      height="59"
                    />
                  </li>
                </ul>
                <div
                  class="feature-course-wrap wow animated fadeInUpMedium"
                  data-wow-duration="1s"
                  data-wow-delay="0.2s"
                >
                  <div class="figure-box">
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="<?php echo get_template_directory_uri(); ?>/img/Iogoos.m4v" type="video/mp4"></video>
                     
                  </div>
                  <div class="content-box">
                    <ul class="inline-list course-info">
                      <li><a href="<?php echo $site_path;?>/mobile-app-development-services/"><span>1</span> Mobile App Development</a></li>
                      <li><a href="<?php echo $site_path;?>/website-development-services/"><span>2</span> Web Development</a></li>
                      <li><a href="<?php echo $site_path;?>/website-design-services/"><span>3</span> Website Designing Services</a></li>
                      <li><a href="<?php echo $site_path;?>/digital-marketing-services/"><span>4</span> Digital Marketing Services</a></li>
                      <li><a href="<?php echo $site_path;?>/ecommerce-development-service/"><span>5</span> eCommerce Services</a></li>
                      <li><a href="<?php echo $site_path;?>/cms-development-service/"><span>6</span> CMS Development</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="teacher-feature-box style-1">
                <div>
                  <h2 class="title">About Us</h2>
                  <p class="provide">We provide <span>Services for all Enterprises </span> in making critical business decisions.</p>
                  <p class="interface">The interface and user experience should not be boring. For this, we strategically use color and texture with a creative mind.</p>
                  <p class="description">
                   IOGOOS SOLUTION is an established and experienced web design and Mobile App development company with innovative ideas. Strictly focus on the quality of productions, proven track record in providing <a href="https://www.iogoos.com/website-design-services/">Website Designing Services</a>, Mobile Apps Development, technology consulting, and Digital Marketing services to clients worldwide.
                  </p>
                  <ul class="block-list feature-list">
                    <li>
                      <i class="fas fa-check-circle"></i>Designing cutting-edge responsive websites with augmented and virtual reality.
                    </li>
                    <li>
                      <i class="fas fa-check-circle"></i>Simplify your business needs by our <a href="https://www.iogoos.com/seo-services/">best affordable seo services</a>.
                    </li>
                    <li>
                      <i class="fas fa-check-circle"></i>Effective ERP/CRM Solution for your business.
                    </li>
                  </ul>
                    <div class="vew_servs"> 
						<a href="https://www.iogoos.com/about-us/" class="animated-button link-to arrow-scroll--bottom arrow-scroll showing show" target="_blank">
							<svg>
								<g>
									<line x2="227.62" y1="31.28" y2="31.28"></line>
									<polyline points="222.62 25.78 228.12 31.28 222.62 36.78"></polyline>
									<circle cx="224.67" cy="30.94" r="30.5" transform="rotate(180 224.67 30.94) scale(1, -1) translate(0, -61)"></circle>
								</g>
							</svg>
							<span class="font">Read More</span>
						</a>
					  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	<!-- teacher-feature-wrap-style-1 -->

	<!-- google-clutch -->
    <div class="google-clutch">
<div class="container">
<h2>Top rated web & mobile apps development company</h2>
<div class="row">
<div class="col-lg-6">
<div class="google_ inner">
          <h3>Excellent, working with web designer express was great.</h3>
     <div class="clutch-cont">
    <div class="inner-img">
      <a href="https://www.google.com/search?q=iogoos+google+review&oq=iogoos+google+&aqs=chrome.0.69i59j69i57j69i59j69i60.6159j0j7&sourceid=chrome&ie=UTF-8#lrd=0x390d04da527f94cb:0x91e16b8de14c90d8,1,,," target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/img/google-rev-img.png" class="img-responsive center-block animate" alt="star rating">
      </a>
    </div> 
 </div>
  <p>Thanks to their knowledge and determination our website looks great and functions really good.  I am recommend anyone that is looking for a custom website to give them a call and speak to Gus, he will guide you to the right direction.</p>
</div>
</div>
<div class="col-lg-6">
<div class="clutch_ inner">
     <h3>"The team is details oriented and effective worker."</h3>
     <div class="clutch-cont">
    <div class="inner-img">
     <div class="right-img">
     <script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script> <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="2" data-height="45" data-darkbg="1" data-clutchcompany-id="304998"></div>
  </div>
    </div> 
 </div>
 
  <p>IOGOOS Solution managed to deliver the project in a timely manner. The team supported great communication throughout the project by utilizing emails and phone calls. They were communicative, they understand the client's feedback, and they delivered good results.</p>
</div>
</div>
</div>
</div>
</div>
	<!-- google-clutch -->

	<!-- new-services-section -->
    <div class="new-services-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="year-fig-count">
					<div class="years-exp primary-gradient">

						<div class="span figure av-white">
							16
						</div>
						<div class="span fig-content av-white">
							<p class="plus-icon">+</p>
							<p class="full years">years</p>
							<p class="full expr pt-5">of experience</p>
						</div>
					</div>
				</div>
				<div class="years-in">
					<h3 class="av-secondary bridge">
						in
					</h3>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="fields-cont">
					<div class="service-cat anim-first">
						<h3><a href="<?php echo $site_path;?>/mobile-app-development-services/">Mobile App Development</a></h3>
					<p class="av-secondary"><a href="<?php echo $site_path;?>/android-apps-development/">Android</a>,
					<a href="<?php echo $site_path;?>/ios-apps-development/">iOS</a>, 
					<a href="#">React Native</a>, 
					<a href="#">Flutter</a>, 
					<a href="#">Cross Platform</a></p>
					</div>
					<div class="service-cat anim-second">
						<h3><a href="<?php echo $site_path;?>/website-development-services/">Web Development</a></h3>
						<p class="av-secondary">
						<a href="<?php echo $site_path;?>/4906-2/">Custom web</a>,
						<a href="#">Progressive web</a>, 
						<a href="<?php echo $site_path;?>/real-estate-website-design/">Real Estate</a>,
						<a href="<?php echo $site_path;?>/ecommerce-development-service/">E-Commerce</a></p>
					</div>
					<div class="service-cat anim-third">
						<h3><a href="<?php echo $site_path;?>/ux-ui-design/">UI/ UX Design</a></h3>
                    <p class="av-secondary"><a href="<?php echo $site_path;?>/angularjs-development-services/">Angular.js</a>,
                    <a href="#">React.js</a>,
                    <a href="#">Vue.js</a>,
                    <a href="#">HTML5</a>,
                    <a href="#">Typescript</a>,
                    <a href="#">Javascript</a></p>
					</div>
					<div class="arrow-slide anim-second">
						<a href="https://www.iogoos.com/our-services/" class="animated-button link-to arrow-scroll--bottom arrow-scroll showing show" target="_blank">
							<svg>
								<g>
									<line x2="227.62" y1="31.28" y2="31.28"></line>
									<polyline points="222.62 25.78 228.12 31.28 222.62 36.78"></polyline>
									<circle cx="224.67" cy="30.94" r="30.5" transform="rotate(180 224.67 30.94) scale(1, -1) translate(0, -61)"></circle>
								</g>
							</svg>
							<span class="font">View All Services</span>
						</a>
						<div class="readmore_btn mobile-link-newservice">
							<!--
							<a href="https://www.iogoos.com/our-services/" class="arrow bounce" target="_blank"> Read More
								<span class="fa fa-arrow-right fa-2x"></span>
							</a>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- new-services-section -->
	
    <!-- ................fourth section.......... -->
    <div class="io_section io_featured io_background" style="display: none;">
	<div class="container">
		<h2>Why People Choose Us</h2>
		<div class="io_row">
			<div class="choose_io_value">
				<figure class="c-chooseio__value__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/security_wcu.png" alt="security" width="61" height="74" class="img-responsive">
				</figure>
				<div class="c-chooseio__value__meta">
					<h3 class="c-heading c-heading--small"><span class="u-copyLight">Credibility</span></h3>
				</div>
			</div>
			<div class="choose_io_value">
				<figure class="c-chooseio__value__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/security_wcu.png" alt="security" width="61" height="74" class="img-responsive">
				</figure>
				<div class="c-chooseio__value__meta">
					<h3 class="c-heading c-heading--small"><span class="u-copyLight">Flexibility</span></h3>
				</div>
			</div>
			<div class="choose_io_value">
				<figure class="c-chooseio__value__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/security_wcu.png" alt="security" width="61" height="74" class="img-responsive">
				</figure>
				<div class="c-chooseio__value__meta">
					<h3 class="c-heading c-heading--small"><span class="u-copyLight">Security</span></h3>
				</div>
			</div>
			<div class="choose_io_value">
				<figure class="c-chooseio__value__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/security_wcu.png" alt="security" width="61" height="74" class="img-responsive">
				</figure>
				<div class="c-chooseio__value__meta">
					<h3 class="c-heading c-heading--small"><span class="u-copyLight">Value</span></h3>
				</div>
			</div>
			<div class="choose_io_value">
				<figure class="c-chooseio__value__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/security_wcu.png" alt="security" width="61" height="74" class="img-responsive">
				</figure>
				<div class="c-chooseio__value__meta">
					<h3 class="c-heading c-heading--small"><span class="u-copyLight">Support</span></h3>
				</div>
			</div>
			<div class="choose_io_value">
				<figure class="c-chooseio__value__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/security_wcu.png" alt="security" width="61" height="74" class="img-responsive">
				</figure>
				<div class="c-chooseio__value__meta">
					<h3 class="c-heading c-heading--small"><span class="u-copyLight">Dedicated Project Manager</span></h3>
				</div>
			</div>
			<div class="choose_io_value">
				<figure class="c-chooseio__value__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/security_wcu.png" alt="security" width="61" height="74" class="img-responsive">
				</figure>
				<div class="c-chooseio__value__meta">
					<h3 class="c-heading c-heading--small"><span class="u-copyLight">80+ Employees</span></h3>
				</div>
			</div>
			<div class="choose_io_value">
				<figure class="c-chooseio__value__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/security_wcu.png" alt="security" width="61" height="74" class="img-responsive">
				</figure>
				<div class="c-chooseio__value__meta">
					<h3 class="c-heading c-heading--small"><span class="u-copyLight">Clients From Aroud The Glob</span></h3>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- new-client -->
    <div class="new-client">
<div class="container">
    	<h3>Delivering measurable results for our 450+ satisfied world's leading businesses</h3>
<div class="row">  
<div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/aylxa-logo.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/uni-logo.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-3.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-4.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-5.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-6.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-7.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-8.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-1.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-2.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/sommer-logo.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/perfect-logo.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/client-logo-5.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/creative-logo.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 <div class="scroll-animation revealedBox goRight">
<div class="contentBox"><img src="<?php echo get_template_directory_uri(); ?>/img/cuts-logo.png" alt="client"></div>
  <span></span> 
  <span></span>  
  <span></span> 
  <span></span> 
  <span></span>  
 </div>
 </div>
  </div>
 </div>
	<!-- new-client -->

    <!-- Tab port section -->
    <div class="top-port-section">
				<h4>OUR RECENT PROJECTS</h4>
				<h3>We’ve come a long way in
					<Span>16 + years</Span> </h3>
				<div class="tab-box">
					<div class="tabs">
					<button class="tabs__button tabs__button--active" type="button"><span>WEB</span><span class="lst-spn">WEB APPLICATION</span></button>
						<button class="tabs__button" type="button"><span>DIGITAL</span><span class="lst-spn">DIGITAL MARKETING</span></button>
						<button class="tabs__button" type="button"><span>MOBILE</span><span class="lst-spn">MOBILE APP</span></button>

					</div>
					<!-- item-1 -->
					<div class="tab-content tab-content--active">
						
						<div class="prt_carousel">
							<?php include("home_portfolio_2.php");?>
						</div>						
					</div>
					<!-- item-2 -->
					<div class="tab-content">
						<div class="prt_carousel">
							<?php include("home_portfolio.php");?>
						</div>
					</div>
					<!-- item-3 -->
					<div class="tab-content">
						
						<div class="prt_carousel">
							<?php include("home_portfolio_3.php");?>
						</div>						
					</div>
				</div>
				
<div class="col-sm-12 mbtn">
         <a class="btn more-port" href="https://www.iogoos.com/portfolio/">View More Portfolio</a>
      </div>
	</div>
    <!-- Tab port section -->
	
    <div class="clear-fix" style="clear: both"></div>

    <!-- indus -->
    <div class="indus">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2>We Serve Diverse Industry Verticals</h2>
<p>As a best-in-class of Web Design and Mobile App Development Company , we offer services for various industries across the globe. Our solutions yield benefit in Internet-facing, collaborative and professional environments with a focus on optimization and expansion no matter the industry they operate in.</p>
</div>
</div>
		<div id="vertical_tab_nav">
			<ul>
				<li class="selected"><a href="index.html"><i class='fas fa-hand-holding-heart'></i>Healthcare</a></li>
				<li><a href="https://www.iogoos.com/"><i class='fas fa-bus-alt'></i>Travel & Tourism</a></li>
				<li><a href="https://www.iogoos.com/"><i class="fas fa-home"></i>Banking & Finance</a></li>
				<li><a href="https://www.iogoos.com/"><i class='fas fa-car'></i>Logistics & Transport</a></li>
				<li><a href="https://www.iogoos.com/"><i class='fas fa-plane'></i>Retail & Ecommerce</a></li>
				<li><a href="https://www.iogoos.com/"><i class='fas fa-camera-retro'></i>Media & Entertainment</a></li>
				<li><a href="https://www.iogoos.com/"><i class='far fa-edit'></i>Education & E-Learning</a></li>
				<li><a href="https://www.iogoos.com/"><i class='far fa-credit-card'></i>ISVs & Product Firms</a></li>
			</ul>
			<div>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/healthcare_1.png" alt="health care website">
					<h3>Healthcare</h3>
					<hr />
					<p>We facilitate healthcare app development teams to global clients who build cost-effective, compliance fit & scalable applications and help them grow their businesses exponentially. As a top software outsourcing company, we ensure.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/travel_.png" alt=" Travel & tourism website">
					<h3>Travel & Tourism</h3>
					<hr />
					<p>Our travel application development team understands the terms of the industry and helps you address the growing demand of customers. As a leading IT outsourcing company in India we excel in all the latest technologies.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/bank_.png" alt="Banking website">
					<h3>Banking & Finance</h3>
					<hr />
					<p>We build software solutions for financial businesses aspiring for increased operational efficiency, agility and constant growth. Outsource software development services from us and build scalable, secure and robust finance.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/transport_.png" alt="industry-bg">
					<h3>Logistics & Transport</h3>
					<hr />
					<p>Leverage our deep domain expertise to develop digital solutions that simplify the complex and challenging business problems and help you grow your business. As a leading software outsourcing company in India, we have development teams.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/retail_.png" alt="industry-bg">
					<h3>Retail & Ecommerce</h3>
					<hr />
					<p>We have proficiency in delivering techno-driven solutions for any bespoke needs of the digital retail or e-Commerce industry. As a leading software projects outsourcing company from the past 16 years, we have experience of delivering various.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/media_.png" alt="industry-bg">
					<h3>Media & Entertainment</h3>
					<hr />
					<p>We offer media & entertainment app development services and have an in-depth understanding of the industry. In the past 16 years, we have delivered hundreds of software outsourcing projects to media clients globally and.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/education_.png" alt="industry-bg">
					<h3>Education & E-Learning</h3>
					<hr />
					<p>Being one of the best IT outsourcing company in India, we provide both education institutes and education industry professionals with the best in class education and eLearning software development services that not only help them to grow.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/firms_.png" alt="industry-bg">
					<h3>ISVs & Product Firms</h3>
					<hr />
					<p>We deliver high-performance and up to 60% cost-effective IT software development solutions for independent software vendors and software product firms. Outsource software development services from us and get secure, scalable, and.. <a href="#">VIEW MORE</a></p>
				</article>
			</div>
		</div>
</div>
</div>
    <!-- indus -->
  
    <div class="clear-fix" style="clear: both"></div>



<div class="tem_im">
    <div class="container">
        <div class="top-text">
            <h2>We're shaping the future of business</h2>
            <p>Our Mix of technology expertise changed the agency model to give you easier access to the skills and expertise <br>needed to develop web design & mobile apps and grow your business.</p>
        </div>
<div class="slick-slider">
	  <div class="element element-1">
	       <div class="team_imgss">
		  <img class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/ankit1_.jpg"alt"Ankit">
		  <a href="#" class="tm_nms">Ankit Kumar<span>Technology Head</span></a>
		  <a href="#" class="cnst">Consulting</a>
	  </div>
	</div>
	  <div class="element element-1">
	       <div class="team_imgss">
	      <img class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/harish.jpg"alt"Harish">
		   <a href="#" class="tm_nms">Harisinh Makwana <span>Project Manager</span></a>
		   <a href="#" class="cnst">Consulting</a>
	  </div>
	</div>
  <div class="element element-1">
       <div class="team_imgss">
      <img class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/sarat.jpg"alt"Sarat">
		  <a href="#" class="tm_nms">Sarat Dogra <span>Business Development Manager</span></a>
		  <a href="#" class="cnst">Consulting</a>
	  </div>
	</div>
	  <div class="element element-1">
	      <div class="team_imgss">
	      <img class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/kanika.jpg"alt"Kanika">
		  <a href="#" class="tm_nms">Kanika Singh <span>Creative Head</span></a>
		  <a href="#" class="cnst">Consulting</a>
	  </div>
	</div>

	<div class="element element-1">
	     <div class="team_imgss">
		<img class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/pritesh.jpg" alt"Pritesh">
	 <a href="#" class="tm_nms">Pritesh Bhatt<span>Sr. Software Engineer</span></a>
	 <a href="#" class="cnst">Consulting</a>
	 </div>
	</div>
	  <div class="element element-1">
	      <div class="team_imgss">
	      <img class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/jolly.jpg"alt"Jolly">
		  <a href="#" class="tm_nms">Jolly <span>Sales Executive</span></a>
		  <a href="#" class="cnst">Consulting</a>
	  </div>
	</div>
  <div class="element element-1">
      <div class="team_imgss">
      <img class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/shruti.jpg"alt"Shruti">
		  <a href="#" class="tm_nms">Shruti Jaiswal <span>Seo Executive Head</span></a>
		  <a href="#" class="cnst">Consulting</a>
	  </div>
	</div>
</div>
</div>
</div>



    <!-- inner-team -->
    <!--
    <div class="inner-team">
          <div class="container">
	    <div class="row">
	    <div class="col-lg-6">
	        <div class="row">
		   <div class="col-lg-6">
		     
		     <div class="pik1">
                     <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/shruti2.jpg" alt="best seo expert in India">
				  <a href="#" class="tm_nm">Shruti Jaiswal <span>Seo Executive Head</span></a>
                  </div>
                  
			    <div class="pik1">
                     <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/sarat2.jpg" alt="Business Development Manager">
				     <a href="#" class="tm_nm">Sarat Dogra <span>Business Development Manager </span></a>
                  </div>
		   </div>
		 <div class="col-lg-6">
		     <div class="pik1">
                     <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/ankit2.jpg" alt="Technology Head">
				  <a href="#" class="tm_nm">Ankit Gupta <span>Technology Head</span></a>
                  </div>
			    <div class="pik1">
                     <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/kanika2.jpg" alt="Creative Director">
				    <a href="#" class="tm_nm">Kanika Singh <span> Creative Director </span></a>
                  </div>
		   </div>
		  </div>
		</div>
	    <div class="col-lg-6">
	        <div class="inner">
               <h2>We're shaping the future of business</h2>
               <p>Our Mix of technology expertise changed the agency model to give you easier access to the skills and expertise needed to develop web design & mobile apps and grow your business.</p>
					<div class="vew_servs_tm"> 
						<a href="https://www.iogoos.com/about-us/" class="animated-button link-to arrow-scroll--bottom arrow-scroll showing show">
							<svg>
								<g>
									<line x2="227.62" y1="31.28" y2="31.28"></line>
									<polyline points="222.62 25.78 228.12 31.28 222.62 36.78"></polyline>
									<circle cx="225.67" cy="30.94" r="30.5" transform="rotate(180 224.67 30.94) scale(1, -1) translate(0, -61)"></circle>
								</g>
							</svg>
							<span class="font">Meet some of our experts</span>
						</a>
					  </div>
         </div>
         </div>
			</div>
      </div>
   </div>
   -->
    <!-- inner-team -->

    <!-- contactForm -->
    <div class="contactForm">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="startWrap">
					<div class="quate_details">
						<h2>let's do great things together</h2>
						<h3 class="num">4.9 / 5.0</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" width="312" height="55" class="img-responsive center-block" alt="star rating">
						<p>By 2000+ customers for 7000+ Web and Mobile App development projects.
						</p>
					</div>
					<div class="networking row">
						<div class="col-md-2 col-sm-2 col-xs-2 email text-center">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 skype1">
							<p>Get in touch by email</p>
							<a href="mailto:contact@iogoos.com">info@iogoos.com</a>
						</div>
					</div>
					<div class="networking row">
						<div class="col-md-2 col-sm-2 col-xs-2 skype text-center">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 skype1">
							<p>Why not give us a call</p>
							<a href="tel:3152150919">+1-315-215-0919</a>
						</div>
					</div>					
				</div>
			</div>
			<div class="col-lg-7">
				<?php include("home_contact.php");?>
			</div>
		</div>
	</div>
</div>
    <!-- contactForm -->
    
    
    <div class="new-blog">
    <div class="container">
        <h2>New at IOGOOS Blog</h2>
        <div class="row">
		<?php 
		    $args = array('posts_per_page'=>3);
			$the_query = new WP_Query( $args );
 
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>


            <div class="col-lg-4">
                <div class="inner">
                    <div class="inner-img">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </div>
                    <div class="inner-text">
                    <div class="inner-top">
                        <h5><?php the_category( ', ','',$blog_post->ID );?></h5>
                        <span class="date">Date : <?php echo get_the_date( 'F j, Y' )?></span>
                    </div>
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <p><?php the_excerpt();?></p>
                    <div class="inner-bottom">
                        <span><i class="fa fa-comment"></i> <?php echo get_comments_number($blog_post->ID);?></span>
                    </div>
                    </div>
                </div>
                  
            </div>
			<?php } } ?>

    </div>
</div>
    
    
 
</div>
</div>
<?php get_footer(); ?>