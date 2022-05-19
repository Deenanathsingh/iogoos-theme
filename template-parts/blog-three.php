<?php
$bloglist = get_posts(

        array(
			'category' => $cat_id,
            'numberposts'   => 6

        )

    );
$blog_start='<div class="blog-three-cols"><div class="block-category-three">';
	$blog_end='</div></div>';
	$blog_inner='';
	$blog_single='';

$ij=0;
foreach($bloglist as $blog_post){

	$img_size="iogoos-three-col";

 if ( has_post_thumbnail($blog_post->ID) ) {

	$img_blog=get_the_post_thumbnail($blog_post->ID,$img_size);

	}

	else{

	$img_path='';

		$attach = get_children( array(

		'post_parent'    => $blog_post->ID,

		'post_type'      => 'attachment',

		'post_mime_type' => 'image',

		'order'          => 'DESC',

		'numberposts'    => 1

	) );

	if( is_array( $attach ) && is_object( current( $attach ) ) ) {

		$img_path=wp_get_attachment_thumb_url( current( $attach )->ID,$img_size);//current( $attach )->guid

	}

	 $img_blog="<img src='".$img_path."'/>";

	}

$blog_inner.='<div class="news-item b">
			<div class="post-image">
			<a href="'.get_permalink($blog_post->ID).'">
			'.$img_blog.'
			</a>
			</div>
			
			<div class="post-detail">
			<span class="date">'.get_the_date( 'F j, Y',$blog_post ).'</span>
			 <div class="post-title">
			<h5 class="entry-title">

				<a href="'.get_permalink($blog_post->ID).'">'.substr($blog_post->post_title,0,50).'</a>

			</h5>
			</div>
			</div>

		</div>';

	$ij++;
}
echo '<div class="category-title module-title style1"><h4>'.$category->name.'</h4></div>'.$blog_single.$blog_start.$blog_inner.$blog_end;