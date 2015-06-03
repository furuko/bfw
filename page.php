<?php get_header(); ?>
<nav id='breadcrumb'>
    <div class='breadcrumb'><div class="container inner"><?php breadcrumb() ?></div></div>
</nav>
<div class="container inner">
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 <?php astemp_layout_main('');?> margin-top-md" id="main_content">
            <?php
            if (have_posts()) : // WordPress ループ
                while (have_posts()) : the_post(); // 繰り返し処理開始 
                    ?>
                    <article id="post-<?php the_id(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <header>
                                <h1 class="entry-title main_title"><?php echo get_the_title(); ?></h1>
                                <?php astemp_data_page(''); ?>
                            </header>

                            <section itemprop="text">
                                <?php the_content(); ?>
                            </section>

                        </div>
                        <?php
                    endwhile; // 繰り返し処理終了		

                endif;
                ?>
            </article>
        </div><!--main_content-->

        <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>