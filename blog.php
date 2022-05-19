<?php 

/**

*Theme Name: iogoos

*Theme URI: iogoos.com

*Description: dms

* Template Name: Blog Page

*Version:1.1

*Author: iogoos

*Author URI: iogoos.com

**/

get_header(); ?><div class="handy-pdp banner_io banner_io2 blog common-section">

	<?php include 'navigation22.php'; ?>

	<!-- ............banner section.................. -->

	<div class="ab_banner ab_banner">

		<div class="container" style="color:#fff;">
			<h1>Our Blog</h1>

		</div>

	</div>	

</div>

<!-- ............Our Clients Have Experienced section.................. -->
<?php
//if(is_blog()){
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
	
//}	
?>
<section class="index_section rajeev">

	<div class="container">
    <div class="col-left">
		<?php
        $categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
$index=0;
foreach( $categories as $category ) {
$cat_id=$category->term_id;
if($index==0){
 include('template-parts/blog-one-five.php');
}
else if($index==1){
 include('template-parts/blog-three.php');
}
else if($index==2){
 include('template-parts/blog-top-three.php');
}
else{
 include('template-parts/blog-three.php');
}
//$category->name
//$category->slug
$index++;
}
		?>
        </div>
<div class="col-right">
<?php get_sidebar(); ?>
</div>        
	</div>

</section>

  <div class="contactForm">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="startWrap">
					<div class="quate_details">
						<h2>let's do great things together</h2>
						<h3 class="num">4.9 / 5.0</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/img/star.png" width="312" height="55" class="img-responsive center-block" alt="star rating">
						<p>By 2000+ customers for 7000+ Web and Mobile App development projects.
						</p>
					</div>
					<div class="networking row">
						<div class="col-md-2 col-sm-2 col-xs-2 email text-center">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 skype1">
							<p>Get in touch by email</p>
							<a href="mailto:contact@iogoos.com">info@iogoos.com</a>
						</div>
					</div>
					<div class="networking row">
						<div class="col-md-2 col-sm-2 col-xs-2 skype text-center">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 skype1">
							<p>Why not give us a call</p>
							<a href="tel:3152150919">+1-315-215-0919</a>
						</div>
					</div>					
				</div>
			</div>
				<div class="col-lg-7">
				<?php include("home_contact.php");?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>