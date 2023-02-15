<?php
// Add custom Theme Functions here
//tao sidebar
register_sidebar(array(
    'name' => 'Portfolio',
    'id' => 'sidebar-portfolio',
    'description' => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<span class="widget-title">',
    'after_title' => '</span><div class="is-divider small"></div>'
));

// Theme option
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme options', // Title hiển thị khi truy cập vào Options page
		'menu_title'	=> 'Theme options', // Tên menu hiển thị ở khu vực admin
		'menu_slug' 	=> 'theme-settings', // Url hiển thị trên đường dẫn của options page
		'capability'	=> 'edit_posts',
		'redirect'	=> false
	));
}