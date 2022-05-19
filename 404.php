<?php 

/**

*Default Page

**/

get_header(); ?>
<div class="banner_io banner_io2 common-section">

	<?php include 'navigation.php'; ?>

	<!-- ............banner section.................. -->

	<div class="ab_banner ab_banner">

		<div class="container">

			
		</div>

	</div>	

</div>

<!-- ............Our Clients Have Experienced section.................. -->

<section class="single_section">

	<div class="container">
 <h1 class="text-center">

      <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'Iogoos' ); ?>

    </h1>



    <div class="detail-content">





     <div class="not-found">

      <p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'agency-x' ); ?></p>

      <?php get_search_form(); ?>

    </div>

  </div>


	</div>

</section>

<?php get_footer(); ?>