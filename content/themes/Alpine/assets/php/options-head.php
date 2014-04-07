<?php 
/**
* Alpine functions and definitions
*
* @package Alpine
*/
	 global $is_IE;  

	 // Title 
function ef1_title(){
 wp_reset_query(); 
	echo	'<title>';
	if(trim(ot_get_option('site_name') != '')){
    echo ot_get_option('site_name');
    $description  = ot_get_option('site_description'); 
    if(is_front_page() || is_home()){
      if(!empty($description))echo ' - '.$description ;
    } else { 
    echo ' -' ;wp_title('');
    }
  }else{
    echo get_bloginfo('name');
  }
	echo	"</title>\n";
}
add_action('wp_head', 'ef1_title');// Add <title></title> in head
// End Title

// google analytics
function ef1_register_tracking_code(){
  if ( function_exists( 'ot_get_option' ) ) {
    if(ot_get_option('tracking_code')){
      echo ot_get_option('tracking_code');
  	} 
  } 
}
add_action( 'wp_head', 'ef1_register_tracking_code' ); 
// end google analytics


//Favicon
function ef1_favicon(){
  if ( function_exists( 'ot_get_option' ) ) {
    if(ot_get_option('favicon')){
      echo '<link rel="shortcut icon" href="'.ot_get_option('favicon').'" />'."\n";
		}
	}
}
add_action('wp_head', 'ef1_favicon');// Add favicon in head
//End Favicon


// add css and scripts
function ef1_alpine_scripts() {
		  
  wp_enqueue_script( 'html5.', 'http://html5shim.googlecode.com/svn/trunk/html5.js' );
  wp_enqueue_script( 'respond.',EF1_INDEX_JS. 'respond.js');
  
  wp_enqueue_style( 'normalize', EF1_INDEX_CSS. 'normalize.css');
  wp_enqueue_style( 'bootstrap',get_template_directory_uri(). '/assets/css/bootstrap.min.css');
  wp_enqueue_style( 'font-awesome',get_template_directory_uri(). '/assets/css/font-awesome.min.css');
  wp_enqueue_style( 'jquery.bxslider',get_template_directory_uri(). '/assets/css/jquery.bxslider.css');
  wp_enqueue_style( 'isotope',get_template_directory_uri(). '/assets/css/isotope.css');
  wp_enqueue_style( 'owl.carousel',get_template_directory_uri(). '/assets/css/owl.carousel.css');
  wp_enqueue_style( 'owl.theme',get_template_directory_uri(). '/assets/css/owl.theme.css');
  wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css');
  wp_enqueue_style( 'style-responsive', get_template_directory_uri(). '/style-responsive.css');
  wp_enqueue_style( 'ot-dynamic-dynamic-css', get_template_directory_uri(). '/dynamic.css');
  
  wp_enqueue_script( 'modernizr', EF1_INDEX_JS.'modernizr.js', array('jquery'), '1.0.0', false);
  wp_enqueue_script( 'YTPlayer', EF1_INDEX_JS.'jquery.mb.YTPlayer.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'sticky', EF1_INDEX_JS.'jquery.sticky.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'fitvids', EF1_INDEX_JS.'jquery.fitvids.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'easing', EF1_INDEX_JS.'jquery.easing-1.3.pack.js', array('jquery'), '1.3.0', true);
  wp_enqueue_script( 'bootstrap-modal', EF1_INDEX_JS.'bootstrap-modal.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'bootstrap-min', EF1_INDEX_JS.'bootstrap.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'parallax', EF1_INDEX_JS.'jquery.parallax-1.1.3.js', array('jquery'), '1.1.3', true);
  wp_enqueue_script( 'countTo', EF1_INDEX_JS.'jquery-countTo.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'appear', EF1_INDEX_JS.'jquery.appear.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'easy-pie-chart', EF1_INDEX_JS.'jquery.easy-pie-chart.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'cycle-all', EF1_INDEX_JS.'jquery.cycle.all.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'maximage', EF1_INDEX_JS.'jquery.maximage.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'isotope', EF1_INDEX_JS.'jquery.isotope.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'skrollr', EF1_INDEX_JS.'skrollr.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'hoverdir', EF1_INDEX_JS.'jquery.hoverdir.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'validate', EF1_INDEX_JS.'jquery.validate.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'portfolio-custom', EF1_INDEX_JS.'portfolio_custom.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'jquery.bxslider.min', EF1_INDEX_JS.'jquery.bxslider.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'owl.carousel', EF1_INDEX_JS.'owl.carousel.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'script', EF1_INDEX_JS.'script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'ef1_alpine_scripts' );

//description
function ef1_description(){
	if ( function_exists( 'ot_get_option' ) ) {
		if(ot_get_option('meta_description')) 
			echo '<meta name="description" content="'.ot_get_option('meta_description').'"/>';
		}
	}
add_action( 'wp_head', 'ef1_description' );
//end description 

//meta_keywords
function ef1_meta_keywords(){
	if ( function_exists( 'ot_get_option' ) ) {
		if(ot_get_option('meta_keywords')) 
			echo '<meta name="keywords" content="'.ot_get_option('meta_keywords').'"/>';
		}
	}
add_action( 'wp_head', 'ef1_meta_keywords' ); 
//end meta_keywords 


/**
 * Enqueue the Open Sans font.
 */
function mytheme_fonts() {
  $protocol = is_ssl() ? 'https' : 'http';
  wp_enqueue_style( 'Raleway', "$protocol://fonts.googleapis.com/css?family=Raleway:400,700" );
}
add_action( 'wp_enqueue_scripts', 'mytheme_fonts' );