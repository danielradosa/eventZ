<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adobe cms</title>
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="navigation">
        <?php
        $args = array(
            'theme_location' => 'primary'
        );
        ?>
        <div class="nav-button">
            <?php wp_nav_menu($args); ?></div>

    </div>
    <div class="menu">
        <input type="checkbox" id="toggle" />
        <label id="show-menu" for="toggle">
            <div class="btn">
                <p>menu</p>
                <p>close</p>
            </div>
            <div class="btn">
                <a href="#">1</a>
            </div>
            <div class="btn">
                <i class="material-icons md-36">not showing but indispensable</i>
            </div>
            <div class="btn">
                <i class="material-icons md-36">not showing but indispensable</i>
            </div>
            <div class="btn">
                <i class="material-icons md-36">not showing but indispensable</i>
            </div>
            <div class="btn">
                <i class="material-icons md-36">not showing but indispensable</i>
            </div>
            <div class="btn">
                <a href="#">2</a>
            </div>
            <div class="btn">
                <a href="#">4</a>
            </div>
            <div class="btn">
                <a href="#">3</a>
            </div>
        </label>
    </div>