<?php get_template_part('head'); ?>
<body>
	<?php get_header(); ?>
	<main class="content__wrapper" role="main" id="main-content" tabindex="0">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="post" role="article">
					<h2 class="post__title">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h2>
					<div class="post__metadata">
						<p>
							<?php the_time('F j, Y'); ?> under <?php the_category("<span aria-hidden='true'>, </span>") ?>
						</p>
					</div>
					<?php the_content('',FALSE,''); ?>
					<div class="post__footer">
						<a href="<?php the_permalink() ?>#more-<?php the_id() ?>">Read more <span class="visually-hidden">about <?php the_title(); ?></span><span aria-hidden="true">&rarr;</span></a>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<article class="post" role="article">
				<?php _e('Not Found'); ?>
			</article>
		<?php endif; ?>
		<div class="post__pagination">
			<?php posts_nav_link("<span aria-hidden='true'>/</span>","&laquo; newer "," older &raquo;"); ?>
		</div>
		<?php get_footer(); ?>
	</main>
</body>
</html>
