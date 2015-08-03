<?php get_header(); ?>
<body>
  <div class="content__wrapper">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" class="post">
          <h1 class="post__title post__title--bottom-margin">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          </h1>
          <?php the_content('',FALSE,''); ?>
          <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
          <div class="addthis_sharing_toolbox"></div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="post">
        <?php _e('Not Found'); ?>
      </div>
    <?php endif; ?>
    <?php get_footer(); ?>
  </div>
</body>
</html>
