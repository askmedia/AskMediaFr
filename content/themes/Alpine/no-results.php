<?php
/**
 * @package Alpine
 */
?>

<div id="error">
	<div class="element-line text-center">
  	<div class="not-found">
      <i class="fa fa-frown-o"></i>
  	</div>
  	<h1>ooops...</h1>
  	<p class="error-text">
  		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
  			<?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'alpine' ), esc_url( admin_url( 'post-new.php' ) ) ); ?>
      <?php elseif ( is_search() ) : ?>
  			<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'alpine' ); ?>
  		<?php else : ?>
  			<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'alpine' ); ?>
  		<?php endif; ?>
  	</p>
	</div>	
</div>


		
