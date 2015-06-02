<?php
//レイアウト設定
function astemp_layout_main() {
    $layout_select = get_option('as_layout_select');
    if ($layout_select == 'left') {
        $main_layout = 'col-md-push-4';
        echo $main_layout;
    }else {
        $main_layout = '';
        echo $main_layout;
    }
}
function astemp_layout_side() {
    $layout_select = get_option('as_layout_select');
    if ($layout_select == 'left') {
        $sub_layout = 'col-md-pull-8';
        echo $sub_layout;
    }else {
        $sub_layout = '';
        echo $sub_layout;
    }
}function astemp_layout_test() {
    $layout_select = get_option('as_layout_select');
    echo "test";
    
}
?>


