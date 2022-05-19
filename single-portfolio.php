<?php
/**
 * The template for displaying all single portfolio and attachments
 *
 * @package Iogoos
 * @subpackage Iogoos
 * @since Iogoos 1.0
 */

get_header();
?>
<div class="handy-pdp bannerrrr banner_io2">
<?php include 'navigation.php'; ?>

<div style="clear:both;"></div>
<?php
while ( have_posts() ) :
			the_post();
$meta = get_post_meta( get_the_ID() ); 

if(is_serialized($meta['_pods_built_for'][0])){
	$built_for=unserialize($meta['_pods_built_for'][0]);
	
}
else{
	$built_for[]=$meta['_pods_built_for'][0];
}
if(is_serialized($meta['_pods_industry'][0])){
	$industry1=unserialize($meta['_pods_industry'][0]);
	$industry=implode("<br>",$industry1);
}
else{
	$industry=$meta['_pods_industry'][0];
}
if(is_serialized($meta['_pods_technologies'][0])){
	$technologies1=unserialize($meta['_pods_technologies'][0]);
	$technologies=implode("<br>",$technologies1);
}
else{
	$technologies=$meta['_pods_technologies'][0];
}
if(is_serialized($meta['_pods_portfolio_country'][0])){
	$country1=unserialize($meta['_pods_portfolio_country'][0]);
	$country=implode("<br>",$country1);
}
else{
	$country=$meta['_pods_portfolio_country'][0];
}

 ?>
 
<div class="hero-box hero-box14 mainContainer" style="background:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3)),url('<?php echo wp_get_attachment_image_url( $meta['portfolio_banner'][0],'full');  ?>') no-repeat center;background-size:cover;">
  <div class="box-content">
    <div class="herocontainer-fluid">
      <div class="port_header">
        <h1 class="box-title">
          <?php the_title()?>
        </h1>
        <p class="box-subtitle"><span class="text"><?php echo $meta['portfolio_tag_line'][0];?></span></p>
      </div>
    </div>
  </div>
</div>
<div class="sec_portfolio_s sec-mainContainer">
  <div class="container">
    <div class="sec-row">
      <div class="sec_col-md-8 sec_col-sm-8">
        <div class="portfolio_left"> <img src="<?php echo wp_get_attachment_image_url( $meta['full_image'][0],'full');  ?>" alt="" > </div>
      </div>
      <div class="sec_col-md-4 sec_col-sm-4">
        <div class="left-content-Prt">
          <ul>
            <li class="wow slideInLeft" data-wow-duration="1.7s"> <span class="build-text">Built for</span>
              <div class="build-icons">
                <?php foreach($built_for as $key_v=>$val_v){
			  	if(in_array($val_v,array('mobile','iphone','phone','tablet','ios'))){
					echo '<span class="iphone-icon"></span>';
				}
			  	else if(in_array($val_v,array('android','Android'))){
					echo '<span class="Android-icon"></span>';
				}
				else if(in_array($val_v,array('website','web','www'))){
					echo '<span class="www-icon"></span>';
				}
				else{
					echo $val_v;
				}
				
			  }?>
              </div>
            </li>
            <li class="wow slideInRight" data-wow-duration="1.7s"> <span class="industry-image"></span>
              <div class="options-text-part"> <span class="options-title">Industry</span> <span class="options-details"><?php echo $industry;?></span> </div>
            </li>
            <li class="wow slideInLeft" data-wow-duration="1.7s">
              <div class="options-text-part"> <span class="tech-icon"></span> <span class="options-title">Technologies</span> <span class="options-details"><?php echo $technologies;?></span> </div>
            </li>
            <li class="wow slideInRight" data-wow-duration="1.7s"> <span class="country-image"></span>
              <div class="options-text-part"> <span class="options-title">Country</span> <span class="options-details"><?php echo $country;?></span> </div>
            </li>
          </ul>
        </div>
        <div class="more_port_prc">
          <aside class="tt-sidebar theme-sidebar">
            <div class="widget widget_theme_purchase wow slideInUp" data-wow-duration="1.7s">
              <div class="theme-price"> <span class="price"> <span class="text">
                <?php the_title()?>
                </span> </span> </div>
              <p><?php echo nl2br($meta['intro_text'][0]);?></p>
              <div class="widget-btns"> <a href="https://www.iogoos.com/portfolio/" class="port_btn-1">MORE PORTFOLIO</a> <a href="#" class="get_a_quote port_btn-2">GET A REQUEST</a> </div>
            </div>
            <div class="widget widget_theme_details wow slideInUp" data-wow-duration="1.9s">
              <h3 class="widget-title"> <span class="text"><?php the_title()?> FEATURES</span> </h3>
              <ul class="cleanlist details-list">
                <li class="list-item">
                  <div class="div_ list_style_p"> <span class="item-title">Related Features:</span> <?php echo $meta['key_features'][0];?> </div>
                </li>
              </ul>
            </div>
            <div class="widget widget_theme_details widget_theme_detailss wow slideInUp" data-wow-duration="1.9s">
              <h3 class="widget-title"> <span class="text">RELATED LINKS</span> </h3>
              <div class="rel_link"><a target="_blank" href="<?php echo $meta['portfolio_link'][0];?>"><?php echo $meta['portfolio_link'][0];?></a></div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</div>

 <!---------- Video Section  ---------->
 <div class="video section-pages">
<!---------------  slider section area parts   ---------------->
<div class="slider">
  <div class="Modern-Slider">
    <!-- Item -->
    <div class="item">
      <div class="img-fill">
        <img src="<?php echo get_template_directory_uri(); ?>/
images/wine-and-apps-delevment-bananer.jpg" alt="">
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
      <div class="img-fill second-banner">
        <div class="slider-2-banner">
          <img src="<?php echo get_template_directory_uri(); ?>/
images/wine-and-apps-delevment-bananer.jpg" alt=" ">
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
      <div class="img-fill">
        <img src="<?php echo get_template_directory_uri(); ?>/
images/wine-and-apps-delevment-bananer.jpg" alt=" ">
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
      <div class="img-fill second-banner">
        <div class="slider-2-banner">
          <img src="<?php echo get_template_directory_uri(); ?>/
images/wine-and-apps-delevment-bananer.jpg" alt=" ">
        </div>
      </div>
    </div>
    <!-- // Item -->
  </div>
</div>
 </div>
 
 

<section class="last_prt mainContainer">
  <div class="contiainer">
    <div class="features_row">
      <div class="features_col-md-5 features_col-sm-5 text_rightttt wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
        <div class="cnt-left">
          <h3>
            <?php the_title()?>
            's Features</h3>
          <div class="mar-Tp"> <?php echo $meta['portfolio_features'][0];?> </div>
        </div>
      </div>
      <div class="features_col-md-7 features_col-sm-7 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1s">
        <div class="cnt-right">
          <div class="imgg"> <img src="<?php echo wp_get_attachment_image_url( $meta['featured_box_image'][0],'full');  ?>" alt="" class="img-fluid"> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="auto features-box"> <span class="features-img-right"></span> </div>
</section>
<section class="sec_3_prt prt-padding mainContainer">
  <div class="container">
    <div class="sec_3row">
      <div class="sec3_col-md-6 sec3_col-sm-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
        <div class="cnt-right"> <img src="<?php echo wp_get_attachment_image_url( $meta['featured_box_image_two'][0],'full');  ?>" alt="" class="img-fluid"> </div>
      </div>
      <div class="section3_col-md-6 sec3_col-sm-6 wow fadeInRight" data-wow-offset="10" data-wow-delay="1s">
        <div class="cnt-left">
          <h3>
            <?php the_title()?>
          </h3>
          <div>
            <?php the_content()?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="additional_feature mainContainer">
  <div class="shape"></div>
  <div class="container">
    <div class="_sb_title"> <span>Additional Features</span>
      <h1>RESPONSIVE & RETINA READY</h1>
      <p>
        <?php the_title()?>
        has all the pages needed to build a website</p>
    </div>
    <div class="features_image wow zoomIn" data-wow-offset="10" data-wow-delay="1s"> <img src="<?php echo wp_get_attachment_image_url( $meta['all_page_image'][0],'full');  ?>" class="img-fluid" alt=""> </div>
  </div>
</section>

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
</div>

<?php
endwhile;
?>
<?php get_footer(); ?>