<?php 
   /**
   
   *Theme Name: iogoos
   
   *Theme URI: iogoos.com
   
   *Description: dms
   
   * Template Name: Package pricing
   
   *Version:1.1
   
   *Author: iogoos
   
   *Author URI: iogoos.com
   
   **/
   
   get_header(); ?>
<div class="banner_io banner_io2 portfolio_p">
   <?php include 'navigation.php'; ?>
   <!-- ............banner section.................. -->
   <div class="ab_banner ab_banner">
      <div class="container">
         <h1>Pricing</h1>
      </div>
   </div>
</div>
<div class="pricing-section">
   <?php
      $template_id="";
      $tempcode='';
      if(@$_GET['template_id']!='')
      {
      	$template_id=$_GET['template_id'];
      	$tempcode='&item_code='.$template_id;
      }
      /*
      $args = array(
              'post_type'  => 'product_variation',
              'meta_query' => array(
                  array(
                      'key'   => '_sku',
                      'value' => 'business001-1',
                  )
              )
          );
          // Get the posts for the sku
          $posts_2 = get_posts( $args);
      	print_r($posts_2);*/
      	
      $categories = get_terms( 'package_category',array('orderby' => 'id','order' => 'ASC') );
      $month_list=array();
      $year_list=array();
      $month_v_list=array();
      $year_v_list=array();
      $month_p_list=array();
      $year_p_list=array();	
      
    //         echo "<pre>";
    //   print_r ($categories);
    //   echo "</pre>";
      			
      foreach ( $categories as $category ){			
      //$product = wc_get_product( $post->ID );
      $term_vals = get_term_meta($category->term_id);
      $pro_id=$term_vals['product_id'][0];
      $product = wc_get_product( $pro_id);
      $month_p_list[$category->name]=$pro_id;
      $year_p_list[$category->name]=$pro_id;
      foreach($product->get_available_variations() as $variation ){
              
      		// Variation ID
              $variation_id = $variation['variation_id'];
      
              // Attributes
              $attributes = '';
              foreach( $variation['attributes'] as $key => $value ){
                  $taxonomy = str_replace('attribute_', '', $key );
                  $taxonomy_label = get_taxonomy( $taxonomy )->labels->singular_name;
                  $term_name = get_term_by( 'slug', $value, $taxonomy )->name;
                  $attributes = $term_name;
              }
              
              // Prices
              $active_price = floatval($variation['display_price']); // Active price
              $regular_price = floatval($variation['display_regular_price']); // Regular Price
              if( $active_price != $regular_price ){
                  $sale_price = $active_price; // Sale Price
              	if($attributes=='Monthly'){
      				$month_list[$category->name]=$sale_price;
      				$month_v_list[$category->name]=$variation_id;
      			}
      			if($attributes=='Yearly'){
      				$year_list[$category->name]=$sale_price;
      				$year_v_list[$category->name]=$variation_id;
      			}
      		}
      		else{
      			if($attributes=='Monthly'){
      				$month_list[$category->name]=$active_price;
      				$month_v_list[$category->name]=$variation_id;
      			}
      			if($attributes=='Yearly'){
      				$year_list[$category->name]=$active_price;
      				$year_v_list[$category->name]=$variation_id;
      			}
      		}
             
          }
      }
      $cols_array=array(1=>'one',2=>'two',3=>'three',4=>'four',5=>'five');
      ?>
   <div class="container">
      <h2 class="font-sz">EVERY PACKAGE INCLUDES AN<strong> EXPERTLY DESIGNED, CUSTOM BUILT WEBSITE</strong> with UNLIMITED Maintenance and Change Requests and a FREE Domain Name</h2>
      <!-- <h1>Affordable Pricing Plans</h1><hr> -->
      <div class="tab-pri" style="display:none;">
         <ul class="price-tabs1">
            <li class="active"><a href="javascript:void(0)" data-trigger="price-table01">Annually</a></li>
            <li><a href="javascript:void(0)" data-trigger="price-table02">Monthly</a></li>
         </ul>
      </div>
      <!-- pricing table 1-->
      <div class="packageplansmainrow packageplansmainrow333 active" id="price-table01">
         <div class="innerrow">
            <div class="outerrow toprow">
               <div class="clumone clumone232">
                  <div class="cen-mmm">
                     <ul>
                        <li>Pay Annually</li>
                        <li>
                           <button class="SlideBtn"> <span class="SlideBtn-knob"></span> </button>
                        </li>
                        <li >Pay Monthly</li>  
                     </ul>
                     <p> Prices do not include applicable taxes. <span style="color: #0888c8;">Save up to 30% by paying annually</span></p>
                  </div>
               </div>
               <?php
                  $j=2;
                        foreach($year_list as $key_year=>$val_year){
                  ?>
               <div class="clum<?php echo $cols_array[$j]?>">
                  <div class="title"><?php echo $key_year?></div>
                  <!--<div class="ribbon">Most Popular</div>-->
                  <div class="innertextbox">
                     <p>$<?php echo $val_year?><br>
                        <span>Per Year</span>
                     </p>
                  </div>
               </div>
               <?php
                  $j++;
                  }
                  ?>
            </div>
            <?php
               $categories = get_terms( 'package_group',array('orderby' => 'id',
                   'order' => 'ASC') );
               $main_category=array();
               // Loop through all the returned terms
               $i=1;
               foreach ( $categories as $category ):
               
               // set up a new query for each category, pulling in related posts.
               $services = new WP_Query(
               array(
                   'post_type' => 'feature',
                   'showposts' => -1,
               'orderby' => 'ID',
               'order' => 'ASC',
                   'tax_query' => array(
                       array(
                           'taxonomy'  => 'package_group',
                           'terms'     => array( $category->slug ),
                           'field'     => 'slug'
                       )
                   )
               )
               );
               
               ?>
            <?php while ($services->have_posts()) : $services->the_post(); 
               $active='';
               $show_div='';
               if($i==1){
               $active=' active';
               	$show_div="style='display: block;'";
               }
               ?>
            <div class="outerrow headingrow <?php echo $active?>">
               <div class="clumone">
                  <div class="titletx"><?php echo get_the_title();?></div>
               </div>
               <?php echo the_content();?>
            </div>
            <div class="outerrow nextrow" <?php echo $show_div?>>
               <?php $meta = get_post_meta( get_the_ID() );
                  echo html_entity_decode($meta['monthly_features'][0]);
                  ?>
            </div>
            <?php
               $i++;
               endwhile; ?>
            <?php
               //headingrow active
               //nextrow
                   // Reset things, for good measure
                   $services = null;
                   wp_reset_postdata();
               
               // end the loop
               endforeach;
               ?>
            <div class="outerrowb headingrowb">
               <div class="clumoneb"> </div>
               <?php
                  $j=2;
                        foreach($month_v_list as $key_year=>$val_year){
                  $product_id=$month_p_list[$key_year];
                  ?>
               <div class="clum<?php echo $cols_array[$j]?>b"><a href="<?php echo get_home_url();?>/checkout/?add-to-cart=<?php echo $product_id;?>&variation_id=<?php echo $val_year;?><?php echo $tempcode?>">BUY NOW</a></div>
               <?php
                  $j++;
                        }
                  ?>
            </div>
         </div>
      </div>
      <!-- pricing table 2-->
      <div class="packageplansmainrow packageplansmainrow333" id="price-table02">
         <div class="innerrow">
            <div class="outerrow toprow">
               <div class="clumone clumone232">
                  <div class="cen-mmm">
                     <ul>
                        <li data-trigger="price-table01">Pay Annually</li>
                        <li>
                           <button class="SlideBtn"> <span class="SlideBtn-knob"></span> </button>
                        </li>
                        <li data-trigger="price-table02">Pay Monthly</li>
                     </ul>
                     <p> Prices do not include applicable taxes. <span style="color: #0888c8;">Save up to 30% by paying annually</span></p>
                  </div>
               </div>
               <?php
                  $j=2;
                        foreach($month_list as $key_year=>$val_year){
                  ?>
               <div class="clum<?php echo $cols_array[$j]?>">
                  <div class="title"><?php echo $key_year?></div>
                  <!--<div class="ribbon">Most Popular</div>-->
                  <div class="innertextbox">
                     <p>$<?php echo $val_year?><br>
                        <span>Per Month</span>
                     </p>
                  </div>
               </div>
               <?php
                  $j++;
                  }
                  ?>
            </div>
            <?php
               $i=1;
                   $categories = get_terms( 'package_group', array('orderby' => 'ID',
                       'order' => 'ASC'));
               $main_category=array();
               // Loop through all the returned terms
               foreach ( $categories as $category ):
               
               // set up a new query for each category, pulling in related posts.
               $services = new WP_Query(
                   array(
                       'post_type' => 'feature',
                       'showposts' => -1,
               'orderby' => 'ID',
               'order' => 'ASC',
                       'tax_query' => array(
                           array(
                               'taxonomy'  => 'package_group',
                               'terms'     => array( $category->slug ),
                               'field'     => 'slug'
                           )
                       )
                   )
               );
               
               ?>
            <?php while ($services->have_posts()) : $services->the_post(); 
               $active='';
               $show_div='';
               if($i==1){
               $active=' active';
               	$show_div="style='display: block;'";
               }
               ?>
            <div class="outerrow headingrow <?php echo $active?>">
               <div class="clumone">
                  <div class="titletx"><?php echo get_the_title();?></div>
               </div>
               <?php echo the_content();?>
            </div>
            <div class="outerrow nextrow" <?php echo $show_div;?>>
               <?php $meta = get_post_meta( get_the_ID() );
                  echo html_entity_decode($meta['yearly_features'][0]);
                  ?>
            </div>
            <?php
               $i++;
               endwhile; ?>
            <?php
               //headingrow active
               //nextrow
                   // Reset things, for good measure
                   $services = null;
                   wp_reset_postdata();
               
               // end the loop
               endforeach;
               ?>
         </div>
         <div class="outerrowb headingrowb">
            <div class="clumoneb"> </div>
            <?php
               $j=2;
                     foreach($year_v_list as $key_year=>$val_year){
               $product_id=$year_p_list[$key_year];
               ?>
            <div class="clum<?php echo $cols_array[$j]?>b"><a href="<?php echo get_home_url();?>/checkout/?add-to-cart=<?php echo $product_id;?>&variation_id=<?php echo $val_year;?><?php echo $tempcode?>">BUY NOW</a></div>
            <?php
               $j++;
                     }
               ?>
         </div>
      </div>
   </div>
</div>
<style>
   .pricing-section #price-table02{display:none;}
   .pricing-section #price-table01{display:block;}
   .pricing-section .SlideBtn-knob{left:0px;}
   .pricing-section.activebox .SlideBtn-knob{left:23px;}
   .pricing-section.activebox #price-table02{display:block;}
   .pricing-section.activebox #price-table01{display:none;}
</style>
<?php
   get_footer();
   ?>