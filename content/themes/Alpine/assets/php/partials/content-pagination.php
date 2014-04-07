<?php
/**
 * @package Alpine
 */
?>

<div class="row">
  <div class="col-md-12">
    <div class="element-line">
      <div class="pager">
        <?php if(function_exists( 'ot_get_option' )){
          if(ot_get_option('pagination_type')==2){ ?>
            <div class="puls previous"><?php previous_posts_link('<i class="fa fa-long-arrow-left"></i> '.__('Previous entries', 'alpine').'','') ?></div>
            <div class="puls next"><?php next_posts_link(__('Next entries', 'alpine').' <i class="fa fa-long-arrow-right"></i>','') ?></div>
          <?php 
          }else{
            my_pagination();
          }
        }?>
      </div>
    </div>
  </div>
</div>