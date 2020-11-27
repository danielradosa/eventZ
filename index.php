<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>


    <div class="post">
        <h1>
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
        </h1>
        <span>
            <div class="content">
                <<?php if($post->post_excerpt){ ?>
        <p>
            <?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">
                Read the post&raquo;
            </a>
        </p>
                <?php the_post_thumbnail('small-thumbnail'); ?>
            </div>
            <span class="post__author"><?php the_author() ?></span>
            <br>
            <span class="post__date">
                <?php the_date() ?> @ <?php the_time() ?> 
            </span>
        </span>
    </div>
    


<?php } else {
    the_content();
} ?>
<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>