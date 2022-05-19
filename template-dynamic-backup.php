<?php 

/**

*Theme Name: iogoos

*Theme URI: iogoos.com

*Description: dms

* Template Name: template

*Version:1.1

*Author: iogoos

*Author URI: iogoos.com

**/

get_header(); ?>

<div class="banner_io banner_io2 common-section">
  <?php include 'navigation.php'; ?>
  <!-- ............banner section.................. -->
  <div class="ab_banner ab_banner">
    <div class="container">
      <h1>Templates</h1>
      <p>We are providing better cutting-edge digital solutions. We believe in simplicity, <br>
        Inventions, new generation google's design sprint methodologies and Agile <br>
        development. We help you build a better</p>
    </div>
  </div>
</div>
<!-- portfolio-section -->
<?php
$taxonomy = 'template_category';
$terms = get_terms($taxonomy);
?>
<div class="port-sec">
  <div class="container container_100 templates-section">
    <div class="tab_row">
      <div id="tab_port">
        <?php if ( $terms && !is_wp_error( $terms ) ) :
				?>
        <ul class="user-nav-tabs">
          <li class="tab-link active" data-tab="row_flex-1"><a href="javascript:void(0)">All</a></li>
          <?php foreach ( $terms as $term ) { ?>
          <li class="tab-link" data-tab="<?php echo str_replace(" ","-",$term->name);?>"><a href="javascript:void(0)"><?php echo $term->name; ?></a></li>
          <?php } ?>
        </ul>
        <?php endif;?>
      </div>
      
    </div>
    <div class="prt_content io-core-page-builder-body">
      <div class="row_flex prt_carousel active">
        <?php
$args = array( 'numberposts' => -1, 'order'=> 'DESC', 'orderby' => 'ID','post_type'=>'template' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); 
$meta = get_post_meta( get_the_ID() );
$term_list=strip_tags(get_the_term_list(get_the_ID(), 'template_category', '', '|', '')); 
$term_list=str_replace(" ","-",$term_list);
$term_list=str_replace("|"," ",$term_list);
$item_code=@$meta['template_code'][0];
$template_url=@$meta['template_url'][0];
?>
        <div class="clm_6 <?php echo $term_list?> active" >
        
        <div class="port1 io-core-template-modern-desc">
              <div class="bg-af-b1 io-core-template-item ">
                <div class="TemplateListItemClassic__index__browser___3dbkn">•••</div>
                <div class="io-core-template-thumbnail io-core-media-image ">
                  <div class="io-core-template-thumbnail-image-wrap  io-core-zoom-on-hover"><?php echo wp_get_attachment_image( $meta['template_image'][0], array('560', '350'), "", array( "class" => "img-fluid" ) );  ?><span class="io-core-image-overlay  io-core-template-overlay io-core-image-overlay-center io-core-js"><span class="io-core-image-overlay-content"><span class="io-core-template-icon-wrap"><a class="io-core-ilightbox io-core-js " href="<?php echo get_permalink( get_the_ID() )?>" data-ilightbox-group="io-core-img-group-1"><i class="io-core-template-icon image"></i></a></span>
                    <div class="io-core-template-title io-core-title-font"><a target="_blank" href="<?php echo get_home_url();?>/pricing/?template_id=<?php echo $item_code?>">START HERE <span><i class="fa fa-long-arrow-alt-right"></i></span></a></div>
                    <div class="io-core-template-preview io-core-title-font"><a target="_blank" href="<?php echo $template_url;?>">PREVIEW</a></div>
                    </span></span> </div>
                </div>
              </div>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<!-- ..................................... -->
<div class="contact_form_map">
  <div class="block_contianer">
    <div class="row">
      <div class="col-sm-5 form_bg">
        <div class="cntaine">
          <div class="socialmedia">
            <div class="socialmedia-icons"><a href=""><i class="fab fa-facebook"></i></a></div>
            <div class="socialmedia-icons"><a href=""><i class="fab fa-twitter"></i></a></div>
            <div class="socialmedia-icons"><a href=""><i class="fab fa-instagram"></i></a></div>
            <div class="socialmedia-icons"><a href=""><i class="fab fa-linkedin"></i></a></div>
          </div>
          <p class="p2">Let's Start with an Email...</p>
          <div class="row_form">
            <div class="form service_form">
               <?php include("service_contact_form2.php");?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-7 maP_bg">
        <div class="inner_maP_cnt howcanwe_helpyou home">
          <div class="heading_section">
            <h2 class="common_h3">How can we help you?</h2>
          </div>
          <p>With demanding customers at the center of today’s value chain, we help you engage and retain your customers by building innovative experiences, developing go-to-market approaches, and inventing efficient business models</p>
          <ul class="helpBox">
            <li>
              <h4>Concept &amp; Strategies</h4>
              <p>We initiate a legitimate strategy to make sure your brand or product
                
                will have a niche and stand out among the competition.</p>
            </li>
            <li>
              <h4>Design and Development</h4>
              <p>Developing just the appropriate is our forte, with our industry expertise
                
                we help you deliver agile solutions</p>
            </li>
            <li>
              <h4>Deploy</h4>
              <p>Delivering Perfection with earnest efforts and worthy output</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
