<?php
/**
 * The template for displaying all single templates
 *
 * @package Iogoos
 * @subpackage Iogoos
 * @since Iogoos 1.0
 */

get_header();
?>
<div class="bannerrrr banner_io2">
<?php include 'navigation.php'; ?>
</div>
<div style="clear:both;"></div>
<?php
while ( have_posts() ) :
			the_post();
$meta = get_post_meta( get_the_ID() ); 

 ?>
 
<div class="hero-box hero-box14 mainContainer common-section single-template-hero">
  <div class="box-content">
    <div class="herocontainer-fluid">
      <div class="port_header">
        <h1 class="box-title">
          <?php the_title()?>
        </h1>
       
      </div>
    </div>
  </div>
</div>
<div class="sec_portfolio_s sec_template_s sec-mainContainer">
  <div class="container">
    <div class="sec-row">
      <div class="sec_col-md-8 sec_col-sm-8">
        <div class="portfolio_left"> 
        <?php the_content();  ?>
        <?php
        for($i=1;$i<=5;$i++){
			  $temp_img="template_screen".$i;
			  if(@$meta[$temp_img][0]){
				?>
				<div class="screenshot-item">
				<img src="<?php echo wp_get_attachment_image_url( @$meta[$temp_img][0],'full');  ?>" alt="" > 
				</div>
				<?php
			}
        }
		?>
        </div>
      </div>
      <div class="sec_col-md-4 sec_col-sm-4">
      	<div><strong>Template :</strong> <?php the_title()?></div>
        <div><strong>Technology :</strong> <?php echo @$meta['template_tech'][0]?></div>
        
        <h2><?php the_title();  ?></h2>
        <div><?php the_excerpt();  ?></div>
      </div>
    </div>
  </div>
</div>
<!-- start_project section -->
<section class="start_project startpro-sec-mainContainer start_project2">
  <div class="sec-container">
    <div class="row">
      <div class="col-sm-7 wow fadeInLeft wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".4s">
        <h1>Do you want to build unique and user friendly website? Let's discuss !</h1>
      </div>
      <div class="col-sm-5 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".4s"> <a href="#" class="start_project1">Start Project</a> </div>
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
   
  </div>
</section>
<?php
endwhile;
?>
<?php get_footer(); ?>