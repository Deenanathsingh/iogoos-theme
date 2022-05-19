<?php
$bloglist = get_posts(

        array(
			'category' => $cat_id,
            'numberposts'   => 6

        )

    );
	$blog_start='<div class="blog-one-five-right bcols-6"><ul class="block-category-small">';
	$blog_end='</ul></div>';
	$blog_inner='';
	$blog_single='';

$ij=0;
foreach($bloglist as $blog_post){
if($ij==0){
$img_size="iogoos-medium";
}
else{
	$img_size="iogoos-small";
}
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
	if($ij==0){
		$blog_single='<div class="blog-one-five bcols-6">
		<div class="block-category-larg"><div class="news-item">
		<div class="post-image">
		<a href="'.get_permalink($blog_post->ID).'">
			'.$img_blog.'
			</a>
			</div>
			<div class="post-detail">
			<h3 class="post-title">

				<a href="'.get_permalink($blog_post->ID).'">'.$blog_post->post_title.'</a>

			</h3><span class="date">'.get_the_date( 'F j, Y',$blog_post ).'</span>
			</div>
			</div></div></div>';
	}
	else{
$blog_inner.='<li class="news-item">
			<div class="post-image">
			<a href="'.get_permalink($blog_post->ID).'">
			'.$img_blog.'
			</a>
			</div>
			
			<div class="post-detail">
			 <div class="post-title">
			<h5 class="entry-title">

				<a href="'.get_permalink($blog_post->ID).'">'.$blog_post->post_title.'</a>

			</h5>
			</div>
			</div>

		</li>';
	}
	$ij++;
}
echo '<div class="category-title module-title style1"><h4>'.$category->name.'</h4></div>'.$blog_single.$blog_start.$blog_inner.$blog_end."<div class='emptyspace'>&nbsp;&nbsp;</div>";