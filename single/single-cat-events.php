<?php get_header()?>
<div class="singleEventPage">

    <div id="singleEventPostContent">
        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post()?>
		            <div class="singleEventPostTitle">
		        <h1>
				    <?php the_title()?>
                </h1>
                    <hr>
		        </div>
                    <?php the_content()?>
				<?php endwhile;?>
    <?php endif;?>
    </div>
       <p>Event.php</p>     
</div>
<?php get_footer()?>
