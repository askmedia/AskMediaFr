<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alpine
 */
 get_header();
$header_menu = ot_get_option('nav_items',false);
 ?>

<?php get_template_part( 'assets/php/partials/main', 'nav' ); ?>
<section class="section-content">
  <div class="container">
    <!-- Section title -->
    <div class="section-title title-page text-center">
      <h1><?php echo ot_get_option('site_name'); ?></h1>
      <div>
        <span class="line big"></span>
        <span><?php _e('Our Latest Posts:', 'alpine') ?></span>
        <span class="line big"></span>
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