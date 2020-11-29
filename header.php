<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@700&display=swap" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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