<?php get_header(); ?>
    <div id="eventsPage">
        <div id="eventsTitle">
            <div id="eventsPageTitle">
                    Europe's Largest Festivals!
            </div>
            <div id="eventsPageSubTitle">
                AT YOUR FINGERTIPS
            </div>
        </div>
        <!-- left Column --> 
        <div class="eventsPageColumnOne">
                <?php if (have_posts()): ?>
    	            <?php while (have_posts()): the_post()?>
                        <a href="<?php the_permalink()?>">
                            <div id="eventsBlock">
                                <div id="eventsEventDate">
                                    <span class="entry-date"><?php echo get_the_date(); ?></span>
                                </div>
                                <div id="eventsImage">
                                        <?php 
                                        $image = get_field('events-cover-image');
                                            if( !empty( $image ) ): ?>
                                            <img class="eventsCoverImage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                </div>
                                <div id="eventsName">
                                    <?php the_title()?>
                                </div>
                            </div>
                        </a>
				    <?php endwhile;?>
                 <?php endif;?>
        </div>
    <!-- right Column --> 
     <div class="eventsPageColumnTwo">
        <div class="artistEventSidePanel">
                    <div class="eventPanelDetails">
                        <h1>IMPORTANT UPDATES</h1>
                        <br>
                            <p>
                            "Denmark is to significantly restrict social activity with new measures aimed at stemming a concerning trend of increasing cases of coronavirus in the Scandinavian country.

                            The new measures include:

                            Mandatory facemasks in all indoor public places
                            A ban on selling alcohol after 10pm (including at supermarkets and convenience stores)
                            The assembly limit will be reduced to a maximum of 10 people
                            The timescale for the three measures differs: the facemask requirement will come into effect from October 29th, while the ban on alcohol sales takes effect from Monday. Both of these measures will remain in place until January 2nd 2021, Frederiksen said at Friday’s briefing.
                            <br>
                            <hr>
                            The reduction of the assembly limit to a maximum of 10 people (from the current 50) becomes effective on Monday and will remain in place for an initial four weeks.

                            All restrictions already in place have also been extended until January 2nd, Frederiksen said. They had been scheduled to expire on October 29th. That means bars, restaurants and cafes will still be required to close at 10pm and facemasks will remain mandatory on all public transport.

                            The new facemask requirement will mean people in Denmark now face wearing the coverings in supermarkets and stores, libraries and all other indoor public areas. Children under 12 and others with health conditions contraindicating face mask use are exempted under the current Danish rules."
                            </p>
                    </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>