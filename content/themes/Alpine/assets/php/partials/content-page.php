<?php
/**
 * @package Alpine
 */

$bg_img = get_post_meta( get_the_ID(),'background_image',true );
$background_colored = get_post_meta( get_the_ID(),'background_colored',true );
$overline = get_post_meta( get_the_ID(),'page_custom_title_overline',true );
$title = get_post_meta( get_the_ID(),'page_custom_title',true );
$title_wp = get_the_title();
$animation = get_post_meta( get_the_ID(),'animation_title',true );
$underline = get_post_meta( get_the_ID(),'page_custom_title_underline',true );
$abstract = get_post_meta( get_the_ID(),'page_custom_abstract',true );
$container_width =  get_post_meta( get_the_ID(),'container_width',true );
$parallax =  get_post_meta( get_the_ID(),'background_parallax',true );
?>

<?php if($parallax == 1): ?>
  <div class="parallax <?php echo 'parallax-'.get_the_ID(); ?>" style=" <?php echo (!empty($bg_img))?'background-image:url('.$bg_img.');background-attachment:fixed;':'' ; ?>">
    <div class="parallax-overlay<?php echo (empty($bg_img))?' no-img':''; echo (!empty($background_colored))?' parallax-background-color':''; ?>"></div>
    <div class="section-content<?php echo (!empty($background_colored))?' parallax-background-color-content':'';?>">
      <?php if($container_width == "default"): ?>
      <div class="container">
        <div class="row">
      <?php endif; ?>
          <div class="text-center">
            <?php if(!empty($title) or !empty($abstract)): ?>
            <div class="col-md-12">
              <div class="<?php if($animation == 'from_left'){ echo 'item_left'; }elseif($animation == 'from_right'){ echo 'item_right'; }else{} ?>">
                <h1><?php echo $title ?></h1>
                <?php echo (!empty($abstract))?'<p class="lead">'.$abstract.'</p>':'' ; ?>
              </div>
            </div>
            <?php endif; ?>
            <div class="parallax-content">
              <?php the_content();?>
            </div>
          </div>
      <?php if($container_width == "default"): ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
  
<?php else: ?>
  <section id="<?php echo sanitize_title($title_wp) ?>" class="section-content slide-menu <?php echo (!empty($background_colored))?'bgdark':'';?>">
    <?php if($container_width == "default"): ?>
    <div class="container">
      <div class="row">
    <?php endif; ?>
        <div class="container">
          <div class="row">
            <div class="section-title text-center">
              <div class="col-md-12">
                <?php echo (!empty($overline))?'<div><span class="line big"></span><span>'.$overline.'</span><span class="line big"></span></div>':'' ; ?>
                <h1 class="<?php if($animation == 'from_left'){ echo 'item_left'; }elseif($animation == 'from_right'){ echo 'item_right'; }else{} ?>"><?php echo $title ?></h1>
                <?php echo (!empty($underline))?'<div><span class="line"></span><span>'.$underline.'</span><span class="line"></span></div>':'' ; ?>
                <?php echo (!empty($abstract))?'<p class="lead">'.$abstract.'</p>':'' ; ?>
              </div>
            </div>
          </div>
        </div>
        <?php the_content();?>
    <?php if($container_width == "default"): ?>
      </div>
    </div>
    <?php endif; ?>  
  </section>  
<?php endif; ?>