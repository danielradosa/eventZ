<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>



    <h1>fbiwebfiwefbjiwefnwfibwfibwifbwifbwei</h1>




<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>