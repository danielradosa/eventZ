<?php get_header()?>
<div class="singleArtistPage">
    <div id="singleArtistPost">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post()?>
		            <div class="singleArtistPostTitle">
                        <?php the_title()?></a> 
                    </div>
                <hr>
                    <div class="singleArtistContent">   
                        <?php the_content()?>
                            <div id="singleArtistEventDetails">
                                 <div class="ArtistEventLocation">
                                    <p>Location: <?php the_field('artist-event-location');?> </p>                               
                                </div>   
                                <div class="ArtistEventTime">
                                    <h2>Time: <?php the_field('artist-event-time');?> </h2>                               
                                </div>   
                                <div class="ArtistEventPrice">
                                    <h3>Ticket Damage</h3>
                                    <h2><?php the_field('artist-event-price');?>dkk - Student Discount </h2>
                                </div>
                               
                                <div class="numberOfAttendees">
                                    <h2>Number of Attendees: <?php the_field('artist-event-attendance');?> </h2>
                                </div>
                                <div class="artistEventLength">
                                    <h2>Total Song Minutes: <?php the_field('artist-event-length');?> </h2>
                                </div>
                                <div class="artistEventVenueGallery"> 
                                    <h2>Venue: <?php the_field('artist-event-venue-gallery');?> </h2>
                                </div>
                    
                            </div>
                        </div>
		    <?php endwhile;?>
        <?php endif;?>
    </div>
       <p>Single Artist.php</p>     
</div>
<?php get_footer()?>