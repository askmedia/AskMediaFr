<?php
/**
 * @package Alpine
 */

  get_header(); 
	get_template_part( 'assets/php/partials/main', 'nav' );
?>
	
<section class="section-content">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
      <?php get_template_part( 'assets/php/partials/content', 'single' ); ?> 
      <?php endwhile; else: ?>
      <?php get_template_part( 'no-results', 'index' ); ?>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>