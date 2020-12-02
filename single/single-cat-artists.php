<?php get_header()?>
<div class="singleArtistPage">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post()?>
		            <div class="singleArtistPostTitle">
                        <h1>
                            <?php the_title()?>
                        </h1>   
                    </div>
                <br>
                <div class="singleArtistPost">
                    <?php the_content()?>
                </div>
			<?php endwhile;?>
        <?php endif;?>
</div>
<?php get_footer()?>
