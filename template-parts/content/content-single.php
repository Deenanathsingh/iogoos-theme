<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Iogoos
 * @since Iogoos 1.0
 */
?>
<section class="category-other-destinations">
              <article>
                <figure class="post-featured-image">
                  <?php iogoos_post_thumbnail(); ?>
                </figure>
                <header class="entry-header">
                   <?php the_title( '<h2 class="entry-title"><a href="'.get_permalink(get_the_ID()).'">', '</a></h2>' ); ?>
                </header>
                <div class="entry-meta-bar clearfix m_bottom">
                <?php iogoos_entry_meta(); ?>
                 <!-- <div class="entry-meta">
                    <span class="byline"> 
                      <span class="author vcard">
                        <i class="fas fa-user"></i>
                        <a class="url fn n" href="#">Aigars</a>
                      </span>
                    </span>
                    <span class="posted-on">
                      <i class="far fa-clock"></i>
                      <a href="#" rel="bookmark"> 
                        <time class="entry-date published">5 March, 2015</time>
                        <time class="updated">17 October, 2015</time>
                      </a>
                    </span> 
                    <span class="category">
                      <i class="fas fa-adjust"></i>
                      <a href="#">New York</a>, <a href="#">Other Destinations</a>
                    </span>
                  </div>
                  -->
                </div>
<?php iogoos_excerpt(); ?>
	<div class="entry-content clearfix">
		<?php
			the_content();

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

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
			?>
	</div><!-- .entry-content -->
	<div class="sp_bottom">
                  <h4>Share this:</h4>
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
                    <li><a href="#"><i class="fab fa-skype" aria-hidden="true"></i><span>Skype</span></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i><span>Printerest</span></a></li>

                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i><span>Google Plus</span></a></li>
                  </ul>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'iogoos' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>                  
     </div>
	
</article><!-- #post-<?php the_ID(); ?> -->
</section>
