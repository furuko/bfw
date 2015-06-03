<?php get_header(); ?>
<nav id='breadcrumb'>
    <div class='breadcrumb'><div class="container inner"><?php breadcrumb() ?></div></div>
</nav>
<div class="container inner">
    <div class="row">
        <div class="col-xs-12 col-sm-8 <?php astemp_layout_main('');?> margin-top-md content_main">

            <article>                    
                <header>
                    <h1 class="entry-title main_title"><?php if (is_category()) { ?><?php single_cat_title(); ?>
                        <?php } elseif (is_tag()) { ?>
                            <?php single_tag_title(); ?>
                        <?php } elseif (is_tax()) { ?>
                            <?php single_term_title(); ?>
                        <?php } elseif (is_day()) { ?>
                            <?php echo get_the_time('Y年m月d日'); ?>
                        <?php } elseif (is_month()) { ?>
                            <?php echo get_the_time('Y年m月'); ?>
                        <?php } elseif (is_year()) { ?>
                            <?php echo get_the_time('Y年'); ?>
                        <?php } elseif (is_author()) { ?>
                            <?php echo esc_html(get_queried_object()->display_name); ?></h1>
                    <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                        ブログアーカイブ<?php } ?>の一覧</h1>
                </header>

                <?php
                if (have_posts()) : // WordPress ループ
                    while (have_posts()) : the_post(); // 繰り返し処理開始 
                        ?>
                        <section>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="row archive_box">
                                    <h2 class="sub_title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span> <?php the_title(); ?></a></h2>
                                    <div class="col-xs-12 col-sm-3 margin-top-md text-center line_left">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                            <?php if (has_post_thumbnail()): // サムネイルを持っているときの処理 ?>
                                                <?php
                                                $title = get_the_title();
                                                the_post_thumbnail(array(150, 150), array('alt' => $title, 'title' => $title));
                                                ?>
                                            <?php else: // サムネイルを持っていないときの処理 ?>
                                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_img/sample_photo.png" /></a>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-9 margin-top-md line_right">
                                        <?php the_excerpt(); ?>
                                        <div class="eb_cat">
                                            <?php
                                            global $post;
                                            $categories = get_the_category($post->ID);
                                            if (!empty($categories)) { echo '<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>'; }
                                            ?>

                                            &nbsp;<?php the_category(' ') ?>&nbsp;&nbsp; <?php the_tags('<i class="fa fa-tags"><span style="color:transparent;display:none;">icon-tags</span></i>&nbsp;', '&nbsp; ,&nbsp; ', ' '); ?></div>

                                        <div class="row">
                                            <a href="<?php the_permalink() ?>"  class="as-btn">詳細を見る</a>
                                        </div>
                                    </div>
                                </div><!--row-->

                            </div>
                        </section>
                        <?php
                    endwhile; // 繰り返し処理終了		
                else : // ここから記事が見つからなかった場合の処理 
                    ?>
                    <div class="post">
                        <h2>記事はありません</h2>
                        <p>お探しのキーワードを含む記事は見つかりませんでした。</p>
                        <p>違うキーワードでもう一度検索してみてください。</p>
                    </div>
                <?php
                endif;
                ?>
            </article>
            <!--ページナビ-->
            <div class="pager">
                <?php
                global $wp_rewrite;
                $paginate_base = get_pagenum_link(1);
                if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged', '%#%');
                } else {
                    $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
                            user_trailingslashit('page/%#%/', 'paged');
                    ;
                    $paginate_base .= '%_%';
                }
                echo paginate_links(array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'total' => $wp_query->max_num_pages,
                    'mid_size' => 4,
                    'current' => ($paged ? $paged : 1),
                    'prev_text' => '≪',
                    'next_text' => '≫',
                ));
                ?>
            </div>

        </div><!--main_content-->

        <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>