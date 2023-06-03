<?php get_header(); ?>
      <!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <a href="<?php echo site_url('/portfolio'); ?>">Portfolio / </a>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <p><?php the_content(); ?></p>

                <div class="row">
                    <?php 
                    
                        if( get_field('portfolio_gallery') ){ 
                        $por_gallery = get_field('portfolio_gallery');
                    ?>
                        <div class="col-xl-12">
                            <h4><?php echo the_field('portfolio_gallery_title'); ?></h4>
                        </div>

                    <?php 
                    
                    foreach($por_gallery as $gallery){ ?>
                        
                        <div class="col-xl-4">
                            <div class="project-gallery">
                                <img src="<?php echo $gallery; ?>" alt="">
                            </div>
                        </div>

                    <?php }
                
                    }
                    
                    ?>
            
                </div>
                <br><br>
                <div class="row">

                    <?php 
                    
                        if(get_field('portfolio_video_url')) { ?>
                            <div class="col-xl-12">
                                <h4><?php echo the_field('portfolio_video_title'); ?></h4>
                                <iframe width="560" height="315" src="<?php echo the_field('portfolio_video_url'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        <?php }
                    
                    ?>
                </div>
            </div>
            <div class="col-xl-4">

                <div class="portfolio-sidebar">

                    <?php 
                    
                        if( get_field('portfolio_technology_list') ){ 
                        $technologies = get_field('portfolio_technology_list');   
                            
                    ?>
                        
                        <h4><?php echo the_field('portfolio_technology_title'); ?></h4>
                            <ul>
                                <?php 
                                
                                foreach($technologies as $technology){?>
                                    <li><i class="fa fa-arrow-right"></i><?php echo ' '. $technology['technology_list']; ?></li>
                                <?php }
                                
                                ?>

                            </ul>

                    <?php }
                                    
                    ?> 

                </div>


                <div class="portfolio-sidebar">

                    <?php 
                    
                        if(get_field('portfolio_feature_list')) { ?>
                            <h4><?php echo the_field('project_feature_title'); ?></h4>
                                <ul>
                                    <?php 
                                    
                                    $features = get_field('portfolio_feature_list');

                                    foreach($features as $feature){?>
                                        <li><i class="fa fa-arrow-right"></i><?php echo ' '. $feature['feature_list']; ?></li>
                                    <?php }

                                    ?>

                                </ul>
                        <?php }
                     
                     
                    ?>               
                                    
                </div>
            </div>
        </div>
    </div>
</section>


 <?php get_footer(); ?>