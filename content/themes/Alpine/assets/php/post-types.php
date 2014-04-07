<?php 
add_action( 'init', 'team_posttype_init' );
if ( !function_exists( 'team_posttype_init' ) ) :
function team_posttype_init() {

	$team_labels = array(
		'name' => _x('Member', 'post type general name','alpine'),
		'singular_name' => _x('Member', 'post type singular name','alpine'),
		'add_new' => _x('Add New', 'Portfolio','alpine'),
		'add_new_item' => __('Add New Member','alpine'),
		'edit_item' => __('Edit Member','alpine'),
		'new_item' => __('New Member','alpine'),
		'all_items' => __('All Members','alpine'), 
		'view_item' => __('View Member','alpine'),
		'search_items' => __('Search Member','alpine'),
		'not_found' =>  __('No Member found','alpine'),
		'not_found_in_trash' => __('No Members found in Trash','alpine'), 
		'parent_item_colon' => '',
		'menu_name' => __('Team','alpine')

	);
	$team_args = array(
		'labels' => $team_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'exclude_from_search' => true,
		'menu_position' => 4,
		'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-team.png', 
		'supports' => array( 'title', 'thumbnail' )
	); 
	register_post_type( 'team', $team_args );

 }
	
endif;


add_action( 'init', 'clients_posttype_init' );
if ( !function_exists( 'clients_posttype_init' ) ) :
function clients_posttype_init() {

	$client_labels = array(
		'name' => _x('Client', 'post type general name','alpine'),
		'singular_name' => _x('Clients', 'post type singular name','alpine'),
		'add_new' => _x('Add New', 'Portfolio','alpine'),
		'add_new_item' => __('Add New Client','alpine'),
		'edit_item' => __('Edit Client','alpine'),
		'new_item' => __('New Client','alpine'),
		'all_items' => __('All Clients','alpine'), 
		'view_item' => __('View Client','alpine'),
		'search_items' => __('Search Client','alpine'),
		'not_found' =>  __('No Client found','alpine'),
		'not_found_in_trash' => __('No Clients found in Trash','alpine'), 
		'parent_item_colon' => '',
		'menu_name' => __('Clients','alpine')

	);
	$team_args = array(
		'labels' => $client_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'exclude_from_search' => true,
		'menu_position' => 6,
		'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-clients.png', 
		'supports' => array( 'title' )
	); 
	register_post_type( 'clients', $team_args );

 }
endif;


add_action( 'init', 'testimonial_posttype_init' );
if ( !function_exists( 'testimonial_posttype_init' ) ) :
function testimonial_posttype_init() {

  $testimonial_labels = array(
    'name' => _x('Testimonial', 'post type general name','alpine'),
    'singular_name' => _x('Testimonials', 'post type singular name','alpine'),
    'add_new' => _x('Add New', 'Portfolio','alpine'),
    'add_new_item' => __('Add New Testimonial','alpine'),
    'edit_item' => __('Edit Testimonial','alpine'),
    'new_item' => __('New Testimonial','alpine'),
    'all_items' => __('All Testimonial','alpine'), 
    'view_item' => __('View Testimonial','alpine'),
    'search_items' => __('Search Testimonial','alpine'),
    'not_found' =>  __('No Testimonial found','alpine'),
    'not_found_in_trash' => __('No Testimonial found in Trash','alpine'), 
    'parent_item_colon' => '',
    'menu_name' => __('Testimonial','alpine')

  );
  
  $testimonial_args = array(
    'labels' => $testimonial_labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => false,
    'rewrite' => false,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'exclude_from_search' => true,
    'menu_position' => 7,
    'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-testimonial.png', 
    'supports' => array( 'title', 'thumbnail' )
  ); 
  register_post_type( 'testimonial', $testimonial_args );

 }
endif;


add_action( 'init', 'service_posttype_init' );
if ( !function_exists( 'service_posttype_init' ) ) :
function service_posttype_init() {

  $service_labels = array(
    'name' => _x('Service', 'post type general name','alpine'),
    'singular_name' => _x('Service', 'post type singular name','alpine'),
    'add_new' => _x('Add New', 'Service','alpine'),
    'add_new_item' => __('Add New Service','alpine'),
    'edit_item' => __('Edit Service','alpine'),
    'new_item' => __('New Service','alpine'),
    'all_items' => __('All Service','alpine'), 
    'view_item' => __('View Service','alpine'),
    'search_items' => __('Search Service','alpine'),
    'not_found' =>  __('No Service found','alpine'),
    'not_found_in_trash' => __('No Service found in Trash','alpine'), 
    'parent_item_colon' => '',
    'menu_name' => __('Service Slide','alpine')

  );
  
  $service_args = array(
    'labels' => $service_labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => false,
    'rewrite' => false,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'exclude_from_search' => true,
    'menu_position' => 8,
    'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-service.png', 
    'supports' => array( 'title', 'thumbnail' )
  ); 
  register_post_type( 'service', $service_args );

 }
endif;



/*-----------------------------------------------------------------------------------*/
/*	Register Project post format.
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'portfolio_posttype_init' );
if ( !function_exists( 'portfolio_posttype_init' ) ) :
function portfolio_posttype_init() {

	$portfolio_labels = array(
		'name' => _x('Portfolio', 'post type general name','alpine'),
		'singular_name' => _x('Portfolio', 'post type singular name','alpine'),
		'add_new' => _x('Add New', 'Portfolio','alpine'),
		'add_new_item' => __('Add New Portfolio','alpine'),
		'edit_item' => __('Edit Portfolio','alpine'),
		'new_item' => __('New Portfolio','alpine'),
		'all_items' => __('All Portfolio','alpine'),
		'view_item' => __('View Portfolio','alpine'),
		'search_items' => __('Search Portfolio','alpine'),
		'not_found' =>  __('No Portfolio found','alpine'),
		'not_found_in_trash' => __('No Portfolios found in Trash','alpine'), 
		'parent_item_colon' => '',
		'menu_name' => __('Portfolio','alpine')

	);
	$portfolio_args = array(
		'labels' => $portfolio_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 10,
		'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-portfolio.png',
		'supports' => array( 'title','editor','thumbnail','video','gallery' ) 
    
	); 
	register_post_type( 'portfolio', $portfolio_args );

 }
	
endif;

/*-----------------------------------------------------------------------------------*/
/*	Portfolio custom taxonomies.
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'portfolio_taxonomies_innit', 0 );
if ( !function_exists( 'portfolio_taxonomies_innit' ) ) :
function portfolio_taxonomies_innit() {
	// portfolio Category
	$labels = array(
		'name' => _x( 'Categories', 'taxonomy general name' ,'alpine'),
		'singular_name' => _x( 'Category', 'taxonomy singular name','alpine' ),
		'search_items' =>  __( 'Search Categories','alpine' ),
		'all_items' => __( 'All Categories' ,'alpine'),
		'parent_item' => __( 'Parent Category' ,'alpine'),
		'parent_item_colon' => __( 'Parent Category:' ,'alpine'),
		'edit_item' => __( 'Edit Category' ,'alpine'), 
		'update_item' => __( 'Update Category' ,'alpine'),
		'add_new_item' => __( 'Add New Category' ,'alpine'),
		'new_item_name' => __( 'New Category Name' ,'alpine'),
		'menu_name' => __( 'Category','alpine' ),
	); 	
	
	register_taxonomy('portfolio-category',array('portfolio'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-category' ),
	));
}


endif; 

/*-----------------------------------------------------------------------------------*/
/*	OnePage custom taxonomies.
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'onepage_posttype_init' );
if ( !function_exists( 'onepage_posttype_init' ) ) :
function onepage_posttype_init() {

	$onepage_labels = array(
		'name' => _x('OnePage Section', 'post type general name','alpine'),
		'singular_name' => _x('OnePage', 'post type singular name','alpine'),
		'add_new' => _x('Add New Section', 'Section','alpine'),
		'add_new_item' => __('Add New Section','alpine'),
		'edit_item' => __('Edit Section','alpine'),
		'new_item' => __('New Section','alpine'),
		'all_items' => __('All Sections','alpine'), 
		'view_item' => __('View Section','alpine'),
		'search_items' => __('Search Section','alpine'),
		'not_found' =>  __('No Section found','alpine'),
		'not_found_in_trash' => __('No Sections found in Trash','alpine'), 
		'parent_item_colon' => '',
		'menu_name' => __('OnePage Section','alpine')

	);
	$onepage_args = array(
		'labels' => $onepage_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,  
		'show_in_menu' => true, 
		'query_var' => false,
		'rewrite' => false,
		'capability_type' => 'page',
		'has_archive' => false, 
		'hierarchical' => false,
		'exclude_from_search' => true,
		'menu_position' => 6,
		'menu_icon' => get_template_directory_uri().'/assets/images/admin/icon-onepage.png', 
		'supports' => array( 'title','editor','revisions','page-attributes' ) 
	); 
	register_post_type( 'onepage', $onepage_args );

 }
endif;


