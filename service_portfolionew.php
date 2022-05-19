<div class="Our_port_shopfy">
	<div class="container">
			<div class="row">
                <?php
                    //echo $portfolio_category; exit;
                    if($portfolio_category=='') { $portfolio_category=array("wordpress"); }
                    $args = array( 'numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'ID','post_type'=>'portfolio','tax_query' => array(
                                array(
                                    'taxonomy' =>'portfolio_category',
                                    'field' => 'slug',
                                    'terms' => $portfolio_category
                                )));
                    $postslist = get_posts( $args );
                    $totcount=count($postslist);
                    $i=1;
                    if($postslist) {
                        foreach ($postslist as $post) :  setup_postdata($post); 
                        $meta = get_post_meta( get_the_ID() );
                        $img_path=wp_get_attachment_image_url($meta['portfolio_image_thumb'][0],'600x312');
                        if($img_path=='') { $img_path=wp_get_attachment_image_url($meta['portfolio_image_thumb'][0],'600x312'); }
                        if(in_array($i,array(1,3))) { echo '<div class="col-md-6_">'; }
                        if($i==1) {
                ?>
                <div class="upper_box">
				    <h3>Inspiring Latest <?php echo ucwords($portfolio_category); ?> Creations</h3>						
					<p class="fst_p">We guide companies in their branding strategy. First objective, to become a partner in your success.</p>
						<div class="homeimage_new_banner">
						<a href="<?php echo $site_path;?>/portfolio/" class="hvr-sweep-to-right btn1">View More Portfolio</a>
						</div>
					</div>
<?php
}?>
				<div class="inner">
					<div class="inner_img">	
						<a href="<?php echo get_permalink( get_the_ID() )?>">
								<img data-src="<?php echo $img_path; ?>" class="img-responsive lazy-image"/></a>
						</div>
							<div class="inner_text">
								<h2><?php echo get_the_title()?></h2>
								<p><?php echo substr(strip_tags($meta['intro_text'][0]),0,100);?></p>
						</div>
						</div>
<?php

if(in_array($i,array(2,4)) && ($totcount==4)) {
echo '</div>';
}
if(in_array($i,array(2,3)) && ($totcount==3)) {
echo '</div>';
}
if($totcount==1) {
echo '</div>';
}
 
$i++;
endforeach; ?>
<?php
}
?>
</div>
</div></div>