<?php
/**
 * The template for displaying all single music and attachments
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

	$artist=$meta['artist'][0];
	$artist2=$meta['artist_2'][0];
	$artist3=$meta['artist_3'][0];


 ?>
 
<div class="hero-box hero-box14 mainContainer">
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
<div class="sec_portfolio_s sec-mainContainer">
  <div class="container">
    <div class="sec-row">
      <div class="sec_col-md-8 sec_col-sm-8">
            Artist: <?php echo $artist;?>
    </div>
  </div>
</div>

  <!-- contactForm -->
    
    <!-- contactForm -->
</div>

<?php
endwhile;
?>
<?php get_footer(); ?>