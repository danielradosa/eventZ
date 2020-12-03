<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eventZ </title>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body class="body">
<a href="home" ><div class="logo"></div></a>
<div class="navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',      
        'link_before' =>'<li class="nav-link">',      
        'link_after' =>'</li>', 
    ));
?>

</div>
    </div>
    <div class="menu-mobile">
        <input type="checkbox" id="toggle" />
        <label id="show-menu" for="toggle">
            <div class="btn">
                <p class="mobile-nav-text">  MENU</p> 
            </div>
            <div class="btn">
            <a href="home">HOME</a>              
            </div>
            <div class="btn">
                        
            </div>
            <div class="btn">
                        
            </div>
            <div class="btn">
                     
            </div>
            <div class="btn">
            <a href="events">EVENTS</a> 
            </div>
            <div class="btn">
                <a href="artists">ARTISTS</a>              
            </div>
            <div class="btn">
                <a href="about">ABOUT</a>             
            </div>
        </label>
    </div>
