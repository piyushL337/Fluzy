<?php

//Activate Header feature
$defaults = array(
	'default-image'         => '',
	'width'                 => 0,
	'height'                => 0,
	'flex-height'           => true,
	'flex-width'            => true,
	'uploads'               => true,
);
add_theme_support( 'custom-header', $defaults );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

//Add theme support to bootstrap navigation
function my_theme_setup()
{
    register_nav_menus(array(
        'primary' => __('Top Menu')
	));
	register_nav_menus(array(
	'secondary'=>__('Footer')
	));	
}
add_action('after_setup_theme', 'my_theme_setup');

// Support Featured Images
add_theme_support( 'post-thumbnails' );

function my_scripts_enqueue() {
    wp_register_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), NULL, true );
    wp_register_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, NULL, 'all' );
	wp_register_style( 'bootstrap-font', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_register_style( 'main', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_style( 'bootstrap-font' );
	wp_enqueue_style( 'main' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_enqueue' );

function my_google_fonts(){
	wp_enqueue_style('googleFonts','https://fonts.googleapis.com/css?family=Laila');
}
add_action('wp_enqueue_scripts','my_google_fonts');


/* My Widget Setup */
function my_sidebar_setup(){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'class' => 'sd-class',
		'description' => 'Add widgets here to appear in your sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',	
		'after_title'   => '</h3>',	
	));
}
add_action('widgets_init','my_sidebar_setup');

// Numbered Pagination
function wplift_pagination() {
	global $wp_query;
		$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
}

// Post Share Button
function my_share_btn()
{
	global $post;
	//$share="";
		
	// Get the post's URL that will be shared
	$permalink=urlencode(get_the_permalink());
	
	// Get the post's title
	$title=str_replace(' ', '%20', get_the_title());
	
	// Compose the share links for Facebook, Twitter, Google+ and Whatsapp
	$tw = 'https://twitter.com/intent/tweet?text='.$title.'&amp;url='.$permalink.'&amp;via=fluzy';
	$fb = 'https://www.facebook.com/sharer/sharer.php?u='.$permalink;
	$gp = 'https://plus.google.com/share?url='.$permalink;
	$wp = 'whatsapp://send?text=*'.$title.'*'.$permalink; 

	$share.='<div class="share-box">';
	$share.='<div class="fb sb-icon"> <a href="'.$fb.'" target="_blank" title="Share this post on Facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </div>';
	$share.='<div class="tw sb-icon"> <a href="'.$tw.'" target="_blank" title="Share this post on Twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </div>';
	$share.='<div class="gp sb-icon"> <a href="'.$gp.'" target="_blank" title="Share this post on Google Plus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a> </div>';
	$share.='<div class="wp sb-icon"> <a href="'.$wp.'" target="_blank" title="Share this post on Whatsapp"> <i class="fa fa-whatsapp" aria-hidden="true"></i> </a> </div>';
	$share.='</div>';
	
	return $share;
}
add_shortcode('postshare','my_share_btn');

// Add Responsive Class
function add_image_responsive_class($content) {
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}
add_filter('the_content', 'add_image_responsive_class');


//Read More Link
function new_excerpt_more($more) {
	global $post;
   return '… <a href="'. get_permalink($post->ID) . '" class="read-more">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');   

//Add Widget Shortcode
add_filter('widget_text', 'do_shortcode');


function add_menu_atts( $atts, $item, $args ) {
  $atts['itemprop'] = 'url';
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_atts', 10, 3 );

//Remove Script Version
function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
