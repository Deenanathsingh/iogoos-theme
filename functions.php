<?php
define('SITE_KEY','6LeiGE0UAAAAAC1v4Eo10AIXLLSW4tEi60aYhQlZ');
define('SEND_EMAIL','noreply@iogoos.com');
define('ADMIN_EMAIL','info@iogoos.com');
define('SITEOWNER_EMAIL','info@iogoos.com');
if ( ! function_exists( 'iogoos_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * Create your own iogoos_setup() function to override in a child theme.
	 *
	 * @since Iogoos 1.0
	 */
	function iogoos_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/iogoos
		 * If you're building a theme based on Iogoos, use a find and replace
		 * to change 'iogoos' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'iogoos' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Iogoos 1.2
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 240,
				'width'       => 240,
				'flex-height' => true,
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );
		

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'iogoos' ),
				'social'  => __( 'Social Links Menu', 'iogoos' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://wordpress.org/support/article/post-formats/
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat',
			)
		);
	}
endif; // iogoos_setup

function iogoos_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'iogoos_setup' );
add_action( 'after_setup_theme', 'iogoos_add_woocommerce_support' );

if ( ! function_exists( 'iogoos_entry_meta' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags.
	 *
	 * Create your own iogoos_entry_meta() function to override in a child theme.
	 *
	 * @since Iogoos 1.0
	 */
	function iogoos_entry_meta() {
		if ( 'post' === get_post_type() ) {
			$author_avatar_size = apply_filters( 'iogoos_author_avatar_size', 49 );
			printf(
				'<span class="byline"><span class="author vcard">%1$s<i class="fas fa-user"></i> <a class="url fn n" href="%3$s">%4$s</a></span></span>',
				'',
				_x( 'Author', 'Used before post author name.', 'iogoos' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}

		if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
			iogoos_entry_date();
		}

		$format = get_post_format();
		if ( current_theme_supports( 'post-formats', $format ) ) {
			printf(
				'<span class="posted-on">%1$s<a href="%2$s">%3$s</a></span>',
				sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'iogoos' ) ),
				esc_url( get_post_format_link( $format ) ),
				get_post_format_string( $format )
			);
		}

		if ( 'post' === get_post_type() ) {
			iogoos_entry_taxonomies();
		}

		if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			/* translators: %s: Post title. */
			comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'iogoos' ), get_the_title() ) );
			echo '</span>';
		}
	}
endif;

if ( ! function_exists( 'iogoos_entry_date' ) ) :
	/**
	 * Prints HTML with date information for current post.
	 *
	 * Create your own iogoos_entry_date() function to override in a child theme.
	 *
	 * @since Iogoos 1.0
	 */
	function iogoos_entry_date() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf(
			'<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
			_x( 'Posted on', 'Used before publish date.', 'iogoos' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}
endif;

if ( ! function_exists( 'iogoos_entry_taxonomies' ) ) :
	/**
	 * Prints HTML with category and tags for current post.
	 *
	 * Create your own iogoos_entry_taxonomies() function to override in a child theme.
	 *
	 * @since Iogoos 1.0
	 */
	function iogoos_entry_taxonomies() {
		$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'iogoos' ) );
		if ( $categories_list && iogoos_categorized_blog() ) {
			printf(
				'<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Categories', 'Used before category names.', 'iogoos' ),
				$categories_list
			);
		}

		$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'iogoos' ) );
		if ( $tags_list && ! is_wp_error( $tags_list ) ) {
			printf(
				'<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				_x( 'Tags', 'Used before tag names.', 'iogoos' ),
				$tags_list
			);
		}
	}
endif;

if ( ! function_exists( 'iogoos_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * Create your own iogoos_post_thumbnail() function to override in a child theme.
	 *
	 * @since Iogoos 1.0
	 */
	function iogoos_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
	</a>

		<?php
	endif; // End is_singular()
	}
endif;

if ( ! function_exists( 'iogoos_excerpt' ) ) :
	/**
	 * Displays the optional excerpt.
	 *
	 * Wraps the excerpt in a div element.
	 *
	 * Create your own iogoos_excerpt() function to override in a child theme.
	 *
	 * @since Iogoos 1.0
	 *
	 * @param string $class Optional. Class string of the div element. Defaults to 'entry-summary'.
	 */
	function iogoos_excerpt( $class = 'entry-summary' ) {
		$class = esc_attr( $class );

		if ( has_excerpt() || is_search() ) :
			?>
			<div class="<?php echo $class; ?>">
				<?php the_excerpt(); ?>
			</div><!-- .<?php echo $class; ?> -->
			<?php
		endif;
	}
endif;

if ( ! function_exists( 'iogoos_excerpt_more' ) && ! is_admin() ) :
	/**
	 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
	 * a 'Continue reading' link.
	 *
	 * Create your own iogoos_excerpt_more() function to override in a child theme.
	 *
	 * @since Iogoos 1.0
	 *
	 * @return string 'Continue reading' link prepended with an ellipsis.
	 */
	function iogoos_excerpt_more() {
		$link = sprintf(
			'<a href="%1$s" class="more-link">%2$s</a>',
			esc_url( get_permalink( get_the_ID() ) ),
			/* translators: %s: Post title. */
			sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'iogoos' ), get_the_title( get_the_ID() ) )
		);
		return ' &hellip; ' . $link;
	}
	add_filter( 'excerpt_more', 'iogoos_excerpt_more' );
endif;

if ( ! function_exists( 'iogoos_categorized_blog' ) ) :
	/**
	 * Determines whether blog/site has more than one category.
	 *
	 * Create your own iogoos_categorized_blog() function to override in a child theme.
	 *
	 * @since Iogoos 1.0
	 *
	 * @return bool True if there is more than one category, false otherwise.
	 */
	function iogoos_categorized_blog() {
		$all_the_cool_cats = get_transient( 'iogoos_categories' );
		if ( false === $all_the_cool_cats ) {
			// Create an array of all the categories that are attached to posts.
			$all_the_cool_cats = get_categories(
				array(
					'fields' => 'ids',
					// We only need to know if there is more than one category.
					'number' => 2,
				)
			);

			// Count the number of categories that are attached to the posts.
			$all_the_cool_cats = count( $all_the_cool_cats );

			set_transient( 'iogoos_categories', $all_the_cool_cats );
		}

		if ( $all_the_cool_cats > 1 || is_preview() ) {
			// This blog has more than 1 category so iogoos_categorized_blog should return true.
			return true;
		} else {
			// This blog has only 1 category so iogoos_categorized_blog should return false.
			return false;
		}
	}
endif;

/**
 * Flushes out the transients used in iogoos_categorized_blog().
 *
 * @since Iogoos 1.0
 */
function iogoos_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'iogoos_categories' );
}
add_action( 'edit_category', 'iogoos_category_transient_flusher' );
add_action( 'save_post', 'iogoos_category_transient_flusher' );

if ( ! function_exists( 'iogoos_the_custom_logo' ) ) :
	/**
	 * Displays the optional custom logo.
	 *
	 * Does nothing if the custom logo is not available.
	 *
	 * @since Iogoos 1.2
	 */
	function iogoos_the_custom_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Fire the wp_body_open action.
	 *
	 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
	 *
	 * @since Iogoos 2.0
	 */
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since Iogoos 2.0
		 */
		do_action( 'wp_body_open' );
	}
endif;
function iogoos_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name'          => __( 'Header Sidebar', 'textdomain' ),
        'id'            => 'headerbar-1',
        'description'   => __( 'Widgets in this area will be shown on blog pages / post.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'iogoos_theme_slug_widgets_init' );

//contact form
add_action('wp_ajax_contact_form', 'contact_form_callback');
add_action( 'wp_ajax_nopriv_contact_form', 'contact_form_callback');
function contact_form_callback(){
 $response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
);
$error=$response;
$params = array();
$params=$_POST;
$is_error='';
/*$upload_dir   = wp_upload_dir();
if($_FILES['attach_file']['name']){
    
    move_uploaded_file($_FILES['attach_file']['tmp_name'],$upload_dir['basedir']."/".$_FILES['attach_file']['tmp_name']);
}
*/
//print_r($params);
 $name = trim($params['fname']);
 $email = $params['email'];
 $budget = $params['budget'];
 $country = $params['country'];
 $worktype = implode(", ",$params['worktype']);
 $comment = $params['comment'];
 $phone = $params['mobile'];
 $recaptcha = $params['g-recaptcha-response'];
 $site_owners_email = SITEOWNER_EMAIL; // Replace this with your own email address
 
 if ($name=="") {
 $error['message'] = "Please enter your name"; 
 	$is_error=1;
 }
 else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
 $error['message'] = "Please enter a valid email address"; 
 $is_error=1;
 }
  else if ($phone=="") {
 $error['message'] = "Please leave a phone number.";
 $is_error=1;
 }
 else if ($comment== "") {
 $error['message'] = "Please leave a message.";
 $is_error=1;
 }
 else if ($recaptcha== "") {
 $error['message'] = "Please enter captcha.";
 $is_error=1;
 }
 

 
 // Upload file 
 			$upload_file = wp_upload_dir(); 
			$uploadDir= $upload_file['basedir']."/" ;
            $uploadedFile='';
if(!empty($_FILES["attach_file"]["name"])){ 
	 
	// File path config 
	$fileName = basename($_FILES["attach_file"]["name"]); 
	$targetFilePath = $uploadDir . $fileName; 
	$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
	 
	// Allow certain file formats 
	$allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
	if(in_array($fileType, $allowTypes)){ 
		// Upload file to the server 
		if(move_uploaded_file($_FILES["attach_file"]["tmp_name"], $targetFilePath)){ 
			$uploadedFile = $fileName; 
		}else{ 
			$uploadStatus = 0; 
			$error['message'] = 'Sorry, there was an error uploading your file.'; 
			$is_error=1;
		} 
	}else{ 
		$uploadStatus = 0; 
		$error['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
		$is_error=1;
	} 
}
			
 if ($is_error=='') {
 $message="Name: ".$name."<br>"; 
 $message.="Phone: ".$phone."<br>";
 $message.="eMail : ".$email."<br>";  
 $message.="country: ".$country."<br>";
 $message.="budget: ".$budget."<br>";
 $message.="Work Type: ".$worktype."<br>";
 $message.="Comment: ". $params['comment'];
 $subject ="New Contact form Inquiry";
 
 $headers=array();
 $headers[]='Content-Type: text/html; charset=UTF-8';
 $headers[]="From: ".$name." <".ADMIN_EMAIL.">"."\r\n";
 $headers[]='Reply-To: '.$email."\r\n";
 
 if($uploadedFile!=''){
 	$attachments = array( WP_CONTENT_DIR . '/uploads/'.$uploadedFile );
 	wp_mail( $site_owners_email, $subject, $message, $headers,$attachments );
 }
 else{
  wp_mail( $site_owners_email, $subject, $message, $headers );
 }
 
 
 /*$mail = mail($site_owners_email, $subject, $message,
 "From: ".$name." <".$email.">rn"
 ."Reply-To: ".$email."rn"
 ."X-Mailer: PHP/" . phpversion());*/
 
 $response['status'] = 1; 
 $response['message'] = $name . ", We've received your email. We'll be in touch with you as soon as possible!";
 echo json_encode($response);
 
 } # end if no error
 else {
 echo json_encode($error);
 } # end if there was an error sending
 
    die(); // this is required to return a proper result
}
//visitor email 

add_action('wp_ajax_project_form', 'project_form_callback');
add_action( 'wp_ajax_nopriv_project_form', 'project_form_callback');
function project_form_callback(){
 $response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
);
$error=$response;
$params = array();
$params=$_POST;
$is_error='';

 $email = $params['data']['email'];
 $tabname = $params['data']['tabname'];
 $site_owners_email = SITEOWNER_EMAIL; // Replace this with your own email address
 if ($is_error=='') {
 $message.="eMail : ".$email."<br>";
 $message.="Looking for ". $tabname;  
 
 $subject ="New Inquiry for - ".$tabname;
 $headers=array();
 $headers[]='Content-Type: text/html; charset=UTF-8';
 $headers[]="From: Iogoos <".ADMIN_EMAIL.">"."\r\n";
 $headers[]='Reply-To: '.$email."\r\n";
 
  wp_mail( $site_owners_email, $subject, $message, $headers );
 
 $response['status'] = 1; 
 $response['message'] = $name . ", We've received your email. We'll be in touch with you as soon as possible!";
 echo json_encode($response);
 
 } # end if no error
 else {
 echo json_encode($error);
 } # end if there was an error sending
 
    die(); // this is required to return a proper result
}


//service form 2
add_action('wp_ajax_service_contact_two', 'service_contact_two_callback');
add_action( 'wp_ajax_nopriv_service_contact_two', 'service_contact_two_callback');
function service_contact_two_callback(){
 $response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
);
$error=$response;
$params = array();
$params=$_POST;
$is_error='';

 $name = trim($params['name']);
 $email = $params['email'];
 $budget = $params['budget'];

 $worktype = $params['work_type'];
 $comment = $params['message'];
 $phone = $params['phone'];
 $site_owners_email = SITEOWNER_EMAIL; // Replace this with your own email address
 
 if ($name=="") {
 $error['message'] = "Please enter your name"; 
 	$is_error=1;
 }
 
else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
 $error['message'] = "Please enter a valid email address"; 
 $is_error=1;
 }
 else if ($phone=="") {
 $error['message'] = "Please leave a phone number.";
 $is_error=1;
 }
else if ($comment== "") {
 $error['message'] = "Please leave a Message.";
 $is_error=1;
 }
else if($params['g-recaptcha-response']==''){
 	$error['message'] = "Please enter captcha.";
	$is_error=1;
 }
 
 // Upload file 
 			$upload_file = wp_upload_dir(); 
			$uploadDir= $upload_file['basedir']."/" ;
            $uploadedFile='';
if(!empty($_FILES["attach_file"]["name"])){ 
	 
	// File path config 
	$fileName = basename($_FILES["attach_file"]["name"]); 
	$targetFilePath = $uploadDir . $fileName; 
	$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
	 
	// Allow certain file formats 
	$allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
	if(in_array($fileType, $allowTypes)){ 
		// Upload file to the server 
		if(move_uploaded_file($_FILES["attach_file"]["tmp_name"], $targetFilePath)){ 
			$uploadedFile = $fileName; 
		}else{ 
			$uploadStatus = 0; 
			$error['message'] = 'Sorry, there was an error uploading your file.'; 
			$is_error=1;
		} 
	}else{ 
		$uploadStatus = 0; 
		$error['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
		$is_error=1;
	} 
}
			
 if ($is_error=='') {
 $message="Name: ".$name."<br>"; 
 $message.="Phone: ".$phone."<br>";
 $message.="eMail : ".$email."<br>";  

 $message.="budget: ".$budget."<br>";
 $message.="Work Type: ".$worktype."<br>";
 $message.="Timeline: ".$params['timeline']."<br>"; 
 
 $message.="Message: ". $params['message'];
 $subject ="New Service Contact form Inquiry";
 
 $headers=array();
 $headers[]='Content-Type: text/html; charset=UTF-8';
 $headers[]="From: ".$name." <".ADMIN_EMAIL.">"."\r\n";
 $headers[]='Reply-To: '.$email."\r\n";
 
 if($uploadedFile!=''){
 	$attachments = array( WP_CONTENT_DIR . '/uploads/'.$uploadedFile );
 	wp_mail( $site_owners_email, $subject, $message, $headers,$attachments );
 }
 else{
  wp_mail( $site_owners_email, $subject, $message, $headers );
 }

 
 $response['status'] = 1; 
 $response['message'] = $name . ", We've received your email. We'll be in touch with you as soon as possible!";
 echo json_encode($response);
 
 } # end if no error
 else {
 echo json_encode($error);
 } # end if there was an error sending
 
    die(); // this is required to return a proper result
}
//quote popup
add_action('wp_ajax_request_quote', 'request_quote_callback');
add_action( 'wp_ajax_nopriv_request_quote','request_quote_callback' );
function request_quote_callback(){
 $response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
);
$error=$response;
$params = array();
$params=$_POST;
$is_error='';

 $name = trim($params['c_name']);
 $email = $params['c_email'];
 $budget = $params['c_budget'];

 $worktype = $params['c_worktype'];
 $comment = $params['c_message'];
 $phone = $params['c_phone'];
 $site_owners_email = SITEOWNER_EMAIL; // Replace this with your own email address
 
 if ($name=="") {
 $error['message'] = "Please enter your name"; 
 	$is_error=1;
 }
 
 else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
 $error['message'] = "Please enter a valid email address"; 
 $is_error=1;
 }
 else if ($phone=="") {
 $error['message'] = "Please leave a phone number.";
 $is_error=1;
 }
 else if ($params['c_worktype']=="") {
 $error['message'] = "Please select work type.";
 $is_error=1;
 }
 else if ($params['c_timeline']=="") {
 $error['message'] = "Please select time estimation.";
 $is_error=1;
 }
 else if ($params['c_budget']=="") {
 $error['message'] = "Please select your budget.";
 $is_error=1;
 }
 else if ($comment== "") {
 $error['message'] = "Please leave a message.";
 $is_error=1;
 }
else if($params['g-recaptcha-response']==''){
 	$error['message'] = "Please enter captcha.";
	$is_error=1;
 }
 
 // Upload file 
 			$upload_file = wp_upload_dir(); 
			$uploadDir= $upload_file['basedir']."/" ;
            $uploadedFile='';
if(!empty($_FILES["c_attach_file"]["name"])){ 
	 
	// File path config 
	$fileName = basename($_FILES["c_attach_file"]["name"]); 
	$targetFilePath = $uploadDir . $fileName; 
	$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
	 
	// Allow certain file formats 
	$allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
	if(in_array($fileType, $allowTypes)){ 
		// Upload file to the server 
		if(move_uploaded_file($_FILES["c_attach_file"]["tmp_name"], $targetFilePath)){ 
			$uploadedFile = $fileName; 
		}else{ 
			$uploadStatus = 0; 
			$error['message'] = 'Sorry, there was an error uploading your file.'; 
			$is_error=1;
		} 
	}else{ 
		$uploadStatus = 0; 
		$error['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
		$is_error=1;
	} 
}
			
 if ($is_error=='') {
 $message="Name: ".$name."<br>"; 
 $message.="Phone: ".$phone."<br>";
 $message.="eMail : ".$email."<br>";  

 $message.="budget: ".$budget."<br>";
 $message.="Work Type: ".$worktype."<br>";
 $message.="Timeline: ".$params['c_timeline']."<br>"; 
 
 $message.="Message: ". $params['c_message'];
 $subject ="New Request Quote form Inquiry";
 
 $headers=array();
 $headers[]='Content-Type: text/html; charset=UTF-8';
 $headers[]="From: ".$name." <".ADMIN_EMAIL.">"."\r\n";
 $headers[]='Reply-To: '.$email."\r\n";
 
 if($uploadedFile!=''){
 	$attachments = array( WP_CONTENT_DIR . '/uploads/'.$uploadedFile );
 	wp_mail( $site_owners_email, $subject, $message, $headers,$attachments );
 }
 else{
  wp_mail( $site_owners_email, $subject, $message, $headers );
 }

 
 $response['status'] = 1; 
 $response['message'] = $name . ", We've received your email. We'll be in touch with you as soon as possible!";
 echo json_encode($response);
 
 } # end if no error
 else {
 echo json_encode($error);
 } # end if there was an error sending
 
    die(); // this is required to return a proper result
}
//service form 1
add_action('wp_ajax_service_contact_one', 'service_contact_one_callback');
add_action( 'wp_ajax_nopriv_service_contact_one', 'service_contact_one_callback');
function service_contact_one_callback(){
 $response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
);
$error=$response;
$params = array();
$params=$_POST;
$is_error='';
 $name = trim($params['name']);
 $email = $params['email'];
 $country = $params['country'];
 $comment = $params['message'];
 $phone = $params['phone'];
 $budget =$params['budget'];
 $site_owners_email = SITEOWNER_EMAIL; // Replace this with your own email address
 
 if ($name=="") {
 $error['message'] = "Please enter your name"; 
 	$is_error=1;
 }
 
 else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
 $error['message'] = "Please enter a valid email address"; 
 $is_error=1;
 }
 else if ($phone=="") {
 $error['message'] = "Please leave a phone number.";
 $is_error=1;
 }
 else if ($comment== "") {
 $error['message'] = "Please leave a message.";
 $is_error=1;
 }
 else if($params['g-recaptcha-response']==''){
 	$error['message'] = "Please enter captcha.";
	$is_error=1;
 }

			
 if ($is_error=='') {
 $message="Name: ".$name."<br>"; 
 $message.="Phone: ".$phone."<br>";
 $message.="eMail : ".$email."<br>";  
 $message.="country: ".$country."<br>";
 $message.="budget: ".$budget."<br>";

 $message.="Message: ". $params['message'];
 $subject ="New Service Contact form Inquiry";
 
 $headers=array();
 $headers[]='Content-Type: text/html; charset=UTF-8';
 $headers[]="From: ".$name." <".ADMIN_EMAIL.">"."\r\n";
 $headers[]='Reply-To: '.$email."\r\n";
 
  wp_mail( $site_owners_email, $subject, $message, $headers );

 
 $response['status'] = 1; 
 $response['message'] = $name . ", We've received your email. We'll be in touch with you as soon as possible!";
 echo json_encode($response);
 
 } # end if no error
 else {
 echo json_encode($error);
 } # end if there was an error sending
 
    die(); // this is required to return a proper result
}
//common contact form
add_action('wp_ajax_common_contact_form', 'common_contact_form_callback');
add_action( 'wp_ajax_nopriv_common_contact_form', 'common_contact_form_callback');
function common_contact_form_callback(){
 $response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
);
$error=$response;
$params = array();
$params=$_POST;
$is_error='';

 $name = trim($params['name']);
 $email = $params['email'];
 $comment = $params['message'];
 $phone = $params['phone'];
 $site_owners_email = SITEOWNER_EMAIL; // Replace this with your own email address
 
 if ($name=="") {
 $error['message'] = "Please enter your name"; 
 	$is_error=1;
 }
 
else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
 $error['message'] = "Please enter a valid email address"; 
 $is_error=1;
 }
 else if ($phone=="") {
 $error['message'] = "Please leave a phone number.";
 $is_error=1;
 }
 else if ($comment== "") {
 $error['message'] = "Please leave a message.";
 $is_error=1;
 }
 else if($params['g-recaptcha-response']==''){
 	$error['message'] = "Please enter captcha.";
	$is_error=1;
 }
 			
 if ($is_error=='') {
 $message="Name: ".$name."<br>"; 
 $message.="Phone: ".$phone."<br>";
 $message.="eMail : ".$email."<br>";  
 $message.="Message: ". $params['message'];
 $subject ="New Contact form Inquiry";
 
 $headers=array();
 $headers[]='Content-Type: text/html; charset=UTF-8';
 $headers[]="From: ".$name." <".ADMIN_EMAIL.">"."\r\n";
 $headers[]='Reply-To: '.$email."\r\n";
 
  wp_mail( $site_owners_email, $subject, $message, $headers );
 
 $response['status'] = 1; 
 $response['message'] = $name . ", We've received your email. We'll be in touch with you as soon as possible!";
 echo json_encode($response);
 
 } # end if no error
 else {
 echo json_encode($error);
 } # end if there was an error sending
 
    die(); // this is required to return a proper result
}

//template contact form
add_action('wp_ajax_template_contact_form', 'template_contact_form_callback');
add_action( 'wp_ajax_nopriv_template_contact_form', 'template_contact_form_callback');
function template_contact_form_callback(){
 $response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
);
$error=$response;
$params = array();
$params=$_POST;
$is_error='';

 $name = trim($params['your-fname']);
 $email = $params['your-email'];
 $country = $params['country-name'];
 $recaptcha = $params['g-recaptcha-response'];
  
 $comment = '';
 $phone = $params['your-phone'];
 $site_owners_email = SITEOWNER_EMAIL; // Replace this with your own email address
 
 
 if ($name=="") {
 $error['message'] = "Please enter your name"; 
 	$is_error=1;
 }
 
else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
 $error['message'] = "Please enter a valid email address"; 
 $is_error=1;
 }
 else if ($phone=="") {
 $error['message'] = "Please leave a phone number.";
 $is_error=1;
 }
 else if ($recaptcha=="") {
 $error['message'] = "Please select captcha.";
 $is_error=1;
 }
 
 if ($comment== "") {
 //$error['message'] = "Please leave a message.";
 //$is_error=1;
 }
 
 			
 if ($is_error=='') {
 $message="Name: ".$name."<br>"; 
 $message.="Phone: ".$phone."<br>";
 $message.="eMail : ".$email."<br>"; 
 $message.="Country : ".$country."<br>";  

 $subject ="New Template form Inquiry";
 
 $headers=array();
 $headers[]='Content-Type: text/html; charset=UTF-8';
 $headers[]="From: ".$name." <".ADMIN_EMAIL.">"."\r\n";
 $headers[]='Reply-To: '.$email."\r\n";
 
  wp_mail( $site_owners_email, $subject, $message, $headers );
 WC()->session->set( 'user_data', array( 'email' => $email, 'name' => $name,'phone' => $phone,'country' => $country ) );
 $response['status'] = 1; 
 $response['message'] = $name . ", We've received your email. We'll be in touch with you as soon as possible!";
 echo json_encode($response);
 
 } # end if no error
 else {
 echo json_encode($error);
 } # end if there was an error sending
 
    die(); // this is required to return a proper result
}

function single_portfolio_template( $template ){
    $object = get_queried_object();

    if( ! empty( $object->post_type )
        && 'portfolio' == $object->post_type){
        if( $custom_template = locate_template( 'single-portfolio', false ) ){
            $template = $custom_template;
        }
    }
    return $template;
}
add_filter('single_template', 'single_portfolio_template' ) ;
function iogoos_twitter_description() {
    global $post;
    if ( is_singular() ) {
        
        $des_post = strip_shortcodes( $post->post_content );
		$des_post = strip_tags( $des_post );
        $des_post = str_replace( array("\n", "\r", "\t"), ' ', $des_post );
        $des_post = mb_substr( $des_post, 0, 300, 'utf8' );
		$des_post=get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
        return $des_post;
    }
    if ( is_home() ) {
		$des_post=get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
		return get_bloginfo( "description" );
       // echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
    }
    if ( is_category() ) {
        $des_cat = strip_tags(category_description());
		return $des_cat;
       // echo '<meta name="description" content="' . $des_cat . '" />' . "\n";
    }
}
//add_action( 'wp_head', 'iogoos_meta_description');
function iogoos_twitter_title(){
global $post;
	  $sep = ' | ';
  $title_meta=get_the_title();	  
  $name = get_bloginfo( 'name' );

  if( is_home() || is_front_page() ){
   $title_meta=get_post_meta($post->ID, '_yoast_wpseo_title', true);  //$title2 = $name . $sep . get_bloginfo( 'description' );
  }
  else if( is_single() || is_page() ){
	 	$post_id=$post->ID;
    $yoast_title = get_post_meta($post_id, '_yoast_wpseo_title', true);
    $title_meta =$yoast_title;// strstr($yoast_title, '%%', true);
    if (empty($title_meta)) {
        $title_meta = get_the_title($post_id);
    }

    $wpseo_titles = get_option('wpseo_titles');

    $sep_options = WPSEO_Option_Titles::get_instance()->get_separator_options();
    if (isset($wpseo_titles['separator']) && isset($sep_options[$wpseo_titles['separator']])) {
        $sep = $sep_options[$wpseo_titles['separator']];
    } else {
        $sep = '-'; //setting default separator if Admin didn't set it from backed
    }

    $site_title = get_bloginfo('name');

    //$title = $title . ' ' . $sep . ' ' . $site_title;

	
	}
  else if( is_category() )
    $title_meta = single_cat_title( '', false ) . $sep . $name;

  else if( is_day() )
    $title_meta = 'Post for the day ' . get_the_date( 'j F, Y' ). $sep . $name;

  else if( is_month() )
    $title_meta = 'Post for the month ' . get_the_date( 'F, Y' ). $sep . $name;

  else if( is_year() )
    $title_meta = 'Post for the year ' . get_the_date( 'Y' ). $sep . $name;
  else{$title_meta='Blog';}	

  return $title_meta;
}
function iogoos_meta_description() {
    global $post;
    if ( is_singular() ) {
        
        $des_post = strip_shortcodes( $post->post_content );
		$des_post = strip_tags( $des_post );
        $des_post = str_replace( array("\n", "\r", "\t"), ' ', $des_post );
        $des_post = mb_substr( $des_post, 0, 300, 'utf8' );
		$des_post=get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
        echo '<meta name="description" content="' . $des_post . '" />' . "\n";
    }
    if ( is_home() ) {
		$des_post=get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
        echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
    }
    if ( is_category() ) {
        $des_cat = strip_tags(category_description());
		
        echo '<meta name="description" content="' . $des_cat . '" />' . "\n";
    }
}
//add_action( 'wp_head', 'iogoos_meta_description');
function iogoos_meta_title(){
global $post;
	  $sep = ' | ';
  $title_meta=get_the_title();	  
  $name = get_bloginfo( 'name' );

  if( is_home() || is_front_page() ){
   $title_meta=get_post_meta($post->ID, '_yoast_wpseo_title', true);  //$title2 = $name . $sep . get_bloginfo( 'description' );
  }
  else if( is_single() || is_page() ){
	 	$post_id=$post->ID;
    $yoast_title = get_post_meta($post_id, '_yoast_wpseo_title', true);
    $title_meta =$yoast_title;// strstr($yoast_title, '%%', true);
    if (empty($title_meta)) {
        $title_meta = get_the_title($post_id);
    }

    $wpseo_titles = get_option('wpseo_titles');

    $sep_options = WPSEO_Option_Titles::get_instance()->get_separator_options();
    if (isset($wpseo_titles['separator']) && isset($sep_options[$wpseo_titles['separator']])) {
        $sep = $sep_options[$wpseo_titles['separator']];
    } else {
        $sep = '-'; //setting default separator if Admin didn't set it from backed
    }

    $site_title = get_bloginfo('name');

    //$title = $title . ' ' . $sep . ' ' . $site_title;

	
	}
  else if( is_category() )
    $title_meta = single_cat_title( '', false ) . $sep . $name;

  else if( is_day() )
    $title_meta = 'Post for the day ' . get_the_date( 'j F, Y' ). $sep . $name;

  else if( is_month() )
    $title_meta = 'Post for the month ' . get_the_date( 'F, Y' ). $sep . $name;

  else if( is_year() )
    $title_meta = 'Post for the year ' . get_the_date( 'Y' ). $sep . $name;
  else{$title_meta='Blog';}	

  echo  '<title>'.$title_meta.'</title>'."\n";
}
//add_action( 'wp_head', 'iogoos_meta_title');
add_filter( 'woocommerce_billing_fields' , 'prefill_billing_fields' );
function countrylist_array(){
	return $countries =
array(
"AF" => "Afghanistan",
"AL" => "Albania",
"DZ" => "Algeria",
"AS" => "American Samoa",
"AD" => "Andorra",
"AO" => "Angola",
"AI" => "Anguilla",
"AQ" => "Antarctica",
"AG" => "Antigua and Barbuda",
"AR" => "Argentina",
"AM" => "Armenia",
"AW" => "Aruba",
"AU" => "Australia",
"AT" => "Austria",
"AZ" => "Azerbaijan",
"BS" => "Bahamas",
"BH" => "Bahrain",
"BD" => "Bangladesh",
"BB" => "Barbados",
"BY" => "Belarus",
"BE" => "Belgium",
"BZ" => "Belize",
"BJ" => "Benin",
"BM" => "Bermuda",
"BT" => "Bhutan",
"BO" => "Bolivia",
"BA" => "Bosnia and Herzegovina",
"BW" => "Botswana",
"BV" => "Bouvet Island",
"BR" => "Brazil",
"IO" => "British Indian Ocean Territory",
"BN" => "Brunei Darussalam",
"BG" => "Bulgaria",
"BF" => "Burkina Faso",
"BI" => "Burundi",
"KH" => "Cambodia",
"CM" => "Cameroon",
"CA" => "Canada",
"CV" => "Cape Verde",
"KY" => "Cayman Islands",
"CF" => "Central African Republic",
"TD" => "Chad",
"CL" => "Chile",
"CN" => "China",
"CX" => "Christmas Island",
"CC" => "Cocos (Keeling) Islands",
"CO" => "Colombia",
"KM" => "Comoros",
"CG" => "Congo",
"CD" => "Congo, the Democratic Republic of the",
"CK" => "Cook Islands",
"CR" => "Costa Rica",
"CI" => "Cote D'Ivoire",
"HR" => "Croatia",
"CU" => "Cuba",
"CY" => "Cyprus",
"CZ" => "Czech Republic",
"DK" => "Denmark",
"DJ" => "Djibouti",
"DM" => "Dominica",
"DO" => "Dominican Republic",
"EC" => "Ecuador",
"EG" => "Egypt",
"SV" => "El Salvador",
"GQ" => "Equatorial Guinea",
"ER" => "Eritrea",
"EE" => "Estonia",
"ET" => "Ethiopia",
"FK" => "Falkland Islands (Malvinas)",
"FO" => "Faroe Islands",
"FJ" => "Fiji",
"FI" => "Finland",
"FR" => "France",
"GF" => "French Guiana",
"PF" => "French Polynesia",
"TF" => "French Southern Territories",
"GA" => "Gabon",
"GM" => "Gambia",
"GE" => "Georgia",
"DE" => "Germany",
"GH" => "Ghana",
"GI" => "Gibraltar",
"GR" => "Greece",
"GL" => "Greenland",
"GD" => "Grenada",
"GP" => "Guadeloupe",
"GU" => "Guam",
"GT" => "Guatemala",
"GN" => "Guinea",
"GW" => "Guinea-Bissau",
"GY" => "Guyana",
"HT" => "Haiti",
"HM" => "Heard Island and Mcdonald Islands",
"VA" => "Holy See (Vatican City State)",
"HN" => "Honduras",
"HK" => "Hong Kong",
"HU" => "Hungary",
"IS" => "Iceland",
"IN" => "India",
"ID" => "Indonesia",
"IR" => "Iran, Islamic Republic of",
"IQ" => "Iraq",
"IE" => "Ireland",
"IL" => "Israel",
"IT" => "Italy",
"JM" => "Jamaica",
"JP" => "Japan",
"JO" => "Jordan",
"KZ" => "Kazakhstan",
"KE" => "Kenya",
"KI" => "Kiribati",
"KP" => "Korea, Democratic People's Republic of",
"KR" => "Korea, Republic of",
"KW" => "Kuwait",
"KG" => "Kyrgyzstan",
"LA" => "Lao People's Democratic Republic",
"LV" => "Latvia",
"LB" => "Lebanon",
"LS" => "Lesotho",
"LR" => "Liberia",
"LY" => "Libyan Arab Jamahiriya",
"LI" => "Liechtenstein",
"LT" => "Lithuania",
"LU" => "Luxembourg",
"MO" => "Macao",
"MK" => "Macedonia, the Former Yugoslav Republic of",
"MG" => "Madagascar",
"MW" => "Malawi",
"MY" => "Malaysia",
"MV" => "Maldives",
"ML" => "Mali",
"MT" => "Malta",
"MH" => "Marshall Islands",
"MQ" => "Martinique",
"MR" => "Mauritania",
"MU" => "Mauritius",
"YT" => "Mayotte",
"MX" => "Mexico",
"FM" => "Micronesia, Federated States of",
"MD" => "Moldova, Republic of",
"MC" => "Monaco",
"MN" => "Mongolia",
"MS" => "Montserrat",
"MA" => "Morocco",
"MZ" => "Mozambique",
"MM" => "Myanmar",
"NA" => "Namibia",
"NR" => "Nauru",
"NP" => "Nepal",
"NL" => "Netherlands",
"AN" => "Netherlands Antilles",
"NC" => "New Caledonia",
"NZ" => "New Zealand",
"NI" => "Nicaragua",
"NE" => "Niger",
"NG" => "Nigeria",
"NU" => "Niue",
"NF" => "Norfolk Island",
"MP" => "Northern Mariana Islands",
"NO" => "Norway",
"OM" => "Oman",
"PK" => "Pakistan",
"PW" => "Palau",
"PS" => "Palestinian Territory, Occupied",
"PA" => "Panama",
"PG" => "Papua New Guinea",
"PY" => "Paraguay",
"PE" => "Peru",
"PH" => "Philippines",
"PN" => "Pitcairn",
"PL" => "Poland",
"PT" => "Portugal",
"PR" => "Puerto Rico",
"QA" => "Qatar",
"RE" => "Reunion",
"RO" => "Romania",
"RU" => "Russian Federation",
"RW" => "Rwanda",
"SH" => "Saint Helena",
"KN" => "Saint Kitts and Nevis",
"LC" => "Saint Lucia",
"PM" => "Saint Pierre and Miquelon",
"VC" => "Saint Vincent and the Grenadines",
"WS" => "Samoa",
"SM" => "San Marino",
"ST" => "Sao Tome and Principe",
"SA" => "Saudi Arabia",
"SN" => "Senegal",
"CS" => "Serbia and Montenegro",
"SC" => "Seychelles",
"SL" => "Sierra Leone",
"SG" => "Singapore",
"SK" => "Slovakia",
"SI" => "Slovenia",
"SB" => "Solomon Islands",
"SO" => "Somalia",
"ZA" => "South Africa",
"GS" => "South Georgia and the South Sandwich Islands",
"ES" => "Spain",
"LK" => "Sri Lanka",
"SD" => "Sudan",
"SR" => "Suriname",
"SJ" => "Svalbard and Jan Mayen",
"SZ" => "Swaziland",
"SE" => "Sweden",
"CH" => "Switzerland",
"SY" => "Syrian Arab Republic",
"TW" => "Taiwan, Province of China",
"TJ" => "Tajikistan",
"TZ" => "Tanzania, United Republic of",
"TH" => "Thailand",
"TL" => "Timor-Leste",
"TG" => "Togo",
"TK" => "Tokelau",
"TO" => "Tonga",
"TT" => "Trinidad and Tobago",
"TN" => "Tunisia",
"TR" => "Turkey",
"TM" => "Turkmenistan",
"TC" => "Turks and Caicos Islands",
"TV" => "Tuvalu",
"UG" => "Uganda",
"UA" => "Ukraine",
"AE" => "United Arab Emirates",
"GB" => "United Kingdom",
"US" => "United States",
"UM" => "United States Minor Outlying Islands",
"UY" => "Uruguay",
"UZ" => "Uzbekistan",
"VU" => "Vanuatu",
"VE" => "Venezuela",
"VN" => "Viet Nam",
"VG" => "Virgin Islands, British",
"VI" => "Virgin Islands, U.s.",
"WF" => "Wallis and Futuna",
"EH" => "Western Sahara",
"YE" => "Yemen",
"ZM" => "Zambia",
"ZW" => "Zimbabwe"
);
}
function prefill_billing_fields ( $address_fields ) {
$countries=countrylist_array();
    // Get the session data
    $data = WC()->session->get('user_data');
    // Email
    if( isset($data['email']) && ! empty($data['email']) )
        $address_fields['billing_email']['default'] = $data['email'];

    // Name
    if( isset($data['name']) && ! empty($data['name']) )
        $address_fields['billing_first_name']['default'] = $data['name'];
		
	if( isset($data['phone']) && ! empty($data['phone']) )
        $address_fields['billing_phone']['default'] = $data['phone'];
		
	if( isset($data['country']) && ! empty($data['country']) ){
		foreach($countries as $k_country=>$val_c){
		  if($val_c==$data['country']){
        		
				$address_fields['billing_country']['default'] = $k_country;
				WC()->customer->set_country($k_country);
			}
		}	
		}

    return $address_fields;
}
add_filter( 'woocommerce_add_to_cart_validation', 'iogoos_only_one_in_cart', 99, 2 );

// Add custom note as custom cart item data
add_filter( 'woocommerce_add_cart_item_data', 'get_custom_product_note', 30, 2 );
function get_custom_product_note( $cart_item_data, $product_id ){
    if ( isset($_GET['item_code']) && ! empty($_GET['item_code']) ) {
        $cart_item_data['template_code'] = sanitize_text_field( $_GET['item_code'] );
        $cart_item_data['template_key'] = md5( microtime().rand() );
    }
    return $cart_item_data;
}


// Display note in cart and checkout pages as cart item data - Optional
add_filter( 'woocommerce_get_item_data', 'display_custom_item_data', 10, 2 );
function display_custom_item_data( $cart_item_data, $cart_item ) {
    if ( isset( $cart_item['template_code'] ) ){
        $cart_item_data[] = array(
            'name' => "ItemCode",
            'value' =>   $cart_item['template_code'],
        );
    }
    return $cart_item_data;
}

// Save and display product note in orders and email notifications (everywhere)
add_action( 'woocommerce_checkout_create_order_line_item', 'add_custom_note_order_item_meta', 20, 4 );
function add_custom_note_order_item_meta( $item, $cart_item_key, $values, $order ) {
    if ( isset( $values['template_code'] ) ){
        $item->update_meta_data( 'ItemCode',  $values['template_code'] );
    }
}
   
function iogoos_only_one_in_cart( $passed, $added_product_id ) {
   wc_empty_cart();
   return $passed;
}
add_filter( 'widget_text', 'do_shortcode' );

add_image_size( 'portfolio-slide', 170, 340, true );
add_image_size( 'portfolio-gallery', 520, 570, true );
add_image_size( 'iogoos-recent-thumbnails', 120, 120, true );
add_image_size( 'iogoos-small', 80,80, true );
add_image_size( 'iogoos-medium', 360, 360, true );
add_image_size( 'iogoos-three-col', 235,150, true );
add_shortcode( 'recent_posts', 'iogoos_recent_posts' );
add_shortcode( 'service_form', 'iogoos_service_form' );
add_shortcode( 'service_portfolio', 'iogoos_service_portfolio' );
function iogoos_service_portfolio($atts = [], $content='') {
	$att = shortcode_atts( array(
      'category' => ''
   ), $atts );
   
	$portfolio_category=$att['category'];
	if($att['category']==''){
		$portfolio_category=array("wordpress");
	}
	$args = array( 'numberposts' => 6, 'order'=> 'DESC', 'orderby' => 'ID','post_type'=>'portfolio','tax_query' => array(
	array(
		'taxonomy' =>'portfolio_category',
		'field' => 'slug',
		'terms' => $portfolio_category
	)));
	$postslist = get_posts( $args );
	$i=1;
	$slider_str='';
	if($postslist){
	
	$slider_str='<div class="owl-carousel owl-theme portfolioli carousel-inner" id="theCarousel">';
	$slider_item='';           
	foreach ($postslist as $post) :  setup_postdata($post); 
	$meta = get_post_meta( $post->ID ); 
	
	$slider_item.='<div class="item">
	
						<div class="port">
	
							<div class="bg-af-b1">
	
								<a href="javascript:void(0)" class="port-item-'.$i.'" data-port="#port'.$i.'">
									<img data-src="'.wp_get_attachment_image_url($meta['full_image'][0],'portfolio-slide').'" class="img-responsive lazy-image" id="portImg-'.$i.'" data-img="'.wp_get_attachment_image_url($meta['full_image'][0],'portfolio-gallery').'"/>
								</a>
								<div class="portImg-'.$i.'" style="display:none;"><h1>'.$post->post_title.' Portfolio</h1>
							<hr/>
							<div class="paragraph_shp">
								<p>'.substr(strip_tags($meta['intro_text'][0]),0,100).' <a id="serviceHref" href="'.get_permalink( $post->ID ).'">read more...</a></p>
							</div></div>
							</div>
	
						</div>
	
					</div>';
	$i++;
	endforeach; 
	
				$slider_str.=$slider_item.'</div><a href="'.$site_path.'/portfolio/" class="theme_a" target="_blank">View All Portfolios</a>';
	}
	$content.=$slider_str;
return 	$content;
}
function iogoos_service_form($atts = [], $content='') {

$att = shortcode_atts( array(
      'title' => ''
   ), $atts );
$countries=countrylist_array();
$c_opt='';
            foreach($countries as $k_c=>$val_c){
            $c_opt.="<option value='".$val_c."'>".$val_c."</option>";
            }
			
$html_str='<form method="post" name="frmcontact3" id="frmcontact3">
   <div class="form-group">
      <input type="text" placeholder="Full Name" name="name" class="form-control">
   </div>
   <div class="form-group">
      <input type="text" placeholder="Email Address" name="email" class="form-control">
   </div>
   <div class="form-group">
      <input type="text" placeholder="Phone Number" name="phone" class="form-control">
   </div>
   <div class="form-group">
      <select class="form-control" id="country" name="Country" >
         <option value="">Country</option>
		 '.$c_opt.'
		 </select>
   </div>
   <div class="form-group">
      <select name="budget">
         <option value="">Budget</option>
         <option value="$0-$500">$0-$500</option>
         <option value="$500-$1000">$500-$1,000</option>
         <option value="$1000-$1500">$1,000-$1,500</option>
         <option value="$1500-$2500">$1,500-$2,500</option>
         <option value="$2500-$4500">$2,500-$4,500</option>
         <option value="$4500-$7000">$4,500-$7,000</option>
         <option value="$7000-$10000">$7,000-$10,000</option>
         <option value="$10000-$15000">$10,000-$15,000</option>
         <option value="$15000-$25000">$15,000-$25,000</option>
         <option value="$25000-$50000">$25,000-$50,000</option>
         <option value="$50000+">$50,000+</option>
         <option value="not sure">not sure</option>
      </select>
   </div>
   <textarea class="form-control" placeholder="Describe your project" name="message"></textarea>
   <div class="form_group_cathe">
      <div data-sitekey="<?php echo SITE_KEY;?>" class="g-recaptcha"></div>
   </div>
   <div class="formresponse" style="padding:5px;"></div>
   <div class="orange-heading">
      <input type="hidden" name="action" value="service_contact_one" />
      <input type="submit" class="form-control btnsubmit1" name="srsubmit">
   </div>
</form>'; 
$content.=$html_str;
  return $content;
}
function iogoos_recent_posts($atts = [], $content='') {

$att = shortcode_atts( array(
      'num' => 3
   ), $atts );
   
if($att['num']==''){$att['name']=3;}
$cont='';
    $del_recent_posts = new WP_Query();
    $del_recent_posts->query('showposts='.$att['num']);
        while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post();
		global $post;
		  if (has_post_thumbnail( $result->ID ) ){
				$postImg=get_the_post_thumbnail($post,'iogoos-recent-thumbnails');
			}
			else{
				$postImg='<img src="' . get_bloginfo( 'stylesheet_directory' ). '/images/thumbnail-default.jpg" />';
			}
			$categories = get_the_category($post->ID);
			$catname='';
			if ( ! empty( $categories ) ) {
				$catname='<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="postcatname">' . esc_html( $categories[0]->name ) . '</a>';
			}
		  $cont.='<li><a href="'.esc_url(get_permalink($post->ID)).'" class="postthumb">'.$postImg.'</a>
                '.$catname.'<h4><a href="'.esc_url(get_permalink($post->ID)).'">'.esc_html($post->post_title).'</a></h4>
              </li>';
        endwhile;

	$content.="<ul class='recent-post-list'>".$cont."</ul>"	;
    wp_reset_postdata();
	return $content;
}
function iogoos_ajax_search() {
	$posts_per_page=50;
	if(stripslashes( $_POST['search'] )==''){
		$posts_per_page=5;
	}
	$results = new WP_Query( array(
		'post_type'     => array( 'post', 'page' ),
		'post_status'   => 'publish',
		'nopaging'      => true,
		'posts_per_page'=> $posts_per_page,
		's'             => stripslashes( $_POST['search'] ),
	) );

	$items = array();

	if ( !empty( $results->posts ) ) {
		foreach ( $results->posts as $result ) {
			if (has_post_thumbnail( $result->ID ) ){
				$postImg=get_the_post_thumbnail($result,array(100,100));
			}
			else{
				$postImg='<img src="' . get_bloginfo( 'stylesheet_directory' ). '/images/thumbnail-default.jpg" />';
			}
			$dataval="<div class='search_list_box'><a href='".esc_url(get_permalink($result->ID))."' class='search_list'><div class='search_left'>".$postImg."</div><div class='search_right'><h3>".$result->post_title."</h3><p>".substr(strip_tags($result->post_content),0,100)."</p></div></a></div>";
			$items[] = $dataval;
		}
	}

	wp_send_json_success( $items );
}
add_action( 'wp_ajax_search_site',        'iogoos_ajax_search' );
add_action( 'wp_ajax_nopriv_search_site', 'iogoos_ajax_search' );
function is_blog () {
global $wp_query;

    return (( is_archive() || is_author() || is_category() || is_single() || is_tag()) && 'post' == get_post_type()) ||( isset( $wp_query ) && (bool) $wp_query->is_posts_page) ;
}
function iog_jquery_enqueue(){
if ( !is_admin() ){ wp_deregister_script('jquery');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
}
add_action( 'wp_enqueue_scripts', 'iog_jquery_enqueue' );

//add_filter('woocommerce_add_cart_item_data','iogoos_add_item_data',10,3);
/*
/**
 * Add custom data to Cart
 * @param  [type] $cart_item_data [description]
 * @param  [type] $product_id     [description]
 * @param  [type] $variation_id   [description]
 * @return [type]                 [description]
 */
/*function iogoos_add_item_data($cart_item_data, $product_id, $variation_id)
{
    if(isset($_REQUEST['wdm_name']))
    {
        $cart_item_data['wdm_name'] = sanitize_text_field($_REQUEST['wdm_name']);
    }

    return $cart_item_data;
}
add_filter('woocommerce_get_item_data','iogoos_add_item_meta',10,2);
*/
/**
 * Display information as Meta on Cart page
 * @param  [type] $item_data [description]
 * @param  [type] $cart_item [description]
 * @return [type]            [description]
 */
 /*
function iogoos_add_item_meta($item_data, $cart_item)
{

    if(array_key_exists('wdm_name', $cart_item))
    {
        $custom_details = $cart_item['wdm_name'];

        $item_data[] = array(
            'key'   => 'Name',
            'value' => $custom_details
        );
    }

    return $item_data;
}
add_action( 'woocommerce_checkout_create_order_line_item', 'iogoos_add_custom_order_line_item_meta',10,4 );

function wdm_add_custom_order_line_item_meta($item, $cart_item_key, $values, $order)
{

    if(array_key_exists('wdm_name', $values))
    {
        $item->add_meta_data('_wdm_name',$values['wdm_name']);
    }
}*/