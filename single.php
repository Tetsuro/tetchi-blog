<?php get_header(); ?>

<body>

	<div id="container">

		<div id="main" role="main" class="clearfix">
			<?php get_sidebar(); ?>


			<div id="content">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>

						<div id="post-<?php the_ID(); ?>" class="post"> 

							<h1><?php the_title(); ?></h1>						
							<div class='metadata'><?php the_date(); ?> under <?php the_category(', ') ?>  &bull; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
							<?php the_content('',FALSE,''); ?>
							<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
              
              
              <div class="social-plugin">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                <!-- AddThis Button END -->
              </div>
              
							<div class="comments" name="comments">
								<?php comments_template(); ?>
							</div>
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