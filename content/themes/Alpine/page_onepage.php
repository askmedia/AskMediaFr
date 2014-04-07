<?php
/**
 * @package Alpine
*/
/*
Template Name: One Page Template
*/

get_header(); 
?> 
    <?php if ( function_exists( 'ot_get_option' ) ):
      if(ot_get_option('menu_position') == 1):?>
      <div class="menu_first">
        <?php get_template_part( 'assets/php/partials/main', 'nav' ); ?>
      </div>
    <?php endif;endif;?>
    
    <?php if ( function_exists( 'ot_get_option' ) ):
      if(ot_get_option('enable_preloader') != 2):?>
      <div class="mask" <?php echo(ot_get_option('loader_bg')!= '') ? 'style="background:'.ot_get_option('loader_bg').'"':'' ?>>
        <div id="intro-loader" <?php echo(ot_get_option('loader_icon')!= '') ? 'style="background:url('.ot_get_option('loader_icon').');"':'' ?>></div>
      </div>
    <?php endif;endif;?>
    
    <section id="home" <?php echo(ot_get_option('menu_position')== 1) ? 'class="menu_top"':'' ?> >
      <?php the_content(); ?>
    </section>
    
    <?php if ( function_exists( 'ot_get_option' ) ):
      if(ot_get_option('menu_position') != 1):?>
      <?php get_template_part( 'assets/php/partials/main', 'nav' ); ?>
    <?php endif; endif;?>

		<?php $the_query_onepage = new WP_Query( 'post_type=onepage&posts_per_page=50');?>
		<?php if ($the_query_onepage->have_posts() ) : ?>
			<?php while ($the_query_onepage->have_posts() ) : $the_query_onepage->the_post(); ?>
				<?php get_template_part('assets/php/partials/content', 'page'); ?>	
			<?php endwhile; wp_reset_query();?>
		<?php endif; ?> 

<?php get_footer(); ?>