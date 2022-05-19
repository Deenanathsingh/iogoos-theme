<?php 

/**

*Theme Name: iogoos

*Theme URI: iogoos.com

*Description: IOGOOS List of Portfolio

* Template Name: portfolio

*Version:1.1

*Author: iogoos

*Author URI: iogoos.com

**/

get_header(); ?>
<div class="handy-pdp pport">
<div class="banner_io banner_io2 portfolio_p background_remove_main-section">
  <?php include 'navigation.php'; ?>
  <!-- ............banner section.................. -->
  <div class="ab_banner ab_banner chnages hello-bittu background-remove-top-section">
    <div class="container main-port-container">
 		<h1>OUR PORTFOLIO</h1>
        <p>We are providing better cutting-edge WEB & MOBILE App Development Services and digital Marketing Services. We believe in simplicity, Inventions, new generation google's design sprint methodologies and Agile
        development. We help you build a better</p>
    </div>
  </div>
</div>
<!-- portfolio-section -->
<?php
$taxonomy = 'portfolio_category';
$terms = get_terms($taxonomy);
?>
<div class="port-sec">
  <div class="container container_100">
    <div class="tab_row">
      <div id="tab_port" class="portfolio-hiddien-menu portpoliyo-main-show-hifddin">
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
      <div class="portfolio-fillter" id="portfolio-fillter-show-butn">
          <div class="filletr-icone">
              <span><i class="fa fa-filter"></i> </span>
              View All
          </div>
      </div>
     
    </div>
    <div class="prt_content">
      <div class="row_flex prt_carousel active potpoliyo rowPortfolio">
        <?php
$args = array( 'numberposts' => -1, 'order'=> 'DESC', 'orderby' => 'ID','post_type'=>'portfolio' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); 
$meta = get_post_meta( get_the_ID() );
$term_list=strip_tags(get_the_term_list(get_the_ID(), 'portfolio_category', '', '|', '')); 
$term_list=str_replace(" ","-",$term_list);
$term_list=str_replace("|"," ",$term_list);
?>
        <div class="clm_6 <?php echo $term_list?> active" >
          <div class="port">
            <div class="bg-af-b1"> <a href="<?php echo get_permalink( get_the_ID() )?>"> <?php echo str_replace("src","data-src",wp_get_attachment_image( $meta['portfolio_image_thumb'][0], array('560', '350'), "", array( "class" => "img-fluid lazy-image" ) ));  ?> </a> </div>
            <div class="inner-hover"><p class="port-text"><a href="<?php echo get_permalink( get_the_ID() )?>">
              <?php the_title(); ?>
              </a></p>
            <!--<h2 class="portTextDis"><?php echo $meta['portfolio_tag_line'][0];?></h2>-->
            <div class="producte-icone">
                    <div class="technology"> 
                        <i class="ps sprites"></i>
                        <i class="appl sprites"></i>
                        <i class="andr sprites"></i> 
                    </div>            
                </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>

<div class="contact_form_map">
   <div class="block_contianer">
      <div class="row">
         <div class="col-lg-7 form_bg">
            <?php
               include('contact_form.php');
               ?>
         </div>
         <div class="col-lg-5 maP_bg">
            <div class="inner_maP_cnt howcanwe_helpyou home">
               <div class="heading_section">
                  <h2 class="common_h3">How can we help you?</h2>
               </div>
               <p>With demanding customers at the center of today’s value chain, we help you engage and retain your customers by building innovative experiences, developing go-to-market approaches, and inventing efficient business models</p>
               <ul class="helpBox">
                  <li>
                     <h4>Concept &amp; Strategies</h4>
                     <p>We initiate a legitimate strategy to make sure your brand or product
                        will have a niche and stand out among the competition.
                     </p>
                  </li>
                  <li>
                     <h4>Design and Development</h4>
                     <p>Developing just the appropriate is our forte, with our industry expertise
                        we help you deliver agile solutions
                     </p>
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
</div>
<?php get_footer(); ?>