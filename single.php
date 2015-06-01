<?php get_header(); ?>
<nav id='breadcrumb'>
    <div class='breadcrumb'><div class="container inner"><?php breadcrumb() ?></div></div>
</nav>

<div class="container inner">
    <div class="row">
        <div class="col-xs-12 col-sm-8 margin-top-md content_main">

            <?php
            if (have_posts()) : // WordPress ループ
                while (have_posts()) : the_post(); // 繰り返し処理開始 
                    ?>
                    <article id="post-<?php the_id(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <header>
                                <h1 class="entry-title main_title"><?php echo get_the_title(); ?></h1>
                                <div class="post_data">
                                <?php astemp_data_single(''); ?>
                               
                                    <span class="category"> <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp;<?php the_category(', ') ?></span>
                                    <span class="comment-num"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;<?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>
                                </div>
                            </header>

                            <section itemprop="text">
                                <?php the_content(); ?>

                                <?php
                                $args = array(
                                    'before' => '<div class="page-link">',
                                    'after' => '</div>',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                );
                                wp_link_pages($args);
                                ?>

                                <p class="footer-post-meta">
                                    <?php the_tags('Tag : ', ', '); ?>
                                    <?php if (is_multi_author()): ?> 
                                        <span class="post-author">作成者 : <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                                        <?php
                                    endif;
                                    ?>
                                </p>
                            </section>

                        </div>

                        <footer>
                            <!-- post navigation -->
                            <div class="row page-navi">
                                <?php if (get_previous_post()): ?>
                                    <div class="col-xs-12 col-sm-6 margin-top-md text-left">
                                        <div class="previous">
                                        <?php previous_post_link('%link', '&laquo; %title'); ?>
                                        </div>
                                    </div>
                                    <?php
                                endif;

                                if (get_next_post()):
                                    ?>
                                    <div class="col-xs-12 col-sm-6 margin-top-md text-right">
                                        <div class="previous">
                                        <?php next_post_link('%link', '%title &raquo;'); ?>
                                        </div>
                                    </div>
                                    <?php
                                endif;
                                ?>
                            </div>
                            <!-- /post navigation -->
                        </footer>
                    </article>
            
                    <?php comments_template(); // コメント欄の表示 ?>

                    <?php
                endwhile; // 繰り返し処理終了		
            else : // ここから記事が見つからなかった場合の処理 
                ?>
                <div class="post">
                    <h2>記事はありません</h2>
                    <p>お探しの記事は見つかりませんでした。</p>
                </div>
            <?php
            endif;
            ?>
            

        </div><!--main_content-->

        <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>