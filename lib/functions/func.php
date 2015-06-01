<?php

//アイキャッチサムネイル生成

add_theme_support('post-thumbnails');
add_image_size('thumb100', 100, 100, true);
add_image_size('box', 220, 150, true);
add_image_size('line', 220, 150, true);



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