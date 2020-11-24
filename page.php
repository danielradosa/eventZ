<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
 <div class="navigation">
        <p class="menu-text">MENU</p>
        <span class="nav-button">artists</span>
        <span class="nav-button">events</span>
        <span class="nav-button">gallery</span>
        <span class="nav-button">something</span>
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
        <!-- <article class="post-page">
   
            <!-- CONTENT -->
            <div class="separator">
                <!-- Js title goes here -->
                <h1 class="ml1">
                    <span class="text-wrapper">
                        <span class="letters"><?php the_title(); ?></span>
                    </span>
                </h1>
            </div>

            <div class="content-container">

                <!-- <nav class="category">
                    <?php
                    $args = array(
                        'theme_location' => 'footer'
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </nav> -->

            </div>

        </article> -->

<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>

<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml1 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml1 .letter',
            scale: [0.3, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 1000,
            delay: (el, i) => 70 * (i + 1)
        }).add({
            targets: '.ml1 .line',
            scaleX: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 7000,
            offset: '-=875',
            delay: (el, i, l) => 800 * (l - i)
        }).add({
            targets: '.ml1',
            opacity: 0.01,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 2000
        });
</script>