<?php
//echo $portfolio_category; exit;
if($portfolio_category==''){ $portfolio_category=array("wordpress"); }

$args = array( 
		'numberposts' => 6,
		'order'=> 'DESC',
		'orderby' => 'ID',
		'post_type'=>'portfolio',
		'tax_query' => array(
						array(
							'taxonomy' =>'portfolio_category',
							'field' => 'slug',
							'terms' => $portfolio_category
        )));
		
$postslist = get_posts( $args );
$i=1;
if($postslist){
?>

<div class="owl-carousel owl-theme portfolioli carousel-inner" id="theCarousel">
<?php
	foreach ($postslist as $post) :  setup_postdata($post); 
	$meta = get_post_meta( get_the_ID() ); 
?> 
<div class="item">
	<div class="port">
		<div class="bg-af-b1">
			<a href="javascript:void(0)" class="port-item-<?php echo $i?>" data-port="#port<?php echo $i?>">
			<img data-src="<?php echo wp_get_attachment_image_url($meta['portfolio_image_thumb'][0],'portfolio-slide'); ?>" class="img-responsive lazy-image" id="portImg-<?php echo $i?>" data-img="<?php echo wp_get_attachment_image_url($meta['portfolio_image_thumb'][0],'portfolio-gallery'); ?>"/>
			</a>
			<div class="portImg-<?php echo $i?>" style="display:none;">
				<h1><?php echo get_the_title()?> Portfolio</h1>
				<hr/>
				<div class="paragraph_shp">
					<p><?php echo substr(strip_tags($meta['intro_text'][0]),0,100);?> <a id="serviceHref" href="<?php echo get_permalink( get_the_ID() )?>">read more...</a></p>
				</div>
			</div>
		</div>
	</div>

</div>
<?php 
$i++;
endforeach; 
?>
</div>
<a href="<?php echo $site_path;?>/portfolio/" class="theme_a" target="_blank">View All Portfolios</a>
<?php } ?>