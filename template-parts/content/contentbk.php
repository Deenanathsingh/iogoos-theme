<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Iogoos
 * @since Iogoos 1.0
 */
if(in_array($loop_index,array(2,3,6,7,10))){
$cols="one";
if ( has_post_thumbnail() ) {
$postclass=" tile-1x2 ";
}
else{
	$postclass=" tile-no-image ";
}
}
else{
if ( has_post_thumbnail() ) {
$cols="two";
$postclass=" tile-2x1 ";

}
else{
	$cols="two";
$postclass=" tile-2x1 ";

}
}
global $post;
?>


    <div class="col-<?php echo $cols;?>">
        <div class="tile-wrapper">
        	<div class="tile <?php echo $postclass?>" href="<?php echo esc_url( get_permalink() )?>">
            	<div class="tile-inner">
                	<?php
                    if ( has_post_thumbnail() ) {
					?>
                	<div class="image-wrapper"><?php the_post_thumbnail(array(400,400)); ?></div>
                    <?php
                    }
					?>
                    <div class="content-wrapper "><?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					<p style="font-style:italic"><?php echo get_the_date(); ?></p>
					<br /><p><?php //iogoos_excerpt();
					echo substr(strip_tags($post->post_content),0,120);
					 ?></p>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
/*
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'iogoos' ); ?></span>
		<?php endif; ?>

		
	</header><!-- .entry-header -->

	

	

	<div class="entry-content">
		<?php
			the_content(
				sprintf(

					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'iogoos' ),
					get_the_title()
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'iogoos' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'iogoos' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php iogoos_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(

					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'iogoos' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php */?>
