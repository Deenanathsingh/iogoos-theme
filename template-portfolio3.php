<?php 
/**
 * Template Name: Portfolio Template 3 
 * Template Post Type: portfolio
 */

get_header(); ?>

<div class="banner_io banner_io2 ecommerce-new">
  <?php Include 'navigation.php'; ?>
</div>
<?php
$meta = get_post_meta( get_the_ID() ); 

if(is_serialized($meta['_pods_built_for'][0])){
	$built_for = unserialize($meta['_pods_built_for'][0]);
}
else{
	$built_for[] = $meta['_pods_built_for'][0];
}
if(is_serialized($meta['_pods_industry'][0])){
	$industry1 = unserialize($meta['_pods_industry'][0]);
	$industry = implode("<br>",$industry1);
}
else{
	$industry = $meta['_pods_industry'][0];
}
if(is_serialized($meta['_pods_technologies'][0])){
	$technologies1 = unserialize($meta['_pods_technologies'][0]);
	$technologies = implode(" | ",$technologies1);
}
else{
	$technologies = $meta['_pods_technologies'][0];
}
if(is_serialized($meta['_pods_portfolio_country'][0])){
	$country1 = unserialize($meta['_pods_portfolio_country'][0]);
	$country = implode("<br>",$country1);
}
else{
	$country = $meta['_pods_portfolio_country'][0];
}

if(is_serialized($meta['_pods_built_for'][0])){
	$built_for = unserialize($meta['_pods_built_for'][0]);
	$built_for = implode(", ",$built_for);
}
else{
	$built_for = $meta['_pods_built_for'][0];
}
?>
<div class="pf-details">
  <div id="mid-wrap" class="pdmt">
    <div class="febally-wrap port-sec">
      <section class="common-sections fab-fablysec">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-lg-5 fab-firtbnrtext">
              <div class="fab-firtbnrtext">
                <div class="fab-lgndtxt">
                  <div class="fab-fablylg"><img src="<?php echo wp_get_attachment_image_url( $meta['portfolio_image_thumb'][0],'full');  ?>" width="310" height="227" alt="falytext"></div>
                  <h1 class="onlineshpwn-text"><?php echo nl2br($meta['mobile_portfolio_tag_line'][0]);?></h1>
                </div>
                <div class="fab-techonlybtm">
                  <ul>
                    <li><i class="fab-sprites fab-secone-ico1"></i>
                      <div class="fab-techoetxt">Technologies<span><?php echo $technologies;?></span></div>
                    </li>
                    <li><i class="fab-sprites fab-secone-ico2"></i>
                      <div class="fab-techoetxt">Industry<span><?php echo $industry;?></span></div>
                    </li>
                    <li><i class="fab-sprites fab-secone-ico3"></i>
                      <div class="fab-techoetxt">Country<span><?php echo $country;?></span></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7">
              <div class="fab-onliespimg"><img src="<?php echo wp_get_attachment_image_url( $meta['all_page_image'][0],'full');  ?>" width="713" height="984" alt=""></div>
            </div>
          </div>
        </div>
      </section>
      <section class="fab-about-project-setction" style="background: url(<?php echo wp_get_attachment_image_url( $meta['full_image'][0],'full');  ?>) no-repeat">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 fab-abtprj-txt">
              <div class="fab-aboutprj">
                <h2 class="fab-cmn-title"><?php the_title()?></h2>
                <p><?php the_content()?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fab-keyfeature-section">
        <div class="container">
          <div class="row">
            <div class="fab-topdot"><img src="https://www.iogoos.com/wp-content/themes/iogoos/img/fab-fb-dots_.png" alt=""></div>
            <div class="col-md-12 col-lg-12 text-center">
              <h2 class="fab-cmn-title">Key <span>Features</span> </h2>
            </div>
            <div class="col-md-3 col-lg-3">
              <div class="fab-keytxtpong left">
              	<?php echo $meta['mobile_key_features_part_1'][0];?>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 text-center">
              <div class="fab-keyfach-img"><img src="<?php echo wp_get_attachment_image_url( $meta['featured_box_image'][0],'full');  ?>" alt=""></div>
            </div>
            <div class="col-md-3 col-lg-3">
              <div class="fab-keytxtpong rght">
              	<?php echo $meta['mobile_key_features_part_2'][0];?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fab-latest-section">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-lg-2">
              <div class="fab-theonlnecnt">
                <p><?php echo nl2br($meta['intro_text'][0]);?></p>
              </div>
            </div>
            <div class="col-md-10 col-lg-10">
              <div class="fab-latest-colle-img"><img src="<?php echo wp_get_attachment_image_url( $meta['featured_box_image_two'][0],'full');  ?>" alt=""></div>
            </div>
          </div>
        </div>
      </section>
      <section class="fab-uiux-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-md-5 col-lg-5">
              <div class="fab-uluxtext">
                <h2 class="fab-cmn-title">UI / <span>UX</span> </h2>
                <p><?php echo $meta['ui_ux_description'][0];?></p>
              </div>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-7">
              <div class="fab-ulux-img"> <img class="fab-uxuimobile" src="<?php echo wp_get_attachment_image_url( $meta['ui_ux_banner'][0],'full');  ?>" width="1116" height="1133" alt=""> <img class="fab-uxsqr" src="https://www.iogoos.com/wp-content/themes/iogoos/img/fab-uiuximg_.png" alt=""> </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fab-yourcar-sec">
        <div class="container">
          <div class="row">
            <div class="fab-yusecdot"><img src="https://www.iogoos.com/wp-content/themes/iogoos/img/fab-about-prj-dot_.png" alt=""></div>
            <div class="fab-yusecdot-btm"><img src="https://www.iogoos.com/wp-content/themes/iogoos/img/fab-about-prj-dot_.png" alt=""></div>
            <div class="col-md-3 col-lg-3">
              <div class="fab-yourcrtscrn"><img src="<?php echo wp_get_attachment_image_url( $meta['site_result_banner_2'][0],'full');  ?>" alt=""></div>
            </div>
            <div class="col-md-9 col-lg-9">
              <div class="fab-aaplicnallow">
                <p><?php echo $meta['site_result'][0];?></p>
                <i><img src="<?php echo wp_get_attachment_image_url( $meta['site_result_banner'][0],'full');  ?>" alt=""></i> </div>
            </div>
          </div>
        </div>
      </section>
      <section class="fab-fblast-sec">
        <div class="fab-btnlatdot"><img src="https://www.iogoos.com/wp-content/themes/iogoos/img/fab-fb-dots_.png" alt=""></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="fab-middle-text">
                <div class="fab-middle-textinner">
                  <p><?php echo $meta['whats_next'][0];?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<div class="contact-us-from-prot">
  <div class="contactForm seactionPadding seactionPaddinggggg">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-12">
          <div class="startWrap">
            <div class="quate_details">
              <h1 class="num">4.9 / 5.0</h1>
              <img src="<?php echo get_template_directory_uri(); ?>/img/star.png" width="312" height="55" class="img-responsive center-block" alt="">
              <p>By 2000+ customers for 7000+ Web and Mobile App development projects. </p>
            </div>
            <div class="networking row">
              <div class="col-md-2 col-sm-2 col-xs-2 email text-center"> <i class="fas fa-envelope"></i> </div>
              <div class="col-md-10 col-sm-10 col-xs-10 skype1">
                <p>Let's Talk!</p>
                <a href="mailto:contact@iogoos.com">info@iogoos.com</a> </div>
            </div>
            <div class="networking row">
              <div class="col-md-2 col-sm-2 col-xs-2 skype text-center"> <i class="fas fa-mobile-alt"></i> </div>
              <div class="col-md-10 col-sm-10 col-xs-10 skype1">
                <p>Phone</p>
                <a href="+1-315-215-0919">+1- 315-215-0919</a> </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-sm-12">
          <?php include("home_contact.php");?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
