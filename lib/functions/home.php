<?php

function astemp_home_slide() {
    $main_img_type = get_option('as_main_img');
    if (empty($main_img_type) or $main_img_type == '') {
        $slide_type_img1_inner = '<img src="/images/logo.png" alt="サンプルイメージ" />';
        echo "<div class='container text-center'><img src='" . get_stylesheet_directory_uri() . "/images/sample_img/sample.png' alt='サンプルイメージ' /></div>";
    } else {
        if ($main_img_type == 'as_main_img_img') {
            $as_main_img_img1 = get_option('as_main_img_img1');
            $as_main_img_img1_alt = get_option('as_main_img_img1_alt');
            $as_main_img_img1_url = get_option('as_main_img_img1_url');

            if (empty($as_main_img_img1) or $as_main_img_img1 == '') {
                $slide_type_img1_inner = '<img src="/images/logo.png" alt="サンプルイメージ" />';
                echo "<div class='container text-center'><img src='" . get_stylesheet_directory_uri() . "/images/sample_img/sample.png' alt='サンプルイメージ' /></div>";
            } else {
                if (empty($as_main_img_img1_url)) {
                    $as_main_img_img1_inner = '<a href="' . $as_main_img_img1_url . '"><img src="' . $as_main_img_img1 . '" alt="' . $as_main_img_img1_alt . '" /></a>';
                    echo "<div class='container text-center'>";
                    echo $as_main_img_img1_inner;
                    echo "</div>";
                } else {
                    $as_main_img_img1_inner = '<img src="' . $as_main_img_img1 . '" alt="' . $as_main_img_img1_alt . '" />';
                    echo $as_main_img_img1_inner;
                }
            }
        } else {
            $as_main_img_slide1 = get_option('as_main_img_slide1');
            $as_main_img_slide1_alt = get_option('as_main_img_slide1_alt');
            $as_main_img_slide1_url = get_option('as_main_img_slide1_url');
            $as_main_img_slide2 = get_option('as_main_img_slide2');
            $as_main_img_slide2_alt = get_option('as_main_img_slide2_alt');
            $as_main_img_slide2_url = get_option('as_main_img_slide2_url');
            $as_main_img_slide3 = get_option('as_main_img_slide3');
            $as_main_img_slide3_alt = get_option('as_main_img_slide3_alt');
            $as_main_img_slide3_url = get_option('as_main_img_slide3_url');

            echo '<div class="wideslider">';
            echo '<ul>';

            if (!empty($as_main_img_slide1_url)) {
                $as_main_img_slide1_inner = '<li><a href="' . $as_main_img_slide1_url . '"><img src="' . $as_main_img_slide1 . '" alt="' . $as_main_img_slide1_alt . '" /></a></li>';
                echo $as_main_img_slide1_inner;
            } else {
                $as_main_img_slide1_inner = '<li><img src="' . $as_main_img_slide1 . '" alt="' . $as_main_img_slide1_alt . '" /></li>';
                echo $as_main_img_slide1_inner;
            }

            if (!empty($as_main_img_slide2_url)) {
                $as_main_img_slide2_inner = '<li><a href="' . $as_main_img_slide2_url . '"><img src="' . $as_main_img_slide2 . '" alt="' . $as_main_img_slide2_alt . '" /></a></li>';
                echo $as_main_img_slide2_inner;
            } else {
                $as_main_img_slide2_inner = '<li><img src="' . $as_main_img_slide2 . '" alt="' . $as_main_img_slide2_alt . '" /></li>';
                echo $as_main_img_slide2_inner;
            }

            if (!empty($as_main_img_slide3_url)) {
                $as_main_img_slide3_inner = '<li><a href="' . $as_main_img_slide3_url . '"><img src="' . $as_main_img_slide3 . '" alt="' . $as_main_img_slide3_alt . '" /></a></li>';
                echo $as_main_img_slide3_inner;
            } else {
                $as_main_img_slide3_inner = '<li><img src="' . $as_main_img_slide3 . '" alt="' . $as_main_img_slide3_alt . '" /></li>';
                echo $as_main_img_slide3_inner;
            }


            echo '</ul>';
            echo '</div>';
        }
    }
}

function astemp_home_3pr() {
//3PRブロック設定************************************************
    $pr_block = get_option('as_pr_block');
    $as_pr_img_type = get_option('as_pr_img_type');
    $as_pr_title_view = get_option('as_pr_title_view');
    
    $pr_block1_img = get_option('as_pr_block1_img');
    $pr_block2_img = get_option('as_pr_block2_img');
    $pr_block3_img = get_option('as_pr_block3_img');
    $pr_block4_img = get_option('as_pr_block4_img');
    $pr_block5_img = get_option('as_pr_block5_img');
    $pr_block6_img = get_option('as_pr_block6_img');

    if ($pr_block == "as_pr_block_off") {
        echo "nasi";
    } else {
        if ($as_pr_title_view == "check") {
            
            if(!empty($pr_block1_img )) {
                $pr_block1_title = get_option('as_pr_block1_title');
                $pr_block1_img = "<div class='pr_block'><a href='" . get_option('as_pr_block1_url') . "'><div class='pr_block_title'>".$pr_block1_title."</div><img src='" . get_option('as_pr_block1_img') . "' alt='" . get_option('as_pr_block1_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
               
            }
            if(!empty($pr_block2_img )) {
                $pr_block2_title = get_option('as_pr_block2_title');
                $pr_block2_img = "<div class='pr_block'><a href='" . get_option('as_pr_block2_url') . "'><div class='pr_block_title'>".$pr_block2_title."</div><img src='" . get_option('as_pr_block2_img') . "' alt='" . get_option('as_pr_block2_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block3_img )) {
                $pr_block3_title = get_option('as_pr_block3_title');
                $pr_block3_img = "<div class='pr_block'><a href='" . get_option('as_pr_block3_url') . "'><div class='pr_block_title'>".$pr_block3_title."</div><img src='" . get_option('as_pr_block3_img') . "' alt='" . get_option('as_pr_block3_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block4_img )) {
                $pr_block4_title = get_option('as_pr_block4_title');
                $pr_block4_img = "<div class='pr_block'><a href='" . get_option('as_pr_block4_url') . "'><div class='pr_block_title'>".$pr_block4_title."</div><img src='" . get_option('as_pr_block4_img') . "' alt='" . get_option('as_pr_block4_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block5_img )) {
                $pr_block5_title = get_option('as_pr_block5_title');
                $pr_block5_img = "<div class='pr_block'><a href='" . get_option('as_pr_block5_url') . "'><div class='pr_block_title'>".$pr_block5_title."</div><img src='" . get_option('as_pr_block5_img') . "' alt='" . get_option('as_pr_block5_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block6_img )) {
                $pr_block6_title = get_option('as_pr_block6_title');
                $pr_block6_img = "<div class='pr_block'><a href='" . get_option('as_pr_block6_url') . "'><div class='pr_block_title'>".$pr_block6_title."</div><img src='" . get_option('as_pr_block6_img') . "' alt='" . get_option('as_pr_block6_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
           
            
            echo "<section class='container inner'>\n";
            echo "<div id='pr_box'>";
            echo "<h1 class='main_title'>Item Line Up</h1>";
            echo $pr_block1_img;
            echo $pr_block2_img;
            echo $pr_block3_img;
            echo $pr_block4_img;
            echo $pr_block5_img;
            echo $pr_block6_img;
            echo '</div>';
            echo '</section>';
            
        } else {
            
            
            if(!empty($pr_block1_img )) {
                $pr_block1_img = "<div class='pr_block'><a href='" . get_option('as_pr_block1_url') . "'><div class='pr_block_title'>".$pr_block1_title."</div><img src='" . get_option('as_pr_block1_img') . "' alt='" . get_option('as_pr_block1_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block2_img )) {
                $pr_block2_img = "<div class='pr_block'><a href='" . get_option('as_pr_block2_url') . "'><div class='pr_block_title'>".$pr_block2_title."</div><img src='" . get_option('as_pr_block2_img') . "' alt='" . get_option('as_pr_block2_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block3_img )) {
                $pr_block3_img = "<div class='pr_block'><a href='" . get_option('as_pr_block3_url') . "'><div class='pr_block_title'>".$pr_block3_title."</div><img src='" . get_option('as_pr_block3_img') . "' alt='" . get_option('as_pr_block3_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block4_img )) {
                $pr_block4_img = "<div class='pr_block'><a href='" . get_option('as_pr_block4_url') . "'><div class='pr_block_title'>".$pr_block4_title."</div><img src='" . get_option('as_pr_block4_img') . "' alt='" . get_option('as_pr_block4_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block5_img )) {
                $pr_block5_img = "<div class='pr_block'><a href='" . get_option('as_pr_block5_url') . "'><div class='pr_block_title'>".$pr_block5_title."</div><img src='" . get_option('as_pr_block5_img') . "' alt='" . get_option('as_pr_block5_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }
            if(!empty($pr_block6_img )) {
                $pr_block6_img = "<div class='pr_block'><a href='" . get_option('as_pr_block6_url') . "'><div class='pr_block_title'>".$pr_block6_title."</div><img src='" . get_option('as_pr_block6_img') . "' alt='" . get_option('as_pr_block6_title') . "' class='img-" . $as_pr_img_type . "'></a></div>\n";
            }

            echo "<section class='container inner'>\n";
            echo "<div id='pr_box'>";
            echo "<h1 class='main_title'>Item Line Up</h1>";
            echo $pr_block1_img;
            echo $pr_block2_img;
            echo $pr_block3_img;
            echo $pr_block4_img;
            echo $pr_block5_img;
            echo $pr_block6_img;
            echo '</div>';
            echo '</section>';
        }
    }
}

function astemp_home_welcome() {
    $welcome_msg_title = get_option('as_welcome_msg_title');
    $welcome_msg = nl2br(get_option('as_welcome_msg'));
    $welcome_msg_img = get_option('as_welcome_msg_img');
    $img_position = get_option('as_img_position');
    if (!empty($img_position)) {
        if ($img_position == 'left') {
            $welcome_msg_img = '<img src="' . $welcome_msg_img . '" class="pull-left" />';
        } else {
            $welcome_msg_img = '<img src="' . $welcome_msg_img . '" class="pull-right" />';
        }
    }

    echo '<h1 class="main_title center">';
    echo $welcome_msg_title;
    echo '</h1>';
    echo $welcome_msg_img;
    echo $welcome_msg;
}

function astemp_home_news() {
    $as_news_view = get_option('as_news_view');
    $home_news = get_option('as_home_news');
    if (empty($home_news)or $home_news == false) {
        query_posts('showposts=' . $as_news_view . '');
        echo "<h1 class='main_title'>What's New</h1>\n";
        echo "<ul class='media-list news-list'>\n";
        if (have_posts()) : while (have_posts()) : the_post();
                echo '<li class="media">';

                echo '<p class="postdate"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> ';
                echo get_the_date('Y年n月j日');
                echo '</p><h2><a href="';
                the_permalink();
                echo '">';
                the_title();
                echo "</a></h2></li>\n";
            endwhile;
            echo'</ul>';
        endif;
        wp_reset_query();
    }else {
        query_posts('showposts=' . $as_news_view . '');
        echo '<ul class="media-list news-list">';
        if (have_posts()) : while (have_posts()) : the_post();
                echo '<li class="media">';
                if (has_post_thumbnail()) {
                    echo '<a href="';
                    the_permalink();
                    echo '">';
                    the_post_thumbnail(array(80, 80));
                    echo '</a>';
                } else {

                    $as_no_img = get_option('as_no_img');
                    if (empty($as_no_img)) {
                        echo '<a href="';
                        the_permalink();
                        echo '"><img src="';
                        echo get_template_directory_uri();
                        echo '/images/sample_img/sample_photo.png" /></a>';
                    } else {
                        ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $as_no_img; ?>" /></a>
                        <?php
                    }
                }
                echo '<p class="postdate"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> ';
                echo get_the_date('Y年n月j日');
                echo '</p><h2><a href="';
                the_permalink();
                echo '">';
                the_title();
                echo '</a></h2></li>';
            endwhile;
            echo'</ul>';
        endif;
        wp_reset_query();
    }
}
