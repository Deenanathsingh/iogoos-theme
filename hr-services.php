<?php 
/**
*Theme Name: iogoos
*Theme URI: iogoos.com
*Description: dms
* Template Name: hr-services
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
<div class="hr-sv mboil_app">
<!--...........................ENDING LINE OF MOBILE APP BANNER..................-->
<div id="tab-slid" class="loader-container"></div>
     	<div class="frontpage-tab">
     	    <div class="top-area">
     	        <h3>Hr Services</h3>
     	       	<ul class="producttabs">
					<li><a href="#tab1" class="active">Employers</a></li>
					<li><a href="#tab2">Job Seekers</a></li>
					<li><a href="#tab3">job Vacancies</a></li>
					</ul>
					
					</div>
					<div class="bottam-area">
					<div id="tab1">
					  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1>HR Solutions<br> Tailored to You</h1>
              <p>Flexible PEO & HRO solutions with expert<br>
HR, Payroll, Benefits, & Compliance services<br>
- everything you need, no extra work.</p>
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
					          <div class="inner-form">
					          <h2>We'd Love to Hear from You</h2>
  <form action="/action_page.php">
       <div class="form-group">
  <input type="text" class="form-control" placeholder="First name">
    </div>
     <div class="form-group">
  <input type="text" class="form-control" placeholder="Last name">
    </div>
    <div class="fmful form-group">
  <input type="text" class="form-control" placeholder="Company">
    </div>
    <div class="form-group">
      <input type="tel" class="form-control" placeholder="Phone">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Zip">
    </div>
    <div class="fmful form-group">
      <input type="email" class="form-control" placeholder="Email">
    </div>
    <div class="fmful form-group">
    <textarea placeholder="Email">How can we help you? *</textarea>
     </div>
    <div class="fmful form-group"><div class="bottom_button mn-btn"><button class="slide_from_left"><a href="#">Submit</a> </button></div>
     </div>
  </form>
					            </div>
					      </div>
					      </div>  
					    </div>
					<div id="tab2">
					    				  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1>HR Solutions<br> Tailored to You</h1>
              <p>Flexible PEO & HRO solutions with expert<br>
HR, Payroll, Benefits, & Compliance services<br>
- everything you need, no extra work.</p>
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
					         <div class="inner-form">
					          <h2>We'd Love to Hear from You</h2>
  <form action="/action_page.php">
       <div class="form-group">
  <input type="text" class="form-control" placeholder="First name">
    </div>
     <div class="form-group">
  <input type="text" class="form-control" placeholder="Last name">
    </div>
    <div class="fmful form-group">
      <input type="tel" class="form-control" placeholder="Phone">
    </div>
    <div class="fmful form-group">
      <input type="email" class="form-control" placeholder="Email">
    </div>
   <div class="fill fmful form-group">
      <input type="file" class="form-control" placeholder="Zip">
    </div>
    <div class="fmful form-group"><div class="bottom_button mn-btn"><button class="slide_from_left"><a href="#">Submit</a> </button></div>
     </div>
  </form>
					            </div>
					      </div>
					      </div>
					    </div>
					<div id="tab3">
					    				  <div class="row">
					  <div class="col-lg-6">
				<div class="main-banner">
              <h1>Current Job Vacancies </h1>
                <ul class="lists">
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Enterprise Sales : HR Tech Solutions</p></li>
                   <li><i class='fas fa-angle-double-right'></i> <p class="subject">Enterprise Sales</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Senior Enterprise Sales Executive</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Sales Development Representative Enterprise</p></li>
                   <li><i class='fas fa-angle-double-right'></i> <p class="subject">Sales Development Representative</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Graduate / Entry level Sales Opportunity!</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Events Operations Manager</p></li>
                   <li><i class='fas fa-angle-double-right'></i> <p class="subject">Sales Manager Mid Market</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Events Operations Manager</p></li>
                    <li><i class='fas fa-angle-double-right'></i> <p class="subject">Marketing Manager</p></li>
                  </ul>
                
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
					         <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/mobile-app-development__ruma.gif" alt="img" >
					          
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
               <!--<div class="btSingleLatestPost col-sm-4">
                   <div class="btLatestPostsDate">
                       <div class="btLatestPostsDay">09</div>
                       <div class="btLatestPostsMonth">Oct</div>
                   </div>
                   <div class="btSingleLatestPostWrapper">
                       <div class="img_ele"><img class="img-fluid" alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/websitedesign-trend.jpg"></div>
                   </div>
                   <div class="shopify_title">Best Website Design Trends For 2020</div>
                   <p class="commentt_ele btSubTitle">
                       <span class="btArticleCategories">
                           <a href="#" class="btArticleCategory">Iogoos Solution</a>
                           <a href="#" class="btArticleCategory">Trucking</a>
                       </span>
                       <a href="#" class="btArticleComments"><i class="far fa-comment"></i> 0</a>
                   </p>
                   <div class="comment_ele btArticleCategories">
                       <p>Sed vel dolor aliquet, sollicitudin elit eget, egestas arcu. Cras a tristique tellus, nec congue leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                   </div>
                   <div class="findoutMore"><a href="#">FINDOUT MORE <i class="fas fa-angle-double-right"></i></a></div>
               </div>-->
               <!--<div class="btSingleLatestPost col-sm-4">
                   <div class="btLatestPostsDate">
                       <div class="btLatestPostsDay">09</div>
                       <div class="btLatestPostsMonth">Oct</div>
                   </div>
                   <div class="btSingleLatestPostWrapper">
                       <div class="img_ele"><img class="img-fluid" alt="" src="https://www.iogoos.com/wp-content/themes/iogoos/img/laravelvsshopify.jpg"></div>
                   </div>
                   <div class="shopify_title">Shopify vs Laravel</div>
                   <p class="commentt_ele btSubTitle">
                       <span class="btArticleCategories">
                           <a href="#" class="btArticleCategory">Iogoos Solution</a>
                           <a href="#" class="btArticleCategory">Trucking</a>
                       </span>
                       <a href="#" class="btArticleComments"><i class="far fa-comment"></i> 0</a>
                   </p>
                   <div class="comment_ele btArticleCategories">
                       <p>Sed vel dolor aliquet, sollicitudin elit eget, egestas arcu. Cras a tristique tellus, nec congue leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                   </div>
                   <div class="findoutMore"><a href="#">FINDOUT MORE <i class="fas fa-angle-double-right"></i></a></div>
               </div>-->
                   
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