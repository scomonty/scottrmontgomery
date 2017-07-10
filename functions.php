<?php

function theme_styles() {
		wp_enqueue_style('normal_css', get_template_directory_uri() . '/styles/normalize.css');
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/styles/bootstrap.min.css');
	wp_enqueue_style('awesome_css', get_template_directory_uri() . '/styles/font-awesome.min.css');
	wp_enqueue_style('style_css', get_template_directory_uri() . '/styles/style.css');
	wp_enqueue_style('style_font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800"');
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {
	global $wp_scripts;
	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
	$wp_scripts->add_data('html5_shiv', 'conditonal', 'lt IE 9');
	$wp_scripts->add_data('respond-js', 'conditonal', 'lt IE 9');
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/scripts/master.js', array('jquery', 'bootstrap_js'), '', true);
}

add_action('wp_enqueue_scripts', 'theme_js');


/*to remove admin bar when logged in */
//add_filter('show_admin_bar', '__return_false');

add_theme_support('menus');

function register_theme_menus() {
	register_nav_menus(
		array(
		'header-menu' => __('Header Menu')
		)
		);
}
add_action('init', 'register_theme_menus');

function create_widget($name, $id, $description) {
	register_sidebar(array(
	'name' => __($name),
	'id' => $id,
	'description'=> __($description),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));
}

create_widget('Front Page Left', 'front-left', 'Display on the left of the screen');
create_widget('Front Page Center', 'front-center', 'Display on the center of the screen');
create_widget('Front Page Right', 'front-right', 'Display on the right of the screen');
create_widget('Page Sidebar', 'page', 'Displays the sidebar on the side of the page');
create_widget('Blog Sidebar', 'blog', 'Displays the blog on the side of the page');
?>