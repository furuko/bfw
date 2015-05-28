<?php

function astemp_analytics() {
   $analytics = get_option('as_analytics');
   
   if (!empty($analytics)){ ?>
       <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $analytics; ?>', 'auto');
  ga('send', 'pageview');

</script>
   <?php }

 }

function astemp_logo() {
    $logo_image = get_option('as_logo_image');
    $logo_text = get_option('as_logo_text');
    if (!empty($logo_image) && get_option('as_logo_type') == 'as_logo_type_image') :
        $logo_inner = '<img src="' . get_option('as_logo_image') . '" alt="' . get_bloginfo('name') . '" />';
    else:
        if (!empty($logo_text) && get_option('as_logo_type') == 'as_logo_type_text') :
            $logo_inner = get_option('as_logo_text');
        else:
            $logo_inner = get_bloginfo('name');
        endif;
    endif;
    $logo_wrap = ( is_front_page() || is_home() ) ? 'h1' : 'p';
    echo "<";
    echo $logo_wrap;
    echo ' id="logo" itemprop="headline">';
    echo '<a href="';
    echo home_url();
    echo '">';
    echo $logo_inner;
    echo '</a></';
    echo $logo_wrap;
    echo '>';
}

function astemp_headinfo() {
    $headinfo_type = get_option('as_headinfo_type');
    if ($headinfo_type == 'as_headinfo_type_text') {
        $kihon_info_tel = get_option('as_kihon_info_tel');
        $kihon_info_rest = get_option('as_kihon_info_rest');
        $kihon_info_time = get_option('as_kihon_info_time');

        if (!empty($kihon_info_tel)) {
            $kihon_info_tel_inner = "<li class='kihon_info_tel font-big'>TEL:" . $kihon_info_tel . "</li>";
        }
        if (!empty($kihon_info_rest)) {
            $kihon_info_rest_inner = "<li class='kihon_info_rest'>定休日：" . $kihon_info_rest . "</li>";
        }
        if (!empty($kihon_info_time)) {
            $kihon_info_time_inner = "<li class='kihon_info_time'>受付時間：" . $kihon_info_time . "</li>";
        }
        echo "<div class='right_head_info'><ul class='kihon_info_box'>" . $kihon_info_tel_inner . $kihon_info_time_inner . "</ul></div>";
    } else if ($headinfo_type == 'as_headinfo_type_image') {
        $headinfo_type_image_url = get_option('as_headinfo_type_image_url');
        $headinfo_type_image_img = get_option('as_headinfo_type_image_img');
        $headinfo_type_image_alt = get_option('as_headinfo_type_image_alt');
        if (!empty($headinfo_type_image_url)) {
            $headinfo_type_image_inner = '<a href="' . $headinfo_type_image_url . '"><img src="' . $headinfo_type_image_img . '" alt="' . $headinfo_type_image_alt . '" /></a>';
        } else {
            $headinfo_type_image_inner = '<img src="' . $headinfo_type_image_img . '" alt="' . $headinfo_type_image_alt . '" />';
        }
        echo $headinfo_type_image_inner;
    } else {
        echo "";
    }
}

add_action('wp_head', 'as_header_meta', 1);

function as_header_meta() {
    //追加するメタがある場合は以下「//OGP設定」までに追加
    echo "";
    
    //OGP設定
    $social_tag = get_option('as_social_buttons');
    $facebook_user_id = get_option('as_facebook_user_id');
    $facebook_app_id = get_option('as_facebook_app_id');
    $facebook_def_image = get_option('as_def_image');

    if (empty($facebook_user_id) or $facebook_user_id == '') {
        //チェックなしの出力    
        echo '';
    } else {//これ以下がチェックあり出力 
        ?>
        <meta property="og:admins" content="<?php echo esc_html($facebook_user_id); ?> " />
        <meta property="og:app_id" content="<?php echo esc_html($facebook_app_id); ?> " />
        <meta property="og:locale" content="ja_JP">
        <meta property="og:type" content="blog">
        <?php
        if (is_single()) {// 投稿記事
            if (have_posts()): while (have_posts()): the_post();
                    echo '<meta property="og:description" content="' . mb_substr(get_the_excerpt(), 0, 100) . '">';
                    echo "\n"; //抜粋から
                endwhile;
            endif;
            echo '<meta property="og:title" content="';
            the_title();
            echo '">';
            echo "\n"; //投稿記事タイトル
            echo '<meta property="og:url" content="';
            the_permalink();
            echo '">';
            echo "\n"; //投稿記事パーマリンク
        } else {//投稿記事以外（ホーム、カテゴリーなど）
            echo '<meta property="og:description" content="';
            bloginfo('description');
            echo '">';
            echo "\n"; //「一般設定」で入力したブログの説明文
            echo '<meta property="og:title" content="';
            bloginfo('name');
            echo '">';
            echo "\n"; //「一般設定」で入力したブログのタイトル
            echo '<meta property="og:url" content="';
            bloginfo('url');
            echo '">';
            echo "\n"; //「一般設定」で入力したブログのURL
        }
        ?>
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
        <?php
        $str = $post->post_content;
        $searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i'; //投稿記事に画像があるか調べる
        if (is_single() or is_page()) {//投稿記事か固定ページの場合
            if (has_post_thumbnail()) {//アイキャッチがある場合
                $image_id = get_post_thumbnail_id();
                $image = wp_get_attachment_image_src($image_id, 'full');
                echo '<meta property="og:image" content="' . $image[0] . '">';
                echo "\n";
            } else if (preg_match($searchPattern, $str, $imgurl) && !is_archive()) {//アイキャッチは無いが画像がある場合
                echo '<meta property="og:image" content="' . $imgurl[2] . '">';
                echo "\n";
            } else {//画像が1つも無い場合
                if(empty($facebook_def_image) or $facebook_def_image == ''){
                  echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/no_photo.png">';
                echo "\n";  
                }else {
                    echo '<meta property="og:image" content="' . $facebook_def_image . '">'; 
                }                
            }
        } else {//投稿記事や固定ページ以外の場合（ホーム、カテゴリーなど）
            echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/logo.png">';
            echo "\n";
        }
        ?>

    <?php }
}
?>