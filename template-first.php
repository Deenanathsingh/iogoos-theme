

<?php 

/**

*Theme Name: iogoos

*Theme URI: iogoos.com

*Description: dms

* Template Name: template-first 

*Version:1.1

*Author: iogoos

*Author URI: iogoos.com

**/

get_header(); 

include 'navigation.php'; 

		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );
            the_content();

        endwhile;
        
get_footer();
?>