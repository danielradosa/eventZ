<?php get_header()?>
<div class="singleArtistPage">

    <div id="singleArtistPostContent">
        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post()?>
		            <div class="singleArtistPostTitle">
		        <h1>
				    <?php the_title()?></a>
                </h1>
                    <hr>
		        </div>
                    <?php the_content()?>
				<?php endwhile;?>
    <?php endif;?>
    </div>
       <p>Artist.php</p>     
</div>
<?php get_footer()?>
