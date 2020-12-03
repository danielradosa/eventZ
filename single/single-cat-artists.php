<?php get_header()?>
<div class="singleArtistPage">
    <div id="singleArtistPost">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post()?>
		        <div class="singleArtistPostTitle">
                    <?php the_title()?>
                </div>
                <hr>
                    <div class="singleArtistRow">
                        <div class="singleArtistCol1">   
                            <!-- custom image using ACF -->    
                            <?php 
                            $image = get_field('artist-cover-image');
                                if( !empty( $image ) ): ?>
                                <img class="artistCoverImage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="singleArtistCol2">
                                    <div class="ArtistEventLocation">
                                        <h3>Location </h3>   
                                        <div class="ArtistEventLocationDetails">
                                            <?php the_field('artist-event-location');?>  
                                        </div>                          
                                    </div>   
                                    <div class="ArtistEventTime">
                                        <h3>Time </h3>  
                                        <div class="ArtistEventTimeDetails">
                                            <?php the_field('artist-event-time');?>
                                        </div>                          
                                    </div>   
                                    <div class="ArtistEventPrice">
                                        <h3>Ticket Damage</h3>
                                        <div class="ArtistEventPriceDetails">
                                            <?php the_field('artist-event-price');?> dkk
                                        </div>
                
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="ArtistButtons">
                                        <button class="shareButton">Share</button>
                                        <button class="buyButton">Buy Ticket</button>
                                    </div>
                                    <br>
                                    <div id="artistEventDetails">
                                         <div class="numberOfAttendees">
                                        <p>Number of Attendees: <?php the_field('artist-event-attendance');?></p>
                                    </div>
                                    <div class="artistEventLength">
                                        <p>Total Song Minutes: <?php the_field('artist-event-length');?> </p>
                                    </div>
                                    <div class="artistEventVenueGallery"> 
                                        <p>Venue: <?php the_field('artist-event-venue-gallery');?> </p>
                                    </div>  
                                    </div>
                                    
                                                
                        </div>
                    </div>
                    <div class="singleArtistRow2">
                        <div class="singleArtistCol3">
                            <div class="artistDescription"> 
                                Description: 
                                <br>
                                <p><?php the_field('artist-description');?> </p>
                                <br>
                                <div id="discoveryTab">
                                   Discovery:
                                    <div class="spotifyDiscoveryTab">
                                        <a href="<?php the_field('artist-spotify-link');?>" target="_blank"><img src="https://cdn0.iconfinder.com/data/icons/social-glyph/30/spotify-480.png" alt="" width="50px"></a> 
                                    </div>
                                    <br>
                                    <div class="wikipediaDiscoveryTab">
                                        <a href="<?php the_field('artist-spotify-wikipedia');?>" target="_blank"><img src="https://image.flaticon.com/icons/png/512/253/253789.png" alt="" width="50px"></a> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="singleArtistCol4">
                            <div class="artistColumnDetails">
                                <div id="artistEvent1">
                                </div>
                                <div id="artistEvent2">
                                </div>
                                <div id="artistEvent3">
                                    
                                </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>              
                </div>          
		    <?php endwhile;?>
        <?php endif;?>
    </div> 
</div>
<?php get_footer()?>