<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'ef1_custom_meta_boxes_team' );

function ef1_custom_meta_boxes_team() {

  $my_meta_box = array(
    'id'        => 'my_meta_box',
    'title'     => 'My Meta Box',
    'desc'      => '',
    'pages'     => array( 'team' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
	  array(
        'id'          => 'job',
        'label'       => 'Job Title',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  
	  
	  array(
      'id'          => 'animation_type',
      'label'       => 'Animation type',
      'type'        => 'select',
      'desc'        => '',
      'choices'     => array(
        array(
          'label'       => 'none',
          'value'       => '',
        ),
        array(
          'label'       => 'From Top',
          'value'       => 'item_top',
        ),
        array(
          'label'       => 'From Bottom',
          'value'       => 'item_bottom',
        ),
      'std'         => false,
      'rows'        => '',
      'post_type'   => '',
      'taxonomy'    => '',
      'class'       => ''
      ),
    ),
	  
	  
	  array(
        'id'          => 'facebook',
        'label'       => 'Facebook Link',
        'desc'        => 'Leave empty for disable',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),	  
	  array(
        'id'          => 'twitter',
        'label'       => 'Twitter Link',
        'desc'        => 'Leave empty for disable',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  array(
        'id'          => 'googleplus',
        'label'       => 'Google+ Link',
        'desc'        => 'Leave empty for disable',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  array(
        'id'          => 'linkedin',
        'label'       => 'Linkedin Link',
        'desc'        => 'Leave empty for disable',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  array(
        'id'          => 'dribble',
        'label'       => 'Dribble Link',
        'desc'        => 'Leave empty for disable',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),	  

    )
  );
  
  ot_register_meta_box( $my_meta_box );

}

add_action( 'admin_init', 'ef1_custom_meta_boxes_clients' );

function ef1_custom_meta_boxes_clients() {

  $my_meta_box = array(
    'id'        => 'my_meta_box',
    'title'     => 'My Meta Box',
    'desc'      => '',
    'pages'     => array( 'clients' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
	  array(
      'id'          => 'url_client',
      'label'       => 'Url',
      'desc'        => '',
      'std'         => '',
      'type'        => 'text',
      'class'       => '',
      'choices'     => array()
    ),
	  array(
        'id'          => 'image',
        'label'       => 'Logo',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'class'       => '',
        'choices'     => array()
      ),
    )
  );
  
  ot_register_meta_box( $my_meta_box );

}

add_action( 'admin_init', 'ef1_custom_meta_boxes_testimonial' );

function ef1_custom_meta_boxes_testimonial() {

  $my_meta_box = array(
    'id'        => 'my_meta_box',
    'title'     => 'My Meta Box',
    'desc'      => '',
    'pages'     => array( 'testimonial' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'description',
        'label'       => 'Description',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'class'       => '',
        'choices'     => array()
      ),
      array(
        'id'          => 'company',
        'label'       => 'Company',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
    ),
  );
  
  ot_register_meta_box( $my_meta_box );

}

add_action( 'admin_init', 'ef1_custom_meta_boxes_service' );

function ef1_custom_meta_boxes_service() {

  $my_meta_box = array(
    'id'        => 'my_meta_box',
    'title'     => 'My Meta Box',
    'desc'      => '',
    'pages'     => array( 'service' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'description',
        'label'       => 'Description',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'class'       => '',
        'choices'     => array()
      ),
      array(
        'id'          => 'link',
        'label'       => 'Link',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
      array(
        'id'          => 'text_link',
        'label'       => 'Text Link',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
    ),
  );
  
  ot_register_meta_box( $my_meta_box );

}


add_action( 'admin_init', 'ef1_custom_meta_boxes_portfolio' );

function ef1_custom_meta_boxes_portfolio() {

  $my_meta_box = array(
    'id'        => 'my_meta_box',
    'title'     => 'My Meta Box',
    'desc'      => '',
    'pages'     => array( 'portfolio' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
	  
	  array(
        'id'          => 'default_layout',
        'label'       => 'Default Layout',
        'desc'        => '',
        'std'         => '',
        'type'        => 'radio-image',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Portfolio 1',
            'src'         => get_template_directory_uri().'/assets/php/options/assets/images/layout/portfolio1.png'
          ),
          array(
            'value'       => '2',
            'label'       => 'Portfolio 2',
            'src'         => get_template_directory_uri().'/assets/php/options/assets/images/layout/portfolio2.png'
          )
        ),
      ),
	  array(
        'id'          => 'embed_video',
        'label'       => 'Embed Video',
        'desc'        => 'Put the iframe code from YouTube or Vimeo',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  array(
        'id'          => 'release_date',
        'label'       => 'Release Date',
        'desc'        => 'Example: 26th January, 2014',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  array(
        'id'          => 'client',
        'label'       => 'Client',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  array(
        'id'          => 'skills',
        'label'       => 'Skills',
        'desc'        => 'Example: Photography, Design, Branding',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  array(
        'id'          => 'project_link_url',
        'label'       => 'Project\'s link URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
      ),
	  array(
        'id'          => 'project_description',
        'label'       => 'Project Description',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'class'       => '',
        'choices'     => array()
      ),
    )
  );
  
  ot_register_meta_box( $my_meta_box );

}

add_action( 'admin_init', '_custom_page_settings');


 
function _custom_page_settings() {

	$metadata_settings = array(
		'id'          => 'metadata_settings',
		'title'       => 'Metadata Settings',
		'desc'        => '',
		'pages'       => array('onepage'),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(
			  
    array(
      'label'       => 'Parallax Section',
      'id'          => 'background_parallax',
      'type'        => 'select',
      'desc'        => 'Select whether this is a section or a Parallax separator',
      'choices'     => array(
        array(
          'label'       => 'Yes',
          'value'       => true,
        ),
        array(
          'label'       => 'No',
          'value'       => false,
        ),
      'std'         => false,
      'rows'        => '',
      'post_type'   => '',
      'taxonomy'    => '',
      'class'       => ''
      ),
    ),
    
    array(
      'label'       => 'Container Width',
      'id'          => 'container_width',
      'type'        => 'select',
      'desc'        => 'Select type container width',
      'std'         => 'default',
      'rows'        => '',
      'post_type'   => '',
      'taxonomy'    => '',
      'class'       => '',
      'choices'     => array(
        array(
          'label'       => 'Default',
          'value'       => 'default',
        ),  
        array(
          'label'       => 'Full Size',
          'value'       => 'full_size',
        ),
      ),
    ),
    
    array( 
      'id' => 'page_custom_title_overline',
      'label' => 'Title Overline',
      'desc' => 'A title overline for section <strong>(Not appear in the parallax section).</strong>',
      'type' => 'text',
      'std' => ''
    ),
    
    array( 
      'id' => 'page_custom_title',
      'label' => 'Title',
      'desc' => 'A title for section.',
      'type' => 'text',
      'std' => ''
    ),
    
    array(
      'label'       => 'Animation Title',
      'id'          => 'animation_title',
      'type'        => 'select',
      'desc'        => 'Choose how the title appears.',
      'std'         => 'none',
      'rows'        => '',
      'post_type'   => '',
      'taxonomy'    => '',
      'class'       => '',
      'choices'     => array(
        array(
          'label'       => 'From Left',
          'value'       => 'from_left',
        ),
        array(
          'label'       => 'From Right',
          'value'       => 'from_right',
        ),  
        array(
          'label'       => 'None',
          'value'       => 'none',
        ),
      ),
    ),
    
    array( 
      'id' => 'page_custom_title_underline',
      'label' => 'Title Underline',
      'desc' => 'A title underline for section <strong>(Not appear in the parallax section).</strong>',
      'type' => 'text',
      'std' => ''
    ),
    
    array( 
      'id' => 'page_custom_abstract',
      'label' => 'Subtitle',
      'desc' => 'A subtitle for section.',
      'type' => 'text',
      'std' => ''
    ),
    
    array(
      'label'       => 'Colored background ?',
      'id'          => 'background_colored',
      'type'        => 'select',
      'desc'        => '',
      'choices'     => array(
        array(
          'label'       => 'Yes',
          'value'       => true,
        ),
        array(
          'label'       => 'No',
          'value'       => false,
        ),
      'std'         => false,
      'rows'        => '',
      'post_type'   => '',
      'taxonomy'    => '',
      'class'       => ''
      ),
    ),
    
    array(
      'label'       => 'Background image',
      'id'          => 'background_image',
      'type'        => 'upload',
      'desc'        => '',
      'std'         => '',
      'rows'        => '',
      'post_type'   => '',
      'taxonomy'    => '',
      'class'       => ''
    ),			  
  )
);
ot_register_meta_box( $metadata_settings );	

}