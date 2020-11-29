<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eventZ </title>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/style.css' />
</head>

<body class="body">
<div class="navigation">
 
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'before' => '<span class="btn">',      
        'menu_class' =>'navbar-nav mr-auto',
        'link_before' =>'<span class="nav-link">',      
        'link_after' =>'</span>', 
        'container' => false, 
        'items_wrap' => '%3$s'
    ));
?>

</div>


    </div>
    <div class="menu">
        <input type="checkbox" id="toggle" />
        <label id="show-menu" for="toggle">
            <div class="btn">
                <p>MENU</p>
                <p>X</p>
            </div>
    
            <div class="btn">
            </div>
            <div class="btn">
            </div>
            <div class="btn">
            </div>
            <div class="btn">
            <?php
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'before' => '<span class="btn">',      
        'menu_class' =>'navbar-nav mr-auto',
        'link_before' =>'<span class="nav-link">',      
        'link_after' =>'</span>', 
        'container' => false, 
        'items_wrap' => '%3$s'
    ));
?>
            </div>
  
        </label>
    </div>
