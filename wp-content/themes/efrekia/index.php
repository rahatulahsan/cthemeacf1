<?php 
/**
 * Template Name: Blog Template
 */
get_header(); 


?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php echo single_post_title(); ?></h4>
                    <ul>
                        <a href="<?php echo site_url(); ?>"> Home</a>  / 
                        <li><?php echo single_post_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">

               <?php

               while(have_posts()){
                  the_post(); ?>
               
                  <div class="col-md-4">
                     <div class="single-blog">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                        <div class="post-content">
                           <div class="post-title">
                              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                           </div>
                           <div class="pots-meta">
                              <ul>
                                 <li><a href="#"><?php the_time('F j, Y');?></a></li>
                                 <?php the_author_posts_link(); ?>
                                 <li><?php the_category(','); ?></li>
                              </ul>
                           </div>
                           <p><?php echo wp_trim_words( get_the_excerpt(), 20);?></p>
                           <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                     </div>
                  </div>
               
               <?php }

               the_posts_pagination();
                  
               ?>

            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
 <?php get_footer(); ?>