<!-- CTA Area Start -->
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4><?php echo the_field('cta_title','option'); ?><span><?php echo the_field('cta_subtitle','option'); ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php echo the_field('button_link','option'); ?>" class="box-btn"><?php echo the_field('button_text','option'); ?><i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="single-footer footer-logo">
               <h3>Efrekia</h3>
               <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <div class="single-footer">
               <h4>quick links</h4>
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Contact Us</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer">
               <h4>latest post</h4>
               <ul>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
                  <li><a href="#">lorem ipsum dummy text</a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <h4><?php echo the_field('footer_contact_title', 'option'); ?></h4>
               <ul>
                  <?php 
                  
                  $fcontacts = get_field('footer_contact_info', 'option');
                  
                  foreach($fcontacts as $fcontact){?>
                     <li><i class="<?php echo $fcontact['footer_contact_icon']; ?>"></i> <?php echo $fcontact['footer_contact_info']; ?></li>
                  <?php }
                  ?>  

               </ul>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p><?php echo the_field('copyright_text','option'); ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>

            <?php 
            
            $socials = get_field('bottom_footer_social', 'option');

            foreach($socials as $social){ ?>
               <li><a href="<?php echo $social['social_link']; ?>"><i class="<?php echo $social['bottom_social_icon']; ?>"></i> </a></li>
            <?php }
            
            ?>
               
            </ul>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Area End -->

<?php wp_footer(); ?>
</body>
</html>