<?php
/**
 *
 * @package Alpine
 */
 
/*
Template Name: Blog
*/
 
get_header();
$header_menu = ot_get_option('nav_items',false);
?>

<?php get_template_part( 'assets/php/partials/main', 'nav' ); ?>
<section class="section-content">
  <div class="container">
    <!-- Section title -->
    <div class="section-title title-page text-center">
      <h1><?php the_title(); ?></h1>
      <div>
        <span class="line big"></span>
        <span><?php _e('Our Latest Posts:', 'alpine') ?></span>
        <span class="line big"></span>
      </div>
      <?php if($post->post_content != ""):?>
      <span class="lead"><?php the_content(); ?></span>
      <?php endif;?>
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
        <article>
        <?php // Display blog posts on any page @ http://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); 
        $wp_query->query('showposts' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post();
          get_template_part( 'assets/php/partials/content', 'category' );
        endwhile;?>
        <?php wp_reset_postdata(); ?>
        </article>
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