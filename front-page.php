<?php get_header(); ?>

        <!-- Slide -->
        <section class="jumbotron">
            <div id="image_slide">
                <?php astemp_home_slide(''); ?>
            </div><!--#image_slide-->
        </section>
        <!-- /Slide -->

        <!--PR_BOX-->
            <?php astemp_home_3pr(''); ?>
            
        <!--/PR_BOX-->

        <div id="wrap">

            <div class="container inner">
                <div class="row">

                    <div class="col-xs-12 col-md-8">
                        <div id="main_content">
                            <!--news-->
                            <section class="news">
                                <?php astemp_home_news('');?>
                            </section>
                            
                            <section class="welcome">
                                <?php astemp_home_welcome(''); ?>
                            </section>

                        </div><!--/main_content-->
                    </div><!--/col-->
                    
                    <?php get_sidebar(); ?>

                </div><!--/row-->
            </div><!--/container-->

        </div><!--/wrap-->

<?php get_footer(); ?>