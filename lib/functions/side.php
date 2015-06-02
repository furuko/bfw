<?php

//プロフィール設定
function as_profile() {
    $as_profile = get_option('as_profile');
    $as_profile_title = get_option('as_profile_title');
    $as_profile_img = get_option('as_profile_img');
    $as_profile_img_type = get_option('as_profile_img_type');
    $as_profile_com = get_option('as_profile_com');

    if ($as_profile == true) {
        $as_profile_img = '<img src="'.$as_profile_img.'" alt="'.$as_profile_title.'" class="img-'.$as_profile_img_type.'" />';
        ?>
        <div class="side-profile">
            <div class="side-profile_title">Profile</div>
            <?php echo $as_profile_img; ?>
            <div class="profile_name"><?php echo $as_profile_title; ?></div>
            <div class="profile_com">                
                <?php echo $as_profile_com; ?>
            </div>

    </div>
    <?php }
}



function as_profile_page() {
    $as_profile = get_option('as_profile');
    $as_profile_page = get_option('as_profile_page');
    $as_profile_title = get_option('as_profile_title');
    $as_profile_img = get_option('as_profile_img');
    $as_profile_img_type = get_option('as_profile_img_type');
    $as_profile_com = get_option('as_profile_com');

    if ($as_profile == true) {
        if ($as_profile_page == 'page_on') {
           $as_profile_img = '<img src="'.$as_profile_img.'" alt="'.$as_profile_title.'" class="img-'.$as_profile_img_type.'"  />';
        ?>
       <div class="side-profile">
            <div class="side-profile_title">Profile</div>
            <?php echo $as_profile_img; ?>
            <div class="profile_name"><?php echo $as_profile_title; ?></div>
            <div class="profile_com">                
                <?php echo $as_profile_com; ?>
            </div>

    </div>
     <?php   }
     }
}


//記事上下のソーシャルボタン
function as_sidebar_check() {
    $as_sidebar_box1 = get_option('as_sidebar_box1');
    $as_sidebar_box1_title = get_option('as_sidebar_box1_title');
    $as_sidebar_box2 = get_option('as_sidebar_box2');
    $as_sidebar_box2_title = get_option('as_sidebar_box2_title');
    $as_sidebar_box3 = get_option('as_sidebar_box3');
    $as_sidebar_box3_title = get_option('as_sidebar_box3_title');

    if (empty($as_sidebar_box1_title) or $as_sidebar_box1_title == '') {
        $as_sidebar_box1_title = "<h2 class='widgettitle'>最近の投稿</h2>";
    } else {
        $as_sidebar_box1_title = "<h2 class='widgettitle'>" . esc_html($as_sidebar_box1_title) . "</h2>";
    }

    //as_sidebar_box1
    if ($as_sidebar_box1 == true) {
        //表示あり
        echo '<div class="widget">';
        echo $as_sidebar_box1_title;
        query_posts('showposts=5');
        if (have_posts()) : while (have_posts()) : the_post();
                print "\n<dl>\n<dt>";
                if (has_post_thumbnail()) {
                    echo '<a href="';
                    the_permalink();
                    echo '">';
                    the_post_thumbnail(array(80, 80));
                    the_post_thumbnail(array(80, 80));
                    echo '</a>';
                } else {
                    echo '<a href="';
                    the_permalink();
                    echo '"><img src="';
                    echo get_template_directory_uri();
                    echo '/images/sample_photo.png" /></a>';
                }
                echo "</dt>\n<dd><p class='postdate'>";
                echo get_the_date('Y年n月j日');
                echo '</p><a href="';
                the_permalink();
                echo '">';
                the_title();
                echo "</a></dd>\n</dl>\n";
            endwhile;
            echo '</div>';
        endif;
        wp_reset_query();
    }

    //as_sidebar_box2
    if ($as_sidebar_box2 == true) {
        echo '';
    }

    //as_sidebar_box3
    if ($as_sidebar_box3 == true) {
        echo '';
    }
}

//function
