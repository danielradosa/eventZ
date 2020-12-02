<?php get_header(); ?>
    <div class="galleryPage">
                <?php if (have_posts()): ?>
    	            <?php while (have_posts()): the_post()?>

            <div class="top-left">

            </div>
            <div class="artistNameGallery">
                    <?php the_title()?>
                   
            </div>
                <div class="top-mid">

                </div>
                    <h2><?php the_field('artist-event-venue-gallery');?> </h2>
                        <br> 
                        
                            <h2><span><?php the_field('artist-event-venue-gallery');?></span>
                           </h2>
                         <br>
                           <h3>
                            <span class="loc"><?php the_field('artist-event-venue-gallery');?></span> 
                           </h3>
                        <br>  
                            <h2>
                                <span class="date"><?php echo get_the_date(); ?></span>
                            </h2>
                    <div class="one-row">
                        <p><?php the_content()?></p>
                    </div>
				    <?php endwhile;?>
                 <?php endif;?>
            </div>
    </div>
       

    </div>

	
</div>

<?php get_footer(); ?>