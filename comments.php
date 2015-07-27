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

/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>

  <h2 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h2>

  <ol class="commentlist">
    <?php 
    $i = 0;
    foreach ($comments as $comment) : ?>
      <li 
      <?php $i++; ?>

        <?php if($comments[$i] == 0)
          {        
            echo("style='border:none;'");
          }
        ?> id="comment-<?php comment_ID() ?>" class="clearfix">
        <div class="gravatar left">
            <!-- Double the size here for Retina Display-->
            <?php echo get_avatar($comment,'160','' ); ?>
        </div>

        <div class="comment-content">
          <span class="commentor"><?php comment_author_link() ?></span> <span class="comment-date">on <?php comment_date('F jS, Y') ?></span>
          <?php if ($comment->comment_approved == '0') : ?>
            <em><?php _e('<br/>Your comment is awaiting moderation.'); ?></em>
          <?php endif; ?><br/>
          <div class="comment-text <?php if ($comment->comment_author_email == "me@tetchi.ca") echo 'author' ?>">
            <?php comment_text() ?>
          </div>
        </div>
      </li>

        <?php /* Changes every other comment to a different class */
          if ('alt' == $oddcomment) $oddcomment = '';
          else $oddcomment = 'alt';
        ?>

    <?php endforeach; /* end for each comment */ ?>
  </ol>

      <?php else : // this is displayed if there are no comments so far ?>

      <?php if ('open' == $post->comment_status) : ?>
        <!-- If comments are open, but there are no comments. -->
      <?php else : // comments are closed ?>

        <!-- If comments are closed. -->
        <p class="nocomments">Comments are closed.</p>

      <?php endif; ?>
    <?php endif; ?>


    <?php if ('open' == $post->comment_status) : ?>

      <h2 id="respond">Leave a Reply:</h2>

      <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

    <?php else : ?>

      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if ( $user_ID ) : ?>

      <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

  <?php else : ?>

    <p><label for="author"><small>Name <?php if ($req) echo "*"; ?></small></label><br/>
    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
      </p>

      <p> <label for="email"><small>Mail (will not be published) <?php if ($req) echo "*"; ?></small></label><br/><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
       </p>

        <p> <label for="url"><small>Website</small></label><br/><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
         </p>

          <?php endif; ?>
            <p>
              <small>Comment</small><br/>
              <textarea name="comment" id="comment" rows="10" tabindex="4"></textarea>
            </p>
            <p>
               <?php if (function_exists('subscribe_reloaded_show')) subscribe_reloaded_show(); ?> 
            </p>
            <p id="submit">
              <input name="submit" type="submit" value="Post Comment!" />
              <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>"  />
            </p>
            <?php do_action('comment_form', $post->ID); ?>

          </form>

          <?php endif; // If registration required and not logged in ?>

        <?php endif; // if you delete this the sky will fall on your head ?>