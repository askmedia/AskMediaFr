<?php
/**
 * @package Alpine
 */
/*
Template Name: Page Sidebar Left
*/

	get_header(); 
	get_template_part( 'assets/php/partials/main', 'nav' );
?>

<section class="section-content">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Section title -->
    <div class="section-title title-page text-center">
      <h1><?php the_title(); ?></h1>
      <div>
        <span class="line big"></span>
      </div>
    </div>
    <!-- Section title -->
    <div class="row"> <!-- content row open -->
      <div class="col-md-3">
        <div class="element-line">
          <div id="sidebar">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
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
          ?>
          <div class="blog-text">
            <?php the_content(); ?>
            <?php wp_link_pages();?>    
          </div>
          <?php comments_template(); ?>
        </div>
      </div>
    </div> <!-- content row close -->
    <?php endwhile; else: ?>
      <?php get_template_part( 'no-results', 'index' ); ?>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>