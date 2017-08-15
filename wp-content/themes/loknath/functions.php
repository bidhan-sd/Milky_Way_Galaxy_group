<?php 
 function loknath_css_js(){
 	wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
 	wp_register_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
 	wp_register_style('normalize',get_template_directory_uri().'/css/normalize.css');
 	wp_register_style('slicknav',get_template_directory_uri().'/css/slicknav.css');
 	wp_register_style('prettyPhoto',get_template_directory_uri().'/css/prettyPhoto.css');
 	wp_register_style('slidercss',get_template_directory_uri().'/css/slidercss.css');
 	wp_register_style('style',get_template_directory_uri().'/style.css');
 	wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css');

 	wp_enqueue_style('bootstrap');
 	wp_enqueue_style('font-awesome');
 	wp_enqueue_style('normalize');
 	wp_enqueue_style('normalize');
 	wp_enqueue_style('slicknav');
 	wp_enqueue_style('prettyPhoto');
 	wp_enqueue_style('slidercss');
 	wp_enqueue_style('style');
 	wp_enqueue_style('responsive');

 	
 
	wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'3.3.4',true);
	wp_register_script('modernizr',get_template_directory_uri().'/js/vendor/modernizr-2.8.3.min.js',array('jquery'),'2.8.3',true);
	wp_register_script('wowslider',get_template_directory_uri().'/js/wowslider.js',array('jquery'),'8.7',true);
	wp_register_script('script',get_template_directory_uri().'/js/script.js',array('jquery'),'8.7',true);
	wp_register_script('prettyPhoto',get_template_directory_uri().'/js/jquery.prettyPhoto.js',array('jquery'),'3.1.5',true);
	wp_register_script('sticky',get_template_directory_uri().'/js/jquery.sticky.js',array('jquery'),'1.0.2',true);
	wp_register_script('slicknav',get_template_directory_uri().'/js/jquery.slicknav.min.js',array('jquery'),'1.0.7',true);
	wp_register_script('plugins',get_template_directory_uri().'/js/plugins.js',array('jquery'),'1.0.1',true);
	wp_register_script('main',get_template_directory_uri().'/js/main.js',array('jquery'),'1.0.0',true);
	wp_register_script('custom',get_template_directory_uri().'/js/custom.js',array('jquery'),'1.0.0',true);
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('wowslider');
	wp_enqueue_script('script');
	wp_enqueue_script('prettyPhoto');
	wp_enqueue_script('sticky');
	wp_enqueue_script('slicknav');
	wp_enqueue_script('plugins');
	wp_enqueue_script('main');
	wp_enqueue_script('custom');
 }
 add_action('wp_enqueue_scripts','loknath_css_js'); 

load_theme_textdomain('loknath',get_template_directory_uri().'/languages');

//Redux framework start here.

include_once('lib/ReduxCore/framework.php');
include_once('lib/sample/config.php');

//Redux framework End here.

//metaBox start here

require_once('metabox/init.php');
require_once('metabox/functions.php');

//metaBox End here.

function loknath_common_file(){
	add_theme_support('title-tag');
	add_theme_support('custom-background'); 
	add_theme_support('post-thumbnails');
	load_theme_textdomain('loknath',get_template_directory_uri().'/languages');

	if(function_exists('register_nav_menu')){
		register_nav_menu('main-menu',__('Main menu','loknath'));
	}
	
	function read_more($limit){
		$post_content = explode(" ",get_the_content());
		$less_content = array_slice($post_content, 0, $limit);
		echo implode(" ",$less_content);
	}

	//register slider option here
 
	register_post_type('lokslider',array(
		'labels' => array(
			'name' => 'Sliders',
			'add_new_item' => 'Add new slider',
		),
		'public' => true,
		'supports' => array('title','thumbnail'),
		'menu_icon' => 'dashicons-schedule',
	));

	//services option start
	register_post_type('lokservices',array(
		'labels' => array(
			'name' => 'Services',
			'add_new_item' => 'Add new services',
		),
		'public' => true,
		'supports' => array('title','editor','thumbnail','excerpt',),
		'menu_icon' => 'dashicons-format-aside',
	));
	//Organization history start here
	register_post_type('lokhistory',array(
		'labels' => array(
			'name' => 'History',
			'add_new_item' => 'Add new history',
		),
		'public' => true,
		'supports' => array('title','editor'),
		'menu_icon' => 'dashicons-awards',
	));
	//About baba loknath history start here
	register_post_type('aboutbaba',array(
		'labels' => array(
			'name' => 'About Baba',
			'add_new_item' => 'Add about baba',
		),
		'public' => true,
		'supports' => array('title','editor','excerpt','thumbnail'),
		'menu_icon' => 'dashicons-id',
	));
	//Gallery page start here
	register_post_type('lokgallery',array(
		'labels' => array(
			'name' => 'Gallery',
			'add_new_item' => 'Add new gallery item',
		),
		'public' => true,
		'supports' => array('title','thumbnail'),
		'menu_icon' => 'dashicons-camera',
	));
}
add_action('after_setup_theme','loknath_common_file');

function register_widget_sidebar(){
	register_sidebar(array(
		'name' => __('Right sidebar','loknath'),
		'id' => 'right-sidebar',
		'description' => __('Add your right sidebar widget here ','loknath'),
		'before_widget' => '<div class="blog_search">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4><div class="row"><div class="cat_list">',	
	));

	register_sidebar(array(
		'name' => __('Footer sidebar','loknath'),
		'id' => 'footer-sidebar',
		'description' => __('Add your footer sidebar widget here ','loknath'),
		'before_widget' => '<div class="col-md-3"><div class="single_widget">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4><div class="widget_content">',	
	));

	register_sidebar(array(
		'name' => __('Contact map','loknath'),
		'id' => 'contact-map',
		'description' => __('Add your contact map widget here ','loknath'),
		'before_widget' => '<div class="single_widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',	
	));

}
add_action('widgets_init','register_widget_sidebar');


function include_js(){
	?>
	<script type="text/javascript">
		jQuery(function(){
			jQuery('#menu2').slicknav();
		});
		jQuery(document).ready(function(){
			jQuery("a[rel^='prettyPhoto']").prettyPhoto();
		});
	</script>
	<?php
}
add_action('wp_footer','include_js');




?>



