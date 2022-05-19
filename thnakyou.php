<?php 
/**
   *Theme Name: iogoos
   *Theme URI: iogoos.com
   *Description: dms
   * Template Name: Thankyou
   *Version:1.1
   *Author: iogoos
   *Author URI: iogoos.com
   **/
get_header(); ?>
    <div class="thnakyou-pages">
        <div class="md-container">
            <div class="md-row">
                <div class="md-12">
                    <div class="thankyou-section">
                        <div class="images-thnak">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/done-thnakyou.png" alt="">                        </div>
                        <h1>Thank you</h1>
                        <p>Thank You so much for submitting your request. The team will positively contact you as soon as possible. </p>
						<a href="<?php echo $site_path;?>/"><i class="fa fa-long-arrow-left"></i> Back to  Home </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>