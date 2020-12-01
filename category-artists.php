<?php get_header(); ?>
    <div id="artistsPage">
        <div id="artistsTitle">
            <div id="artistsPageTitle">
                    BIGGEST MUSICIANS
            </div>
            <div id="artistsPageSubTitle">
                all in one place
            </div>
        </div>
        <!-- left Column --> 
        <div class="artistsPageColumnOne">
            <!-- Events Row --> 
                <?php if (have_posts()): ?>
    	            <?php while (have_posts()): the_post()?>
                        <div id="artistBlock" href="<?php the_permalink()?>">
                            <div id="artistEventDate">
                                <span class="entry-date"><?php echo get_the_date(); ?></span>
                            </div>
                        <div id="artistImage">
                            <p><?php the_content()?></p>
                         </div>
                        <div id="artistName">
                             <h3><?php the_title()?></h3>
                         </div>
                        </div>
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
                      <h1>R&B</h1>
                  </div>
                  <div id="artistNameGenre">
                      <p>Barack Obana</p>
                      <p>John Lennon</p>
                  </div>
              </div> 
        </div>
    </div>
        
        
    </div>
</div>

<?php get_footer(); ?>