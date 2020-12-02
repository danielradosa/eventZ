<?php

function setup_menus()
{
    register_nav_menu("header-menu", __("Header Menu"));
    register_nav_menu("footer-menu", __("Footer Menu"));
}

add_action("init", "setup_menus");

function setup_resources() {
    wp_register_style( "my-theme-style", get_template_directory_uri() . "/style.css" );
    wp_enqueue_style("my-theme-style");

}

add_action("wp_enqueue_scripts", "setup_resources");

/*
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, TEMPLATEPATH . '/single');
 
/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');
 
/**
* Single template function which will choose our template
*/
function my_single_template($single) {
global $wp_query, $post;
 
/**
* Checks for single template by category
* Check by category slug and ID
*/
foreach((array)get_the_category() as $cat) :
 
if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
 
elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
 
endforeach;
}

?>

