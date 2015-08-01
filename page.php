<?php get_header(); ?>

<body>

	<div id="container">

		<div id="main" role="main" class="clearfix">

			<div id="content" class="page">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>

						<div id="post-<?php the_ID(); ?>" class="post">

							<h1><?php the_title(); ?></h1>
							<?php the_content('',FALSE,''); ?>
						</div> <!-- end post -->
					<?php endwhile; ?>

				<?php else : ?>
					<div class="post">
						<?php _e('Not Found'); ?>
					</div>
					<?php endif; ?>

			</div> <!-- end content -->
		</div> <!-- end main -->

  	</div> <!--! end of #container -->


				<footer>
				</footer>

				<?php get_footer(); ?>


</body>
</html>
