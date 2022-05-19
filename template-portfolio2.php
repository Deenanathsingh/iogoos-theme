<?php 
/**
 * Template Name: Portfolio Template 2 
 * Template Post Type: portfolio
 */

get_header(); ?>
<div class="banner_io banner_io2 ecommerce-new">
   <?php Include 'navigation.php'; ?>
</div>
<?php
$meta = get_post_meta( get_the_ID() ); 

if(is_serialized($meta['_pods_built_for'][0])){
	$built_for = unserialize($meta['_pods_built_for'][0]);
}
else{
	$built_for[] = $meta['_pods_built_for'][0];
}
if(is_serialized($meta['_pods_industry'][0])){
	$industry1 = unserialize($meta['_pods_industry'][0]);
	$industry = implode("<br>",$industry1);
}
else{
	$industry = $meta['_pods_industry'][0];
}
if(is_serialized($meta['_pods_technologies'][0])){
	$technologies1 = unserialize($meta['_pods_technologies'][0]);
	$technologies = implode("<br>",$technologies1);
}
else{
	$technologies = $meta['_pods_technologies'][0];
}
if(is_serialized($meta['_pods_portfolio_country'][0])){
	$country1 = unserialize($meta['_pods_portfolio_country'][0]);
	$country = implode("<br>",$country1);
}
else{
	$country = $meta['_pods_portfolio_country'][0];
}

if(is_serialized($meta['_pods_built_for'][0])){
	$built_for = unserialize($meta['_pods_built_for'][0]);
	$built_for = implode(", ",$built_for);
}
else{
	$built_for = $meta['_pods_built_for'][0];
}
?>
<div class="new-port-chnages-asection">
    <div class="banner-section-top" style="background:url(<?php echo wp_get_attachment_image_url( $meta['portfolio_banner'][0],'full');  ?>) no-repeat center; background-size: cover;">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

	
<div class="main-topic-section">
    <div class="md-container">
        <div class="md-row">
            <div class="md-8">
                <div class="techonologery wow fadeInLeft">
                    <ul>
                        <li>
                            <div class="techno-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/atp-services-icn.png" alt="atp">
                            </div>
                            <div class="techno-data">
                                <h3>Services</h3>
                                <span><?php echo $technologies;?></span>
                            </div>
                        </li>
                        <li>
                            <div class="techno-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/atp-region-icn.png" alt="atp">
                            </div>
                            <div class="techno-data">
                                <h3>Region </h3>
                                <span><?php echo $country;?></span>
                            </div>
                        </li>
                        <li>
                            <div class="techno-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/atp-visit-icn.png" alt="atp">
                            </div>
                            <div class="techno-data">
                                <h3>Visit</h3>
                                <span><a href="<?php echo $meta['portfolio_link'][0];?>"><?php echo $meta['portfolio_link'][0];?></a></span>
                            </div>
                        </li>
                        <li>
                            <div class="techno-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/atp-industry-icn.png" alt="atp">
                            </div>
                            <div class="techno-data">
                                <h3>Industry</h3>
                                <span><?php echo $industry;?></span>
                            </div>
                        </li>
                        <li class="last-blog-li">
                            <div class="techno-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/atp-atm-icn.png" alt="atp">
                            </div>
                            <div class="techno-data">
                                <h3>Integrations</h3>
                                <span><?php echo $built_for; ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="md-4">
                <div class="techno-icone wow fadeInRight">
                    <ul>
                        <li>
                            <div class="teach-main">
                                <div class="teach-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/atp-technology-icn.png" alt="">
                                </div>
                                <div class="teach-data">
                                    <h3>Technology</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="techno-other-data">
						<?php echo $meta['technologies_in_details'][0];?>
						<a href="<?php echo get_bloginfo('url');?>/contact-us" class="get_a_quote port_btn-2">GET A REQUEST</a>
                    	<?php //echo nl2br($meta['intro_text'][0]);?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
<div class="text-and-banne-section">
    <div class="md-container">
        <div class="row">
            <div class="md-5">
                <div class="text-section-area-banner  wow fadeInLeft">
                    <h4><span> Features</span> </h4>
                    <?php echo $meta['portfolio_features'][0];?>
                </div>
            </div>
            <div class="md-7 wow fadeInRight">
                <img src="<?php echo wp_get_attachment_image_url( $meta['all_page_image'][0],'full');  ?>" alt="">
            </div>
        </div>
    </div>
</div>
	
<div class="main-box-section">
    <div class="md-container">
        <div class="row">
            <div class="md-12 wow fadeInUp">
                <div class="main-top-box-name">
                    <span><?php echo nl2br($meta['portfolio_tag_line'][0]);?></span>
                </div>
            </div>
            <div class="md-12">
                <div class="main-banner-section wow fadeInLeft ">
                    <h3>Key <span>Features</span></h3>
                    <div class="row">
                        <div class="md-5 md-sm-12">
                            <div class="ul-section wow fadeInLeft ">
                            	<?php echo $meta['key_features'][0];?>
                            </div>
                        </div>
                        <div class="md-7 wow fadeInRight">
                            <div class="images-section">
                                <img src="<?php echo wp_get_attachment_image_url( $meta['featured_box_image'][0],'full');  ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ledt-side-images-and-text wow fadeInUp">
    <div class="md-container">
        <div class="row">
            <div class="md-12">
                <div class="md-6 md-sm-6">
                    <div class="main-left-box wow fadeInLeft ">
                        <div class="images-section-text-area">
                            <img src="<?php echo wp_get_attachment_image_url( $meta['featured_box_image_two'][0],'full');  ?>" alt="FlyFive">
                        </div>
                    </div>
                </div>
                <div class="md-6 md-sm-6 wow fadeInRight">
                    <div class="text-section-area-banner">
                        <h3>Additional  <span>Features</span></h3>
                        <?php echo $meta['additional_features'][0];?>
                    </div>
                </div>
            </div>
            <div class="md-12">
                <div class="md-6 md-sm-6 wow fadeInLeft">
                    <div class="text-section-area-banner">
                        <h3>Sugarwish <span>Result</span></h3>
                        <?php echo $meta['site_result'][0];?>
                    </div>
                </div>
                <div class="md-6 md-sm-6 wow fadeInRight">
                    <div class="main-right-box">
                        <div class="images-section-text-area">
                            <img src="<?php echo wp_get_attachment_image_url( $meta['site_result_banner'][0],'full');  ?>" alt="FlyFive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
<div class="stars-project-sectionp-new-portpolio">
<section class="start_project startpro-sec-mainContainer start_project2">
  <div class="sec-container">
    <div class="row">
		
      <div class="col-sm-7 wow fadeInLeft wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".4s">
        <h1>Do you want to build unique and user friendly website? Let's discuss !</h1>
      </div>
	  <script>
      jQuery( document ).ready(function() {
		jQuery( ".start_project1" ).click(function() {
		  jQuery('.get-quote-form').css('display', 'block');
		});
	  });
      </script>
      <div class="col-sm-5 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".4s"> <a style="cursor:pointer;" class="start_project1">Start Project</a> </div>
		
    </div>
  </div>
</section>
</div>		

<div class="ledt-side-images-and-text wow fadeInUp">
    <div class="md-container">
        <div class="row">

            <div class="md-12">
                <div class="md-6 md-sm-6">
                    <div class="main-left-box wow fadeInLeft ">
                        <div class="images-section-text-area">
                            <img src="<?php echo wp_get_attachment_image_url( $meta['whats_next_banner'][0],'full');  ?>" alt="FlyFive">
                        </div>
                    </div>
                </div>
                <div class="md-6 md-sm-6 wow fadeInRight">
                    <div class="text-section-area-banner">
                        <h3>What’s <span>Next</span></h3>
                        <?php echo $meta['whats_next'][0];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-sec">
  <div class="portfolio-slider">
	  <?php
	  foreach($meta['portfolio_slider_images'] as $key => $p_slide) {
	  	?>
	  	<div id="<?php echo $key; ?>">
			<div class="singlecard">
		  		<img src="<?php echo wp_get_attachment_image_url( $p_slide,'full');  ?>">
			</div>
	  	</div>
	  	<?php
	  }
	  ?>
  </div>
</div>
<script>
/*jQuery(document).ready(function(){
  jQuery('.portfolio-slider').slick({
    lazyLoad: 'ondemand',
    // speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    dots:true
  });
});*/
</script>
	
</div>

<div class="contactForm seactionPadding seactionPaddinggggg">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12">
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
							<a href="+91-9136747327">+1-315-215-0919</a>
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
<?php get_footer(); ?>