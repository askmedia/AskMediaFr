<?php 
/**
 * @package Alpine
 */
 
 
//Comment
function mytheme_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);

  if ( 'div' == $args['style'] ) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }
?>
  <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
  <?php if ( 'div' != $args['style'] ) : ?>
  <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
  <?php endif; ?>
  <div class="pull-left">
  <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, 70 ); ?>
  </div>
  <h4 class="media-heading">
    <?php printf(__('%s <small>says on</small>', 'alpine'), get_comment_author_link()) ?>
    <small>
      <i class="fa fa-calendar"></i> <?php printf( __('%1$s at %2$s', 'alpine'), get_comment_date(),  get_comment_time()) ?></a> <?php edit_comment_link(); ?>
    </small>
  </h4>
  <?php comment_text() ?>
  <!-- Reply button -->
  <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
  <!-- Reply button -->

<?php if ($comment->comment_approved == '0') : ?>
  <div class="alert alert-warning alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">X</button>
    <strong><?php _e('Your comment is awaiting moderation.', 'alpine') ?></strong>
  </div>
<?php endif; ?>
  
  <?php if ( 'div' != $args['style'] ) : ?>
  </div>
  <?php endif; ?>
<?php
}