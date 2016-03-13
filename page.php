<?php get_template_part('head'); ?>
<body>
  <?php get_header(); ?>
  <main class="content__wrapper" role="main" id="main-content" tabindex="0">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <article class="post" role="article">
          <h1 class="post__title post__title--bottom-margin">
            <?php the_title(); ?>
          </h1>
          <?php the_content('',FALSE,''); ?>
          <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <article class="post" role="article">
        <?php _e('Not Found'); ?>
      </article>
    <?php endif; ?>
    <?php get_footer(); ?>
  </main>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=tbeanz" async="async"></script>
</body>
</html>
