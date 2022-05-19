<?php 

/**

*single Page

**/

get_header(); ?>

<div class="banner_io banner_io2 blog common-section">

	<?php include 'navigation.php'; ?>

	<!-- ............banner section.................. -->

	<div class="ab_banner ab_banner">

		<div class="container">
		    <h1>Our Blog</h1>
<!--<h1>-->
<!--<//?php-->
<!--the_title();-->
<!--?></h1>-->
			
		</div>

	</div>	

</div>
<?php
if ( is_active_sidebar( 'headerbar-1' ) ) :
		?>
		<div class="inner-bar"><div class="container">
		<div class="category-left">
		<?php
		dynamic_sidebar( 'headerbar-1' );
        ?>
        </div>
        <div class="searchbox-right"><a class="opensearch" href="javascript:void(0)"><i class="fa fa-search">&nbsp;</i></a></div>
        </div>
        </div>
        <?php
	endif;	
?>
<!-- ............Our Clients Have Experienced section.................. -->

<section class="single_section Detail_Blog">

	<div class="container">
    <div class="col-left detail_b_l">
        <h1>
<?php
the_title();
?></h1>
			
        
<?php

				// Start the Loop.

		while ( have_posts() ) :

			the_post();
			?>
            
            <?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail( 'full' );
		}

			the_content();
			if ( comments_open() || get_comments_number() ) :
					echo "";
					comments_template();
				endif;

		endwhile;

		?>
        <div style="margin-bottom:30px;">&nbsp;</div>
</div>	
<div class="col-right detal_b_r">
<?php get_sidebar(); ?>
</div>


</div>
<div style="clear:both;"></div>
<!--<section id="start-a-project">-->
<!--			<div class="container-cntainer">-->
<!--				<div class="background-of-start-a-project">-->
<!--					<h2 class="text-center">Want to work with us? Let's go.</h2>-->
<!--					<a href="#" class="get_a_quote"> START A PROJECT</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</section>-->
		<div class="clearfix"></div>
</section>
<!--<div style='margin-top:20px;margin-bottom:20px;border-bottom:1px solid #ccc;float:left;width:100%;'>&nbsp;</div>-->
<?php get_footer(); ?>