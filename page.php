<?php get_header(); ?>
<body>
  <div class="content__wrapper">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="post">
          <h1 class="post__title post__title--bottom-margin">
            <?php the_title(); ?>
          </h1>
          <?php the_content('',FALSE,''); ?>
          <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="post">
        <?php _e('Not Found'); ?>
      </div>
    <?php endif; ?>
    <?php get_footer(); ?>
  </div>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=tbeanz" async="async"></script>
</body>
</html>
