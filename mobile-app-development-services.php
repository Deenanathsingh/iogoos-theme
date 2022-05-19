<?php 
/**
*Theme Name: iogoos
*Theme URI: iogoos.com
*Description: dms
* Template Name: mobile-app-development-services
*Version:1.1
*Author: iogoos
*Author URI: iogoos.com
**/

get_header(); ?>
<div class="bannerrrr banner_io2">
	<?php include 'navigation.php'; ?>
</div>
<!--...........................STARTING LINE OF MOBILE APP BANNER..................-->

<?php
$portfoliolist=array();
$portfolio_category=array("android","ios-app","mobile-app","native-app","windows-app","ionic-app","phonegap");				
$args = array( 'numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'ID','post_type'=>'portfolio','tax_query' => array(
            array(
                'taxonomy' =>'portfolio_category',
                'field' => 'slug',
                'terms' => $portfolio_category
            )),'meta_query'=>array(
array('key' => 'p_featured',
   'value' => '1',
   'compare' => '=')) );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); 
$meta = get_post_meta( get_the_ID() ); 

$main_image=$meta['portfolio_image_thumb'][0];
$full_image = $meta['full_image'][0];
if($main_image==''){
	$main_image=$meta['portfolio_banner'][0];
}
$portfoliolist[]=array('link'=>get_permalink( get_the_ID() ),'name'=>$post->post_title,'main_image'=>$main_image,'post_id'=>$post->ID,'full_image'=>$full_image);
endforeach;

?>
<div class="handy-pdp mboil_app">
<!--...........................ENDING LINE OF MOBILE APP BANNER..................-->

<div id="tab-slid" class="loader-container"></div>
     	<div class="frontpage-tab">
     	    <div class="top-area">
     	        <h3>Mobile App Development</h3>
     	       	<ul class="producttabs">
					<li><a href="#tab1" class="active">Android App</a></li>
					<li><a href="#tab2">ios App</a></li>
					<li><a href="#tab3">Hybrid App</a></li>
					</ul>
					
					</div>
					<div class="bottam-area">
					<div id="tab1">
					  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1><span>Mobile App Developmnt Company</span> Android App Development</h1>
                <ul class="lists">
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">12+ years of experience in mobile apps Development</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">900+ Android App developed and delivered</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">100% client satisfaction</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">70+ certified android app developers</p></li>
                  </ul>
              <p>IOGOOS Solution is a top android app development company. We develop future-ready, high-end android mobile apps using the latest technology and industry experience. Our developed mobile apps have been funded by many reputed companies. <a href="https://www.iogoos.com/android-apps-development/">... read more</a></p>
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
            </div>
					      <div class="col-lg-6">
					          <div class="inner">
					              <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/new-mob-imgg_.png" alt="img" >
					          <div class="inner-img">
					              <img class="pt18 desk_call chat-btn" src="https://www.iogoos.com/wp-content/themes/iogoos/img/element59.png" alt="img">
					            </div>
					            </div>
					      </div>
					      </div>  
					    </div>
					<div id="tab2">
					    				  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1><span>Mobile App Developmnt Company</span>iOS App Development</h1>
                <ul class="lists">
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">12+ years of experience in mobile apps Development</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">650+ iOS App developed and delivered</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">100% client satisfaction</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">30+ certified iOS app developers</p></li>
                  </ul>
              <p>We are a top iOS mobile app development company, having excellence to turn your idea into a working iOS mobile app. Our delivered app has been funded by many reputed companies. <a href="https://www.iogoos.com/ios-apps-development/">... read more</a></p>
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
            </div>
					      <div class="col-lg-6">
					          <div class="inner">
					          <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/new-mob-imgg_.png" alt="img" >
					          <div class="inner-img">
					             <img class="pt18 desk_call chat-btn" src="https://www.iogoos.com/wp-content/themes/iogoos/img/element59.png" alt="img">
					            </div>
					            </div>
					      </div>
					      </div>
					    </div>
					<div id="tab3">
					    				  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1><span>Mobile App Developmnt Company</span> Hybrid App Development </h1>
                <ul class="lists">
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Get high quality leads</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Increase your ROI</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Increase customer engagement</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Manage brand reputation</p></li>
                  </ul>
                  <p>We have the expertise to develop hybrid mobile app development for both Android and iOS devices, we offer smart technology like react native, flutter, Xamarin, Ionic to develop quality mobile apps and tun smoothly on mobile devices. <a href="#">... read more</a></p>
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
            </div>
					      <div class="col-lg-6">
					          <div class="inner">
					         <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/new-mob-imgg_.png" alt="img" >
					          <div class="inner-img">
					              <img class="pt18 desk_call chat-btn" src="https://www.iogoos.com/wp-content/themes/iogoos/img/element59.png" alt="img">
					            </div>
					            </div>
					      </div>
					      </div>
					</div>
					</div>
					</div>


<!--....................starting line of mobile app details...........................-->
<div class="award_wining realestate">
   <div class="container">
      <div class="box-award">
         <h2>Mobile App Development Services</h2>
         <div class="awarding_cnt">
            <p>If you are looking for a world-class Mobile App Development Company. your search end at IOGOOS Solution. We are a professional Mobile App Development Company. All our interactive & business operational Mobile apps are directly handled by the senior creative & certified team. The team of IOGOOS Solution contains one of the top Mobile App Developers of industry who owns expertise in creating customized, a wide range of attractive Mobile Apps which meets your business needs and BUILD YOUR DREAM. Our work speaks and we make sure that you will get the best return on your investment.</p>
            <p>IOGOOS Solution can be your single point of contact for all kind of Mobile App Development Services. With the help of our professional Mobile App Development Services, we build a high quality and super optimized, fast and beautiful Mobile App Development solution for your business.</p>
            <p>We have satisfied clients from all around the world who are in the long-term business relationship with us. IOGOOS Solution just doesn’t work for one-time business. Our timely delivery and high-quality Android Mobile Apps & iOS Mobile app development services for iPhone, Android, hybrid have made us their favorite. We are helping our clients to grow their business by developing meaningful Mobile Apps that can engage all different kind of visitors.</p>
         </div>
      </div>
   </div>
</div>
<!--....................ending line of mobile app details...........................-->
<!--...........................STARTING LINE OF SERVICES..................-->
	<section class="cms_bsd cms_bsd_BG">
		<div class="container">
			<h2 class="text-center">Mobile App Development Services for ambitious brands</h2>
			<p class="cl">The goal is to deliver a sleek, intreractive mobile apps with all the features and functionality to work as smoothly as it looks.</p>
			<div class="row equal equal2">			
				<div class="col-lg-4 services_tab">
					<div class="top-bottom-margin">
						<div class="span-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/android-app.png" alt="Mobile App Development Services">
						</div>
						<div class="requestQuote">
							<h3>Android App Development</h3>
							<p>IOGOOS Solution has expertise in building the most stunning robust Android Apps that run smoothly on all types of major Android devices and versions.</p>  
							<div class="shopping-hover">
								
								<a href="#request-a-quote-now" class="get_a_quote">Request A Quote</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 services_tab">
					<div class="top-bottom-margin">
						<div class="span-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ios-app.png" alt="Mobile App Development Services">
						</div>
						<div class="requestQuote">
							<h3>iOS App Development</h3>
							<p>IOGOOS Solution has expertise in iPhone and iPad mobile app development services using latest iOS SDKs and with a seamless native user interface design.</p>   
							<div class="shopping-hover">
								
								<a href="#request-a-quote-now" class="get_a_quote">Request A Quote</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 services_tab">
					<div class="top-bottom-margin">
						<div class="span-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/hybrid-add.png" alt="Mobile App Development Services">
						</div>
						<div class="requestQuote">
							<h3>Hybrid App Development</h3>
							<p>Our Cross platform mobile app and web apps development services give the feature-rich, and business-centric experience across all devices and operating systems. We use PhoneGap, Flutter, React Native, Xamarin, etc for develop Hybrid mobile App.</p>
							<div class="shopping-hover">
								
								<a href="#request-a-quote-now" class="get_a_quote">Request A Quote</a>
							</div>  
						</div>
					</div>
				</div>
                <div class="col-lg-4 services_tab">
                	<div class="top-bottom-margin">
                		<div class="span-img">
                			<img src="<?php echo get_template_directory_uri(); ?>/img/progressive-app.png" alt="Mobile App Development Services">
                		</div>
                		<div class="requestQuote">
                			<h3>Progressive App Development</h3>
                			<p>We create top-quality, high-performance, quick loading & secure PWA mobile app using latest and modern web app development capabilities.</p>
                			<div class="shopping-hover">
                				
                				<a href="#request-a-quote-now" class="get_a_quote">Request A Quote</a>
                			</div>
                		</div>
                	</div>
                </div>
                
                
                <div class="col-lg-4 services_tab">
					<div class="top-bottom-margin">
						<div class="span-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/blockchain-app.png" alt="Mobile App Development Services">
						</div>
						<div class="requestQuote">
							<h3>AI/IoT/Blockchain App Development</h3>
							<p>We design & develop top-notch, high quality, custom mobile apps using latest and modern technologies like Blockchain, IoT, and Artificial Intelligence.</p>
							<div class="shopping-hover">
								
								<a href="#request-a-quote-now" class="get_a_quote">Request A Quote</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-4 services_tab">
					<div class="top-bottom-margin">
						<div class="span-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/wearable-app.png" alt="Mobile App Development Services">
						</div>
						<div class="requestQuote">
							<h3>Wearable App Development</h3>
							<p>We design & develop custom solutions for wearable apps for every business and various devices such as Apple Watch, Android wear, fitness bands, and more.</p>
							<div class="shopping-hover">
								
								<a href="#request-a-quote-now" class="get_a_quote">Request A Quote</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--...........................ENDING LINE OF SERVICES..................-->

<!--..................ENDING LINE OF PORTFOLIO...................-->

<?php
$portfolioitems=array();
foreach($portfolio_category as $keyc=>$valc){
$args = array( 'numberposts' =>100, 'order'=> 'DESC', 'orderby' => 'ID','post_type'=>'portfolio','tax_query' => array(
            array(
                'taxonomy' =>'portfolio_category',
                'field' => 'slug',
                'terms' => $valc
            )));
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); 
$meta = get_post_meta( get_the_ID() ); 

$main_image=$meta['portfolio_image_thumb'][0];
$full_image = $meta['full_image'][0];
if($main_image==''){
	$main_image=$meta['portfolio_banner'][0];
}
$portfolioitems[$valc][]=array('link'=>get_permalink( get_the_ID() ),'name'=>$post->post_title,'main_image'=>$main_image,'post_id'=>$post->ID,'full_image'=>$full_image);
endforeach;
}
?>
	<!-----------  Tab port section  ----------------------->

	<div class="mob__tab top-port-section mob_tabb">
		<div class="container">
		    <h4>Mobile Apps Portfolio</h4>
				<h3> Discover, Develop and Deliver Apps of Your Choice</h3>
			<div class="row">
				<div class="tab-box">
					<div class="tabs">
                    	<?php
						$i=1;
                        foreach($portfolio_category as $keyp=>$valp){
							$active='';
							if($i==1){
								$active="tabs__button--active";
							}
						?>
						<button class="tabs__button <?php echo $active;?>" type="button"><?php echo ucwords(str_replace("-"," ",$valp));?></button>
                        <?php
						$i++;
                        }
						?>
						<!--<button class="tabs__button" type="button">iOS</button>
						<button class="tabs__button" type="button">Windows</button>
						<button class="tabs__button" type="button">Xamarin</button>
						<button class="tabs__button" type="button">React Native</button>
						<button class="tabs__button" type="button">Flutter</button>
						<button class="tabs__button" type="button">Ionic</button>-->
					</div>
					
                    <?php
						$i=1;
                        foreach($portfolio_category as $keyp=>$valp){
							$active='';
							if($i==1){
								$active="tab-content--active";
							}
						?>
                        	<div class="tab-content <?php echo $active;?>">
						<div class="tem_im1 tem_im2">
                        <?php //if(count($portfolioitems[$valp])>0){?>
<div class="slick-slider2">
	  <?php foreach($portfolioitems[$valp] as $keyc=>$valc){?>
      <div class="element element-1">
		  <?php echo $imgfile = wp_get_attachment_image($valc['main_image'], array('343', '486'), "", array( "class" => "lazy-image1 image ui-illustration-storefront__hero-image" ) ); 
			//echo str_replace("src","data-src",$imgfile);
		?>
	</div>
    <?php }?>
</div>
<?php //}?>
</div>						
					</div>
                        <?php
						$i++;
                        }
						?>
                    <?php /**** ?>
					<div class="tab-content">
						<div class="tem_im1 tem_im2">
<div class="slick-slider2">
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-1.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
  <div class="element element-1">
	  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/app-sample-7.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
	 <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
</div>
</div>		
					</div>
					
					<div class="tab-content tab-content--active">
						<div class="tem_im1 tem_im2">
<div class="slick-slider2">
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-1.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
  <div class="element element-1">
	  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/app-sample-7.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
	 <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
</div>
</div>						
					</div>
					
					<div class="tab-content">
						<div class="tem_im1 tem_im2">
<div class="slick-slider2">
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-1.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
  <div class="element element-1">
	  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/app-sample-7.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
	 <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
</div>
</div>
					</div>
					<div class="tab-content">
						<div class="tem_im1 tem_im2">
<div class="slick-slider2">
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-1.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
  <div class="element element-1">
	  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/app-sample-7.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
	 <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
</div>
</div>
					</div>
					<div class="tab-content">
						<div class="tem_im1 tem_im2">
<div class="slick-slider2">
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-1.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
  <div class="element element-1">
	  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/app-sample-7.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
	 <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
</div>
</div>
					</div>
					<div class="tab-content">
						<div class="tem_im1 tem_im2">
<div class="slick-slider2">
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-1.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
  <div class="element element-1">
	  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/app-sample-7.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
	 <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
</div>
</div>
					</div>
					<div class="tab-content">	
						
						<div class="tem_im1 tem_im2">
<div class="slick-slider2">
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-1.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
		  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
  <div class="element element-1">
	  <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/app-sample-7.jpg"alt="Mobile App Development Services">
	</div>
	  <div class="element element-1">
	 <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/android-sample-2.jpg"alt="Mobile App Development Services">
	</div>
</div>
</div>
-->					
					</div>
				<?php **/ ?>
				</div>
				
<div class="col-lg-12 mbtn">
         <a class="btn more-port" href="https://www.iogoos.com/portfolio/">View All Portfolio</a>
      </div>
				
				
			</div>
		</div>
	</div>

<div class="clear-fix" style="clear: both"></div>


<div class="sell_everywhere">
   <div class="container">
      <div class="row piller_intro_image_container">
         <div class="col-lg-6"> 
          <div class="row">
          <div class="col-lg-6">
            <img alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/push-notification.png" class="animate"> 
          </div>
          <div class="col-lg-6"> 
           <img alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/social-integration.png" class="animate">
            <img alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/barcode-scanner.png" class="animate">
          </div>
           </div>
         </div>
         <div class="col-lg-6"> 
         <div class="inner2">
            <div class="heading_shopify">
               <h2>Get Modern<span></span> <br> Functionality in Your App</h2>
           </div>
            <div class="contentttts">
               <div class="row">
                  <div class="col-lg-6">
                     <a href="#">
                        <h4>Push Notifications</h4>
                        <p>It is useful for sending promotions, reporting updates, and other information to drive engagement.</p>
                     </a>
                  </div>
                   <div class="col-lg-6"> 
                     <a href="#">
                        <h4>Social Integration</h4>
                        <p>Social integration simplifies the signup process and allows users to share posts on varied channels.e</p>
                     </a>
                  </div>
                   <div class="col-lg-6"> 
                     <a href="#">
                        <h4>Google In-door Maps</h4>
                        <p>It is the best tool to find the shortest route for places such as malls, sports venues, museums, etc.</p>
                     </a>
                  </div>
                  <div class="col-lg-6"> 
                     <a href="#">
                        <h4>Barcode/QR Scanner</h4>
                        <p>We can integrate QR or Barcode scanner into your mobile app that allows access to resources.</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
        </div>
      </div>
   </div>
</div>

<div class="marketyourbusiness">
   <div class="container">
      <div class="row">
            <div class="col-lg-6"> 
            <div class="heading_shopify">
               <h2>Mobile Technologies <span></span><br>We’re Expert in</h2>
               <h4>Shopify helps you to find and sell to the right shoppers, wherever they are by using Shopify <br>tools. It helps you create, execute, and analyze digital marketing campaigns.</h4>
              </div>
              <div class="contentttts">
               <div class="row">
                  <div class="col-lg-6"> 
                     <a href="#">
                        <h4>React Native</h4>
                        <p>We utilize the best features of React Native to develop fully-functional mobile applications.</p>
                     </a>
                  </div>
                 <div class="col-lg-6"> 
                     <a href="#">
                        <h4>Flutter</h4>
                        <p>Using the Flutter SDK, we develop cross-platform mobile apps that are fast and attractive.</p>
                     </a>
                  </div>
                  <div class="col-lg-6"> 
                     <a href="#">
                        <h4>Ionic</h4>
                        <p>Having a great understanding of HTML5, CSS3, JavaScript, our developers provide native app development with Ionic.</p>
                     </a>
                  </div>
                  <div class="col-lg-6"> 
                     <a href="#">
                        <h4>Xamarin</h4>
                        <p>We utilize Xamarin to build cross-platform mobile apps and integrate topmost features into the app.</p>
                     </a>
                  </div>
               </div>
            </div>
             
         </div>
          <div class="col-lg-6 inner2"> 
            <div class="row">
            <div class="col-lg-6"> 
           <img alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/react-native-m.png" class="animate">
            <img alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/react-native2.png" class="animate">
            </div>
             <div class="col-lg-6"> 
             <img alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/flutter.png" class="animate">
                <img alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/ionic-m.png" class="animate">
            </div>
             </div>
          </div>
         </div>
   </div>
</div>


<section class="desandwordpress">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="inner_bg">
							<h3>Our Fortes on Shopify Website Design &amp; Shopify Web Application Development</h3>
							<p>Web development technologies and tools are advancing and so is the Shopify platform. We bring all the latest nuts-n-bolts on the table to create advanced Shopify Websites Development solutions for you and your business.</p>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="inner_features">
							<div class="row">
								<div class="col-lg-3">
									<div class="img_D">
										<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/Dropshipping.png" class="max-width" alt="">
										<h4>Dropshipping</h4>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="img_D">
										<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/payment-getway.png" class="max-width" alt="">
										<h4>Recrunning Payment <br>Gateway setup</h4>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="img_D">
										<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/marketplace-solution.png" class="max-width" alt="">
										<h4>Marketplace <br>Solutions</h4>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="img_D">
										<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/zipcode-validator.png" class="max-width" alt="">
										<h4>Zipcode <br>Validator</h4>
									</div>
								</div>
							<div class="col-lg-3">
										<div class="img_D">
											<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/inventory-source.png" class="max-width" alt="">
											<h4>Inventory <br>Source</h4>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="img_D">
											<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/print-on-demand.png" class="max-width" alt="">
											<h4>Print on <br>Demand</h4>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="img_D">
											<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/crypto-magento.png" class="max-width" alt="">
											<h4>Crypto  <br>Payment</h4>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="img_D">
											<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/afli-magento.png" class="max-width" alt="">
											<h4>Affiliation <br>Marketing</h4>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			
			
<section class="shopifyexperts shopifyexpertsM sho-css_R ecom_color">

       <div class="container">
<p class="left_pos-abs">Proudly Official Magento Partners</p>

            <div class="row">

                
                 <div class="col-lg-6 col_6R col_6R2 col_6R-right">

                    <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/hire-expert-2-magento.png" alt="hire-expert" class="img-responsive animate">

                </div>

                <div class="col-lg-6 col_6R col_6R1">

                   <h2>Hire trusted Magento experts <br>From store setup to marketing.</h2>

                   <h3>Who are Magento experts?</h3>

                   <div class="expertssss">

                       <div class="sp_A_ce">

                           <h4>Masters of their craft and Magento</h4>

                           <p>Magento experts are highly-skilled designers, developers, and consultants who specialize in building successful brands, businesses, and of course, Magento stores. </p>

                       </div>

                       <div class="sp_A_ce">

                           <h4>Top Graduates</h4>

                           <p>Our Magento expert having a minimum Graduation degree in computer since, toppers from renowned and recognized universities and very consistent manpower. </p>

                       </div>

                       <div class="sp_A_ce">

                           <h4>They’re experts, so you don’t have to be</h4>

                           <p>Whether your job is big or small it needs to be done right. There are hundreds of professionals with the expertise you need to get back to business.</p>

                       </div>

                   </div>

                   

                   <div class="hire_your_experts"><a href="javascript:void()" class="get_a_quote">Hire Your Experts</a></div>

                </div>

               

           </div>

       </div>

   </section>
   
   
<div class="FAQuestions">
			<div class="container">
				<div class="row">
						<div class="col-lg-12">
					<div class="mid_cnt">
						<h2>Frequently asked questions</h2>
						<div id="content">
							<div id="accordion" class="accordion-container">
								<article class="content-entry open">
									<h4 class="article-title"> 01 <i></i> How do I get started?</h4>
									<div class="accordion-content" style="display: block;">
										<p>First, share a brief description of your project with us via our website, and we’ll arrange for an expert from our Magento development company to get in touch with you. The purpose of the conversation is to discuss your ambitions and figure out what would be the best way to execute it.</p>
									</div>
								</article>
								<article class="content-entry">
									<h4 class="article-title"> 02 <i></i>Do you offer Custom Magento Development?</h4>
									<div class="accordion-content">
										<p>Yes. We have a vastly experienced team of developers that can build your Magento store from scratch within the shortest possible time. We will integrate only components that match your business goals and build a custom Magento website that prominently features your brand.</p>
									</div>
								</article>
								<article class="content-entry">
									<h4 class="article-title"> 03 <i></i>What security policy do you follow?</h4>
									<div class="accordion-content">
										<p>We perfectly understand that your project idea is intellectual property and never do anything to compromise a piece of information shared with us. If you require that we sign an NDA before you use our best Magento development services, then we would greatly welcome such an approach and do our best to secure your idea
</p>
									</div>
								</article>
								<article class="content-entry">
									<h4 class="article-title"> 04 <i></i>What will be the cost for Custom Magento Development?</h4>
									<div class="accordion-content">
										<p>To get a better idea of the cost of what you want to build, please give us a phone call. We’ll ask a few questions about your store’s requirements including the level of interactivity, graphical needs, etc. With this information, we can provide a more accurate estimated cost for a glitch-free Magento website for your business.</p>
									</div>
								</article>
								<article class="content-entry">
									<h4 class="article-title"> 05 <i></i>What sets us apart from others?</h4>
									<div class="accordion-content">
										<p>Our Magento development services can help you identify the best extensions for store features, payment gateways, order management tools and more. Additionally, because your goals are unique, we’ll customize each tool according to your business requirements and build the ideal solution you crave.</p>
									</div>
								</article>
								<article class="content-entry">
									<h4 class="article-title"> 06 <i></i>Can You Build eCommerce Stores On Other Platforms?</h4>
									<div class="accordion-content">
										<p>Yes. Even though Magento is one of the most popular platforms for building eCommerce stores, it is not the only option. Our developers can code eCommerce platforms from scratch. We also offer eCommerce development via Shopify, WooCommerce, BigCommerce, etc.
</p>
									</div>
								</article>
								<article class="content-entry">
									<h4 class="article-title"> 07 <i></i>How Quickly Can You Complete the Magento Store Development?</h4>
									<div class="accordion-content">
										<p>The completion time would normally depend on the complexity of the Magento store you want us to develop. However, you can rest assured that we’ll complete your Magento store development within the deadline that we provide to you during the initial consultation.
</p>
									</div>
								</article>
									<article class="content-entry">
									<h4 class="article-title"> 08 <i></i>Does Your Agency Services After Delivery Of The Magento Development Project?</h4>
									<div class="accordion-content">
										<p>Yes. Running an eCommerce store can be a difficult job with many requirements. We offer different support and maintenance packages, so you can focus on selling to customers while we handle other tasks.
</p>
									</div>
								</article>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		
<div class="client_section">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="our-clients-list">
<div class="row">
<div class="col-lg-3">
<div class="client-item">
<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/clint-logo1.png" class="max-width animate" alt="iogoos_client_logo">
</div>
</div>
<div class="col-lg-3">
<div class="client-item">
<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/clint-logo2.png" class="max-width animate" alt="iogoos_client_logo">
</div>
</div>
<div class="col-lg-3">
<div class="client-item">
<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/clint-logo3.png" class="max-width animate" alt="iogoos_client_logo">
</div>
</div>
<div class="col-lg-3">
<div class="client-item">
<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/clint-logo4.png" class="max-width animate" alt="iogoos_client_logo">
</div>
</div>
<div class="col-lg-3">
<div class="client-item">
<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/clint-logo5.png" class="max-width" alt="iogoos_client_logo">
</div>
</div>
<div class="col-lg-3">
<div class="client-item">
<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/clint-logo6.png" class="max-width" alt="iogoos_client_logo">
</div>
</div>
<div class="col-lg-3">
<div class="client-item">
<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/clint-logo7.png" class="max-width" alt="iogoos_client_logo">
</div>
</div>
<div class="col-lg-3">
<div class="client-item">
<img src="https://www.iogoos.com/wp-content/themes/iogoos/img/clint-logo8.png" class="max-width" alt="iogoos_client_logo">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-5">
<h2><span>OUR</span> CLIENTS</h2>
<p>Ranging from established Fortune 100 companies to energetic start-ups, for more
than a decade, we have helped hundreds of clients define their best FORM.</p>
</div>
</div>
</div>
</div>		


<!--==============================Advanced Technologies=======================-->
<!--............STRTING LINE OF START A PROJECT.....................-->
<section id="start-a-project">
	<div class="container-cntainer">
		<div class="background-of-start-a-project">
			<h2 class="text-center">Want to work with us? Let's go.</h2>
			<a href="#" class="get_a_quote"> START A PROJECT</a>
		</div>
	</div>
</section>
<!--............ENDING LINE OF START A PROJECT.......................-->
<!--..................STARTING LINE OF CHOOSE US.....................-->
	<section id="benefits-of-choosing-unisoft">
		<div class="container">
			<h2 class="text-center">Benefits of choosing IOGOOS Solutions</h2>
			<hr />
			<p class="text-center second_para">
				IOGOOS is an AWARD-WINNING, CERTIFIED Shopify Development Agency. We are an <br>innovative team to convert your idea to a live eCommerce business. 
			</p>
			<div class="row top_mmmm" id="slider-img">
				<div class="col-lg-4">
				    <div class="inner">
					<div class="span-img-bcu-image"> <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/bcu-1.png" class="img-responsive wow zoomIn"/></a></div>
					<div class="flotting-benefits-of-choosing-unisoft">
						<h4>Effective Communication</h4>
						<p>
							Our services are supported by 24×7 becasue we wanted to answer every customer with a LIVE person. If you are getting someone to answer your questions that help to engage with your business.
						</p>
					</div>
					</div>
				</div>
				<div class="col-lg-4">
				    <div class="inner">
					<div class="span-img-bcu-image"> <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/bcu-2.png" class="img-responsive wow zoomIn"/></a></div>
					<div class="flotting-benefits-of-choosing-unisoft">
						<h4>Dedicated Remote Staff</h4>
						<p>
							Hire dedicated mobile app developers and monitor their daily work with state-of-the-art technology with ease.
						</p>
					</div>
					</div>
				</div>
<div class="col-lg-4">
				    <div class="inner">
					<div class="span-img-bcu-image"> <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/bcu-3.png" class="img-responsive wow zoomIn"/></a></div>
					<div class="flotting-benefits-of-choosing-unisoft">
						<h4>Top Graduates</h4>
						<p>
							Our employees having a minimum Graduation degree in computer since, toppers from renowned and recognized universities and very consistent manpower.
						</p>
					</div>
					</div>
				</div>
<div class="col-lg-4">
				    <div class="inner">
					<div class="span-img-bcu-image"> <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/bcu-4.png" class="img-responsive wow zoomIn"/></a></div>
					<div class="flotting-benefits-of-choosing-unisoft">
						<h4>Committed to Quality</h4>
						<p>
							Serving in eCommerce sectors is the most challenging because we are developing all the payment process system. If we made any mistake with payment algorithm them the company can have big issues. We are taking HUGE responsibility that we take that very business seriously.
						</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
				    <div class="inner">
					<div class="span-img-bcu-image"> <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/bcu-5.png" class="img-responsive wow zoomIn"/></a></div>
					<div class="flotting-benefits-of-choosing-unisoft">
						<h4>Solve Your Business Problems</h4>
						<p>
							We sit on the same side of the table as YOU to provide business solutions to business problems. We don’t try to sell you the latest techno gizmo – instead – we listen to your business problem and offer several strategies to resolve the ROOT of the problem and achieve your objectives.
						</p>
					</div>
					</div>
				</div>
				<div class="col-lg-4">
				    <div class="inner">
					<div class="span-img-bcu-image"> <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/bcu-6.png" class="img-responsive wow zoomIn"/></a></div>
					<div class="flotting-benefits-of-choosing-unisoft">
						<h4>Dedicated Support</h4>
						<p>
							The Support team makes sure that your business run without any hassle and add strength. At Iogoos, you will find knowledgeable, friendly and supportive experts who are ready to assist you with all your online business requirements.
						</p>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<section class="shopify_blogs">
       <div class="container">
           <div class="heading_shopify">
               <h2>Latest Article Mobile App Development</h2>
           </div>
           
           <div class="row row_rrr btLatestPostsContainer horizontalPosts">
		      						<div class="col-lg-4">
		      				<div class="btSingleLatestPost">			    
                   <div class="btLatestPostsDate">
                       <div class="btLatestPostsDay">20</div>
                       <div class="btLatestPostsMonth">May</div>
                   </div>
                   <div class="btSingleLatestPostWrapper">
                       <div class="img_ele"><img class="img-fluid" alt="" src="https://www.iogoos.com/wp-content/uploads/2021/05/SEO31-1.png"></div>
                   </div>
                   <div class="shopify_title">An Essential Mark Point Provided by SEO Expert</div>
                   <p class="commentt_ele btSubTitle">
                       <span class="btArticleCategories">
                           <a href="#" class="btArticleCategory">Iogoos Solution</a>
                           <a href="#" class="btArticleCategory">Trucking</a>
                       </span>
                       <a href="#" class="btArticleComments"><i class="far fa-comment"></i> 0</a>
                   </p>
                   <div class="comment_ele btArticleCategories">
                       <p></p><p>Google Ranking is becoming hard. So, know the secrets that help boost up the ranking by Search engine optimization. Best and Affordable SEO Services Company could feel like it’s about ranking search terms You think it’s important for your business. The truth is that SEO (meaning “search engine optimization”) is a combination of many different … <a href="https://www.iogoos.com/an-essential-mark-point-provided-by-seo-expert/" class="more-link">Continue reading<span class="screen-reader-text"> “An Essential Mark Point Provided by SEO Expert”</span></a></p>
<p></p>
                   </div>
                   <div class="findoutMore"><a href="https://www.iogoos.com/an-essential-mark-point-provided-by-seo-expert/">FINDOUT MORE <i class="fas fa-angle-double-right"></i></a></div>
               </div>
               </div>
									<div class="col-lg-4">
		      				<div class="btSingleLatestPost">
                   <div class="btLatestPostsDate">
                       <div class="btLatestPostsDay">18</div>
                       <div class="btLatestPostsMonth">May</div>
                   </div>
                   <div class="btSingleLatestPostWrapper">
                       <div class="img_ele"><img class="img-fluid" alt="" src="https://www.iogoos.com/wp-content/uploads/2021/05/web-design7.png"></div>
                   </div>
                   <div class="shopify_title">Does Website Redesign Services Make Any Difference in Business?</div>
                   <p class="commentt_ele btSubTitle">
                       <span class="btArticleCategories">
                           <a href="#" class="btArticleCategory">Iogoos Solution</a>
                           <a href="#" class="btArticleCategory">Trucking</a>
                       </span>
                       <a href="#" class="btArticleComments"><i class="far fa-comment"></i> 0</a>
                   </p>
                   <div class="comment_ele btArticleCategories">
                       <p></p><p>Are you wondering whether you should redesign the website? This is the right blog to go through. We recently had a massive&nbsp;Website Redesign Services&nbsp;on various platforms like Shopify, Magento, Laravel, that showed how much difference a website redesign can make. Unlike rebranding, which focuses on refreshing the image of your brand, redesigning the site is … <a href="https://www.iogoos.com/does-website-redesign-services-make-any-difference-in-business/" class="more-link">Continue reading<span class="screen-reader-text"> “Does Website Redesign Services Make Any Difference in Business?”</span></a></p>
<p></p>
                   </div>
                   <div class="findoutMore"><a href="https://www.iogoos.com/does-website-redesign-services-make-any-difference-in-business/">FINDOUT MORE <i class="fas fa-angle-double-right"></i></a></div>
               </div>
               </div>
										<div class="col-lg-4">
		      				<div class="btSingleLatestPost">
                   <div class="btLatestPostsDate">
                       <div class="btLatestPostsDay">14</div>
                       <div class="btLatestPostsMonth">May</div>
                   </div>
                   <div class="btSingleLatestPostWrapper">
                       <div class="img_ele"><img class="img-fluid" alt="" src="https://www.iogoos.com/wp-content/uploads/2021/05/SEO27.png"></div>
                   </div>
                   <div class="shopify_title">A Simple Guide to Lead Generation Implementation for SEO</div>
                   <p class="commentt_ele btSubTitle">
                       <span class="btArticleCategories">
                           <a href="#" class="btArticleCategory">Iogoos Solution</a>
                           <a href="#" class="btArticleCategory">Trucking</a>
                       </span>
                       <a href="#" class="btArticleComments"><i class="far fa-comment"></i> 0</a>
                   </p>
                   <div class="comment_ele btArticleCategories">
                       <p></p><p>Increase organic traffic lead generation by this guide. Hope these tips will help you out with your business! &nbsp; You can optimize your SEO strategy to meet and implement your goals for lead generation, to improve the number of potential customers visiting your site by: Creating an SEO-optimized blog Maintaining an active social media channel … <a href="https://www.iogoos.com/a-simple-guide-to-lead-generation-implementation-for-seo/" class="more-link">Continue reading<span class="screen-reader-text"> “A Simple Guide to Lead Generation Implementation for SEO”</span></a></p>
<p></p>
                   </div>
                   <div class="findoutMore"><a href="https://www.iogoos.com/a-simple-guide-to-lead-generation-implementation-for-seo/">FINDOUT MORE <i class="fas fa-angle-double-right"></i></a></div>
               </div>
				    </div>           
     <div class="col-lg-4">
		      				<div class="btSingleLatestPost">
                   <div class="btLatestPostsDate">
                       <div class="btLatestPostsDay">14</div>
                       <div class="btLatestPostsMonth">May</div>
                   </div>
                   <div class="btSingleLatestPostWrapper">
                       <div class="img_ele"><img class="img-fluid" alt="" src="https://www.iogoos.com/wp-content/uploads/2021/05/SEO27.png"></div>
                   </div>
                   <div class="shopify_title">A Simple Guide to Lead Generation Implementation for SEO</div>
                   <p class="commentt_ele btSubTitle">
                       <span class="btArticleCategories">
                           <a href="#" class="btArticleCategory">Iogoos Solution</a>
                           <a href="#" class="btArticleCategory">Trucking</a>
                       </span>
                       <a href="#" class="btArticleComments"><i class="far fa-comment"></i> 0</a>
                   </p>
                   <div class="comment_ele btArticleCategories">
                       <p></p><p>Increase organic traffic lead generation by this guide. Hope these tips will help you out with your business! &nbsp; You can optimize your SEO strategy to meet and implement your goals for lead generation, to improve the number of potential customers visiting your site by: Creating an SEO-optimized blog Maintaining an active social media channel … <a href="https://www.iogoos.com/a-simple-guide-to-lead-generation-implementation-for-seo/" class="more-link">Continue reading<span class="screen-reader-text"> “A Simple Guide to Lead Generation Implementation for SEO”</span></a></p>
<p></p>
                   </div>
                   <div class="findoutMore"><a href="https://www.iogoos.com/a-simple-guide-to-lead-generation-implementation-for-seo/">FINDOUT MORE <i class="fas fa-angle-double-right"></i></a></div>
               </div>
				    </div>
                   
                </div>
           </div>
   </section>


<div class="contactForm">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="startWrap">
					<div class="quate_details">
						<h1 class="num">4.9 / 5.0</h1>
						<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" width="312" height="55" class="img-responsive center-block" alt="">
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
							<a href="+13152150919">+1-315-215-0919</a>
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
</div>
<!--..................ENDING LINE OF CHOOSE US.......................-->
<?php get_footer(); ?>