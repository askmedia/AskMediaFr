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
        <span>
        <?php if (is_category()) { ?>
          <?php _e('Category Archive for:', 'alpine') ?>
        <?php } elseif( is_tag() ) { ?>
          <?php _e('Posts Tagged:', 'alpine') ?>
        <?php } elseif (is_day()) { ?>
          <?php _e('Archive for:', 'alpine') ?>
        <?php } elseif (is_month()) { ?>
          <?php _e('Archive for:', 'alpine') ?>
        <?php } elseif (is_year()) { ?>
          <?php _e('Archive for:', 'alpine') ?>
        <?php } ?> 
        </span>
        <span class="line big"></span>
      </div>
      <h1>
      <?php if (is_category()) { ?>
        <?php single_cat_title(); ?>
      <?php } elseif( is_tag() ) { ?>
        <?php single_tag_title(); ?>
      <?php } elseif (is_day()) { ?>
        <?php the_time('F jS, Y'); ?>
      <?php } elseif (is_month()) { ?>
        <?php the_time('F, Y'); ?>
      <?php } elseif (is_year()) { ?>
        <?php the_time('Y'); ?>
      <?php } elseif (is_author()) { ?>
        <?php _e('Author Archive:', 'alpine') ?>
      <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <?php _e('Blog Archives:', 'alpine') ?>
      <?php } ?>
      </h1>
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