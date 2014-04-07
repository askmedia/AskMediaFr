<?php
/**
 * @package Alpine
 */
?>

<div id="navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="navbar-inner">
    <div class="navbar-header">
      <?php if(has_nav_menu('primary')): ?>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars fa-2x"></i>
      </button>
      <?php endif ?>
      <a id="brand" class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo (ot_get_option('logo_image') == '')? get_bloginfo('name') : '<img alt="Logo" title="logo" src="'.ot_get_option('logo_image').'" class="img-responsive">';?> </a>
    </div>
    <div class="navbar-collapse collapse">
      <?php if(has_nav_menu('primary')) { wp_nav_menu(array('items_wrap' => '<ul id="%1$s" class="navbar-nav navbar-right">%3$s</ul>' ,'theme_location' => 'primary',)); } ?>
    </div>
  </div>
</div>