<?php

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => '',
			'type' => 'text', 
			'label' => __('Button URL', 'alpine'),
			'desc' => __('Add the button\'s url eg http://example.com', 'alpine')
		),
		'size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'alpine'),
			'desc' => __('Select the button\'s size', 'alpine'),
			'options' => array(
				'ultra' => 'Ultra',
				'big' => 'Big',
				'medium' => 'Medium',
				'small' => 'Small'
			)
		),
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'alpine'),
			'desc' => __('_self = open in same window. _blank = open in new window', 'alpine'),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
		'content' => array(
			'std' => 'Button Label',
			'type' => 'text',
			'label' => __('Button\'s Label', 'alpine'),
			'desc' => __('Add the button\'s label', 'alpine'),
		)
	),
	'shortcode' => '[zilla_button url="{{url}}" size="{{size}}" target="{{target}}"] {{content}} [/zilla_button]',
	'popup_title' => __('Insert Button Shortcode', 'alpine')
);

/*-----------------------------------------------------------------------------------*/
/*	Alert Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['alert'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Alert Style', 'alpine'),
			'desc' => __('Select the alert\'s style, ie the alert colour', 'alpine'),
			'options' => array(
				'alert-warning' => 'Yellow',
				'alert-danger' => 'Red',
				'alert-info' => 'Blue',
				'alert-success' => 'Green'
			)
		),
		'content' => array(
			'std' => 'Your Alert!',
			'type' => 'textarea',
			'label' => __('Alert Text', 'alpine'),
			'desc' => __('Add the alert\'s text', 'alpine'),
		)
		
	),
	'shortcode' => '[alert style="{{style}}"] {{content}} [/alert]',
	'popup_title' => __('Insert Alert Shortcode', 'alpine')
);

/*-----------------------------------------------------------------------------------*/
/*	Tabs Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['tabs'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[tabs] {{child_shortcode}}  [/tabs]',
    'popup_title' => __('Insert Tab Shortcode', 'alpine'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'alpine'),
                'desc' => __('Title of the tab', 'alpine'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'alpine'),
                'desc' => __('Add the tabs content', 'alpine')
            )
        ),
        'shortcode' => '[tab title="{{title}}"] {{content}} [/tab]',
        'clone_button' => __('Add Tab', 'alpine')
    )
);
/*-----------------------------------------------------------------------------------*/
/*	Accordion Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['accordion'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[accordions] {{child_shortcode}}  [/accordions]',
    'popup_title' => __('Insert Tab Shortcode', 'alpine'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'alpine'),
                'desc' => __('Title of the tab', 'alpine'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'alpine'),
                'desc' => __('Add the tabs content', 'alpine')
            )
        ),
        'shortcode' => '[accordion title="{{title}}"] {{content}} [/accordion]',
        'clone_button' => __('Add Tab', 'alpine')
    )
);
/*-----------------------------------------------------------------------------------*/
/*	Diagrams Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['diagrams'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[diagrams] {{child_shortcode}}  [/diagrams]',
    'popup_title' => __('Insert Bar Shortcode', 'alpine'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Bar Title', 'alpine'),
                'desc' => __('Title of the bar', 'alpine'),
            ),
            'description' => array(
                'std' => 'Description',
                'type' => 'text',
                'label' => __('Bar Description', 'alpine'),
                'desc' => __('Description of the bar', 'alpine'),
            ),
            'percent' => array(
                'std' => '50',
                'type' => 'text',
                'label' => __('Bar Percent', 'alpine'),
                'desc' => __('Percent of the bar', 'alpine')
            )
        ),
        'shortcode' => '[diagram title="{{title}}" percent="{{percent}}" description="{{description}}"]  ',
        'clone_button' => __('Add Bar', 'alpine')
    )
);
/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'alpine'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array( 
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'alpine'),
				'desc' => __('Select the width of the column.', 'alpine'),
				'options' => array(
					'col12' => 'col12',
					'col11' => 'col11',
					'col10' => 'col10',
					'col9' => 'col9',
					'col8' => 'col8',
					'col7' => 'col7',
					'col6' => 'col6',
					'col5' => 'col5',
					'col4' => 'col4',
					'col3' => 'col3',
					'col2' => 'col2',
					'col1' => 'col1',
					
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'alpine'),
				'desc' => __('Add the column content.', 'alpine'),
			),
			'animation_type' => array(
        'type' => 'select',
        'label' => __('Animation type', 'alpine'),
        'desc' => __('', 'alpine'),
        'options' => array(
          'none' => 'None',
          'top' => 'From Top',
          'right' => 'From Right',
          'bottom' => 'From Bottom',
          'left' => 'From Left',
        )
      ),
      'align_content' => array(
        'type' => 'select',
        'label' => __('Align content', 'alpine'),
        'desc' => __('', 'alpine'),
        'options' => array(
          'default' => 'Default',
          'center' => 'Center',
        )
      )
    ),
    
    
    'shortcode' => '[{{column}} animation_type="{{animation_type}}" align_content="{{align_content}}"] {{content}} [/{{column}}] ',
		'clone_button' => __('Add Column', 'alpine')
	)
);

/*-----------------------------------------------------------------------------------*/
/*	Social Icons Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['social_icon'] = array(
	'no_preview' => true,
		'params' => array(
			'title' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Title', 'alpine'),
        'desc' => '',
      ),
			'icon' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Font Awesome Icon', 'alpine'),
				'desc' => __('Example: fa-facebook, fa-twitter, fa-google-plus (<a href="'.esc_url('http://fortawesome.github.io/Font-Awesome/cheatsheet/').'" target="_blank">All icons</a>)', 'alpine'),
			),
			'payoff' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Payoff', 'alpine'),
        'desc' => '',
      ),
      'url' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Url Account', 'alpine'),
        'desc' => '',
      )
		),
		'shortcode' => '[social_icon title="{{title}}" icon="{{icon}}" payoff="{{payoff}}" url="{{url}}"] ',
		'popup_title' => __('Social Icon', 'alpine')
	
);


/*-----------------------------------------------------------------------------------*/
/*	Content Box Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['content_box'] = array(
	'no_preview' => true,
		'params' => array(
			'icon' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Font Awesome Icon', 'alpine'),
        'desc' => __('Example: fa-search, fa-magic, fa-cloud <a href="'.esc_url('http://fortawesome.github.io/Font-Awesome/cheatsheet/').'" target="_blank">(All icons)</a>', 'alpine'),
      ),
			'title' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Title', 'alpine'),
				'desc' => __('Title of the Callout Box', 'alpine'),
			),
			'link' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Link', 'alpine'),
        'desc' => __('link destination (optional)', 'alpine'),
      ),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Content', 'alpine'),
				'desc' => __('', 'alpine'),
			),
			'style' => array(
				'type' => 'select',
				'std' => 'style1',
				'label' => __('Select Style', 'alpine'),
				'desc' => __('Select the style content box', 'alpine'),
				'options' => array(
					'style1' => 'Style 1',
					'style2' => 'Style 2',
				)
			)
		),
		'shortcode' => '[content_box title="{{title}}" link="{{link}}" icon="{{icon}}" style="{{style}}"] {{content}} [/content_box]',	
		'popup_title' => __('Content Box', 'alpine')
);


/*-----------------------------------------------------------------------------------*/
/*  Image Box Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['image_box'] = array(
  'no_preview' => true,
    'params' => array(
      'image' => array(
        'std' => '',
        'type' => 'image',
        'label' => __('Image', 'alpine'),
        'desc' => __('', 'alpine'),
      ),
      'image_style' => array(
        'type' => 'select',
        'label' => __('Image style', 'alpine'),
        'desc' => __('', 'alpine'),
        'options' => array(
          'img-circle' => 'Circle',
          '' => 'Normal',
        )
      ),
      'image_animation' => array(
        'type' => 'select',
        'label' => __('Image animation', 'alpine'),
        'desc' => __('', 'alpine'),
        'options' => array(
          'rotate' => 'Rotate',
          '' => 'None',
        )
      ),
      'url' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Url', 'alpine'),
        'desc' => __('link destination (optional)', 'alpine'),
      ),
      'title' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Title', 'alpine'),
        'desc' => __('Title of the Image Box', 'alpine'),
      ),
      'content' => array(
        'std' => '',
        'type' => 'textarea',
        'label' => __('Content', 'alpine'),
        'desc' => __('Description of the Image Box', 'alpine'),
      )
      
    ),
    'shortcode' => '[image_box image="{{image}}" image_style="{{image_style}}" image_animation="{{image_animation}}" url="{{url}}" title="{{title}}"] {{content}} [/image_box]',  
    'popup_title' => __('Image Box', 'alpine')
);

/*-----------------------------------------------------------------------------------*/
/*	Number Details Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['number_details'] = array(
	'no_preview' => true,
		'params' => array(
			'icon' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Font Awesome Icon', 'alpine'),
        'desc' => __('Example: fa-flag, fa-coffee, fa-rocket <a href="'.esc_url('http://fortawesome.github.io/Font-Awesome/cheatsheet/').'" target="_blank">(All icons)</a>', 'alpine'),
      ),
			'number' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Number', 'alpine'),
				'desc' => __('', 'alpine'),
			),
			'number_details' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Number Details', 'alpine'),
				'desc' => __('', 'alpine'),
			), 
    ),
		'shortcode' => '[number_details icon="{{icon}}" number_details="{{number_details}}" number="{{number}}"]',
		'popup_title' => __('Number Details', 'alpine')
);		

/*-----------------------------------------------------------------------------------*/
/*  Portfolio Gallery
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['portfolio_gallery'] = array(
    'params' => array(),
    'no_preview' => true, 
    
    'shortcode' => '[portfolio_gallery] {{child_shortcode}} [/portfolio_gallery]',
    'popup_title' => __('Portfolio gallery', 'alpine'),
   
    'child_shortcode' => array(
      'params' => array(
        'image' => array(
          'std' => '',
          'type' => 'image',
          'label' => __('Image', 'alpine'),
          'desc' => __('', 'alpine'),
        ),
      ),
      'shortcode' => '[slider_portfolio image="{{image}}"]',
      'clone_button' => __('Add Slide', 'alpine')
    )
   
);

/*-----------------------------------------------------------------------------------*/
/*  Intro video background
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['intro_video'] = array(
  'params' => array(
    
    'label1' => array(
      'std' => 'label1',
      'type' => 'text',
      'label' => __('Label 1', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'label2' => array(
      'std' => 'label2',
      'type' => 'text',
      'label' => __('Label 2', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'abstract' => array(
      'std' => 'abstract',
      'type' => 'text',
      'label' => __('Abstract', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'label_button' => array(
      'std' => 'label button',
      'type' => 'text',
      'label' => __('Label button', 'alpine'),
      'desc' => __("Without a label the button doesn't appear", 'alpine'),
    ),
    
    'url_video' => array(
      'std' => 'http://www.youtube.com/watch?v=Ufnf0ecwzVI',
      'type' => 'text',
      'label' => __('Video Url', 'alpine'),
      'desc' => __('Example: http://www.youtube.com/watch?v=Ufnf0ecwzVI', 'alpine'),
    ),
    
    'background_mobile' => array(
      'std' => '',
      'type' => 'image',
      'label' => __('Background mobile', 'alpine'),
      'desc' => __('Set the image background for mobile device.', 'alpine'),
    ),
    
    'start' => array(
      'std' => '0',
      'type' => 'text',
      'label' => __('Start Video At:', 'alpine'),
      'desc' => __('20 (int) Set the seconds the video should start at.', 'alpine'),
    ),
    
    'volume' => array(
      'type' => 'select',
      'label' => __('Start Volume', 'alpine'),
      'desc' => __('', 'alpine'),
      'options' => array(
        'true' => 'Mute',
        'false' => 'On'
        
      )
    ),
  ),
  'shortcode' => '[intro_video label1="{{label1}}" label2="{{label2}}" abstract="{{abstract}}" label_button="{{label_button}}" url_video="{{url_video}}" background_mobile="{{background_mobile}}" start="{{start}}" volume="{{volume}}"] {{child_shortcode}} [/intro_video]', 
  'popup_title' => __('Intro video background', 'alpine'),
  'no_preview' => true,
  
  // child shortcode is clonable & sortable
  'child_shortcode' => array(
    'params' => array(
      'title1' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Title1', 'alpine'),
        'desc' => __('', 'alpine'),
      ),
      'title2' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Title2', 'alpine'),
        'desc' => __('', 'alpine'),
      )
    ),
    'shortcode' => '[title_option title1="{{title1}}"]{{title2}}[/title_option]',
    'clone_button' => __('Add Slide title', 'alpine'),
    
  )
);

/*-----------------------------------------------------------------------------------*/
/*  Fullscreen Text slider
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['fullscreen_text_slider'] = array(
  'params' => array(
    'background' => array(
      'std' => '',
      'type' => 'image',
      'label' => __('Background image', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    'label1' => array(
      'std' => 'Label 1',
      'type' => 'text',
      'label' => __('Label 1', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'label2' => array(
      'std' => 'Label 2',
      'type' => 'text',
      'label' => __('Label 2', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'abstract' => array(
      'std' => 'Abstract',
      'type' => 'text',
      'label' => __('Abstract', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'label_button' => array(
      'std' => 'Label button',
      'type' => 'text',
      'label' => __('Label button', 'alpine'),
      'desc' => __("Without a label the button doesn't appear", 'alpine'),
    ),
  ),
  
  'shortcode' => '[fullscreen_text_slider background="{{background}}" label1="{{label1}}" label2="{{label2}}" abstract="{{abstract}}" label_button="{{label_button}}"]{{child_shortcode}}[/fullscreen_text_slider]', 
  'popup_title' => __('Fullscreen Text slider', 'alpine'),
  'no_preview' => true,
  
  // child shortcode is clonable & sortable
  'child_shortcode' => array(
    'params' => array(
      'title1' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Title1', 'alpine'),
        'desc' => __('', 'alpine'),
      ),
      'title2' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Title2', 'alpine'),
        'desc' => __('', 'alpine'),
      )
    ),
    'shortcode' => '[title_slider title1="{{title1}}"]{{title2}}[/title_slider]',
    'clone_button' => __('Add Slide title', 'alpine'),
  )
  
);

/*-----------------------------------------------------------------------------------*/
/*  Fullscreen Image Slider
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['fullscreen_image_slider'] = array(
  'params' => array(
    'label1' => array(
      'std' => '',
      'type' => 'text',
      'label' => __('Label 1', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'title1' => array(
      'std' => '',
      'type' => 'text',
      'label' => __('Title 1', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'title2' => array(
      'std' => '',
      'type' => 'text',
      'label' => __('Title 2', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'label2' => array(
      'std' => '',
      'type' => 'text',
      'label' => __('Label 2', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'abstract' => array(
      'std' => '',
      'type' => 'text',
      'label' => __('Abstract', 'alpine'),
      'desc' => __('', 'alpine'),
    ),
    
    'label_button' => array(
      'std' => 'Label button',
      'type' => 'text',
      'label' => __('Label button', 'alpine'),
      'desc' => __("Without a label the button doesn't appear", 'alpine'),
    ),
  ),
  'shortcode' => '[fullscreen_image_slider label1="{{label1}}" title1="{{title1}}" title2="{{title2}}" label2="{{label2}}" abstract="{{abstract}}" label_button="{{label_button}}"] {{child_shortcode}} [/fullscreen_image_slider]', 
  'popup_title' => __('Fullscreen Image Slider', 'alpine'),
  'no_preview' => true,
  
  // child shortcode is clonable & sortable
  'child_shortcode' => array(
    'params' => array(
      'image' => array(
        'std' => '',
        'type' => 'image',
        'label' => __('Image', 'alpine'),
        'desc' => __('', 'alpine'),
      ),
    ),
    'shortcode' => '[image_slide] {{image}} [/image_slide]',
    'clone_button' => __('Add slide image', 'alpine'),
  )
);

/*-----------------------------------------------------------------------------------*/
/*  Fullscreen slider
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['fullscreen_slider'] = array(
    'params' => array(),
    'no_preview' => true, 
    
    'shortcode' => '[fullscreen_slider] {{child_shortcode}} [/fullscreen_slider]',
    'popup_title' => __('Fullscreen slider', 'alpine'),
   
    'child_shortcode' => array(
      'params' => array(
        
        'image' => array(
          'std' => '',
          'type' => 'image',
          'label' => __('Image', 'alpine'),
          'desc' => __('', 'alpine'),
        ),
        
        'label1' => array(
          'std' => 'Label 1',
          'type' => 'text',
          'label' => __('Label 1', 'alpine'),
          'desc' => __('', 'alpine'),
        ),
        
        'title1' => array(
          'std' => 'Title1',
          'type' => 'text',
          'label' => __('Title1', 'alpine'),
          'desc' => __('', 'alpine'),
        ),
        
        'title2' => array(
          'std' => 'Title2',
          'type' => 'text',
          'label' => __('Title2', 'alpine'),
          'desc' => __('', 'alpine'),
        ),
    
        'label2' => array(
          'std' => 'Label 2',
          'type' => 'text',
          'label' => __('Label 2', 'alpine'),
          'desc' => __('', 'alpine'),
        ),
    
        'abstract' => array(
          'std' => 'Abstract',
          'type' => 'text',
          'label' => __('Abstract', 'alpine'),
          'desc' => __('', 'alpine'),
        ),
        
        'label_button' => array(
          'std' => 'Label button',
          'type' => 'text',
          'label' => __('Label button', 'alpine'),
          'desc' => __("Without a label the button doesn't appear", 'alpine'),
        ),
      ),
      'shortcode' => '[slider_item image="{{image}}" label1="{{label1}}" title1="{{title1}}" title2="{{title2}}" label2="{{label2}}" abstract="{{abstract}}" label_button="{{label_button}}"]',
      'clone_button' => __('Add Slide', 'alpine')
    )
   
);


/*-----------------------------------------------------------------------------------*/
/*	Pricing Tables Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['pricing_tables'] = array(
	'params' => array(
		
		'column_type' => array(
      'type' => 'select',
      'label' => __('Column type', 'alpine'),
      'desc' => __('', 'alpine'),
      'options' => array(
        '0' => 'Default',
        '1' => 'Evidence'
      )
    ),
		
    'animation_type' => array(
      'type' => 'select',
      'label' => __('Animation type', 'alpine'),
      'desc' => __('', 'alpine'),
      'options' => array(
        'none' => 'None',
        'top' => 'From Top',
        'bottom' => 'From Bottom'
      )
    ),
    
		'title' => array(
				'std' => 'Basic',
				'type' => 'text',
				'label' => __('Table Name', 'alpine'),
				'desc' => __('You can enter a first name for table here.', 'alpine'),
			),
		'price' => array(
				'std' => '99',
				'type' => 'text',
				'label' => __('Price', 'alpine'),
				'desc' => __('You can enter a price for table here.', 'alpine'),
			),
		'value' => array(
			'std' => '$',
			'type' => 'text',
			'label' => __('Value', 'alpine'),
			'desc' => __('You can enter a value for table here.', 'alpine'),
		),
		'subtitle_price' => array(
			'std' => 'per month',
			'type' => 'text',
			'label' => __('Subtitle Price', 'alpine'),
			'desc' => __('You can enter a subtitle price for table here.', 'alpine'),
		),
		'link' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Button Link', 'alpine'),
				'desc' => __('Enter a link for button here.', 'alpine'),
			),
		'button_text' => array(
				'std' => 'Sign Up Now',
				'type' => 'text',
				'label' => __('Button Text', 'alpine'),
				'desc' => __('What would you like button to say?', 'alpine'),
			),
		),
	'shortcode' => '[pricing_table column_type="{{column_type}}" title="{{title}}" price="{{price}}" value="{{value}}" subtitle_price="{{subtitle_price}}" link="{{link}}" featured="{{featured}}" button_text="{{button_text}}" animation_type="{{animation_type}}"] {{child_shortcode}} [/pricing_table]', 
	'popup_title' => __('Pricing Tables Shortcode', 'alpine'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'content' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Plan Option', 'alpine'),
				'desc' => __('Enter plan option info', 'alpine'),
			)
		),
		'shortcode' => '[price_option] {{content}} [/price_option]',
		'clone_button' => __('Add Plan Option', 'alpine'),
		
	)
);


/*-----------------------------------------------------------------------------------*/
/*	Contact Details Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['contact_details'] = array(
	'no_preview' => true,
		'params' => array(
			'phone' => array(
        'std' => '',
        'type' => 'text',
        'label' => __('Phone', 'alpine'),
        'desc' => __('', 'alpine'),
      ),
			'address' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Address', 'alpine'),
				'desc' => __('', 'alpine'),
			),
			'fax' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Fax', 'alpine'),
				'desc' => __('', 'alpine'),
			),
			'mail' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Mail', 'alpine'),
				'desc' => __('', 'alpine'),
			)
		),
		'shortcode' => '[contact_details phone="{{phone}}" address="{{address}}" fax="{{fax}}" mail="{{mail}}"]',	
		'popup_title' => __('Contact Details', 'alpine')
);

/*-----------------------------------------------------------------------------------*/
/*  Google Map Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['google_map'] = array(
  'no_preview' => true,
    'params' => array(
      'latitudine' => array(
        'std' => '-37.817683',
        'type' => 'text',
        'label' => __('Map Latitudine', 'alpine'),
        'desc' => __('To get the coordinates: <a href="https://maps.google.com/" target="_blank">https://maps.google.com/</a>', 'alpine'),
      ),
      'longitudine' => array(
        'std' => '144.965022',
        'type' => 'text',
        'label' => __('Map Longitudine', 'alpine'),
        'desc' => __('To get the coordinates: <a href="https://maps.google.com/" target="_blank">https://maps.google.com/</a>', 'alpine'),
      ),
      'zoom' => array(
        'std' => '',
        'type' => 'select',
        'label' => __('Map Zoom', 'alpine'),
        'desc' => __('', 'alpine'),
        'options' => array(
          '16' => '16 - Default',
          '1' => '1',
          '2' => '2',
          '3' => '3',
          '4' => '4',
          '5' => '5',
          '6' => '6',
          '7' => '7',
          '8' => '8',
          '9' => '9',
          '10' => '10',
          '11' => '11',
          '12' => '12',
          '13' => '13',
          '14' => '14',
          '15' => '15',
          '17' => '17',
          '18' => '18',
          '19' => '19',
          '20' => '20'
        )
      ),
      'marker_title' => array(
        'std' => 'ALPINE STUDIOS',
        'type' => 'text',
        'label' => __('Map Marker title', 'alpine'),
        'desc' => __('', 'alpine'),
      ),
      'marker_text' => array(
        'std' => 'Envato, Level 13, 2 Elizabeth St, Melbourne, Victoria 3000, Australia.',
        'type' => 'text',
        'label' => __('Map Marker text', 'alpine'),
        'desc' => __('', 'alpine'),
      )
    ),
    'shortcode' => '[google_map latitudine="{{latitudine}}" longitudine="{{longitudine}}" zoom="{{zoom}}" marker_title="{{marker_title}}" marker_text="{{marker_text}}"]', 
    'popup_title' => __('Google Map', 'alpine')
);

/*-----------------------------------------------------------------------------------*/
/*	News Config
/*-----------------------------------------------------------------------------------*/

 $categories = get_categories();
 
   foreach($categories as $category) { 
  $array[$category->cat_ID] = $category->name;
  }
$zilla_shortcodes['news'] = array(
	'no_preview' => true,
		'params' => array(
			'number_posts' => array(
				'std' => '3',
				'type' => 'text',
				'label' => __('Number of posts', 'alpine'),
				'desc' => __('', 'alpine'),
			),
			'category' => array(
				'std' => '',
				'type' => 'select',
				'label' => __('Category', 'alpine'),
				'desc' => __('', 'alpine'),
				'options' => $array,
			),

		),
		'shortcode' => '[news  number_posts="{{number_posts}}" category="{{category}}"]',	'popup_title' => __('News', 'alpine')
);

/*-----------------------------------------------------------------------------------*/
/*  Video Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['video'] = array(
  'no_preview' => true,
  'params' => array(
    'content' => array(
      'std' => '',
      'type' => 'text',
      'label' => __('Video Iframe', 'alpine'),
      'desc' => __('Add Youtube or Vimeo iframe', 'alpine'),
    )
    
  ),
  'shortcode' => '[video] {{content}} [/video]',
  'popup_title' => __('Insert Video Shortcode', 'alpine')
);

?>