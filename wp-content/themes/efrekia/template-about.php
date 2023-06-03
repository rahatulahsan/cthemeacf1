<?php 
/**
 * Template Name: About Template
 */
get_header(); 


?>
<?php require_once('inc/breadcumb.php'); ?>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
         <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="about">

                  <?php 
                  
                     if(class_exists('ACF')){
                                       
                     $about_content = get_field('about_content', 'option');
                     
                     ?>
                     
                     <div class="page-title">
                        <h4><?php echo $about_content['main_heading']; ?></h4>
                     </div>
                     <p><?php echo $about_content['main_description']; ?> </p>
                  
                  <?php }
                  
                  ?>

               </div>

            </div>
            <div class="col-md-5">

               <?php 
               
                  if(class_exists('ACF')) { 
                  
                  $about_features = get_field('about_features', 'options');
            
                  foreach($about_features as $about_feature){ ?>

                     <div class="single_about">
                        <i class="<?php echo esc_attr($about_feature['feature_icon']); ?>"></i>
                        <h4><?php echo $about_feature['feature_name']; ?></h4>
                        <p><?php echo $about_feature['feature_description']; ?> </p>
                     </div>

                  <?php }
                   
               }
         
               ?>
     
             </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
 
<?php get_footer(); ?>