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
          <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </div>
        <div class="comments" name="comments">
          <?php comments_template(); ?>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="post">
        <?php _e('Not Found'); ?>
      </div>
    <?php endif; ?>
    <div class="addthis_sharing_toolbox"></div>
    <?php get_footer(); ?>
  </div>
</body>
</html>
