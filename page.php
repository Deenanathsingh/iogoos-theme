<?php 

/**

*Default Page

**/
if(is_woocommerce){
get_header( 'shop' );
do_action( 'woocommerce_before_main_content' );
?>
<header class="woocommerce-products-header">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
    <h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
    <?php endif; ?>

    <?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
				// Start the Loop.

			while ( have_posts() ) :

				the_post();

				the_content();

				endwhile;
do_action( 'woocommerce_after_main_content' );
do_action( 'woocommerce_sidebar' );
get_footer( 'shop' );
}else{
get_header(); ?>
<div class="banner_io banner_io2 seo-services">
    <?php include 'navigation.php'; ?>
    <!-- ............banner section.................. -->
    <div class="ab_banner ab_banner">
        <div class="container">
            <h1><?php the_title()?></h1>
        </div>
    </div>
</div>
<!-- ............Our Clients Have Experienced section.................. -->
<section class="common_section">
    <?php

				// Start the Loop.

			while ( have_posts() ) :

				the_post();

				the_content();

				endwhile;

			?>
</section>

<?php get_footer(); ?>
<?php
}
?>