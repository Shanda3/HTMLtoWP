<?php 


function load_stylesheets(){
	
	
	wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all' );
	wp_enqueue_style('animate');
	
	wp_register_style('grid', get_template_directory_uri() . '/css/grid.css', array(), 1, 'all' );
	wp_enqueue_style('grid');
	
	wp_register_style('menu', get_template_directory_uri() . '/css/menu.css', array(), 1, 'all' );
    wp_enqueue_style('menu');
	
		wp_register_style('jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), 1, 'all' );
	wp_enqueue_style('jquery.bxslider');

	wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all' );
	wp_enqueue_style('style');

	wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all' );
	wp_enqueue_style('responsive');
}

add_action('wp_enqueue_scripts','load_stylesheets');



//load scripts

function addjs(){
	
	wp_deregister_script('jquery');
	
	wp_register_script('fixed-responsive-nav', get_template_directory_uri() . '/js/fixed-responsive-nav.js', array(), 1, 1, 1);
	wp_enqueue_script('fixed-responsive-nav');
	
	wp_register_script('jquery.bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery.bxslider');
	
	wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), 1, 1, 1);
	wp_enqueue_script('script');
	
	
	wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.js', array(), 1, 1, 1);
	wp_enqueue_script('waypoints');

}


	add_action('wp_enqueue_scripts','addjs');


	//register menu
	//menu support
	function quotes_theme_setup() {
		add_theme_support('menus');
	
		register_nav_menu('top-menu' => 'Top Menu Location');
		register_nav_menu('mobile-menu' => 'Mobile Menu Location');
}
		add_action('init', 'quotes_theme_setup');


	
function quotes_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}

add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));

//add_theme_support('custom-header');


add_action('widgets_init','quotes_widget_setup');
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}
	add_action('upload_mimes', 'add_file_types_to_uploads');
