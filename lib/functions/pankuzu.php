<?php

/* ------------------------------------------- */
/* 	パンくずリスト
/*-------------------------------------------- */

function breadcrumb() {
    global $post;
    $str = '';
    if (!is_home() && !is_admin()) {
        $str.= "<span itemscope itemtype='http://data-vocabulary.org/Breadcrumb'>";
        $str.="<a href='". home_url() . " 'itemprop='url'><span itemprop='title'>\n<span class='glyphicon glyphicon-home' aria-hidden='true'></span> ホーム</span></a>　&gt;　</span>";

        if (is_category()) {
            $cat = get_queried_object();
            if ($cat->parent != 0) {
                $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
                foreach ($ancestors as $ancestor) {
                    $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="bread_div"><a href="' . get_category_link($ancestor) . '" itemprop="url"><span itemprop="title">' . get_cat_name($ancestor) . '</span></a>　&gt;　</div>';
                }
            }
            $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="bread_div"><a href="' . get_category_link($cat->term_id) . '" itemprop="url"><span itemprop="title">' . $cat->cat_name . '</span></a></div>';
        } elseif (is_page()) {

            if ($post->post_parent != 0) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    $str2.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="bread_div"><a href="' . get_permalink($ancestor) . '" itemprop="url"><span itemprop="title">' . get_the_title($ancestor) . '</span></a></div>';
                }
            } else {

                $str.= get_the_title();
            }
        } elseif (is_single()) {
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if ($cat->parent != 0) {
                $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
                foreach ($ancestors as $ancestor) {
                    $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="bread_div"><a href="' . get_category_link($ancestor) . '" itemprop="url"><span itemprop="title">' . get_cat_name($ancestor) . '</span></a>　&gt;　</div>';
                }
            }
            $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="bread_div"><a href="' . get_category_link($cat->term_id) . '" itemprop="url"><span itemprop="title">' . $cat->cat_name . '</span></a> 　&gt;　 ' . get_the_title() . '</div>';
        } else {
            $str.='<div class="bread_div">' . wp_title('', false) . '</div>';
        }
        $str.="";
    }
    echo $str;
}
