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
<div class="mainMenu">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'before' => '<class="nav-item active">',      
        'menu_class' =>'navbar-nav mr-auto',
        'link_before' =>'<span class="nav-link">',      
        'link_after' =>'</span>', 
        'container' => false, 
        'items_wrap' => '%3$s'
    ));
?>

</div>


    <nav class="navigation">
        <a href="home" class="nav-button">home</a>
        <a href="about" class="nav-button">about</a>
        <a href="events" class="nav-button">events</a>
        <a href="gallery" class="nav-button">gallery</a>
        <a href="artists" class="nav-button">artists</a>
    </nav>
    </div>
    <div class="menu">
        <input type="checkbox" id="toggle" />
        <label id="show-menu" for="toggle">
            <div class="btn">
                <p>MENU</p>
                <p>X</p>
            </div>
            <div class="btn">
                <a href="events">events</a>
            </div>
            <div class="btn">
            </div>
            <div class="btn">
            </div>
            <div class="btn">
            </div>
            <div class="btn">
                <a href="home">home</a>
            </div>
            <div class="btn">
                <a href="artists">artists</a>
            </div>
            <div class="btn">
                <a href="about">about</a>
            </div>
            <div class="btn">
                <a href="gallery">gallery</a>
            </div>
        </label>
    </div>
