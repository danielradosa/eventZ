<?php get_header()?>
<div class="singleEventPage">
    <div id="singleEventPostContent">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post()?>
		        <div class="singleEventPostTitle">
                    <?php the_title()?>
                </div>
                <div class="singleEventContent">
                    <?php the_content()?>
                </div>
                <hr>
                <div class="singleEventDescription">
                    <?php the_field('event-description');?>
                </div>  
			<?php endwhile;?>
        <?php endif;?>
    </div> 
</div>
<?php get_footer()?>
