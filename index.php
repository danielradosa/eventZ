<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?> 


   
      <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
                <?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">
                Read the post&raquo;
            </a>
            <?php the_post_thumbnail('small-thumbnail'); ?>
            </div>
            <span class="post__author"><?php the_author() ?></span>
            <br>
            <span class="post__date">
                <?php the_date() ?> @ <?php the_time() ?> 
            </span>
            <?php } else {
    the_content();
} ?>
<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>
