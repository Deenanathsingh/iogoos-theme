<?php

/**

 * The Sidebar containing the main widget area

 *

 * @package WordPress

 * @subpackage Iogoos

 * @since Iogoos 1.0

 */

?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
    	<!--<a class="opensearch" href="javascript:void(0)"><i class="fa fa-search">&nbsp;</i></a>-->
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
