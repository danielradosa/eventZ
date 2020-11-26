<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <div class="page-container">
        <div class="emotionz"></div> 

        <div class="sparkles"><div class="sparkles" id="spark-1"><div class="sparkles" id="spark-1"><div class="sparkles" id="spark-1"></div></div></div></div>
      
        <div class="spotlight" id="spotlight"></div>
        
        <div class="home-artist"><div id="skew"></div></div>
    </div>
    
<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>