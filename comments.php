<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>
<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
  }
}
?>

<?php if ($comments) : ?>
  <h2><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h2>
  <ul class="comments__list">
  <?php
    foreach ($comments as $comment) : ?>
      <li id="comment-<?php comment_ID() ?>" class="comment__list-item">
        <div class="comment__gravatar">
          <?php echo get_avatar($comment,'160','' ); ?>
        </div>
        <div class="comment__content">
          <div class="comment__metadata">
            <span class="comment__author"><?php comment_author_link() ?></span>
            <span class="comment__date">on <?php comment_date('F jS, Y') ?></span>
            <?php if ($comment->comment_approved == '0') : ?>
              <em><?php _e('<br/>Your comment is awaiting moderation.'); ?></em>
            <?php endif; ?>
          </div>
          <div class="comment__text <?php if ($comment->comment_author_email == "me@tetchi.ca") echo 'author' ?>">
            <?php comment_text() ?>
          </div>
        </div>
      </li>
   <?php endforeach; ?>
  </ul>

<?php else : ?>
  <?php if ('open' == $post->comment_status) : ?>
  <?php else : ?>
    <p class="nocomments">Comments are closed.</p>
  <?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
  <h2>Leave a Reply:</h2>
  <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
      <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="comments__form">
      <?php if ( $user_ID ) : ?>
        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
      <?php else : ?>
        <div class="comment__input-wrapper">
          <label for="author" class="comment__input-label">Name<?php if ($req) echo "*"; ?></label>
          <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" class="comment__input-text" />
        </div>
        <div class="comment__input-wrapper">
          <label for="email" class="comment__input-label">Mail (will not be published)<?php if ($req) echo "*"; ?></label>
          <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" class="comment__input-text" />
       </div>
        <div class="comment__input-wrapper">
          <label for="url" class="comment__input-label">Website</label>
          <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" class="comment__input-text" />
        </div>
      <?php endif; ?>
      <div class="comment__input-wrapper">
        <label for="comment" class="comment__input-label">Comment</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4" class="comment__input-textarea"></textarea>
      </div>
      <div class="comment__input-wrapper">
        <input class="comment__input-button" name="submit" type="submit" value="Post comment!" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>"  />
      </div>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
  <?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
