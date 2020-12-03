<?php get_header(); ?>
    <div id="artistsPage">
        <div id="artistsTitle">
            <div id="artistsPageTitle">
                    BIGGEST MUSICIANS
            </div>
            <div id="artistsPageSubTitle">
                ALL IN ONE PLACE
            </div>
        </div>
    <!-- left Column --> 
        <div class="artistsPageColumnOne">
            <!-- Events Row --> 
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post()?>
                        <a href="<?php the_permalink()?>">
                            <div id="artistBlock">
                                <div id="artistEventDate">
                                    <?php the_field('artist-event-time');?>
                                </div>
                            <div id="artistImage">
                                <p><?php the_content()?></p>
                            </div>
                            <div id="artistName">
                                <?php the_title()?>
                            </div>
                            </div>
                        </a>
				    <?php endwhile;?>
                 <?php endif;?>
            <!-- Events Row End -->
        </div>
    <!-- right Column --> 
     <div class="artistsPageColumnTwo">
        <div class="artistEventSidePanel">
              <div class="artistGenre">
                  <div id="genreName">
                      <h1>Rock</h1>
                  </div>
                  <div id="artistNameGenre">
                      <p>Barack Obana</p>
                      <p>John Lennon</p>
                  </div>
              </div>  
              <div class="artistGenre">
                  <div id="genreName">
                      <h1>Pop</h1>
                  </div>
                  <div id="artistNameGenre">
                      <p>Barack Obana</p>
                      <p>John Lennon</p>
                  </div>
              </div> 
              <div class="artistGenre">
                  <div id="genreName">
                      <h1>Hip-Hop</h1>
                  </div>
                  <div id="artistNameGenre">
                      <p>Barack Obana</p>
                      <p>John Lennon</p>
                  </div>
              </div> 
               <div class="artistGenre">
                  <div id="genreName">
                      <h1>Indie</h1>
                  </div>
                  <div id="artistNameGenre">
                      <p>Barack Obana</p>
                      <p>John Lennon</p>
                  </div>
              </div> 
               <div class="artistGenre">
                  <div id="genreName">
                      <h1>R and B</h1>
                  </div>
                  <div id="artistNameGenre">
                      <p>Barack Obana</p>
                      <p>John Lennon</p>
                  </div>
              </div> 
        </div>
    </div>        
</div>
<?php get_footer(); ?>