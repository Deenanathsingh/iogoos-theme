<?php 

   /**

   

   *Index page

   

   **/

   get_header(); ?>

<div class="banner_io banner_io2 blog common-section">

   <?php include 'navigation.php'; ?>

   <!-- ............banner section.................. -->

   <div class="ab_banner ab_banner">

      <div class="container" style="color:#fff;">

         <h1>Our Blog</h1>

      </div>

   </div>

</div>

<!-- ............Our Clients Have Experienced section.................. -->

<?php

   if(is_blog()){

   if ( is_active_sidebar( 'headerbar-1' ) ) :

   		?>

<div class="inner-bar categoriesSveer">

   <div class="container">

      <div class="category-left">

         <?php

            dynamic_sidebar( 'headerbar-1' );

                  ?>

      </div>

      <div class="searchbox-right"><a class="opensearch" href="javascript:void(0)"><i class="fa fa-search">&nbsp;
      </i></a></div>

   </div>

</div>

<?php

   endif;	

   }	

   ?>

<section class="index_section Sveer_blog">

   <div class="container">

       <h1>
	   <?php $queried_object = get_queried_object();
	   if($queried_object->name!=""){ 
	      echo $queried_object->name;
	   } else {
	     echo "Digital Marketing"; 
	   }
        ?>
</h1>

      <div class="col-left">

         <?php if ( have_posts() ) : ?>

         <?php if ( is_home() && ! is_front_page() ) : ?>

         <?php endif; ?>

         <div class="tiles-module">

            <div class="row">

               <div class="blog-three-cols">

                  <div class="block-category-three">

                     <?php

                        // Start the loop.

                        $loop_index=1;

                        while ( have_posts() ) :

                        	the_post();

                        	/*

                        	 * Include the Post-Format-specific template for the content.

                        	 * If you want to override this in a child theme, then include a file

                        	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

                        	 */

                        	//get_template_part( 'template-parts/content', get_post_format() );

                        	$parts='';

                        	if(get_post_format()!=''){

                        		$parts='-'.get_post_format();

                        	}


                        	include( 'template-parts/content/content'.$parts.'.php');

                        	echo '';

                        	if($loop_index % 2 == 0){

                        	//echo "<div class='blogbreak'></div>";

                        	}

                        	// End the loop.

                        	$loop_index++;

                        endwhile;

                        ?>

                  </div>

               </div>

            </div>

         </div>

         <div style='clear:both'></div>

         <?php

            // Previous/next page navigation.

            the_posts_pagination(

            	array(

            		'prev_text'          => __( 'Previous page', 'iogoos' ),

            		'next_text'          => __( 'Next page', 'iogoos' ),

            		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'iogoos' ) . ' </span>',

            	)

            );

            // If no content, include the "No posts found" template.

            else :

            get_template_part( 'template-parts/content', 'none' );

            

            endif;

            ?>

      </div>

      <!--<div class="col-right">-->

      <!--   <//?php get_sidebar(); ?>-->

      <!--</div>-->

   </div>

</section>

<?php get_footer(); ?>