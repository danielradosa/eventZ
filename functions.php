<?php
add_action("after_switch_theme", "mytheme_create_extra_table");

function mytheme_create_extra_table(){
    global $wpdb;

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    $table_name = $wpdb->prefix . "translations";  //get the database table prefix to create my new table

    $sql = "CREATE TABLE $table_name (
      id int(10) unsigned NOT NULL AUTO_INCREMENT,
      identifier varchar(255) NOT NULL,
      translation varchar(255) NOT NULL,
      lang varchar(5) NOT NULL,
      notes varchar(255) DEFAULT NULL,
      PRIMARY KEY  (id),
      KEY Index_2 (lang),
      KEY Index_3 (identifier)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

    dbDelta( $sql );
}
function learningWordPress_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
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
add_filter('excerpt_length', 'custom_excerpt_length'); ?>