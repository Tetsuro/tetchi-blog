<?php get_template_part('head'); ?>
<body class="<?php if(isset($_COOKIE['siteTheme']) && $_COOKIE['siteTheme'] == 'dark') { echo "darkMode"; } ?>">
	<?php get_header(); ?>
	<main class="content__wrapper" role="main" id="main-content" tabindex="0">
		<?php if(have_posts()) : ?>
			<ul class="post-list">
				<?php while(have_posts()) : the_post(); ?>
					<li class="post-list-item">
						<article id="post-<?php the_ID(); ?>" class="post-list-item__wrapper" role="article">
							<div class="post-list-item__thumbnail">
								<a href="<?php the_permalink() ?>">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail(); ?>
									<?php else: ?>
										<img src="<?php echo bloginfo('template_directory'); ?>/img/tetchi-profile.jpg" />
									<?php endif ?>
								</a>
							</div>
							<div class="post__metadata post__metadata--list">
								<h2 class="post__title">
									<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
								</h2>
								<p>
									<?php the_time('F j, Y'); ?> under <?php the_category("<span aria-hidden='true'>, </span>") ?>
								</p>
							</div>
						</article>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php else : ?>
			<article class="post" role="article">
				<?php _e('Not Found'); ?>
			</article>
		<?php endif; ?>
		<div class="post__pagination">
			<?php next_posts_link( '&laquo; Previous posts', '' ); ?>
			<?php previous_posts_link( 'Next posts &raquo;' ); ?>
		</div>
		<?php get_footer(); ?>
	</main>
</body>
</html>
