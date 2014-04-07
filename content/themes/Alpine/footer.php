<?php
/**
 * @package Alpine
 */
 ?>
		<!-- FOOTER -->
		
		<footer id="footer" class="text-center" style="position: relative;">
      <div class="container">
        <div class="social-icon">
          <?php 
          if ( function_exists( 'ot_get_option')){
            if(ot_get_option('facebook_url')){
              echo '<a href="'.ot_get_option('facebook_url').'"><i class="fa fa-facebook fa-3x"></i></a>';
            }
            if(ot_get_option('twitter_url')){
              echo '<a href="'.ot_get_option('twitter_url').'"><i class="fa fa-twitter fa-3x"></i></a>';
            }
            if(ot_get_option('dribbble_url')){
              echo '<a href="'.ot_get_option('dribbble_url').'"><i class="fa fa-dribbble fa-3x"></i></a>';
            }
            if(ot_get_option('linkedin_url')){
              echo '<a href="'.ot_get_option('linkedin_url').'"><i class="fa fa-linkedin fa-3x"></i></a>';
            }
            if(ot_get_option('google_plus_url')){
              echo '<a href="'.ot_get_option('google_plus_url').'"><i class="fa fa-google-plus fa-3x"></i></a>';
            }
          }
          ?>
        </div>
        <div class="copy-line">
          <?php
            if ( function_exists( 'ot_get_option' ) ) {
            if(ot_get_option('copyright_text')){
              echo ot_get_option('copyright_text');
            }
          } else {
          echo 'All rights resevered.';
          } ?>
        </div>
      </div>
    </footer>
		
		<?php if ( function_exists( 'ot_get_option' ) ): if(ot_get_option('enable_backtop')):?>
		  <a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>
		<?php endif;endif;?>
		
		<?php
		if ( function_exists( 'ot_get_option' ) ) {
			echo ot_get_option('before_body');
		}
		
		wp_footer(); ?>
	</body>
</html>