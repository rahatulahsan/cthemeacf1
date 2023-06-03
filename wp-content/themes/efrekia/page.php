<?php 
/**
 * Template Name: Page Template
 */
get_header(); 


?>
<?php require_once('inc/breadcumb.php'); ?>

<section class="page-row pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
            <div class="col-md-4">
                <?php 
               
                    if(is_active_sidebar('sidebar-1')){
                        dynamic_sidebar('sidebar-1');
                    }

                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>