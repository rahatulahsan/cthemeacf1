<?php 
/**
 * Template Name: Services Template
 */
get_header(); 


?>
<?php require_once('inc/breadcumb.php'); ?>

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
   <div class="container">
      <div class="row">

         <?php 
         
            $args = array(
               'posts_per_page' => 6,
               'post_type' => 'services'
            );

            $query= new WP_Query($args);
         
            while($query->have_posts()){ 
               $query->the_post(); ?>

                  <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="<?php the_field('services_icon'); ?>"></i>
                     <h4><?php the_title(); ?> </h4>
                     <p><?php  echo wp_trim_words( get_the_content(), 20 );  ?></p>
                  </div>
               </div>

            <?php }

            wp_reset_postdata();
         ?>

      </div>
   </div>
</section>
<!-- Services Area End -->
      
 <?php get_footer(); ?>