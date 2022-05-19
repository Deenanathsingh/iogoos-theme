<div class="owl-carousel owl-theme owl-carousel_prt" id="portfolio_crl">
            <?php
$portfolio_category=array("hubspot","digital-marketing");							
$args = array( 'numberposts' => 6, 'order'=> 'DESC', 'orderby' => 'ID','post_type'=>'portfolio','tax_query' => array(
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
if($main_image==''){
	$main_image=$meta['portfolio_banner'][0];
}
?> 
<div class="item">

					<div class="port">

						<div class="bg-af-b1">

							<a href="<?php echo get_permalink( get_the_ID() )?>">
								<?php //echo wp_get_attachment_image($main_image, array('560', '350'), "", array( "class" => "img-fluid" ) );  ?>
                                <?php $imgfile = wp_get_attachment_image($main_image, array('560', '350'), "", array( "class" => "lazy-image img-fluid" ) ); 
										echo str_replace("src","data-src",$imgfile);
								 ?>
							</a>

						</div>
						<div class="inner-hover">
						<p class="port-text"><a href="<?php echo get_permalink( get_the_ID() )?>"><?php the_title(); ?></a></p>

						<h2 class="portTextDis">
						<?php echo $meta['portfolio_tag_line'][0];?>
						</h2>
					</div>
					</div>

				</div>
<?php endforeach; ?>

			</div>