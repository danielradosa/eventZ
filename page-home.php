<?php get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
<div class="contain">
    <div class="page-container">
        
    <div class="emotionz"> 
        <div class="sparkles">
            <div class="sparkles" id="spark-2">
                <div class="sparkles" id="spark-3">
                    <div class="sparkles" id="spark-1">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="spotlight" id="spotlight">
           </div>
        
       <div class="home-artist"><div id="skew"> <div class="green"></div><div class="audience"></div></div></div>
        
    </div>
    </div>
<?php endwhile;
else :
    echo ' <p>no content found</p>';

endif;

get_footer(); ?>