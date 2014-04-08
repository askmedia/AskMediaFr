<?php

/*-----------------------------------------------------------------------------------*/
/*  Column Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('col1')) {
  function col1( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-1 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col1', 'col1');
}

if (!function_exists('col2')) {
  function col2( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };

    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-2 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col2', 'col2');
}

if (!function_exists('col3')) {
  function col3( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-3 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col3', 'col3');
}

if (!function_exists('col4')) {
  function col4( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-4 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col4', 'col4');
}

if (!function_exists('col5')) {
  function col5( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-5 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col5', 'col5');
}

if (!function_exists('col6')) {
  function col6( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-6 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col6', 'col6');
}

if (!function_exists('col7')) {
  function col7( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-7 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col7', 'col7');
}

if (!function_exists('col8')) {
  function col8( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-8 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col8', 'col8');
}

if (!function_exists('col9')) {
  function col9( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-9 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col9', 'col9');
}

if (!function_exists('col10')) {
  function col10( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-10 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col10', 'col10');
}

if (!function_exists('col11')) {
  function col11( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-11 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col11', 'col11');
}

if (!function_exists('col12')) {
  function col12( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'animation_type' => '',
      'align_content' => ''
      ), $atts));
    switch($animation_type){
      case 'top':
        $animation_type = '<div class="item_top">' . do_shortcode($content) . '</div>';
        break;
      case 'right':
        $animation_type = '<div class="item_right">' . do_shortcode($content) . '</div>';
        break;
      case 'bottom':
        $animation_type = '<div class="item_bottom">' . do_shortcode($content) . '</div>';
        break;
      case 'left':
        $animation_type = '<div class="item_left">' . do_shortcode($content) . '</div>';
        break;
      case 'none':
        $animation_type = do_shortcode($content);
        break;
    };
    $class="";
    if($align_content == 'center'){
      $class=" text-center";
    }

    return '<div class="col-md-12 column'.$class.'">' .$animation_type. '</div>';
  }
  add_shortcode('col12', 'col12');
}

/*-----------------------------------------------------------------------------------*/
/*  Buttons
/*-----------------------------------------------------------------------------------*/

if (!function_exists('zilla_button')) {
  function zilla_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'url' => '#',
      'target' => '_self',
      'size' => 'medium'
      ), $atts));

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    return '<div class="'.$button_style.' '.$size.'"><a href="'.$url.'" target="'.$target.'"> <span data-hover="'.do_shortcode($content).'">'.do_shortcode($content).'</span></a></div>';
  }
  add_shortcode('zilla_button', 'zilla_button');
}


/*-----------------------------------------------------------------------------------*/
/*  Alerts
/*-----------------------------------------------------------------------------------*/

if (!function_exists('alert')) {
  function alert( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'style'   => ''
      ), $atts));

     return '<div class="alert '.$style.' alert-dismissable">' . do_shortcode($content) . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
  }
  add_shortcode('alert', 'alert');
}


/*-----------------------------------------------------------------------------------*/
/*  Tabs Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('tabs')) {
  function tabs( $atts, $content = null ) {
    $defaults = array();
    extract( shortcode_atts( $defaults, $atts ) );

    STATIC $i = 0;
    $i++;

    // Extract the tab titles for use in the tab widget.
    preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

    $tab_titles = array();
    if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
    $output = '';

    if( count($tab_titles) ){
      //$output .= '<div id="tabs-'. $i .'" class="tabs">';
      $output .= '<ul class="nav-tabs">';
      foreach( $tab_titles as $tab ){
        STATIC $count_element = 0;
        $count_element++;

        if($count_element <= 1){
          $class=" class='active'";
        }else{
          $class="";
        }

        $output .= '<li'.$class.'><a data-toggle="tab" href="#tab'.sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
      }

      $output .= '</ul>';
      $output .= '<div class="tab-content">';
      $output .= do_shortcode( $content );
      $output .= '</div>';
      //$output .= '</div>';

    } else {
      $output .= do_shortcode( $content );
    }

    return $output;
  }
  add_shortcode( 'tabs', 'tabs' );
}

if (!function_exists('tab')) {
  function tab( $atts, $content = null ) {
    $defaults = array( 'title' => 'Tab' );
    extract( shortcode_atts( $defaults, $atts ) );

    STATIC $count_element = 0;
    $count_element++;

    if($count_element <= 1){
      $class="active in";
    }else{
      $class="";
    }

    return '<div id="tab'. sanitize_title( $title ) .'" class="tab-pane fade '.$class.'">'. do_shortcode( $content ) .'</div>';
  }
  add_shortcode( 'tab', 'tab' );
}


/*-----------------------------------------------------------------------------------*/
/*  Accordions Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('accordions')) {
  function accordions( $atts, $content = null ) {
    $defaults = array();
    extract( shortcode_atts( $defaults, $atts ) );

    $output = '<div class="panel-group" id="accordion">';
    $output .= do_shortcode( $content );
    $output .= '</div>';

    return $output;
  }
  add_shortcode( 'accordions', 'accordions' );
}

if (!function_exists('accordion')) {
  function accordion( $atts, $content = null ) {
    $defaults = array( 'title' => 'Tab' );
    extract( shortcode_atts( $defaults, $atts ) );

    STATIC $i = 0;
    $i++;

    if($i > 1){
      $class = "class='collapsed'";
      $class_div = "";
      $fa = "fa-plus";
    }else{
      $class = "";
      $class_div = "in";
      $fa = "fa-minus";
    }

    return '<div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" '.$class.' data-parent="#accordion" href="#collapse'.$i.'">'.$title.'<i class="fa '.$fa.' accordion-icon pull-right"></i></a>
                </h4>
              </div>
              <div id="collapse'.$i.'" class="panel-collapse collapse '.$class_div.'">
                <div class="panel-body">
                  <p>'.do_shortcode( $content ).'</p>
                </div>
              </div>
            </div>';
  }
  add_shortcode( 'accordion', 'accordion' );
}

/*-----------------------------------------------------------------------------------*/
/*  Diagrams Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('diagrams')) {
  function diagrams( $atts, $content = null ) {
    $defaults = array();
    extract( shortcode_atts( $defaults, $atts ) );

    STATIC $i = 0;
    $i++;

    // Extract the tab titles for use in the tab widget.
    preg_match_all( '/diagram title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

    $tab_titles = array();
    if( isset($matches[1]) ){ $tab_titles = $matches[1]; }

    $output = '';


    if( count($tab_titles) ){
        $output .= '<div class="cart">';
        $output .= '  <div class="cart_container">';
        $output .= '    <div class="row">';
        $output .=        do_shortcode( $content );
        $output .= '    </div>';
        $output .= '  </div>';
        $output .= '</div>';
    } else {
      $output .= do_shortcode( $content );
    }

    return $output;
  }
  add_shortcode( 'diagrams', 'diagrams' );
}

if (!function_exists('diagram')) {
  function diagram( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'title'      => 'Title ',
    'percent'  => 'percent',
    'description'  => 'Contrary to popular belief, Lorem Ipsum'
    ), $atts));

    $parallax =  get_post_meta( get_the_ID(),'background_parallax',true );
    if($parallax == 1){
      $color = '#ffffff';
    }else{
      $color = ot_get_option('general_color');
    }
    $percent = $percent+1;
    return '<div class="col-md-4">
              <div class="element-line">
                <div class="circular-content">
                  <div class="circular-item hidden">
                    <div class="circular-pie" data-percent="'.$percent.'" data-color="'.$color.'">
                      <span>'.$percent.'</span>
                    </div>
                    <div class="circ_counter_desc">
                      <p class="lead">'.$title.'</p>
                      <p>'.$description.'</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>';

  }
  add_shortcode( 'diagram', 'diagram' );
}
/*-----------------------------------------------------------------------------------*/
/*  Socian Icons Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('social_icon')) {
  function social_icon( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'title'  => '',
      'icon'   => '',
      'payoff' => "",
      'url'    => ""
      ), $atts));

      return '<div class="element-line">
                <div class="social-link">
                  <div class="text-center">
                    <div class="hi-icon-effect-1">
                      <a href="'.$url.'" target="_blank" class=""> <i class="hi-icon fa '.$icon.' fa-4x"></i> </a>
                    </div>
                    <span>'.$title.'</span>
                    <p class="lead hidden-xs">'.$payoff.'</p>
                  </div>
                </div>
              </div>';
  }
  add_shortcode('social_icon', 'social_icon');
}

/*-----------------------------------------------------------------------------------*/
/* Content Box Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('content_box')) {
  function content_box( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'title'   => 'Title',
      'icon' => '',
      'link' => '',
      'style' => '',
      'text_color'=>''
      ), $atts));

    $icon_code = '';

    if($style =='style1'){
      if(!empty($icon)) $icon_code = '<i class="fa '.$icon.' fa-4x"></i>';
    }elseif($style =='style2'){
      if(!empty($icon)) $icon_code = '<i class="fa '.$icon.' fa-5x"></i>';
    }


     if($style =='style1'){
        return '
        <div class="element-line">
          <div class="content-box text-center '.$text_color.'">
            <a href="'.trim($link).'">
              '.$icon_code.'
              <h4>'. $title .'</h4>
              <p>'.do_shortcode( $content ).'</p>
            </a>
          </div>
        </div>'
     ;}
     elseif($style =='style2'){
        return '
        <div class="element-line">
          <div class="service-items text-center '.$text_color.'">
            <a href="'.trim($link).'">
              '.$icon_code.'
              <h3>'. $title .'</h3>
            </a>
            <p>'.do_shortcode( $content ).'</p>
          </div>
        </div>'
    ;}
  }
  add_shortcode('content_box', 'content_box');
}

/*-----------------------------------------------------------------------------------*/
/* Image Box Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('image_box')) {
  function image_box( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'image'   => '',
      'image_style'   => '',
      'url'   => '',
      'title'   => '',
      'image_animation' => ""
    ), $atts));

    $icon_code = '';

    if(trim($url != '')){
      $link = 'href="'.$url.'"';
    }else{
      $link = '';
    }

    return '
    <div class="element-line">
      <div class="media">
        <a class="pull-left '.$image_animation.'" '.$link.'> <img class="media-object '.$image_style.'" src="'.$image.'" alt="'.$title.'"> </a>
        <div class="media-body text-left">
          <h3 class="media-heading">'.$title.'</h3>
          <p>'.do_shortcode($content).'</p>
        </div>
      </div>
    </div>';

  }
  add_shortcode('image_box', 'image_box');
}

/*-----------------------------------------------------------------------------------*/
/* Number Details Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('number_details')) {
  function number_details( $atts, $content = null ) {
    extract(shortcode_atts(array(
      'icon'   => 'fa-thumbs-o-up',
      'number'   => '100',
      'number_details' => ''
      ), $atts));

     return '<div class="number-counters text-center">
               <div class="counters-item element-line">
                 <i class="fa '.$icon.' fa-4x"></i>
                 <strong data-to="'.$number.'">'.$number.'</strong>
                 <p class="lead">'.$number_details.'</p>
               </div>
             </div>';
  }
  add_shortcode('number_details', 'number_details');
}

/*-----------------------------------------------------------------------------------*/
/* Divider Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('divider')) {
  function divider( $atts, $content = null ) {
    extract(shortcode_atts(array(

      ), $atts));

     return '<hr><div class="element-line"></div>';
  }
  add_shortcode('divider', 'divider');
}

/*-----------------------------------------------------------------------------------*/
/* Pricing Tables Shortcodes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('pricing_table')) {
  function pricing_table( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    'column_type' => '0',
    'title' => 'Basic',
    'price' => '99',
    'value' => '$',
    'subtitle_price'=>'per month',
    'link' => '',
    'button_text' => 'Sign Up Now',
    'animation_type' => '',
    ),$atts));

    if($column_type == 0){
      $class ="";
      $class_content = "";
    }else{
      $class = "class='pricing-featured'";
      $class_content = " main";
    }

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    if($animation_type != 'none'){
      $class_anim ="class='item_{$animation_type}'";
    }else{
      $class_anim ="";
    }

    $table = '';
    $table .='<div class="pricing-box'.$class_content.'">';
    $table .='  <div '.$class_anim.'>';
    $table .='    <div class="element-line">';
    $table .='      <ul '.$class.'>';
    $table .='        <li class="title-row">';
    $table .='          <h4>'.$title.'</h4>';
    $table .='        </li>';
    $table .='        <li class="price-row">';
    $table .='          <h1>'.$value.$price.'</h1>';
    $table .='          <span>'.$subtitle_price.'</span>';
    $table .='        </li>';
    $table .= do_shortcode($content);
    if(trim($link)!= ''){
      $table .= '     <li class="btn-row">';
      $table .= '       <div class="'.$button_style.' small">';
      $table .= '         <a href="'.$link.'">';
      $table .= '           <span data-hover="'.$button_text.'">'.$button_text.'</span>';
      $table .= '         </a>';
      $table .= '       </div>';
      $table .= '     </li>';
    }
    $table .='      </ul>';
    $table .='    </div>';
    $table .='  </div>';
    $table .='</div>';

    return $table;
  }

  function price_option( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    '' => '',
    ),$atts));
    if(trim($content) != ''){
      $content = '<li>'.$content.'</li>';
    }
    return $content;
  }
  add_shortcode('pricing_table','pricing_table');
  add_shortcode('price_option','price_option');
}


/*-----------------------------------------------------------------------------------*/
/* Intro video background Shortcodes [1]
/*-----------------------------------------------------------------------------------*/


if (!function_exists('intro_video')) {
  function intro_video( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(

    'label1' => '',
    'label2' => '',
    'abstract' => '',
    'label_button' => '',
    'link_button' => '',
    'url_video' => '',
    'background_mobile' => '',
    'start' => '0',
    'volume' => 'true',

    ),$atts));

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    if(trim($url_video)!=''){
      $start = intval($start);


      if(trim($background_mobile)!=''){
        $background = "<div class='video-mobile' style='background-image:url($background_mobile);'></div>";
      }else{
        $background = "";
      }

      if(trim($volume == '')){
        $volume = true;
      }

      echo $background.'<div class="intro-video">
        <a id="video-volume" onclick="jQuery(\'#bgndVideo\').toggleVolume()"><i class="fa fa-volume-down"></i></a>
        <a id="bgndVideo" class="player" data-property="{videoURL:\''.$url_video.'\',containment:\'body\',autoPlay:true, mute:'.$volume.', startAt:'.$start.', opacity:1}"></a>
        <div class="intro-text-slider">
          <div class="text-slider">
            <div class="intro-item">
              <div class="section-title text-center">';
                if(!empty($label1)):
                echo '<div class="hidden-xs"><span class="line big"></span><span>'.$label1.'</span><span class="line big"></span></div>';
                endif;
                echo'<ul class="textbxslider">'.do_shortcode($content).'</ul>';
                if(!empty($label2)):
                echo '<div class="hidden-xs"><span class="line"></span><span>'.$label2.'</span><span class="line"></span></div>';
                endif;
                if(!empty($abstract)):
                echo '<p class="lead">'.$abstract.'</p>';
                endif;
              echo '</div>';
              if(!empty($label_button)):
              echo '<div class="'.$button_style.' ultra main-button"><a class="start-button" href=""> <span data-hover="'.$label_button.'">'.$label_button.'</span> </a></div>';
              endif;
            echo'</div>
          </div>
        </div>
      </div>';
    }
  }

  function title_option( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    'title1' => '',
    ),$atts));

    if(trim($content)!=''):
      $content = '<i>'.$content.'</i>';
    endif;

    if(trim($title1)!='' or trim($content)!=''){
      return '<li><h1>'.$title1.$content.'</h1></li>';
    }
  }
  add_shortcode('intro_video','intro_video');
  add_shortcode('title_option','title_option');
}


/*-----------------------------------------------------------------------------------*/
/* Fullscreen slider Shortcodes [2]
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fullscreen_slider')) {
  function fullscreen_slider( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    ),$atts));
    echo '<div id="fullscreen-slider">';
    echo    do_shortcode($content);
    echo '</div>';
  }

  function slider_item( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    'image' => '',
    'label1' => '',
    'label2' => '',
    'title1' => '',
    'title2' => '',
    'abstract' => '',
    'label_button' => '',
    'link_button' => '',
    ),$atts));

    if(trim($title2)!=''):
      $title2 = '<i>'.$title2.'</i>';
    endif;

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    if(trim($image)!=''){
      echo '<div class="slider-item">
          <img src="'.$image.'" alt="">
          <div class="pattern">
            <div class="slide-content">
              <div class="section-title text-center">';
                if(!empty($label1)):
                echo '<div class="hidden-xs"><span class="line big"></span><span>'.$label1.'</span><span class="line big"></span></div>';
                endif;
                if(!empty($title1) or !empty($title2)):
                echo '<h1>'.$title1.$title2.'</h1>';
                endif;
                if(!empty($label2)):
                echo '<div class="hidden-xs"><span class="line"></span><span>'.$label2.'</span><span class="line"></span></div>';
                endif;
                if(!empty($abstract)):
                echo '<p class="lead">'.$abstract.'</p>';
                endif;
                if(!empty($label_button)):
                echo '<div class="'.$button_style.' ultra main-button"><a class="start-button" href=""> <span data-hover="'.$label_button.'">'.$label_button.'</span> </a></div>';
                endif;
              echo '</div>
            </div>
          </div>
        </div>';
    }
  }

  add_shortcode('fullscreen_slider','fullscreen_slider');
  add_shortcode('slider_item','slider_item');
}



/*-----------------------------------------------------------------------------------*/
/* Fullscreen Text slider Shortcodes [3]
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fullscreen_text_slider')) {
  function fullscreen_text_slider( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    'background' => '',
    'label1' => '',
    'label2' => '',
    'abstract' => '',
    'label_button' => '',
    'link_button' => '',
    ),$atts));

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    if(trim($background)!=''){

      echo '<div id="fullscreen-slider">
              <div class="slider-item">
                <img src="'.$background.'" alt="">
                <div class="pattern"></div>
              </div>
            </div>
            <div class="intro-text-slider">
              <div class="text-slider">
                <div class="intro-item">
                  <div class="section-title text-center">';
                    if(!empty($label1)):
                    echo '<div class="hidden-xs"><span class="line big"></span><span>'.$label1.'</span><span class="line big"></span></div>';
                    endif;
                    echo'<ul class="textbxslider">'.do_shortcode($content).'</ul>';
                    if(!empty($label2)):
                    echo '<div class="hidden-xs"><span class="line"></span><span>'.$label2.'</span><span class="line"></span></div>';
                    endif;
                    if(!empty($abstract)):
                    echo '<p class="lead">'.$abstract.'</p>';
                    endif;
           echo '</div>';
           if(!empty($label_button)):
           echo '<div class="'.$button_style.' ultra main-button"><a class="start-button" href=""> <span data-hover="'.$label_button.'">'.$label_button.'</span> </a></div>';
           endif;
           echo'</div>
              </div>
            </div>';
    }
  }

  function title_slider( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    'title1' => '',
    ),$atts));

    if(trim($content)!=''):
      $content = '<i>'.$content.'</i>';
    endif;

    if(trim($title1)!='' or trim($content)!=''){
      return '<li><h1>'.$title1.$content.'</h1></li>';
    }
  }
  add_shortcode('fullscreen_text_slider','fullscreen_text_slider');
  add_shortcode('title_slider','title_slider');
}


/*-----------------------------------------------------------------------------------*/
/* Fullscreen Image slider Shortcodes [4]
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fullscreen_image_slider')) {
  function fullscreen_image_slider( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    'label1' => '',
    'title1' => '',
    'title2' => '',
    'label2' => '',
    'abstract' => '',
    'label_button' => '',
    'link_button' => '',
    ),$atts));

    if(trim($title2) != ''){
      $title2 = '<i>'.$title2.'</i>';
    }

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    echo '<div id="fullscreen-slider">'.do_shortcode($content).'</div>
          <div class="intro-text-slider">
            <div class="text-slider">
              <div class="intro-item">
                <div class="section-title text-center">';
                  if(!empty($label1)):
                  echo '<div class="hidden-xs"><span class="line big"></span><span>'.$label1.'</span><span class="line big"></span></div>';
                  endif;
                  if(!empty($label1) or !empty($title2)):
                  echo'<ul><li><h1>'.$title1.$title2.'</h1></li></ul>';
                  endif;
                  if(!empty($label2)):
                  echo '<div class="hidden-xs"><span class="line"></span><span>'.$label2.'</span><span class="line"></span></div>';
                  endif;
                  if(!empty($abstract)):
                  echo '<p class="lead">'.$abstract.'</p>';
                  endif;
         echo '</div>';
         if(!empty($label_button)):
         echo '<div class="'.$button_style.' ultra main-button"><a class="start-button" href=""> <span data-hover="'.$label_button.'">'.$label_button.'</span> </a></div>';
         endif;
         echo'</div>
            </div>
          </div>';

  }

  function image_slide( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    '' => '',
    ),$atts));

    return '<div class="slider-item">
              <img src="'.$content.'" alt="">
              <div class="pattern"></div>
            </div>';
  }
  add_shortcode('fullscreen_image_slider','fullscreen_image_slider');
  add_shortcode('image_slide','image_slide');
}


/*-----------------------------------------------------------------------------------*/
/* Team Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('team')) {
  function team( $atts, $content = null ) {
    extract(shortcode_atts(array(

      ), $atts));
    $the_query = new WP_Query( 'post_type=team&posts_per_page=13');
    if($the_query->have_posts()) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
      $facebook = get_post_meta( get_the_ID(),'facebook',true );
      $twitter = get_post_meta( get_the_ID(),'twitter',true );
      $googleplus = get_post_meta( get_the_ID(),'googleplus',true );
      $linkedin = get_post_meta( get_the_ID(),'linkedin',true );
      $dribble = get_post_meta( get_the_ID(),'dribble',true );
      $job = get_post_meta( get_the_ID(),'job',true );
      $animation = get_post_meta( get_the_ID(),'animation_type',true );
      $image = get_the_post_thumbnail(get_the_ID(),'team-image', array('class' => 'img-responsive') );
      $image = preg_replace("# src=\"#", ' src="'.get_template_directory_uri().'/assets/images/bg.png" data-src="', $image);

      if($image != ''):
      echo '<div class="col-md-3 col-sm-3 col-md-3 col-xs-12 team-item">
              <div class="element-line">
                <div class="'.$animation.'">
                  <div class="img-rounded team-element zoom">
                    <div class="team-inner">
                      <div class="team-detail">
                        <div class="team-content">
                          <h3><strong>'.get_the_title().'</strong></h3>
                          <p>'.$job.'</p>
                          <ul>';
                            if(!empty($facebook)):
                              echo '<li><a href="'.$facebook.'" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>';
                            endif;
                            if(!empty($twitter)):
                              echo '<li><a href="'.$twitter.'" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>';
                            endif;
                            if(!empty($dribble)):
                              echo '<li><a href="'.$dribble.'" target="_blank"><i class="fa fa-dribbble fa-2x"></i></a></li>';
                            endif;
                            if(!empty($linkedin)):
                              echo '<li><a href="'.$linkedin.'" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>';
                            endif;
                            if(!empty($googleplus)):
                              echo '<li><a href="'.$googleplus.'" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a></li>';
                            endif;
                          echo '</ul>
                        </div>
                      </div>
                    </div>
                    '.$image.'
                  </div>
                </div>
              </div>
            </div>';
        endif;
      endwhile;
    endif;
  }
  add_shortcode('team', 'team');
}
/*-----------------------------------------------------------------------------------*/
/* Clients Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('clients')) {
  function clients( $atts, $content = null ) {
    extract(shortcode_atts(array(

      ), $atts));
    $the_query = new WP_Query( 'post_type=clients&posts_per_page=50');

      echo '<div class="element-line">
              <div class="item_right">
                <div id="owl-client" class="owl-carousel">';

      if($the_query->have_posts()) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $image = get_post_meta( get_the_ID(),'image',true );
        $url_client = get_post_meta( get_the_ID(),'url_client',true );

        $bg = get_template_directory_uri().'/assets/images/bg.png';

        $myclient = <<<RETURN
        <div class="item">
          <a href="{$url_client}" class="zoom" target="_blank"> <img class="client-logo img-responsive" src="{$bg}" data-src="{$image}" alt=""> </a>
        </div>
RETURN;


        echo $myclient;
        endwhile;
      endif;
      echo '</div>
          </div>
        </div>';

    wp_reset_query();
  }
  add_shortcode('clients', 'clients');
}



/*-----------------------------------------------------------------------------------*/
/*  Testimonials Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('testimonial')) {
  function testimonial( $atts, $content = null ) {
    extract(shortcode_atts(array(

      ), $atts));
    $the_query = new WP_Query( 'post_type=testimonial&posts_per_page=10');

    echo '<div class="col-md-8 col-md-offset-2">
            <div class="element-line">
              <div class="owl-single owl-carousel text-center">';

    if($the_query->have_posts()) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
      $image = get_the_post_thumbnail(get_the_ID(),'testimonial-thumb', array('class' => 'img-circle img-center img-responsive') );

      $description = get_post_meta( get_the_ID(),'description',true );
      $company = get_post_meta( get_the_ID(),'company',true );

      echo '<div class="item">
              '.$image.'
              <h2>'.get_the_title().'</h2>
              <p>'.$description.'</p>
              <p class="lead">'.$company.'</p>
            </div>';
      endwhile;
    endif;

    echo '  </div>
          </div>
        </div>';

    wp_reset_query();
  }
  add_shortcode('testimonial', 'testimonial');
}

/*-----------------------------------------------------------------------------------*/
/*  Service Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('service')) {
  function service( $atts, $content = null ) {
    extract(shortcode_atts(array(

      ), $atts));
    $the_query = new WP_Query( 'post_type=service&posts_per_page=10');

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    echo '<div class="col-md-10 col-md-offset-1">
            <div class="element-line">
              <div class="owl-single owl-carousel">';

      if($the_query->have_posts()) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
      $image = get_the_post_thumbnail(get_the_ID(),'service-image', array('class' => 'img-responsive img-center img-rounded') );


      $description = get_post_meta( get_the_ID(),'description',true );
      $link = get_post_meta( get_the_ID(),'link',true );
      $text_link = get_post_meta( get_the_ID(),'text_link',true );

      echo '<div class="item service-element">
              <div class="row">
                <div class="col-md-7">'.$image.'</div>
                <div class="col-md-5">
                  <h2>'.get_the_title().'</h2>
                  <p class="lead">'.$description.'</p>';
                  if(get_post_meta(get_the_ID(), 'link')):
                  echo '<br /><div class="'.$button_style.' medium"><a href="'.$link.'"> <span data-hover="'.$text_link.'">'.$text_link.'</span> </a></div>';
                  endif;
          echo '</div>
              </div>
            </div>';
      endwhile;
    endif;

    echo '</div>
        </div>
      </div>';

    wp_reset_query();
  }
  add_shortcode('service', 'service');
}

/*-----------------------------------------------------------------------------------*/
/* Portfolio Shortcodes
/*-----------------------------------------------------------------------------------*/


if (!function_exists('portfolio')) {
  function portfolio( $atts, $content = null ) {
    extract(shortcode_atts(array(
      ), $atts));
    wp_reset_query();
    $the_query_portfolio = new WP_Query( 'post_type=portfolio&posts_per_page=50');

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    //$term_list_name = wp_get_post_terms(get_the_ID(), 'portfolio-category', array("fields" => "names"));

    echo '<div id="portfolio-container">
            <div class="section portfoliocontent">
              <section id="options">
                <div class="element-line">
                  <div id="filters" class="'.$button_style.' small">
                    <a class="folio-btn" href="#" data-filter="*"><span data-hover="'.__('Show all','alpine').'">'.__('Show all','alpine').'</span></a>';
                    $terms = get_terms('portfolio-category','hide_empty=0');
                    $count = count($terms);
                    if ( $count > 0 ){
                      foreach ( $terms as $term ) {
                        echo '<a class="folio-btn" href="#" target="_blank" data-filter=".'.$term->slug.'"><span data-hover="'. $term->name .'">'. $term->name .'</span></a>';
                      }
                    }
            echo '</div>
                </div>
              </section>
              <div id="portfolio-wrap">
                <div class="inici portfolio-item"></div>';
                if($the_query_portfolio->have_posts()) :
                while ($the_query_portfolio->have_posts() ) : $the_query_portfolio->the_post();
                  $embed_video =  get_post_meta( get_the_ID(),'embed_video',true );
                  if(trim($embed_video == '')){
                    $class_awesome = "fa-bars";
                  }else{
                    $class_awesome = "fa-youtube-play";
                  }

                  $term_list = wp_get_post_terms(get_the_ID(), 'portfolio-category', array("fields" => "slugs"));
            echo'<div id="'.get_permalink().'" class="portfolio-item ch-grid ';
                    foreach ($term_list as  $terms   ){ echo $terms.' '; }
            echo '">';




            echo '<div class="portfolio">
                    <a class="zoom">';
                      echo preg_replace("# src=\"#", ' src="'.get_template_directory_uri().'/assets/images/bg.png" data-src="', get_the_post_thumbnail(get_the_ID(),'portfolio-thumb'));
                      echo '<div class="hover-items">
                        <span>
                          <i class="fa '.$class_awesome.' fa-4x"></i>
                          <em class="lead">'.get_the_title().'</em>';
                          $term_list_name = wp_get_post_terms(get_the_ID(), 'portfolio-category', array("fields" => "names"));
                    echo '<em>';
                          $i =0;
                          foreach ($term_list_name as  $terms   ){
                            echo $terms;
                            if($i < count($term_list_name)-1){
                              echo ' / ';
                            }
                            $i++;
                          };
                     echo'</em>
                        </span>
                      </div>
                    </a>
                  </div>
                </div>';
                endwhile;
                endif;
          echo '<div class="final portfolio-item"></div>
              </div>
              <div id="project-show"></div>
              <section class="project-window">
                <div class="project-content"></div><!-- AJAX Dinamic Content -->
              </section>
            </div>
          </div>';
  }
  add_shortcode('portfolio', 'portfolio');
}

/*-----------------------------------------------------------------------------------*/
/* Portfolio gallery Shortcodes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('portfolio_gallery')) {
  function portfolio_gallery( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    ),$atts));

    echo '<div class="owl-portfolio">';
    echo    do_shortcode($content);
    echo '</div>';
  }

  function slider_portfolio( $atts, $content = null ) {
    $atts = extract(shortcode_atts(array(
    'image' => '',
    ),$atts));

    if(trim($image)!=''){
      echo '<img class="img-responsive img-center img-rounded" src="'.$image.'" alt="" />';
    }
  }

  add_shortcode('portfolio_gallery','portfolio_gallery');
  add_shortcode('slider_portfolio','slider_portfolio');
}

/*-----------------------------------------------------------------------------------*/
/*  Contact Form Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('contact_form')) {
  function contact_form( $atts, $content = null ) {
    extract(shortcode_atts(array(
      ), $atts));

    if(ot_get_option('button_style')!= 2){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }

    if(ot_get_option('contact_form_name_field')!= 3){
      if(ot_get_option('contact_form_name_field')== 1){
        $class="required";
      }else{
        $class="";
      }
      $field = "<div class='form-group'>\n";
      $field .= "  <label for='name'>".__('Name','alpine')."</label>\n";
      $field .= "  <input type='text' name='name' id='name' class='form-control input-lg $class' placeholder='".__('Enter name','alpine')."'>\n";
      $field .= "</div>\n";
    }

    if(ot_get_option('contact_form_email_field')!= 3){
      if(ot_get_option('contact_form_email_field')== 1){
        $class="required";
      }else{
        $class="";
      }
      $field .= "<div class='form-group'>\n";
      $field .= "  <label for='email'>".__('Email','alpine')."</label>\n";
      $field .= "  <input type='email' name='email' id='email' class='form-control input-lg $class email' placeholder='".__('Enter email','alpine')."'>\n";
      $field .= "</div>\n";
    }

    if(ot_get_option('contact_form_phone_field')!= 3){
      if(ot_get_option('contact_form_phone_field')== 1){
        $class="required";
      }else{
        $class="";
      }
      $field .= "<div class='form-group'>\n";
      $field .= "  <label for='phone'>".__('Phone','alpine')."</label>\n";
      $field .= "  <input type='text' name='phone' id='phone' class='form-control input-lg $class' placeholder='".__('Enter phone','alpine')."'>\n";
      $field .= "</div>\n";
    }




     $send_mail_script = get_template_directory_uri()."/assets/php/send_mail.php";

     $send_label  = __('Email Sent Successfully','alpine');
     $send_desc   = __('Your message has been submitted.','alpine');
     $error_label = __('Error sending.','alpine');
     $error_desc  = __('Try again later.','alpine');
     $val_req     = __('This field is required.','alpine');
     $val_email   = __('Please enter a valid email address.','alpine');


     $mailer = <<<MAIL
     <script type="text/javascript">
       jQuery(document).ready(function() {

        jQuery.validator.messages.required="{$val_req}";
        jQuery.validator.messages.email="{$val_email}";

        jQuery(".validate").validate();
        jQuery(document).on('submit', '#contactform', function() {
          jQuery.ajax({
            url : '{$send_mail_script}',
            type : 'post',
            dataType : 'json',
            data : jQuery(this).serialize(),
            success : function(data) {
              if (data == true) {
                jQuery('.form-respond').html("<div class='content-message'> <i class='fa fa-rocket fa-4x'></i> <h2>{$send_label}</h2> <p>{$send_desc}</p> </div>");
              } else {
                jQuery('.form-respond').html("<div class='content-message'> <i class='fa fa-times fa-4x'></i> <h2>{$error_label}</h2> <p>{$error_desc}</p> </div>");
              }
            },
            error : function(xhr, err) {
              jQuery('.form-respond').html("<div class='content-message'> <i class='fa fa-times fa-4x'></i> <h2>{$error_label}</h2> <p>{$error_desc}</p> </div>");
            }
          });
          return false;
        });
      });
    </script>
MAIL;

    return
    $mailer.'
    <div class="container">
      <div class="element-line text-center">
        <p class="lead" style="margin:0;">'.ot_get_option('form_title').'</p>
      </div>
    </div>
    <form method="post" name="contactform" id="contactform" class="element-line validate" role="form">
      <div class="container">
        <div class="form-respond text-center"></div>
      </div>
      <input type="hidden" name="my_email" value="'.ot_get_option('contact_email').'" />
      <input type="hidden" name="object_email" value="'.ot_get_option('site_name').' '.ot_get_option('site_description').'" />
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-md-6 col-xs-12">
            <div class="item_top">
              '.$field.'
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-md-6 col-xs-12">
            <div class="item_bottom">
              <div class="form-group">
                <label for="message">'.__('Message','alpine').'</label>
                <textarea name="message" id="message" class="form-control input-lg required" rows="9" placeholder="'.__('Enter message','alpine').'"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="action form-button medium">
              <div class="'.$button_style.' medium">
                <button id="submit" type="submit">
                  <span data-hover="'.__('Send message','alpine').'">'.__('Send message','alpine').'</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>';
  }
  add_shortcode('contact_form', 'contact_form');
}

/*-----------------------------------------------------------------------------------*/
/*  Contact Details Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('contact_details')) {
  function contact_details( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'phone' => '',
    'address' => '',
    'fax' => '',
    'mail'=>''
      ), $atts));

    echo '<div class="text-center contact-content">';
    if(trim($phone)){
      echo '<h1><i class="fa fa-mobile fa-5x"></i></h1><span class="call-number">'.$phone.'</span>';
    }
    echo '  <ul class="info-address-list">';
    if(trim($address)){
      echo '  <li class="lead"><span><i class="fa fa-map-marker fa-lg"></i> Address: </span><p>'.$address.'</p></li>';
    }
    if(trim($fax)){
      echo '  <li class="lead"><span><i class="fa fa-print fa-lg"></i> Fax: </span><p>'.$fax.'</p></li>';
    }
    if(trim($mail)){
      echo '  <li class="lead"><span><i class="fa fa-envelope fa-lg"></i> Mail: </span><a href="mailto:'.$mail.'">'.$mail.'</a></li>';
    }
    echo '  </ul></div>';
  }
  add_shortcode('contact_details', 'contact_details');
}

/*-----------------------------------------------------------------------------------*/
/*  Google Map Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('google_map')) {
  function google_map( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'latitudine' => '',
    'longitudine' => '',
    'zoom' => '',
    'marker_title' => '',
    'marker_text' => ''
      ), $atts));


    $marker_image = get_template_directory_uri()."/assets/images/marker.png";
    $map_config = <<<MAP
    <script type="text/javascript">
      jQuery(window).load(function(){
        if(document.getElementById("map_canvas") != null){
          //Google Map
          var latlng = new google.maps.LatLng({$latitudine},{$longitudine});
          var settings = {
            zoom: {$zoom},
            center: new google.maps.LatLng({$latitudine},{$longitudine}), mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            scrollwheel: false,
            draggable: true,
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
            navigationControl: false,
            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
            mapTypeId: google.maps.MapTypeId.ROADMAP};
          var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
          google.maps.event.addDomListener(window, "resize", function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
          });
          var contentString =
            '<div id="content">'+
            '  <h3>{$marker_title}</h3>'+
            '  <div id="bodyContent">'+
            '    <p>{$marker_text}</p>'+
            '  </div>'+
            '</div>';
          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });
          var companyImage = new google.maps.MarkerImage('{$marker_image}',
            new google.maps.Size(63,68), //Width and height of the marker
            new google.maps.Point(0,0),
            new google.maps.Point(31,60) //Position of the marker
          );
          var companyPos = new google.maps.LatLng({$latitudine},{$longitudine});
          var companyMarker = new google.maps.Marker({
            position: companyPos,
            map: map,
            icon: companyImage,
            title:"",
            zIndex: 3});
          google.maps.event.addListener(companyMarker, 'click', function() {
            infowindow.open(map,companyMarker);
          });
        }
      });

    </script>
MAP;

    $result = "<div id='map_canvas' class='element-line'></div>\n";
    $result .= "<script src='http://maps.google.com/maps/api/js?sensor=false' type='text/javascript'></script>\n";
    $result .= $map_config;

    return $result;
  }
  add_shortcode('google_map', 'google_map');
}

/*-----------------------------------------------------------------------------------*/
/*  News Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('news')) {
  function news( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'number_posts' => '3',
    'category' => '',
      ), $atts));

    $rss = fetch_feed('http://askmedia.fr/blog/feed/');

    $rss_items = $rss->get_items( 0, $number_posts );

    if ( is_wp_error( $rss ) )
      return;


    echo '<div class="container">
            <div class="timeline-content">
              <div class="element-line">
                <ol id="timeline">';

    foreach ( $rss_items as $item ) :

       STATIC $i = 0;
       $i++;
       if(($i%2)==0) {
         $class="item_left";
       }else{
         $class="item_right";
       }

        echo '<li class="timeline-item">
              <div class="'.$class.'">
                <div class="well post">
                  <div class="post-info text-center">
                    <h5 class="info-date">'. $item->get_date('j F Y').'<small>'. $item->get_date('G:i').'</small></h5>
                    <h5>'.$item->get_author()->get_name().'</h5>
                  </div>
                  <div class="post-body clearfix">
                    <div class="blog-title">
                      <h1><a href="'.$item->get_permalink() .'" target="_blank">'.$item->get_title().'</a></h1>
                    </div>';

                    $enclosure = $item->get_enclosure();

                    if( $enclosure ) {
                       echo '<a href="'.$item->get_permalink().'" class="zoom" target="_blank"><img src="'.get_template_directory_uri().'/assets/images/bg.png" data-src="'.$enclosure->get_link().'" class="img-responsive" width="500" ></a>';
                    }
                    echo '<div class="post-text">
                      <p class="lead">'.$item->get_description() .'</p>
                    </div>
                  </div>
                  <div class="post-arrow"></div>
                </div>
              </div>
            </li>';
    endforeach;
    echo '</ol>
        </div>
      </div>
    </div>';

    wp_reset_postdata();
    wp_reset_query();
  }
  add_shortcode('news', 'news');
}

/*-----------------------------------------------------------------------------------*/
/*  Video
/*-----------------------------------------------------------------------------------*/

if (!function_exists('video')) {
  function video( $atts, $content = null ) {
    extract(shortcode_atts(array(
      ), $atts));
    return '<div class="element-line">'.do_shortcode($content).'</div>';
  }
  add_shortcode('video', 'video');
}


?>