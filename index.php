<?php get_header(); ?>
<body>

		<?php if(have_posts()) : ?>
		<?php $postCount = 1; ?>
			<?php while(have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="post <?php if($postCount == 5){echo 'last';} ?>">
					<h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<div class='metadata'><?php the_date(); ?> under <?php the_category(', ') ?>  &bull; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
					<?php the_content('',FALSE,''); ?>
					<?php //if ($pos=strpos($post->post_content, '<!--more-->')): ?>

					<div class="post-footer clearfix">
						<div class="right info-right"><a href="<?php the_permalink() ?>#more-<?php the_id() ?>">Read more  &rarr;</a></div>
					</div>
					<?php // endif; ?>
				</div> <!-- end post -->
				<?php $postCount++; ?>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="post">
				<?php _e('Not Found'); ?>
			</div>
		<?php endif; ?>
		<div id="pagination" class="clearfix">
			<?php posts_nav_link("/","&laquo; prev ","next &raquo;"); ?>
		</div>
	<?php get_footer(); ?>
</body>
</html>
