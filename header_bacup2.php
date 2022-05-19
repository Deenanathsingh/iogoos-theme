<?php
if ( is_woocommerce() || is_cart() || is_checkout() || is_page( array( 'my-account' ) ) ) {
         get_header('shop');
    }
else{
	
	
?>

<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
<meta name="google-site-verification" content="rAHKQf2TM-mEN2B2fkThozsCdIyqcrzeKeLsoxapRhs" />
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

	
	
	<?php 
/*
	iogoos_meta_title();?>
<?php iogoos_meta_description();?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<meta name="robots" content="index, follow"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" /><meta property="og:title" content="Enterprise Web & Mobile App Development Company | Digital Marketing Agency" />
<meta property="og:description" content="IOGOOS Solution is a web & mobile app development company, digital marketing company in USA, Australia & India. Offering end to end IT services with a focus on Website design services, mobile app development, SEO Services at affordable prices. Contact Us Now !" />
<meta property="og:url" content="<?php echo get_home_url()?>/seo-services/" /><meta property="og:site_name" content="IOGOOS Solution- Enterprise Web & Mobile App Development Company | Digital Marketing Agency" />
<meta property="article:publisher" content="https://www.facebook.com/iogoossolution" /><meta property="og:image" content="<?php echo get_home_url()?>/wp-content/uploads/2020/04/cropped-iogoos-social-logo.jpg" />
<meta name="twitter:card" content="summary_large_image"/><meta name="twitter:description" content="<?php echo iogoos_twitter_description();?>"/>
<meta name="twitter:title" content="<?php echo iogoos_twitter_title();?>"/><meta name="twitter:site" content="@iogoossolution"/><meta name="twitter:image" content="<?php echo get_home_url()?>/wp-content/uploads/2020/04/cropped-iogoos-social-logo.jpg"/>
<meta name="twitter:creator" content="@iogoossolution"/><link rel='dns-prefetch' href='//s.w.org' />
    
<link rel="canonical" href="<?php echo wp_get_canonical_url()?>" />
<?php
	*/
	?>	

	
<?php
	/*
	<?php iogoos_meta_title();?>
<?php iogoos_meta_description();?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<meta name="robots" content="index, follow"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" /><meta property="og:title" content="Enterprise Web & Mobile App Development Company | Digital Marketing Agency" />
<meta property="og:description" content="IOGOOS Solution is a web & mobile app development company, digital marketing company in USA, Australia & India. Offering end to end IT services with a focus on Website design services, mobile app development, SEO Services at affordable prices. Contact Us Now !" />
<meta property="og:url" content="<?php echo get_home_url()?>/seo-services/" /><meta property="og:site_name" content="IOGOOS Solution- Enterprise Web & Mobile App Development Company | Digital Marketing Agency" />
<meta property="article:publisher" content="https://www.facebook.com/iogoossolution" /><meta property="og:image" content="<?php echo get_home_url()?>/wp-content/uploads/2020/04/cropped-iogoos-social-logo.jpg" />
<meta name="twitter:card" content="summary_large_image"/><meta name="twitter:description" content="We are a web & mobile app development company, digital marketing company in USA, Australia & India. Offering end to end IT services with a focus on Website design services, mobile app development, SEO Services at affordable prices."/>
<meta name="twitter:title" content="SEO services | Affordable SEO Company"/><meta name="twitter:site" content="@iogoossolution"/><meta name="twitter:image" content="<?php echo get_home_url()?>/wp-content/uploads/2020/04/cropped-iogoos-social-logo.jpg"/>
<meta name="twitter:creator" content="@iogoossolution"/><link rel='dns-prefetch' href='//s.w.org' />
    
<link rel="canonical" href="<?php echo wp_get_canonical_url()?>" />
<?php */?>	
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
<!--<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">-->
<!-- End of code snippet for Google Fonts -->
<meta name="google-site-verification" content="By7Ic_SH8E0Cr7Q_asR9R1t5H2okfzORH6kH3RRDuV4" /><meta name="p:domain_verify" content="3e0eed9cc1304228bacad9f0c4b073fc" />

<script>
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
   <script>
	WebFontConfig = {
		google: {
			families: ['Roboto:0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900','Open Sans:300','Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900','Barlow Semi Condensed:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900','Fjalla One','Oswald:200;300;400;500;600;700','Mr Dafoe']
		}
	};

	(function(d) {
		var wf = d.createElement('script'), s = d.scripts[0];
		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
		wf.async = true;
		s.parentNode.insertBefore(wf, s);
   	})(document);
</script> 
<!--................css links.....................-->



<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/new-headerstyle.css' ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/all.css' ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/owl.carousel.css' ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/animate.min.css' ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/style2.css' ?>">
<!--<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/css/style1.css' ?>">-->

	
<link rel="preconnect" href="https://fonts.gstatic.com">
<!--<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">-->
<script type = 'application/ld+json'> {
"@context": "http:\/\/schema.org",
"@type": "WebSite",
"url": "https:\/\/www.iogoos.com\/",
"name": "IOGOOS Solution- A leading Digital Marketing Agency",
"potentialAction": {
	"@type": "SearchAction",
	"target": "https:\/\/www.iogoos.com\/?s={search_term_string}",
	"query-input": "required name=search_term_string"
}
} 
</script> <script type='application/ld + json '>{"@context":"http:\/\/schema.org","@type":"Organization","url":"https:\/\/www.iogoos.com\/","sameAs":["https:\/\/www.facebook.com\/iogoossolution","https:\/\/www.instagram.com\/iogoossolution","https:\/\/www.linkedin.com\/in\/iogoos-solution","https:\/\/www.youtube.com\/channel\/UCGxm2QQVoOwLIhpU0OVP4fg","https:\/\/in.pinterest.com\/iogoossolution","https:\/\/twitter.com\/iogoossolution"],"name":"IOGOOS Solution","logo":"https:\/\/www.iogoos.com\/wp-content\/uploads\/2020\/04\/cropped-iogoos-social-logo.jpg"}</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169849183-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169849183-1');
  gtag('config', 'AW-435513737');	
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NTFF9J2');</script>
<!-- End Google Tag Manager -->

<script data-ad-client="ca-pub-1472643268774160" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
<?php wp_head(); ?>
<!-- Slider -->

</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTFF9J2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div class="main__wrap">
    <?php } ?>