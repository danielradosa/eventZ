<?php

function learningWordPress_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('stylesheets/style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//Navigation Menus


function get_top_ancestor_id() {

    global $post;

    if ($post -> post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}
function has_children(){
    global $post;
    $pages = get_pages('child_of=' . $post -> ID);
    return count($pages);
}
function custom_excerpt_length() {
    return 10;
}
add_filter('excerpt_length', 'custom_excerpt_length'); 

function eventZ_setup() {

    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));

    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 40, 80, true);
}
add_action('after_setup_theme' , 'eventZ_setup');

?>