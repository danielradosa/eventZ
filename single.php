<?php get_header()?>
<div class="singlePost">
    <div id="singlePostContent">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post()?>
                <div class="singlePostTitle">
                    <h1>
                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                    </h1>
                <hr>
                </div>
                    <?php the_content()?>
            <?php endwhile;?>
        <?php endif;?>
    </div>
       <p>single.php</p>     
</div>
<?php get_footer()?>
