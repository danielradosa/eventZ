<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<H1>about</H1>
<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>