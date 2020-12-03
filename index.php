<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine
 * doesn't know which template to use (e.g. 404 error)
 */
get_header(); // This fxn gets the header.php file and renders it
?>

<div class="main">
    <?php if (have_posts()): ?>
    	<?php while (have_posts()): the_post()?>
					<div class="post">
						<div class="postTitle">
							<h1>
								<a href="<?php the_permalink()?>"><?php the_title()?></a>
							</h1>
							<hr>
									<span><?php the_date()?> at <?php the_title()?></span>
						</div>
						<div class="postContent">
							<p><?php the_content()?></p>
						</div>
					</div>
				<?php endwhile;?>
    <?php endif;?>
</div>
<div class="pageNavigation">
	<hr>
    <button class="postNavigationPrev">
        <?php previous_posts_link("Previous Posts")?>
	</button>
	<hr>
    <button  class="postNavigationNext">
        <?php next_posts_link("Newer Posts")?>
	</button>
	<hr>

	
</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>

