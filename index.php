<?php get_header(); ?>
<body>
	<div class="content__wrapper">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="post">
					<h1 class="post__title">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h1>
					<div class="post__metadata">
						<p>
							<?php the_date(); ?> under <?php the_category(', ') ?>
						</p>
					</div>
					<?php the_content('',FALSE,''); ?>
					<div class="post__footer">
						<a href="<?php the_permalink() ?>#more-<?php the_id() ?>">Read more  &rarr;</a>
					</div>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="post">
				<?php _e('Not Found'); ?>
			</div>
		<?php endif; ?>
		<div class="post__pagination">
			<?php posts_nav_link("/","&laquo; newer "," older &raquo;"); ?>
		</div>
		<?php get_footer(); ?>
	</div>
</body>
</html>
