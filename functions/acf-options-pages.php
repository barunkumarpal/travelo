<?php
// function acf_option_pages(){

// }

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contacts',
		'menu_title'	=> 'Contacts',
		'parent_slug'	=> 'theme-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Main Banner',
		'menu_title'	=> 'Main Banner',
		'parent_slug'	=> 'theme-settings',
	));
	
}