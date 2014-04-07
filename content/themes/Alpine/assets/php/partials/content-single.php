<?php
/**
 * @package Alpine
 */
?>

<!-- Section title -->
<div class="section-title text-center single-section-title">
  <div>
    <span><?php _e('Posted by','alpine') ?> <?php the_author_posts_link(); ?> <?php _e('IN','alpine') ?> <?php echo the_category(); ?> / <a href="<?php comments_link(); ?>" class="general_color"><?php comments_number(__('0 responses','alpine'), __('1 response','alpine'), __('% responses','alpine')); ?></a> </span>
    <span class="line big"></span>
  </div>
  <h1><?php the_title(); ?></h1>
  <div>
    <span class="line"></span>
    <span><i class="fa fa-calendar"></i> <?php the_time('j F Y'); ?></span>
    <span class="line"></span>
  </div>
</div>
<!-- Section title -->

<div class="row"> <!-- content row open -->
  <?php if(function_exists( 'ot_get_option' )):
  if(ot_get_option('default_layout')=='left_sidebar'): ?>
  <div class="col-md-3">
    <div class="element-line">
      <div id="sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php endif;endif;?>
  
  <div class="col-md-9 blog-content">
    <div class="element-line">
      
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
      
      <div class="blog-text">
        <?php the_content(); ?>
        <?php wp_link_pages();?>    
      </div>
      
      <?php $posttags = get_the_tags();
      if ($posttags) { ?>          
      <div class="post-tags">
        <?php echo get_the_tag_list('<div class="icon"><i class="fa fa-tags fa-lg"></i> '.__('Tags:', 'alpine').'</div> ',' ' ); ?>
      </div>
      <?php } ?> 
      
      <?php if(get_the_author_meta('description')):?>
        <div class="element-line">
          <h4 class="line-header general_border"><?php _e('About the Author','alpine') ?></h4>
          <div id="post-author">
            <div>
              <?php echo get_avatar( get_the_author_meta('ID'), 70 ); ?>
              <h5><strong><?php echo get_the_author_meta('nickname'); ?></strong></h5><br>
              <?php echo get_the_author_meta('description'); ?>
            </div>
          </div>
        </div>
      <?php endif;?>
      <?php comments_template(); ?>
    </div>
  </div>
  
  <?php if(function_exists( 'ot_get_option' )):
  if(ot_get_option('default_layout')!='left_sidebar'): ?>
  <div class="col-md-3">
    <div class="element-line">
      <div id="sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php endif;endif;?>
</div> <!-- content row close -->