<?php
/**
 * @package Alpine
 */

get_header();
get_template_part( 'assets/php/partials/main', 'nav' );

?>

<section class="section-content">
  <div class="container">
    <!-- Section title -->
    <div class="section-title text-center">
      <div>
        <span class="line big"></span>
        <span><?php echo __('Search Results for', 'alpine'); ?></span>
        <span class="line big"></span>
      </div>
      <h1><?php echo '"'.$s.'"'; ?></h1>
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
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'assets/php/partials/content', 'category' ); ?>
        <?php endwhile; else: ?>
          <?php get_template_part( 'no-results', 'index' ); ?>
        <?php endif;?>
        <?php wp_reset_query(); ?>
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
    <?php get_template_part( 'assets/php/partials/content', 'pagination' ); ?>
  </div>
</section>
<?php get_footer(); ?>