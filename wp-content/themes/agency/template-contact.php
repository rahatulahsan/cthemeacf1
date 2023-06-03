<?php 
/**
 * Template Name: Contact Template
 */
get_header(); 


?>
<?php require_once('inc/breadcumb.php'); ?>

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-10 mx-auto">
                  <div class="row text-center">
                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="<?php echo get_field('address_icon','option'); ?>"></i>
                           <h4><?php echo get_field('address_title','option'); ?><span><?php echo get_field('address_details','option'); ?></span></h4>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="<?php echo get_field('phone_icon','option'); ?>"></i>
                           <h4><?php echo get_field('phone_title','option'); ?><span><?php echo get_field('phone_number','option'); ?></span></h4>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="<?php echo get_field('email_icon','option'); ?>"></i>
                           <h4><?php echo get_field('email_title','option'); ?><span><?php echo get_field('email_details','option'); ?></span></h4>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="contact-form">
                           <?php 
                           
                              echo do_shortcode('[contact-form-7 id="199" title="Contact form 7"]');
                           
                           ?>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="google-map">
                           <iframe src="<?php echo get_field('map_link','option'); ?>"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Us Area End -->

<?php get_footer(); ?>