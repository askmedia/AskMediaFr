<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'header_settings',
        'title'       => 'General Options'
      ),
      array(
        'id'          => 'typography',
        'title'       => 'Typography'
      ),
      array(
        'id'          => 'preload',
        'title'       => 'Preload'
      ),
      array(
        'id'          => 'style',
        'title'       => 'Style'
      ),
      array(
        'id'          => 'logo_favicon',
        'title'       => 'Logo & Favicon'
      ),
      array(
        'id'          => 'main_menu',
        'title'       => 'Main menu'
      ),
      array(
        'id'          => 'dynamic_css',
        'title'       => 'Dynamic Css'
      ),
      array(
        'id'          => '404_page',
        'title'       => '404 Page'
      ),
      array(
        'id'          => 'footer',
        'title'       => 'Footer'
      ),
      array(
        'id'          => 'blog',
        'title'       => 'Blog'
      ),
      array(
        'id'          => 'contact_settings',
        'title'       => 'Contact'
      )
    ),
    
    'settings'        => array( 
      array(
        'id'          => 'site_name',
        'label'       => 'Site Name',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'site_description',
        'label'       => 'Site Description',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'meta_description',
        'label'       => 'Meta Description',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'meta_keywords',
        'label'       => 'Meta Keywords',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'tracking_code',
        'label'       => 'Tracking Code',
        'desc'        => 'Paste your Google Analytics (or other) tracking code here. This will by added into the head template',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'before_head',
        'label'       => 'Space before head',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'before_body',
        'label'       => 'Space before body',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_settings',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'general_color',
        'label'       => 'General Color',
        'desc'        => '',
        'std'         => '#0484c9',
        'type'        => 'colorpicker',
        'section'     => 'style',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'button_style',
        'label'       => 'Button Style',
        'desc'        => '',
        'std'         => '#ffd400',
        'type'        => 'select',
        'section'     => 'style',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => '3D Effect',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Standard button',
            'src'         => ''
          )
        ),
      ),
      
      array(
        'id'          => 'favicon',
        'label'       => 'Custom Favicon',
        'desc'        => 'It\'s image represent your website favicon (16x16px)',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'logo_favicon',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'logo_image',
        'label'       => 'Logo image',
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'logo_favicon',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'enable_preloader',
        'label'       => 'Enable Preloader',
        'desc'        => '',
        'std'         => '1',
        'type'        => 'select',
        'section'     => 'preload',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'loader_bg',
        'label'       => 'Preloader background color',
        'desc'        => '',
        'std'         => '#222222',
        'type'        => 'colorpicker',
        'section'     => 'preload',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'loader_icon',
        'label'       => 'Preloader icon',
        'desc'        => 'Size required <strong>65x65 pixel</strong>. For more icon <a href="http://preloaders.net/" target="_blank">http://preloaders.net/</a>',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'preload',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'menu_position',
        'label'       => 'Menu Position',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '2',
            'label'       => 'After Header',
            'src'         => ''
          ),
          array(
            'value'       => '1',
            'label'       => 'Top',
            'src'         => ''
          )
        ),
      ),
      
      array(
        'id'          => 'nav_text_font',
        'label'       => 'Navigation Text Font',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'nav_background_color',
        'label'       => 'Navigation Background Color',
        'desc'        => '',
        'std'         => '#222222',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'nav_color',
        'label'       => 'Navigation Color',
        'desc'        => '',
        'std'         => '#666666',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'nav_hover_color',
        'label'       => 'Navigation Hover Color',
        'desc'        => '',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'nav_active_color',
        'label'       => 'Navigation Active Color',
        'desc'        => '',
        'std'         => '#222222',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'nav_bg_active_color',
        'label'       => 'Navigation background Active Color',
        'desc'        => '',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'sub_nav_background_color',
        'label'       => 'Sub Navigation Background Color',
        'desc'        => '',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'sub_nav_color',
        'label'       => 'Sub Navigation Color',
        'desc'        => '',
        'std'         => '#999999',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'sub_nav_hover_color',
        'label'       => 'Sub Navigation Hover Color',
        'desc'        => '',
        'std'         => '#222222',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'sub_nav_active_color',
        'label'       => 'Sub Navigation Active Color',
        'desc'        => '',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'sub_nav_bg_active_color',
        'label'       => 'Sub Navigation background Active Color',
        'desc'        => '',
        'std'         => '#222222',
        'type'        => 'colorpicker',
        'section'     => 'main_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      
      array(
        'id'          => 'dynamic_css',
        'label'       => 'Dynamic css',
        'desc'        => 'Add dynamic CSS code with values from the theme options. <strong>Only edit if you know what to do!</strong> If you edit this without any knowledge on Option Tree dynamic css including it might break the theme! <br><br> To work file <strong>dynamick.css</strong> need permission <strong>777</strong>.<br><strong>dynamick.css</strong> is located in the theme folder.',
        'std'         => '
a, 
.section-title h1 i, 
.contact-content h1 i, 
.pricing-box li h1, 
.circular-pie span, 
.circ_counter_desc .lead, 
.slide-content h1 strong, 
.timeline-content #timeline .post-body .blog-title h1 a:hover, 
.service-items a:hover, 
.service-items a:hover h3, 
.form-group label.error, 
.blog-content a:hover, 
.panel-group .panel-heading a, 
.panel-group .panel-heading a:hover, 
.media .media-body .lead,
.social-link span,
.parallax-background-color-content .mybutton2 a, 
.parallax-background-color-content .mybutton2 button,
.parallax-background-color-content .mybutton a span, 
.parallax-background-color-content .mybutton button span,
.parallax-background-color-content .hi-icon:hover,
#wp-calendar caption,
.widget_recent_comments a,
.widget a abbr,
.widget a:hover,
.widget_rss a,
.widget_rss cite,
#wp-calendar #prev:hover,
#wp-calendar #next:hover{ color:{{general_color}}; }

.nav-tabs > li > a, 
.form-group .form-control.error, 
.form-group .form-control.error:focus { border-color: {{general_color}};}

.call-number, 
.pager .pagination li a:hover, 
.pricing-box .pricing-featured li.price-row, 
.comment-pagination a:hover, 
.pager .puls a:hover, 
.pager ul li a:hover, 
.content-box a:hover, 
.comment-respond form p.form-submit input:hover, 
.progress .progress-bar, 
.section-title .lead strong, 
.parallax-background-color, 
.hi-icon-effect-1 .hi-icon, 
.no-touch .hi-icon-effect-1 .hi-icon:hover, 
.mybutton a span, 
.mybutton button span, 
.csstransforms3d .mybutton a:hover span::before, 
.csstransforms3d .mybutton button:hover span::before, 
.csstransforms3d .mybutton a span::before, 
.csstransforms3d .mybutton button span::before, 
.mybutton2 a,
.mybutton2 button,
.nav-tabs > li > a,
#wp-calendar tbody td a,
.post-tags a:hover{ background-color:{{general_color}}; }

.hi-icon-effect-1 .hi-icon:after { box-shadow: 0 0 0 4px {{general_color}};}


/* MENU */
#navigation{ background:{{nav_background_color}};} /* [1] */
.navbar .navbar-nav > li > a { color: {{nav_color}};} /* [2] */
.navbar .navbar-nav > li > a:focus, .navbar .navbar-nav > li > a:hover { color: {{nav_hover_color}};} /* [3] */
.navbar .navbar-nav > .current-menu-item > a, 
.navbar .navbar-nav > .current-menu-item > a:hover, 
.navbar .navbar-nav > .current-menu-item > a:focus,
.navbar .navbar-nav > .current-menu-ancestor > a,
.navbar .navbar-nav > .current-menu-ancestor > a:hover, 
.navbar .navbar-nav > .current-menu-ancestor > a:focus,
.navbar .navbar-nav > .current-menu-parent > a,
.navbar .navbar-nav > .current-menu-parent > a:hover, 
.navbar .navbar-nav > .current-menu-parent > a:focus{ color: {{nav_active_color}}; background: {{nav_bg_active_color}};} /* [4 - 5] */
.navbar-default .navbar-toggle{color: {{nav_bg_active_color}};} /* [5] */
.navbar .navbar-nav ul{ background:{{sub_nav_background_color}};} /* [6] */
.navbar .navbar-nav .sub-menu li a{ color:{{sub_nav_color}};} /* [7] */
.navbar .navbar-nav .sub-menu > li > a:hover, .sub-menu > li > a:focus{ color:{{sub_nav_hover_color}};} /* [8] */
.navbar .navbar-nav .sub-menu .current-menu-ancestor > a,
.navbar .navbar-nav .sub-menu .current-menu-ancestor > a:hover,
.navbar .navbar-nav .sub-menu .current-menu-ancestor > a:focus,
.navbar .navbar-nav .sub-menu .current-menu-parent > a,
.navbar .navbar-nav .sub-menu .current-menu-parent > a:hover,
.navbar .navbar-nav .sub-menu .current-menu-parent > a:focus,
.navbar .navbar-nav .sub-menu .current-menu-item > a,
.navbar .navbar-nav .sub-menu .current-menu-item > a:hover,
.navbar .navbar-nav .sub-menu .current-menu-item > a:focus{ background:{{sub_nav_active_color}}; color:{{sub_nav_bg_active_color}};} /* [9 - 10] */

@media (max-width: 767px) {
  .navbar .navbar-nav .sub-menu li a{ color: {{nav_color}};} /* [2] */
  .navbar .navbar-nav .sub-menu > li > a:hover, .sub-menu > li > a:focus{ color: {{nav_hover_color}};} /* [3] */
  .navbar .navbar-nav .sub-menu .current-menu-ancestor > a,
  .navbar .navbar-nav .sub-menu .current-menu-ancestor > a:hover,
  .navbar .navbar-nav .sub-menu .current-menu-ancestor > a:focus,
  .navbar .navbar-nav .sub-menu .current-menu-parent > a,
  .navbar .navbar-nav .sub-menu .current-menu-parent > a:hover,
  .navbar .navbar-nav .sub-menu .current-menu-parent > a:focus,
  .navbar .navbar-nav .sub-menu .current-menu-item > a,
  .navbar .navbar-nav .sub-menu .current-menu-item > a:hover,
  .navbar .navbar-nav .sub-menu .current-menu-item > a:focus{ color:{{nav_active_color}}; background:none;} /* [4] */
  .navbar-default .navbar-collapse, .navbar-default .navbar-form,
  .navbar .navbar-nav > li { border-color: {{nav_color}};} /* [4] */
}


.navbar-nav {
{{nav_text_font}}  
} 

.section-content,
.section-content .lead,
.section-title div span,
.parallax .circ_counter_desc p,
.parallax .circ_counter_desc p.lead,
.parallax .circular-pie span,
.team-item .team-element .team-inner .team-detail .team-content{
{{body_text_font}}
}

h1,
.section-title h1,
.parallax h1,
.parallax .number-counters strong{
{{h1}}
}

h2,
.section-title h2,
.parallax h2 {
{{h2}}
}

h3,
.section-title h3,
.parallax h3,
.team-item .team-element .team-inner .team-detail .team-content h3 {
{{h3}}
}

h4 {
{{h4}}
}

h5 {
{{h5}}
}

h6 {
{{h6}}
}',
        'type'        => 'css',
        'section'     => 'dynamic_css',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => '404_title_text',
        'label'       => '404 Title Text',
        'desc'        => '',
        'std'         => 'ooops... error 404',
        'type'        => 'text',
        'section'     => '404_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => '404_text',
        'label'       => '404 Text',
        'desc'        => '',
        'std'         => 'We`re sorry, but the page you are looking for doesn`t exist.',
        'type'        => 'text',
        'section'     => '404_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'enable_backtop',
        'label'       => 'Enable BackTop',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => '0',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'copyright_text',
        'label'       => 'Copyright Text',
        'desc'        => '',
        'std'         => 'All rights resevered.',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'facebook_url',
        'label'       => 'Facebook URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'twitter_url',
        'label'       => 'Twitter URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'dribbble_url',
        'label'       => 'Dribbble URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'linkedin_url',
        'label'       => 'LinkedIn URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'google_plus_url',
        'label'       => 'Google Plus URL',
        'desc'        => 'If it is empty, icon was disabled.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'default_layout',
        'label'       => 'Default Layout',
        'desc'        => '',
        'std'         => 'right_sidebar',
        'type'        => 'radio-image',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'left_sidebar',
            'label'       => 'Left Sidebar',
            'src'         => get_template_directory_uri().'/assets/php/options/assets/images/layout/left-sidebar.png'
            
            
          ),
          array(
            'value'       => 'right_sidebar',
            'label'       => 'Right Sidebar',
            'src'         => get_template_directory_uri().'/assets/php/options/assets/images/layout/right-sidebar.png'
          )
        ),
      ),
      array(
        'id'          => 'pagination_type',
        'label'       => 'Pagination Type',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Number',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Next & previous',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'enable_author_info',
        'label'       => 'Enable Author Info',
        'desc'        => '',
        'std'         => '1',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Active',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'enable_create_data',
        'label'       => 'Enable Create Data',
        'desc'        => '',
        'std'         => '1',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Active',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'enable_comments_info',
        'label'       => 'Enable Comments Info',
        'desc'        => '',
        'std'         => '1',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Active',
            'src'         => ''
          )
        ),
      ),
      
      array(
        'id'          => 'body_text_font',
        'label'       => 'Body Text Font',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h1',
        'label'       => 'H1',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h2',
        'label'       => 'H2',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h3',
        'label'       => 'H3',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h4',
        'label'       => 'H4',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h5',
        'label'       => 'H5',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'h6',
        'label'       => 'H6',
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'form_title',
        'label'       => 'Form title',
        'desc'        => '',
        'std'         => 'Do you have any idea in mind? Contact us, we will give you the answer you expect.',
        'type'        => 'text',
        'section'     => 'contact_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '', 
        'class'       => ''
      ),
      array(
        'id'          => 'contact_email',
        'label'       => 'Contact email',
        'desc'        => 'Email address that contact form will send message to',
        'std'         => 'info@creative-ispiration.com',
        'type'        => 'text',
        'section'     => 'contact_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '', 
        'class'       => ''
      ),
      array(
        'id'          => 'contact_form_name_field',
        'label'       => 'Contact Form Name Field',
        'desc'        => "Select field's state",
        'std'         => '',
        'type'        => 'select',
        'section'     => 'contact_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Shown, required',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Shown, not required',
            'src'         => ''
          ),
          array(
            'value'       => '3',
            'label'       => 'Hidden',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'contact_form_email_field',
        'label'       => 'Contact Form Email Field',
        'desc'        => "Select field's state",
        'std'         => '',
        'type'        => 'select',
        'section'     => 'contact_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Shown, required',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Shown, not required',
            'src'         => ''
          ),
          array(
            'value'       => '3',
            'label'       => 'Hidden',
            'src'         => ''
          )
        ),
      ),
      array(
        'id'          => 'contact_form_phone_field',
        'label'       => 'Contact Form Phone Field',
        'desc'        => "Select field's state",
        'std'         => '',
        'type'        => 'select',
        'section'     => 'contact_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => '1',
            'label'       => 'Shown, required',
            'src'         => ''
          ),
          array(
            'value'       => '2',
            'label'       => 'Shown, not required',
            'src'         => ''
          ),
          array(
            'value'       => '3',
            'label'       => 'Hidden',
            'src'         => ''
          )
        ),
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}