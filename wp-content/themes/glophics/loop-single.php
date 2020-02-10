<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post">
			<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
			<small><?php the_time('F jS, Y') ?></small>

			<div class="blog_post">
				<?php the_content(); ?>
			</div>
			<?php comments_template( '', true ); ?>
			<div class="blog_metas">
				<?php the_category(); ?>
				<?php the_tags(); ?>
			</div>
			
		</div>
	<?php endwhile; ?>

	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwenty' ) . '</span> %title' ); ?></div>
		<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwenty' ) . '</span>' ); ?></div>
	</div>

<?php else : ?>
	<h2 class="center">Not Found</h2>
	<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
<?php endif; ?>