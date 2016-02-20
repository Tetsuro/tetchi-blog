<?php get_template_part('head'); ?>
<body>
  <?php get_header(); ?>
  <div class="content__wrapper" role="main" id="main-content" tabindex="-1">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="post" role="article">
          <h2 class="post__title">
            <?php the_title(); ?>
          </h2>
          <div class="post__metadata">
            <p>
              <?php the_date(); ?> under <?php the_category("<span aria-hidden='true'>, </span>") ?>
            </p>
          </div>
          <?php the_content('',FALSE,''); ?>
          <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
          <div class="addthis_sharing_toolbox"></div>
        </article>
        <div class="comments" name="comments">
          <?php comments_template(); ?>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <article class="post" role="article">
        <?php _e('Not Found'); ?>
      </article>
    <?php endif; ?>
    <?php get_footer(); ?>
  </div>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=tbeanz" async="async"></script>
</body>
</html>
