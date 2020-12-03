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
            <!-- Events Row --> 
            <div class="eventsBlockRow">
                <?php if (have_posts()): ?>
    	            <?php while (have_posts()): the_post()?>
                        <div id="eventsBlock">
                            <div id="eventsEventDate">
                                <span class="entry-date"><?php echo get_the_date(); ?></span>
                            </div>
                        <div id="eventsImage">
                            <p><?php the_content()?></p>
                         </div>
                        <div id="eventsName">
                             <a href="<?php the_permalink()?>"><?php the_title()?></a>
                         </div>
                        </div>
				    <?php endwhile;?>
                 <?php endif;?>
            </div>
            <!-- Events Row End -->
        </div>
    <!-- right Column --> 
     <div class="eventsPageColumnTwo">
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