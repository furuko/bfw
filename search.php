<?php get_header(); ?>
<nav id='breadcrumb'>
    <div class='breadcrumb'><div class="container inner"><?php breadcrumb() ?></div></div>
</nav>
<div class="container inner">

    <div class="row">
        <div class="col-xs-12 col-sm-8 <?php astemp_layout_main(''); ?> margin-top-md" id="main_content">
            <h2 class="sub_title">「<?php echo get_search_query(); ?>」の検索結果</h2> 
            <?php
            $as_view = get_option('as_view');
            if ($as_view == 'line') {

                if (have_posts()) { // WordPress ループ
                    while (have_posts()) : the_post(); // 繰り返し処理開始 
                        ?>
                        <section>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="row margin-top-md archive-line">

                                    <h2 class="sub_title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span> <?php the_title(); ?></a></h2>
                                    <div class="col-xs-12 col-sm-3 margin-top-md text-center line_left">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) { // サムネイルを持っているときの処理 
                                                $title = get_the_title();
                                                the_post_thumbnail('thumb160', array('alt' => $title, 'title' => $title));
                                            } else {// サムネイルを持っていないときの処理  
                                                ?>
                                                <?php astemp_no_img(''); ?>
            <?php }; ?>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-9 margin-top-md line_right">

                                        <div class="eb_cat">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;<span class="post-date"><?php echo get_the_date(); ?></span>&nbsp;
                                            <?php
                                            global $post;
                                            $categories = get_the_category($post->ID);
                                            if (!empty($categories)) {
                                                echo '<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>';
                                            }
                                            ?>

                                            &nbsp;<?php the_category(' ') ?>&nbsp;&nbsp; <?php the_tags('<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>&nbsp', '&nbsp; ,&nbsp; ', ' '); ?>
                                        </div>
            <?php the_excerpt(); ?>

                                        <div class="row">
                                            <a href="<?php the_permalink() ?>"  class="as-btn">詳細を見る</a>
                                        </div>
                                    </div>
                                </div><!--row-->

                            </div>
                        </section>

                    <?php
                    endwhile; // 繰り返し処理終了	
                } else { // ここから記事が見つからなかった場合の処理 
                    echo "<p>「" . get_search_query() . "」に関連する内容は見つかりませんでした。<br />";
                    echo "他のキーワードで検索してみてください。</p>";
                    
                    ?> 
                    <form method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                        <div class="input-group">
                            <input type="text" name="s" id="s" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" id="searchsubmit" value="">検索</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>

                <?php
                }
            } else {
                if (have_posts()) { // WordPress ループ
                    echo "<div class='row margin-top-md'>";
                    while (have_posts()) : the_post(); // 繰り返し処理開始  
                        ?>

                        <div class="col-xs-12 col-sm-6 col-md-4 arctive-box">
                            <div class="thumbnail">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('box');
                                } else {
                                    ?>
                                            <?php astemp_no_img(''); ?>

                                        <?php }; ?>

                                <div class="caption">
                                    <h2 class="sub_title_box"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span> <?php the_title(); ?></a></h2>
                                    <div class="eb_cat">
            <?php
            global $post;
            $categories = get_the_category($post->ID);
            if (!empty($categories)) {
                echo '<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>';
            }
            ?>

                                        &nbsp;<?php the_category(' ') ?>&nbsp;&nbsp; <?php the_tags('<br /><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>&nbsp;', '&nbsp; ,&nbsp; ', ' '); ?>
                                    </div>

                                </div>
                            </div>
                        </div>


        <?php
        endwhile; // 繰り返し処理終了	
        echo "</div>";
    } else { // ここから記事が見つからなかった場合の処理 
    }
}
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