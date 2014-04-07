<?php
/**
 * @package alpine
 */
?>

<?php 
    if ( ! comments_open() ) { // There are comments but comments are now closed
        echo '';
	}
	else {
		if (have_comments()) { ?>
    
    <div class="blog-comments clearfix">
      <h3><?php comments_number(__('no responses','alpine'), __('one response','alpine'), __('% responses','alpine'));?> <?php printf(__('to %s','alpine'), the_title('', '', false)); ?></h3>
  		<?php $comments = get_comments( array (
  			'post_id' => $post->ID
  			)
  		); ?>
      <ul class="comment-list">
        <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
      </ul>
      
      <nav class="comment-pagination">
        <?php paginate_comments_links( array('prev_text' => '<i class="icon-angle-left pagination-button"></i>', 'next_text' => '<i class="icon-angle-right pagination-button"></i>'));?>
			</nav>
    </div>
    
<?php } ?>
<div class="comment-formular">
		<?php	comment_form(); ?>
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
</div>
<?php } ?>