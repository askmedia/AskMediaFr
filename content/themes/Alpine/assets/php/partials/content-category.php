<?php
/**
 * @package Alpine
 */
?>
<div class="element-line">
  <div id="category-<?php the_ID(); ?>" <?php post_class( 'post-blog'); ?>>
  	<div class="blog-text">
      <h2><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <span class="post-info"><?php _e('Posted','alpine') ?> <i class="fa fa-calendar"></i> <?php the_time('j F Y'); ?> <?php _e('by','alpine') ?> <?php the_author_posts_link(); ?> <?php _e('IN','alpine') ?> <?php echo the_category(); ?> / <a href="<?php comments_link(); ?>" class="general_color"><?php comments_number(__('0 responses','alpine'), __('1 response','alpine'), __('% responses','alpine')); ?></a> </span>
      
      <?php
      $args = array(  
      'numberposts' => -1, // Using -1 loads all posts  
      'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager  
      'order'=> 'ASC',  
      'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos  
      'post_parent' => $post->ID, // Important part - ensures the associated images are loaded 
      'post_status' => null, 
      'post_type' => 'attachment'  
      );  
      $images = get_children( $args );
      if( !has_post_format( 'video' ) &&! has_post_format( 'gallery' )  ) {
        if ( has_post_thumbnail() ) {
          echo '<div class="media-post">'; 
          the_post_thumbnail( 'post-thumb', array('class' => 'img-responsive img-center img-rounded') );
          echo '</div>'; 
        }
      } 
      elseif($images && has_post_format( 'gallery' )){
        echo '<div class="media-post"> <div class="owl-single owl-carousel img-gallery">';
        foreach($images as $image){ 
          echo '<div>'.wp_get_attachment_image($image->ID, 'post-thumb').'</div>';
        }
        echo '</div></div>'; 
      }
      elseif( has_post_format( 'video' ) ) {
        $video = get_post_meta( $post->ID, '_format_video_embed', true );
        echo '<div class="media-post">'.$video.'</div>';
      }
      ?>
      
      <?php the_excerpt(); ?> 
    </div>
  	
    <?php $posttags = get_the_tags();
    if ($posttags) { ?>          
      <div class="post-tags">
        <?php echo get_the_tag_list('<div class="icon"><i class="fa fa-tags fa-lg"></i> '.__('Tags:', 'alpine').'</div> ',' ' ); ?>
      </div>
    <?php } ?> 
    
  </div>
</div>