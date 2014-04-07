<?php
/**
 * @package Alpine
*/

 get_header(); 
?>

    <?php if(ot_get_option('button_style')== 1){
      $button_style = "mybutton";
    }else{
      $button_style = "mybutton2";
    }?>

    <section id="error-page">
      <div class="intro-item">
        <div class="text-center">
          <i class="fa fa-frown-o"></i>
          <h3>
            <?php 
            if ( function_exists( 'ot_get_option' ) ) {
              if(ot_get_option('404_title_text')) {
                echo ot_get_option('404_title_text');
              }
            } else {
              echo 'Error 404';
            }
            ?>
          </h3>
          <p class="lead">
            <?php
            if ( function_exists( 'ot_get_option' ) ) {
              if(ot_get_option('404_text')) {
                echo ot_get_option('404_text');
              }
            } else {
              echo 'We`re sorry, but the page you are looking for doesn`t exist.';
            }
            ?>
          </p>
          <div class="<?php echo $button_style ?> ultra">
            <a class="start-button" href="<?php echo home_url(); ?>"> <span data-hover="<?php _e('Back to home','alpine') ?>"><?php _e('Back to home','alpine') ?></span> </a>
          </div>
        </div>
      </div>
    </section>

    <?php
    if ( function_exists( 'ot_get_option' ) ) {
      echo ot_get_option('before_body');
    }
    wp_footer(); ?>
  
  </body>
</html>