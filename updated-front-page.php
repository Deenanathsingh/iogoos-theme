<?php 
/**
   *Theme Name: iogoos
   *Theme URI: iogoos.com
   *Description: dms
   * Template Name: updated front page
   *Version:1.1
   *Author: iogoos
   *Author URI: iogoos.com
   **/
get_header(); ?>
<?php $site_path=get_home_url();?>

<div class="banner_io banner_io2 homeSection">
	<?php include 'navigation.php'; ?>	
	
	<!--
	<div class="banner" id="scrollspy">
		<div class="row left-row container">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 left-section" id="left_section">
				<div class="detail-1" id="Detail-1">
					<strong class="hover_header">App Development</strong>
					<p class="head-p">One Stop Solution for Mobile App Development</p>
					<ul class="hover_buttons">
						<li id="business_btn4">
							<a onClick="store('windows')" href="https://www.iogoos.com/android-apps-development/" class="active">
								<div class="icon-div">
									<div class="left-icons">
										<div class="android_icon android_icon_1"></div>
									</div>
									<div class="leftIconTxt">
										<span>Android</span>                    
									</div>
								</div>
								<div class="text-div">
									<span>EXPLORE SERVICES</span>                  
								</div>
							</a>
						</li>
						<li id="business_btn5">
							<a onClick="store('mac')" href="https://www.iogoos.com/ios-apps-development/">
								<div class="icon-div">
									<div class="left-icons">
										<div class="android_icon android_icon_2"></div>
					
									</div>
									<div class="leftIconTxt">
										<span>iOS</span>                    
									</div>
								</div>
								<div class="text-div">
									<span>EXPLORE SERVICES</span>                  
								</div>
							</a>
						</li>
						<li id="business_btn6">
							<a onClick="store('mobile')" href="https://www.iogoos.com/phonegap-apps-development/">
								<div class="icon-div">
									<div class="left-icons">
										<div class="android_icon android_icon_3"></div>

									</div>
									<div class="leftIconTxt">
										<span>Cross Platform</span>                    
									</div>
								</div>
								<div class="text-div">
									<span>EXPLORE SERVICES</span>                  
								</div>
							</a>
						</li>
					</ul>
					<div class="allproduct"><a href="https://www.iogoos.com/mobile-app-development-services/">All Services</a></div>
					<p></p>
				</div>
				<div class="right-details">
					<div class="inner-details">
						<a href="https://www.iogoos.com/mobile-app-development-services/" class="home-support">MOBILE APP DEVELOPMENT</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mid-section" id="middle-section">
				<div class="mid-details">
					<div class="persent_div">
						<div class="inner-middle">
							<div class="toll_free toll_free65">
								<p>Your On-Demand Web & Mobile App Development Company <br/><br/>
									Tell us more about your business <span>Or</span> <strong>Give us a call </strong></p>
								<a href="tel:315-215-0919">+1- 315 - 215 - 0919</a>
							</div>						
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 right-section" id="right_section">
				<div class="detail-1">
					<strong class="hover_header">Digital Marketing Services</strong>
					<p class="head-p">Increase Your Online Revenue</p>
					<ul class="hover_buttons">
						<li id="business_btn1" data-heding="show-1">
							<a onClick="store('smb')" href="https://www.iogoos.com/seo-services/" class="business_btn active">
								<div class="icon-div">
									<div class="left-icons">
										<img src="<?php echo get_template_directory_uri(); ?>/img/internet.png" alt="seo-icon" width="64" height="64">
									</div>
									<div class="leftIconTxt">
										<span>SEO</span>                    
									</div>
								</div>
								<div class="text-div">
									<span>EXPLORE SERVICES</span>                  
								</div>
							</a>
						</li>
						<li id="business_btn2" data-heding="show-2">
							<a onClick="store('medium')" href="https://www.iogoos.com/social-media-marketing-services/" class="business_btn">
								<div class="icon-div">
									<div class="left-icons">
										<div class="android_icon android_icon_4"></div>
									</div>
									<div class="leftIconTxt">
										<span>SMO</span>                    
									</div>
								</div>
								<div class="text-div">
									<span>EXPLORE SERVICES</span>                  
								</div>
							</a>
						</li>
						<li id="business_btn3" data-heding="show-3">
							<a onClick="store('enterprise')" href="https://www.iogoos.com/pay-per-click-service/" class="business_btn">
								<div class="icon-div">
									<div class="left-icons">
										<div class="android_icon android_icon_5"></div>
									</div>
									<div class="leftIconTxt">
										<span>PPC</span>                    
									</div>
								</div>
								<div class="text-div">
									<span>EXPLORE SERVICES</span>                  
								</div>
							</a>
						</li>
					</ul>
					<div class="allproduct"><a href="https://www.iogoos.com/digital-marketing-services/">All Services</a></div>
					<p></p>
				</div>
				<div class="right-details">
					<div class="inner-details1">
						<a href="https://www.iogoos.com/digital-marketing-services/" class="home-support">DIGITAL MARKETING SERVICES</a>
					</div>
				</div>
			</div>
		</div>	
	</div>
	-->
</div>


<div class="homeimage_new_banner">
<div class="homeimage homeimage25">
    <div class="seobanner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md seoText seoTexttt">
            <div class="bannerText">
              <!--  <h1>Digital <span>Marketing Services</span>               </h1> -->
              <h1 class="o-hero__heading">We are Providing <br>
                <span class="txt-rotate hook-animated-type" data-period="2000" data-rotate="[ &quot;Mobile App Development Services.&quot;,&quot;Website Design Services.&quot;, &quot;Ecommerce Development Services.&quot;, &quot;UI/UX Design Services.&quot;, &quot;Digital Marketing Services.&quot;,&quot;SEO Services.&quot;]"><span class="wrap"></span></span> </h1>
              <!--  <h2 class="o-hero__heading">                We Drive <br> <span class="hook-animated-type">Sales</span><span class="typed-cursor" style="display: none;">|</span>              </h2> -->
              <p>A premium Web & Mobile App Development Company, and extension of your marketing team – bringing strategy, expertise, and execution to the areas that you need it most.
 </p>
	
<div class="cont_elem">
    
    

    
    
    
    
<form class="frmproj" method="post">
  <div class="form-group input_text">
    <input type="text" name="emailaddress" class="emailaddress" placeholder="Enter Your Email Address">
	  	<div class="hide_btns">
		<a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>   
  </div>
  </div>
  <div class="form-group input_submits">
<a href="#" class="hvr-sweep-to-right"><input type="button" value="Start Your Project" class="btnprj"></a>
    
  </div>

  <input type="hidden" name="prtabname" class="prtabname" value="Mobile App Development Services">
  <input type="hidden" name="action" value="project_form">
</form>
<div class="frmerrmsg" style="color:#FF0000;"></div>
  </div>	
              <div class="dm_a_"> 
             
				  <a href="#" class="hvr-sweep-to-right btn1 pt18 desk_call"><i class="fa fa-phone" aria-hidden="true"></i>+1-315 215 0919</a>
				  <a href="https://www.iogoos.com/portfolio/" class="hvr-sweep-to-right btn2">Portfolio</a> 
				</div>
              <!--  <div class="Seo-award-img">             </div> -->
            </div>
          </div>
          <div class="col-md seoImage seoImage22">
            <div class="report_div">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  


<div class="new-home-v2-pages index-main-pages">
	<!-- thirt-text-section -->
	<div class="text-third-section">
		<div class="md-container-full">
			<div class="md-row">
				<div class="md-4 md-sm-4">
					<h2>Essence by the numbers</h2>
				</div>
				<div class="md-8 md-sm-8">
					<p>We have a team of 350+ professionals working together as Web Developers, Android app developers, iOS app developers, PWA app developers, cross-platform app developers, technology consulting, and Digital Marketing Services with an agile methodology that makes us the best Web & Mobile App Development Company. We provide services for all enterprises in making critical business decisions.</p>
				</div>
			</div>
		</div>
	</div>
	
	<!--services-main-section -->
	<div class="main-services-coundown" id="counter-stats">
		<div class="md-container-full">
			<div class="md-row">
				<div class="md-12">
					<div class="md-3 md-xs-12 md-sm-12">
						<div class="first-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/aws.PNG" alt="Certified Shopify Expert">
						</div>
						<div class="second-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/sap.PNG" alt="Certified Shopify Expert">
						</div>						
					</div>
					<div class="md-6 md-xs-12 md-sm-12">
						 <div class="stats">				
				<div class="conts"><span class="counting" data-count="3">0</span>
				<span class="kk_">K</span>
				<span class="plus">+</span>
				<span class="project">Projects Completed</span>
				</div>		
			</div>
					</div>
					<div class="md-3 md-xs-12 md-sm-12">
						<div class="ggl_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/google_.jpg" alt="Google Developers- Certified Agency">
						</div>
					
					</div>
				</div>
				<div class="line-bareker"></div>
				<div class="md-12 tenstats">
					<div class="md-3 md-xs-12 md-sm-12 cl1">
						<div class="images-box-section">
							<div class="first-images-section">
								<img src="<?php echo get_template_directory_uri(); ?>/img/col.PNG" alt="BigCommerce">							
							</div>
							<div class="second-images-section">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mag.png" alt="Magento Development company">
									 </div>
							</div>
						</div>
					
					<div class="md-3 md-xs-12 md-sm-6 cl2">
					  <div class="othr"></div>				
				<div class="tenconts"><span class="tencounting">16</span>
				<span class="tenplus">+</span>
				<span class="tenproject">Years <br>of experience</span>
				</div>	
					</div>
					<div class="md-4 md-xs-12 md-sm-6 cl3">
						 <div class="etstats">				
				<div class="etconts"><span class="etcounting counting" data-count="108">0</span>
				<span class="etplus">%</span>
				<span class="etproject">Project <br>Predictability <br>Increase</span>
				</div>		
			</div>
					</div>
					<div class="md-2 md-xs-12 md-sm-12 cl4">
						<div class="images-box-section last-images">
				<img class="mob_img" src="<?php echo get_template_directory_uri(); ?>/img/cluthhs_.png" alt="Hire Certified Mobile App Developer">

						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	



<div class="wrapper_io wrapper_io1 chk_fonts">
	<div class="container">
		<div class="heading_section">
			<p>SERVICES</p>
			<h2>Custom Software Development</h2>
			<p>For over 16 years, successfully delivered thousands of web applications and mobile apps to startups, small-medium enterprises, and top brands, empowering them with our digital intelligence and expertise. We deliver business-oriented outcomes 2X faster than our competitors and help our clients to earn millions of dollars using our simple digital marketing strategies and systems.</p>
		</div>
		<div class="row-ww">
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
						<!-- <span class="sp_iconimg icon_1"></span> -->
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
						<!-- <span class="sp_iconimg icon_2"></span> -->
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
						<!-- 	<span class="sp_iconimg icon_3"></span> -->
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
						<!-- <span class="sp_iconimg icon_6"></span> -->
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
						<!-- <span class="sp_iconimg icon_4"></span> -->
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
						<!-- <span class="sp_iconimg icon_5"></span> -->
						<span>VIRTUAL EMPLOYEE</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_7" href="<?php echo $site_path;?>/erp-crm-software/">
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
						<!-- <span class="sp_iconimg icon_7"></span> -->
						<span>ERP/CRM SOFTWARE</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a class="market__A_8" href="<?php echo $site_path;?>/market-research/">
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
						<!-- <span class="sp_iconimg icon_8"></span> -->
						<span>MARKET RESEARCH</span>
						<i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
			<a href="<?php echo $site_path;?>/our-services/" class="explore_btn">EXPLORE ALL</a>
		</div>
	</div>
</div>
<!-- .................................................... -->

<div class="about aboutus spacer establishedm">
         <div class="container">
            <div class="row">
               <div class="col-sm-5 aboutImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/pic4.jpg" alt="industry-bg">
				   <div class="trd_img">
				       <div class="inner_img">
				            <div class="img-in">
				           <img src="<?php echo get_template_directory_uri(); ?>/img/Deloitte_.png" alt="industry-bg">
				           </div>
				           <p>Top B2B companies according to Clutch.co</p>
				           </div>
					    <div class="inner_img">
					         <div class="img-in">
					   <img class="mob_img1" src="<?php echo get_template_directory_uri(); ?>/img/inc.png" alt="futura">
					   </div>
					   <p>Work with Inc. 5000 ranked companies</p>
					   </div>
				   </div>
				</div>
               <div class="col-sm-7 aboutInfo">
                  <div class="aboutIfo">
                     <h4>About Us</h4>
                     <h2>We provide <strong>Services for all Enterprises</strong> 
                        in making critical business decisions.
                     </h2>
                     <div class="aboutSlide">
                        <p><span>| </span><strong>The interface and user experience should not be boring. For this, we strategically use color and texture with a creative mind.</strong></p>
                     </div>
                     <p>IOGOOS SOLUTION is an established and experienced web development company with innovative ideas. Strictly focus on the quality of productions, proven track record in providing website designing Services, Mobile Apps Development, technology consulting, and Digital Marketing services to clients worldwide.</p>
					  <ul class="listig_ab">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/check-box2.png" alt="check-box" width="17" height="18">Designing cutting-edge responsive websites with augmented and virtual reality.</li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/check-box2.png" alt="check-box" width="17" height="18">Simplify your business needs by our Digital Marketing Services.</li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/check-box2.png" alt="check-box" width="17" height="18">Effective ERP/CRM Solution for your business.</li>
                     </ul>
					  
					
                     <div class="misionVision" id="counter-stats_">
                        <div class="row">
                           <div class="col-sm-5">
                              <div class="mission-main">
                                 <div class="iconImage"><i class='fas fa-clipboard-check'></i></div>
                                 <div class="about-mission">
									 <div class="cnt">
									 <div class="counting" data-count="900">0</div>
									 <span>+</span>
									 </div>
				                    <h5>Projects Completed</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-5">
                              <div class="mission-main">
                                 <div class="iconImage"><i class='fas fa-chalkboard-teacher'></i></div>
                                 <div class="about-mission">
									  <div class="cnt">
                                   <div class="counting" data-count="16">0</div>
										  <span>+</span>
									 </div>
				                   <h5>Years of experience</h5>
                                 </div>
                              </div>
                           </div>
							  <div class="col-sm-5">
                              <div class="mission-main">
                                 <div class="iconImage"><i class='fas fa-prescription-bottle-alt'></i></div>
                                 <div class="about-mission">
									 <div class="cnt">
                                   <div class="counting" data-count="108">0</div>
									 <span>+</span>
									 </div>
				                   <h5>Project Predictability Increase</h5>
                                 </div>
                              </div>
                           </div>
							  <div class="col-sm-5">
                              <div class="mission-main">
                                 <div class="iconImage"><i class='fas fa-child'></i></div>
                                 <div class="about-mission">
									 <div class="cnt">
                                   <div class="counting" data-count="99.7">0</div>
										 <span>% +</span>
									 </div>
				                   <h5>CLIENT RETENTION</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
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
      </div>


<div class="google-clutch">
<div class="md-container-full">
<h2>Top rated custom software development company</h2>
<div class="md-row">
<div class="md-6">
<div class="google_ inner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" class="img-responsive center-block animate" alt="star rating">
  <h3>iogoos solution is good webdesign and graphic design IT company.</h3>
  <p>I have completed 6 month in iogoos solution, It is a great learning experience.and good familiar facilities here lot of things learning here
What influenced me? Good culture, Supportive senior and new challenges that After all I want to say thanks for  iogoos solution pvt ltd company.</p>
</div>
</div>
<div class="md-6">
<div class="clutch_ inner">
     <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" class="img-responsive center-block animate" alt="star rating">
  <h3>"The team is details oriented and effective worker."</h3>
  <p>Iogoos Solution managed to deliver the project in a timely manner. The team supported great communication throughout the project by utilizing emails and phone calls. They were communicative, they understand the client's feedback, and they delivered good results.</p>
</div>
</div>
</div>
<div class="md-row">
<div class="clutch-cont">
    <a href="https://clutch.co/profile/spire-digital" target="_blank">See more 5 star reviews on Clutch</a>
    <div class="inner-img">
     <div class="right-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/clutch-2021.png" class="img-responsive center-block animate" alt="star rating">
  </div>
    <div class="left-img">
     <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" class="img-responsive center-block animate" alt="star rating">
     <p>34 REVIEWS</p>
     </div>
    </div> 
 </div>
  </div>
</div>
</div>

<!--
<div class="wrapper_io wrapper_io_bg">
	<div class="containerw">
		<div class="section-full content-inner bg-white about-sect">
			<div class="containerw">
				<div class="roww">
					<div class="cl_row right_ab_cnt">
						<div class="section-head" data-name="W">
							<div class="title-sm text-uppercase"><strong class="strong-aboutus">ABOUT US&nbsp;&nbsp;</strong> <span class="color-span"></span></div>
							<h2 class="h2">We provide <span class="font-weight-800">Services <br>for all Enterprises</span> in making critical busines decisions.</h2>
							<div class="sep"></div>
						</div>
						<div class="third_ab_">
							<p class="text-gray-dark"><span class="colourd">IOGOOS SOLUTION is an established and experienced software development company with innovative ideas.</span></p>
							<ul class="listig_ab">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/check_right.png" alt="" width="17" height="18">Designing cutting-edge responsive websites with augmented and virtual reality.</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/check_right.png" alt=""  width="17" height="18">Simplify your business needs by our Digital Marketing Services.</li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/check_right.png" alt=""  width="17" height="18">Effective ERP/CRM Solution for your business.</li>
							</ul>
							<a href="<?php echo $site_path;?>/about-us/" class="about_us_cnt">More Details</a>
						</div>
					</div>
					<div class="cl_row left_ab_img">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
-->
<!-- ...................................................... -->
<!--
<div class="about_us_sec" style="display: none;">
	<div class="containers">
		<div class="row_about_us">
			<div class="col_xs-6 col_xs-6CNT">
				<h2>About Us</h2>
				<h2 class="h---C">We provide Services for all Enterprises in making critical busines decisions.</h2>
				<p class="text_colourful"><span class="colourd">IOGOOS Solution</span> is an established and experienced <span class="colourd">software development company </span> <br>with innovative ideas. Strictly focus on the
					quality of productions, proven track-record in providing <br>website designing Services, Mobile Apps Development,
					technology consulting and Digital Marketing <br>services to clients worldwide.
				</p>
				<div class="about_more">
					<a href="#" class="about_us_cnt">More Details</a>
				</div>
			</div>
			<div class="col_xs-6 col_xs-6BG"></div>
		</div>
	</div>
</div>
-->
<!-- ...................................................... -->

<div class="partnerships">
	<div class="container">
	
		
				<div class="owl-carousel owl-theme" id="owl-carousel56">
				
						
							<div class="item">
					    	<div class="row_Partner">
					    	<div class="col_xs_5">
					   <img src="<?php echo get_template_directory_uri(); ?>/img/iogoos_partner.png" class="partners img-responsive" alt="iogoos_partner" width="300" height="293">
					   	</div>
					   	<div class="col_xs_7">
				<h3>Shopify recognizes Iogoos Solution as a top performing partner agency in
					<span
						  class="txt-rotate hook-animated-type"
						  data-period="500"
						  data-rotate='[ "USA.","CANADA." ]'></span>
				</h3>
				<p class="o-hero__heading">We are proud to be part of the Hubspot community and a Certified Gold Partner. Check out <br>our partner profile for some case studies and reviews from our Growth Stack clients! 
				</p>
				<a href="#" class="viewmore get_a_quote">LET'S START TO DISCUSS</a>
			</div>
					   
					    </div>
							</div>
				
							<div class="item">
					    	<div class="row_Partner">
					    	<div class="col_xs_5">
					   <img src="<?php echo get_template_directory_uri(); ?>/img/iogoos_partner.png" class="partners img-responsive" alt="iogoos_partner" width="300" height="293">
					   	</div>
					   	<div class="col_xs_7">
				<h3>IOGGOS Solution have magento2 certification 
					<span
						  class="txt-rotate hook-animated-type"
						  data-period="500"
						  data-rotate='[ "SOLUTION SPECIALIST.","FRONTEND.","SOLUTION PARTNER." ]'></span>
				</h3>
				<p class="o-hero__heading">We are proud to be part of the Hubspot community and a Certified Gold Partner. Check out <br>our partner profile for some case studies and reviews from our Growth Stack clients! 
				</p>
				<a href="#" class="viewmore get_a_quote">LET'S START TO DISCUSS</a>
			</div>
					   
					    </div>
			</div>		
		
		</div>
	</div>
</div>



<!--
<div class="partnerships">
	<div class="container">
		<div class="row_Partner">
			<div class="col_xs_5">
				<div class="owl-carousel owl-theme" id="owl-carousel56">
					<div class="item">
					   <img src="<?php echo get_template_directory_uri(); ?>/img/iogoos_partner.png" class="partners img-responsive" alt="iogoos_partner" width="300" height="293">
					    </div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/iogoos_partner.png" class="partners img-responsive" alt="iogoos_partner" width="300" height="293"></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/iogoos_partner.png" class="partners img-responsive" alt="iogoos_partner" width="300" height="293"></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/iogoos_partner.png" class="partners img-responsive" alt="iogoos_partner" width="300" height="293"></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/iogoos_partner.png" class="partners img-responsive" alt="iogoos_partner" width="300" height="293"></div>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/iogoos_partner.png" class="partners img-responsive" alt="iogoos_partner" width="300" height="293"></div>
				</div>
			</div>
			<div class="col_xs_7">
				<h3>Hubspot recognizes IOGOOS SOLUTION as a top <br>performing partner agency in
					<span
						  class="txt-rotate hook-animated-type"
						  data-period="2000"
						  data-rotate='[ "USA.","LOS ANGELES." ]'></span>
				</h3>
				<p class="o-hero__heading">We are proud to be part of the Hubspot community and a Certified Gold Partner. Check out <br>our partner profile for some case studies and reviews from our Growth Stack clients! 
				</p>
				<a href="#" class="viewmore get_a_quote">LET'S START TO DISCUSS</a>
			</div>
		</div>
	</div>
</div>
-->
<!-- ................................................... -->
<div class="new-services-section">
	<div class="container">
		<div class="row">
			<div class="clm-6">
				<div class="year-fig-count">
					<div class="years-exp primary-gradient position-relative">

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
			<div class="clm-6-two">
				<div class="fields-cont">
					<div class="service-cat anim-first">
						<h3><a href="<?php echo $site_path;?>/mobile-app-development-services/">Mobile App Development</a></h3>
						<p class="av-secondary">Android, iOS, React Native, Flutter, Cross Platform</p>
					</div>
					<div class="service-cat anim-second">
						<h3><a href="<?php echo $site_path;?>/website-development-services/">Web Development</a></h3>
						<p class="av-secondary">Custom web, Progressive web, CRM Dev., E-Commerce</p>
					</div>
					<div class="service-cat anim-third">
						<h3><a href="<?php echo $site_path;?>/ux-ui-design/">UI/ UX Design</a></h3>
						<p class="av-secondary">Angular, React, Vue.js, HTML5, Typescript, Javascript</p>
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





	
	<!-- Tab port section -->
<div class="top-port-section">
		<div class="md-container-full">
			<div class="md-row">
				<h4>OUR RECENT PROJECTS</h4>
				<h3>We’ve come a long way in
					<Span>16 + years</Span> </h3>
				<div class="tab-box">
					<div class="tabs">
						<button class="tabs__button tabs__button--active" type="button">WEB APPLICATION</button>
						<button class="tabs__button" type="button">DIGITAL MARKETING</button>
						<button class="tabs__button" type="button">MOBILE APP</button>
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
		</div>
	</div>
<div class="clear-fix" style="clear: both"></div>
	<section class="satisfied-customers-section">
		<div class="full-container">
			<h3>Delivering measurable results for our 450+ satisfied world's leading businesses</h3>

			<div class="row">	
				<div class="col-md-12">
					<div class="customers-logos-wrapper">
						<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/customers-logos.png" alt="our clients">
						<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/customers-logos.png" alt="our clients">
					</div>
				</div>	
			</div>	
		</div>
		
	</section>
<!-- ............................................................ -->
<div class="container indus">
<div class="row">
<div class="col-lg-12">
<h2>We Serve Diverse Industry Verticals</h2>
<p>As a best-in-class software outsourcing company in India , we offer software development services for various industries across the globe. Our solutions yield benefit in Internet-facing, collaborative and professional environments with a focus on optimization and expansion no matter the industry they operate in.</p>
</div>
</div>


		<div id="vertical_tab_nav">
			<ul>
				<li class="selected"><a href="index.html"><i class='fas fa-hand-holding-heart'></i>Healthcare</a></li>
				<li><a href="https://www.iogoos.com/"><i class='fas fa-bus-alt'></i>Travel & Tourism</a></li>
				<li><a href="https://www.iogoos.com/"><i class="fa fa-bank"></i>Banking & Finance</a></li>
				<li><a href="https://www.iogoos.com/"><i class='fas fa-car'></i>Logistics & Transport</a></li>
				<li><a href="https://www.iogoos.com/"><i class='fas fa-plane'></i>Retail & Ecommerce</a></li>
				<li><a href="https://www.iogoos.com/"><i class='fas fa-camera-retro'></i>Media & Entertainment</a></li>
				<li><a href="https://www.iogoos.com/"><i class='far fa-edit'></i>Education & E-Learning</a></li>
				<li><a href="https://www.iogoos.com/"><i class='far fa-credit-card'></i>ISVs & Product Firms</a></li>
			</ul>
			<div>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/healthcare_1.png" alt="industry-bg">
					<h3>Healthcare</h3>
					<hr />
					<p>We facilitate healthcare app development teams to global clients who build cost-effective, compliance fit & scalable applications and help them grow their businesses exponentially. As a top software outsourcing company, we ensure.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/travel_.png" alt="industry-bg">
					<h3>Travel & Tourism</h3>
					<hr />
					<p>Our travel application development team understands the terms of the industry and helps you address the growing demand of customers. As a leading IT outsourcing company in India we excel in all the latest technologies.. <a href="#">VIEW MORE</a></p>
				</article>
				<article>
					<img src="<?php echo get_template_directory_uri(); ?>/img/bank_.png" alt="industry-bg">
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

<!--
<div class="portfolio2 seactionPadding text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="seactionHead">Portfolio</h2>
				<p class="seactionDiscription">
					Plug your company into a world-class product strategy, design and
					development team.
				</p>
			</div>
		</div>
		<div class="prt_carousel">
			<?php include("home_portfolio.php");?>
		</div>
		<div class="col-sm-12">
			<a class="btn more-port" href="<?php echo $site_path;?>/portfolio/">View More Portfolio</a>
		</div>
	</div>
</div>
-->
<div class="clear-fix" style="clear: both"></div>

<!-- ............................................................... -->


<div class="main-sec">
  <div class="slide-sec">
  </div>
</div>






<div class="manage_everything sell_everywhere ttm">
   <div class="container-width">
    <p class="pillar-intro__caption hide--mobile">Your Shopify Expert - IOGOOS Solution Pvt Ltd.</p>
      
	   
	    <div class="row_rrr">
	    <div class="piller_intro_image_container">
	  
		   
		   <div class="md-6">
		     <div class="pik1 pik11">
				
					  
                     <img alt="" class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/shruti2.jpg">
				  <div class="pk_im"></div>
				  <a href="#" class="tm_nm">Shruti Jaiswal <span>Seo Executive Head</span></a>
				  
                    
                  </div>
			    <div class="pik1 pik2">
                     <img alt="" class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/sarat2.jpg">
					 <div class="pk_im"></div>
				     <a href="#" class="tm_nm">Sarat Dogra <span>Business Development Manager </span></a>
                     <!--<img alt="">-->
                  </div>
		   </div>
		 
		   <div class="md-6">
		     <div class="pik1 pik3">
                     <img alt="" class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/ankit2.jpg">
				  <div class="pk_im"></div>
				  <a href="#" class="tm_nm">Ankit Gupta <span>Technology Head</span></a>
                     
                     <!--<img alt="">-->
                  </div>
			    <div class="pik1 pik4">
                     <img alt="" class="lazy-image" data-src="https://www.iogoos.com/wp-content/themes/iogoos/img/kanika2.jpg">
					 <div class="pk_im"></div>
				    <a href="#" class="tm_nm">Kanika Singh <span> Creative Director </span></a>
                     <!--<img alt="">-->
                  </div>
		   </div>
		  
		
		    </div>
			  <div class="piller_intro_content_container piller_1 tem_">
            <div class="heading_shopify">
               <h2>We're shaping the future of business</h2>
               <p>Our Mix of technology expertise changed the agency model to give you easier access to the skills and expertise needed to develop web & mobile apps and grow your business.</p>
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


<!-- ......................testimonial ............................ -->
<div class="contactForm seactionPadding seactionPaddinggggg">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
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
			<div class="col-md-7 col-sm-12">
				<?php include("home_contact.php");?>
			</div>
		</div>
	</div>
</div>
<?php
$recentblog = get_posts(

	array(

		'numberposts'   => 1

	)

);

$popblog = get_posts(

	array(

		'numberposts'   => 4

	)

);

?>
<div class="blog seactionPadding ourblog">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md">
				<h2 class="seactionHead text-center">Blog</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="postBtn">
					<a class="post-btn" href="#">
						<i class="fas fa-arrow-right"></i>
					</a>
				</div>
				<?php
				foreach($recentblog as $blog_post){



				?>
				<div class="blog-post-image">
					<?php if ( has_post_thumbnail($blog_post->ID) ) {
					echo get_the_post_thumbnail($blog_post->ID, array(470,470));

				}

					else{

						$img_path='';

						$attach = get_children( array(

							'post_parent'    => $blog_post->ID,

							'post_type'      => 'attachment',

							'post_mime_type' => 'image',

							'order'          => 'DESC',

							'numberposts'    => 1

						) );

						if( is_array( $attach ) && is_object( current( $attach ) ) ) {

							$img_path=current( $attach )->guid;

						}

						echo "<img src='".$img_path."'/>";

					}

					?>
				</div>
				<div class="blog-post-body">
					<div class="blog-post-inner-content">
						<div class="blog-post-meta">
							<span class="blog-post-date"><?php echo get_the_date( 'F j, Y',$blog_post )?></span>
							<ul class="clean-list short-meta">
								<li><?php echo get_comments_number($blog_post->ID);?> comments</li>
								<li>
									<p class="categories">Category: <?php the_category( ', ','',$blog_post->ID ); ?>
									</p>
								</li>
							</ul>
						</div>
						<h2 class="post-title">
							<a href="<?php echo get_permalink($blog_post->ID)?>"><?php echo $blog_post->post_title?></a>
						</h2>
						<p class="post-excerpt">
							<?php if($blog_post->post_excerpt==''){
						echo substr(strip_tags($blog_post->post_content),0,150);

					}else{

						echo $blog_post->post_excerpt;

					}?>
						</p>
					</div>
				</div>
				<?php }?>
			</div>
			<div class="col-md-4">
				<div class="popular-news-block-wrapper">
					<div class="popular-news-block">
						<h5 class="block-title">Popular News</h5>
						<ul class="clean-list popular-news-list">
							<?php
							foreach($popblog as $blog_post){

							?>
							<li class="news-item">
								<a href="<?php echo get_permalink($blog_post->ID)?>" class="image">
									<?php if ( has_post_thumbnail($blog_post->ID) ) {
								echo get_the_post_thumbnail($blog_post->ID, array(80,80));

							}

								else{

									$img_path='';

									$attach = get_children( array(

										'post_parent'    => $blog_post->ID,

										'post_type'      => 'attachment',

										'post_mime_type' => 'image',

										'order'          => 'DESC',

										'numberposts'    => 1

									) );

									if( is_array( $attach ) && is_object( current( $attach ) ) ) {

										$img_path=current( $attach )->guid;

									}

									echo "<img src='".$img_path."'/>";

								}

									?>
								</a>
								<span class="date"><?php echo get_the_date( 'F j, Y',$blog_post )?></span>
								<h4 class="post-title">
									<a href="<?php echo get_permalink($blog_post->ID)?>"><?php echo $blog_post->post_title?></a>
								</h4>
							</li>
							<?php
								}

							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>