<?php 

get_header(); 

?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>404</h4>
                    <ul>
                        <a href="<?php echo site_url(); ?>"> Home</a> / 
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-row pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>404</h4>
                <p>The page you are looking for. Not Found</p>
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