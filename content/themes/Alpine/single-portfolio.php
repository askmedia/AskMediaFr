<?php 
/**
 *
 * @package Alpine
 */
?>

<?php 
if(have_posts()) :
  while (have_posts() ) : the_post();
    $default_layout        =  get_post_meta( get_the_ID(),'default_layout',true );		
  	$embed_video           =  get_post_meta( get_the_ID(),'embed_video',true );	
  	$release_date          =  get_post_meta( get_the_ID(),'release_date',true );	
  	$client                =  get_post_meta( get_the_ID(),'client',true );	
  	$skills                =  get_post_meta( get_the_ID(),'skills',true );
  	$project_link_url      =  get_post_meta( get_the_ID(),'project_link_url',true );
  	$project_description   =  get_post_meta( get_the_ID(),'project_description',true );
?>
    
    <div id="ajax-section">
      <div id="ajaxpage">
        <div id="project-navigation" class="text-center">
          <ul>
            <li><a class="btn-prev"><i class="fa fa-chevron-circle-left fa-2x"></i></a></li>
            <li><a class="btn-close"><i class="fa fa-times-circle fa-2x"></i></a></li>
            <li><a class="btn-next"><i class="fa fa-chevron-circle-right fa-2x"></i></a></li>
          </ul>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="section-title text-center">
                <h1><?php the_title(); ?></h1>
                <div>
                  <?php $term_list_name = wp_get_post_terms(get_the_ID(), 'portfolio-category', array("fields" => "names"));
                  echo '<span class="line"></span><span>';
                  $i =0;
                    foreach ($term_list_name as  $terms   ){
                      echo $terms; 
                      if($i < count($term_list_name)-1){
                      echo ' / ';
                      }
                      $i++;
                    };
                  echo'</span><span class="line"></span>';
                  ?>
                </div>
              </div>
              
              <?php if($default_layout == '2') :?>
              
              <div class="row">
                <div class="col-md-8 col-sm-12">
                  <div class="project-media">
                    <div class="row">
                      <div class="col-md-12">
                        <?php 
                        if(trim($embed_video)!= ''):
                          echo $embed_video;
                        else:
                          the_content();
                        endif;
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <div class="project-description">
                    <div class="project-details">
                      <h4><?php _e('Project Description','alpine') ?></h4>
                      <p><?php echo $project_description; ?></p>
                    </div>
                    <div class="project-details">
                      <p class="list-info">
                        <i class="fa fa-briefcase fa-lg"></i>
                        <span><?php _e('Client','alpine') ?></span>
                        <em><?php echo $client; ?></em>
                      </p>
                      <p class="list-info">
                        <i class="fa fa-calendar fa-lg"></i>
                        <span><?php _e('Publish on','alpine') ?></span>
                        <em><?php echo $release_date; ?></em>
                      </p>
                      <p class="list-info">
                        <i class="fa fa-tags fa-lg"></i>
                        <span><?php _e('Skills','alpine') ?></span>
                        <em><?php echo $skills; ?></em>
                      </p>
                    </div>
                    <div class="mybutton medium">
                      <a href="<?php echo trim($project_link_url); ?>"><span data-hover="<?php _e('External link','alpine') ?>"><?php _e('External link','alpine') ?></span></a>
                    </div>
                  </div>
                </div>  
              </div>
              
              <?php else: ?>
                
              <div class="project-media">
                <div class="row">
                  <div class="col-md-12">
                    <?php 
                    if(trim($embed_video)!= ''):
                      echo $embed_video;
                    else:
                      the_content();
                    endif;
                    ?>
                  </div>
                </div>
              </div>
              <div class="project-description">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-center">
                      <div class="project-details">
                        <h4><?php _e('Project Description','alpine') ?></h4>
                        <p><?php echo $project_description; ?></p>
                      </div>
                      <div class="project-details">
                        <div class="row">
                          <div class="col-md-4">
                            <p class="list-info">
                              <i class="fa fa-briefcase fa-lg"></i>
                              <span><?php _e('Client','alpine') ?></span>
                              <em><?php echo $client; ?></em>
                            </p>
                          </div>
                          <div class="col-md-4">
                            <p class="list-info">
                              <i class="fa fa-calendar fa-lg"></i>
                              <span><?php _e('Publish on','alpine') ?></span>
                              <em><?php echo $release_date; ?></em>
                            </p>
                          </div>
                          <div class="col-md-4">
                            <p class="list-info">
                              <i class="fa fa-tags fa-lg"></i>
                              <span><?php _e('Skills','alpine') ?></span>
                              <em><?php echo $skills; ?></em>
                            </p>
                          </div>
                        </div>
                      </div>
                      <?php if(trim($project_link_url) != ''): ?>
                      <div class="mybutton medium">
                        <a href="<?php echo trim($project_link_url); ?>"><span data-hover="<?php _e('External link','alpine') ?>"><?php _e('External link','alpine') ?></span></a>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php endif; ?>
              
              
            </div>
                      
          </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
      </div><!-- END AJAX PAGE -->
    </div><!-- END AJAX SECTION -->

<?php endwhile;endif; ?>