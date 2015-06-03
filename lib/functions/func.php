<?php

//アイキャッチサムネイル生成

add_theme_support('post-thumbnails');
add_image_size('thumb160', 160, 120, true);
add_image_size('thumb80', 80, 60, true);


// generatorを非表示
remove_action('wp_head', 'wp_generator');

// EditURIを非表示
remove_action('wp_head', 'rsd_link');

// wlwmanifestを非表示
remove_action('wp_head', 'wlwmanifest_link');

// メインコンテンツの幅を指定
if (!isset($content_width))
    $content_width = 750;

// RSS2 の feed リンクを出力
add_theme_support('automatic-feed-links');

//imgにclassを追加する
add_filter( 'image_send_to_editor', 'remove_img_class' );
function remove_img_class( $html ) {
	$class = 'fancybox';
	return str_replace( '<a ', '<a class="'. $class. '" ', $html );
}

//検索ウィジェットカスタム
//検索ウィジェットのカスタマイズ
function new_search_form($form) {
$form = '<form method="get" id="searchform" action="' . get_option('home') . '/" >
<div class="input-group">
<input type="text" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" class="form-control"  placeholder="Search for..." />
<span class="input-group-btn">
<button class="btn btn-default" type="submit" id="searchsubmit" value="">検索</button>
</span>
</div>
</form>';
return $form;
}
add_filter('get_search_form', 'new_search_form' );