<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar-1',
    		'id'   => 'sidebar',
    		'description'   => 'Widgets',
    		'before_widget' => '<div class="sidebar">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    	
    	register_sidebar(array(
    		'name' => 'Footerbar',
    		'id'   => 'footerbar',
    		'description'   => 'Footer Widgets',
    		'before_widget' => '<div class="boxFooter">',
    		'after_widget' => '</div>',
    		'before_title' => '<h3 class="footerTitle">',
    		'after_title' => '</h3>',
    	));
    }
    

/*******************************
 Sidebar Tags Widget Size Fix
********************************/
add_filter('widget_tag_cloud_args', 'my_tag_cloud_args');
function my_tag_cloud_args($in){
	return 'smallest=14&largest=18&number=25&orderby=name&unit=px';
}

/*******************************
 THUMBNAIL SUPPORT
********************************/

add_theme_support( 'post-thumbnails' );

/* Get the thumb original image full url */
function get_thumb_urlfull ($postID) {
	$image_id = get_post_thumbnail_id($post);  
	$image_url = wp_get_attachment_image_src($image_id,'medium');  
	$image_url = $image_url[0]; 
return $image_url;
}

    
/*******************************
 MENUS SUPPORT
********************************/
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Top Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );?>