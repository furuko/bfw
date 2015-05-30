<?php

/* テーマ独自設定 */
function load_admin_things() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_style('thickbox');
}

//画像アップロード呼び出し
add_action('admin_enqueue_scripts', 'load_admin_things');

//独自メニューを管理画面にフック
add_action('admin_menu', 'astemp_setting_menu');

function astemp_setting_menu() {
    add_action('admin_init', 'register_astemp_setting', 'admin-head');
    add_menu_page('As-Tの設定', 'As-Tの設定', '1', 'astemp_options.php', 'astemp_options_page');
    // 「AS-T設定」にサブメニューを追加
    add_submenu_page('astemp_options.php', 'レイアウト・表示設定', 'レイアウト・表示設定', 8, 'sub_menu2', 'astemp_options_page2');
    add_submenu_page('astemp_options.php', 'トップページ設定', 'トップページ設定', 8, 'sub_menu3', 'astemp_options_page3');
    add_submenu_page('astemp_options.php', 'その他の設定', 'その他の設定', 8, 'sub_menu4', 'astemp_options_page4');
}

function register_astemp_setting() {
    //基本情報
    register_setting('astemp-setting-group1', 'blogname');
    register_setting('astemp-setting-group1', 'blogdescription');

    register_setting('astemp-setting-group1', 'as_kihon_info_name');    //店舗・会社・事業所名
    register_setting('astemp-setting-group1', 'as_kihon_info_post');    //郵便番号
    register_setting('astemp-setting-group1', 'as_kihon_info_ad');      //住所・所在地
    register_setting('astemp-setting-group1', 'as_kihon_info_tel');     //電話番号
    register_setting('astemp-setting-group1', 'as_kihon_info_fax');     //FAX番号
    register_setting('astemp-setting-group1', 'as_kihon_info_rest');    //定休日
    register_setting('astemp-setting-group1', 'as_kihon_info_time');    //営業時間
    //レイアウト設定
    register_setting('astemp-setting-group2', 'as_layout_select');      //レイアウトの設定
    //トップページのロゴ設定
    register_setting('astemp-setting-group2', 'as_logo_type');
    register_setting('astemp-setting-group2', 'as_logo_text');
    register_setting('astemp-setting-group2', 'as_logo_image');

    //右インフォメーション設定
    register_setting('astemp-setting-group2', 'as_headinfo_type');
    register_setting('astemp-setting-group2', 'as_headinfo_type_text');
    register_setting('astemp-setting-group2', 'as_headinfo_type_image');
    register_setting('astemp-setting-group2', 'as_headinfo_type_none');
    register_setting('astemp-setting-group2', 'as_headinfo_type_image_url');
    register_setting('astemp-setting-group2', 'as_headinfo_type_image_img');
    register_setting('astemp-setting-group2', 'as_headinfo_type_image_alt');

    //一覧表示
    register_setting('astemp-setting-group2', 'as_view');

    //ナビゲーション表示
    register_setting('astemp-setting-group2', 'as_glnavi');
    register_setting('astemp-setting-group2', 'as_ftnavi');

    register_setting('astemp-setting-group2', 'as_profile');
    register_setting('astemp-setting-group2', 'as_profile_page');
    register_setting('astemp-setting-group2', 'as_profile_title');
    register_setting('astemp-setting-group2', 'as_profile_img');
    register_setting('astemp-setting-group2', 'as_profile_img_type');
    register_setting('astemp-setting-group2', 'as_profile_com');
    
    register_setting('astemp-setting-group2', 'as_data_page');//未登録
    register_setting('astemp-setting-group2', 'as_data_single');//未登録

    //no-image
    register_setting('astemp-setting-group2', 'as_no_img');

    //画像・スライド表示設定
    register_setting('astemp-setting-group3', 'as_main_img');

    register_setting('astemp-setting-group3', 'as_main_img_img1');
    register_setting('astemp-setting-group3', 'as_main_img_img1_alt');
    register_setting('astemp-setting-group3', 'as_main_img_img1_url');

    register_setting('astemp-setting-group3', 'as_main_img_slide1');
    register_setting('astemp-setting-group3', 'as_main_img_slide1_alt');
    register_setting('astemp-setting-group3', 'as_main_img_slide1_url');

    register_setting('astemp-setting-group3', 'as_main_img_slide2');
    register_setting('astemp-setting-group3', 'as_main_img_slide2_alt');
    register_setting('astemp-setting-group3', 'as_main_img_slide2_url');

    register_setting('astemp-setting-group3', 'as_main_img_slide3');
    register_setting('astemp-setting-group3', 'as_main_img_slide3_alt');
    register_setting('astemp-setting-group3', 'as_main_img_slide3_url');

    
    //3ブロックPRスペース
    register_setting('astemp-setting-group3', 'as_pr_img_type');
    register_setting('astemp-setting-group3', 'as_pr_block');
    register_setting('astemp-setting-group3', 'as_pr_title_view');//未登録
    
    register_setting('astemp-setting-group3', 'as_pr_block_title');//未登録
    
    register_setting('astemp-setting-group3', 'as_pr_block1_title');
    register_setting('astemp-setting-group3', 'as_pr_block1_img');
    register_setting('astemp-setting-group3', 'as_pr_block1_url');
    
    register_setting('astemp-setting-group3', 'as_pr_block2_title');
    register_setting('astemp-setting-group3', 'as_pr_block2_img');
    register_setting('astemp-setting-group3', 'as_pr_block2_url');
    
    register_setting('astemp-setting-group3', 'as_pr_block3_title');
    register_setting('astemp-setting-group3', 'as_pr_block3_img');
    register_setting('astemp-setting-group3', 'as_pr_block3_url');
    
    register_setting('astemp-setting-group3', 'as_pr_block4_title');
    register_setting('astemp-setting-group3', 'as_pr_block4_img');
    register_setting('astemp-setting-group3', 'as_pr_block4_url');
    
    register_setting('astemp-setting-group3', 'as_pr_block5_title');
    register_setting('astemp-setting-group3', 'as_pr_block5_img');
    register_setting('astemp-setting-group3', 'as_pr_block5_url');
    
    register_setting('astemp-setting-group3', 'as_pr_block6_title');
    register_setting('astemp-setting-group3', 'as_pr_block6_img');
    register_setting('astemp-setting-group3', 'as_pr_block6_url');

    //お知らせ
    register_setting('astemp-setting-group3', 'as_news_view');
    register_setting('astemp-setting-group3', 'as_home_news');


    //Welcomeメッセージ
    register_setting('astemp-setting-group3', 'as_welcome_msg_title');
    register_setting('astemp-setting-group3', 'as_welcome_msg');
    register_setting('astemp-setting-group3', 'as_welcome_msg_img');
    register_setting('astemp-setting-group3', 'as_img_position');

    //googlemap
    register_setting('astemp-setting-group4', 'as_gmap');
    //google analytics
    register_setting('astemp-setting-group4', 'as_analytics');
}

/* ================================================== *
 *
 *    基本情報設定　astemp_options_page
 *
 * ================================================== */

function astemp_options_page() {
    ?>
    <h2>■ 基本情報設定</h2>
    <script type="text/javascript">
        jQuery('document').ready(function() {
            jQuery('.media-upload').each(function() {
                var rel = jQuery(this).attr("rel");
                jQuery(this).click(function() {
                    window.send_to_editor = function(html) {
                        html = '<a>' + html + '</a>';
                        imgurl = jQuery('img', html).attr('src');
                        jQuery('#' + rel).val(imgurl);
                        tb_remove();
                    }
                    formfield = jQuery('#' + rel).attr('name');
                    tb_show(null, 'media-upload.php?post_id=0&type=image&TB_iframe=true');
                    return false;
                });
            });
        });
    </script>
    <div class="wrap">
        <h2>基本設定</h2>
        <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
            <?php
            settings_fields('astemp-setting-group1');
            do_settings_sections('astemp-setting-group1');
            ?>

            <div class="metabox-holder">
                <div id="toppage_meta_setting" class="postbox " >
                    <h3 class='hndle'><span>ホームページ基本設定</span></h3>
                    <div class="inside">
                        <div class="main">

                            <h4><span style="color:#cc0000; font-size:14px;"> ■ホームページのタイトル</span></h4>
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">サイトタイトル</th>
                                        <td>
                                            <input type="text" id="blogname" class="regular-text" name="blogname" value="<?php echo get_option('blogname'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="kihon_info_post">サイトの説明</label>
                                        </th>
                                        <td>
                                            <textarea id="blogdescription" class="regular-text" name="blogdescription" rows="5" cols="60"><?php echo get_option('blogdescription'); ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class="metabox-holder">
                <div id="as_kihon_info" class="postbox " >
                    <h3 class='hndle'><span>店舗・事業の基本設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <h4><span style="color:#cc0000; font-size:14px;"> ■店舗・事業情報を入力してください</span></h4>
                            <p class="setting_description"><small>ここで設定した項目は<strong>フッター部分（ホームページ最下部）に表示</strong>されます。</small><small><strong>表示させたくない項目がある場合は無記入</strong>にしてください。</small></p>
                            <p class="setting_description"><small>『住所・所在地』を入力して、<strong>【その他】の設定</strong>よりGoogleMapを表示させることができます。</small></p>
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_kihon_info_name">店舗・会社・事業所名</label>
                                        </th>
                                        <td><input type="text" id="as_kihon_info_name" class="regular-text" name="as_kihon_info_name" value="<?php echo get_option('as_kihon_info_name'); ?>"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="kihon_info_post">郵便番号</label>
                                        </th>
                                        <td>
                                            <input type="text" id="as_kihon_info_post" class="regular-text" name="as_kihon_info_post" value="<?php echo get_option('as_kihon_info_post'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_kihon_info_ad">住所・所在地</label>
                                        </th>
                                        <td>
                                            <input type="text" id="as_kihon_info_ad" class="regular-text" name="as_kihon_info_ad" value="<?php echo get_option('as_kihon_info_ad'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="as_kihon_info_tel">電話番号</label></th>
                                        <td>
                                            <input type="text" id="as_kihon_info_tel" class="regular-text" name="as_kihon_info_tel" value="<?php echo get_option('as_kihon_info_tel'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="as_kihon_info_fax">FAX番号</label></th>
                                        <td>
                                            <input type="text" id="as_kihon_info_fax" class="regular-text" name="as_kihon_info_fax" value="<?php echo get_option('as_kihon_info_fax'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="as_kihon_info_rest">定休日</label></th>
                                        <td>
                                            <input type="text" id="as_kihon_info_rest" class="regular-text" name="as_kihon_info_rest" value="<?php echo get_option('as_kihon_info_rest'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="as_kihon_info_time">営業時間</label></th>
                                        <td>
                                            <input type="text" id="as_kihon_info_time" class="regular-text" name="as_kihon_info_time" value="<?php echo get_option('as_kihon_info_time'); ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

/* ================================================== *
 *
 *    レイアウト・表示設定　astemp_options_page2
 *
 * ================================================== */

function astemp_options_page2() {
    ?>
    <script type="text/javascript">
        jQuery('document').ready(function() {
            jQuery('.media-upload').each(function() {
                var rel = jQuery(this).attr("rel");
                jQuery(this).click(function() {
                    window.send_to_editor = function(html) {
                        html = '<a>' + html + '</a>';
                        imgurl = jQuery('img', html).attr('src');
                        jQuery('#' + rel).val(imgurl);
                        tb_remove();
                    }
                    formfield = jQuery('#' + rel).attr('name');
                    tb_show(null, 'media-upload.php?post_id=0&type=image&TB_iframe=true');
                    return false;
                });
            });
        });
    </script>
    <div class="wrap">    
        <h2>■ レイアウト設定</h2>
        <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
            <?php
            settings_fields('astemp-setting-group2');
            do_settings_sections('astemp-setting-group2');
            ?>
            <!--レイアウト設定-->
            <div class="metabox-holder">
                <div id="as_layout_select" class="postbox " >
                    <h3 class='hndle'><span>レイアウト設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <h4><span style="color:#cc0000; font-size:14px;"> ■ レイアウトを選んでください</span></h4>
                            <?php
                            $as_layout_select = trim(get_option('as_layout_select'));
                            if (isset($as_layout_select) && $as_layout_select !== '') {
                                $as_layout_select = trim(get_option('as_layout_select'));
                            } else {
                                $as_layout_select = 'left';
                            }
                            ?>
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">レイアウト</th>
                                        <td><input type="radio" name="as_layout_select" value="left" <?php checked($as_layout_select, 'left'); ?> ><strong>2カラム左</strong>
                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/left-sidebar.png" alt="Content-Sidebar" /></td>
                                        <td><input type="radio" name="as_layout_select" value="right" <?php checked($as_layout_select, 'right'); ?> ><strong>2カラム右</strong>
                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/right-sidebar.png" alt="Content-Sidebar" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--ロゴ設定-->
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>ロゴ設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <h4><span style="color:#cc0000; font-size:14px;"> ■ ロゴタイプを選択してください</h4>
                            <?php
                            $as_logo_type = trim(get_option('as_logo_type'));
                            if (isset($as_logo_type) && $as_logo_type !== '') {
                                $as_logo_type = trim(get_option('as_logo_type'));
                            } else {
                                $as_logo_type = 'as_logo_type_text';
                            }
                            ?>

                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row"><h4>ロゴタイプ</h4></th>
                                        <td><label><input type="radio" name="as_logo_type" value="as_logo_type_text" <?php checked($as_logo_type, 'as_logo_type_text'); ?>  checked ><strong>テキストロゴ</strong></label>
                                        <p class="setting_description"><small>ロゴをテキストで表示します。(ホームページのタイトルが表示されます)</small></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">&nbsp;</th>
                                      <td><label><input type="radio" name="as_logo_type" value="as_logo_type_image" <?php checked($as_logo_type, 'as_logo_type_image'); ?> ><strong>画像ロゴ</strong></label>
                                        <p class="setting_description"><small>ロゴを画像で表示します。「画像をアップロード」ボタンを押して任意の画像を選択してください。このテンプレートでは、300px x 70pxの画像が最も適しています。</small></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">ロゴ画像</th>
                                      <td><input type="text" id="as_logo_image" name="as_logo_image" class="regular-text" value="<?php echo get_option('as_logo_image'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_logo_image"><input class="cmb_upload_button button" type="button" value="ロゴをアップロードする" /></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">プレビュー</th>
                                      <td><?php echo '<img src="' . esc_url(get_option('as_logo_image')) . '" />'; ?></td>
                                    </tr>
                                </tbody>
                            </table>
</body>

                        </div>
                    </div>
                </div>
            </div>

            <!--ヘッダーインフォメーション設定-->
            <div class="metabox-holder">
                <div id="as_headinfo_type" class="postbox " >
                    <h3 class='hndle'><span>ヘッダーインフォメーション設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <p class="setting_description">ヘッダー部右側のお問い合わせ表示の設定を行います。</p>

                            <h4><span style="color:#cc0000; font-size:14px;"> ■ヘッダーインフォメーションを選択してください。</span></h4>
                            <?php
                            $as_headinfo_type = trim(get_option('as_headinfo_type'));
                            if (isset($as_headinfo_type) && $as_headinfo_type !== '') {
                                $as_headinfo_type = trim(get_option('as_headinfo_type'));
                            } else {
                                $as_headinfo_type = 'as_headinfo_type_none';
                            }
                            ?>

                            <table class="form-table">
                                <tbody>
                                    <tr>
                                      <th scope="row">表示タイプ</th>
                                      <td><label><input type="radio" name="as_headinfo_type" value="as_headinfo_type_text" <?php checked($as_headinfo_type, 'as_headinfo_type_text'); ?>><strong>テキスト</strong></label>　
                            <label><input type="radio" name="as_headinfo_type" value="as_headinfo_type_image"<?php checked($as_headinfo_type, 'as_headinfo_type_image'); ?> ><strong>画像</strong></label>　
                            <label><input type="radio" name="as_headinfo_type" value="as_headinfo_type_none" <?php checked($as_headinfo_type, 'as_headinfo_type_none'); ?> ><strong>表示しない</strong></label></td>
                                    </tr>
                                
                                </tbody>
                            </table>

                            <h4><span style="color:#cc0000; font-size:14px;"> ■ 画像を選択した場合に設定してください。</span></h4>
                            <p class="setting_description"><small>画像でインフォメーションを設定する場合は以下で画像をアップロードしてください。</small></p>
                            
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_headinfo_type_image_img">バナー画像</label><p class="setting_description"><small>画像のサイズは300*86が推奨です。</small></p>
                                        </th>
                                        <td>
                                            <input type="text" id="as_headinfo_type_image_img" name="as_headinfo_type_image_img" class="regular-text" value="<?php echo get_option('as_headinfo_type_image_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_headinfo_type_image_img"><input class="cmb_upload_button button" type="button" value="バナーをアップロードする" /></a>
                                            <?php echo '<img src="' . esc_url(get_option('as_headinfo_type_image_img')) . '" />'; ?>
                                        </td>
                                    </tr>
                                <th scope="row">
                                    <label for="as_headinfo_type_image_url">リンク</label>
                                </th>
                                <td><input type="text" id="as_headinfo_type_image_url" class="regular-text" name="as_headinfo_type_image_url" value="<?php echo get_option('as_headinfo_type_image_url'); ?>"></td>
                                </tr>
                                <tr>

                                <tr>
                                    <th scope="row">説明</th>
                                    <td><input type="text" id="as_banner_alt" class="regular-text" name="as_headinfo_type_image_alt" value="<?php echo get_option('as_headinfo_type_image_alt'); ?>"></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!--一覧表示設定-->
            <div class="metabox-holder">
                <div id="as_layout_select" class="postbox " >
                    <h3 class='hndle'><span>一覧表示の設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <h4><span style="color:#cc0000; font-size:14px;"> ■ ライン型かボックス型かを選択してください。</span></h4>
                            <p class="setting_description"><small>一覧表示される際に1記事1行で表示させるか、3記事1行のボックス型で表示させるかの設定です。</small></p>

                            <?php
                            $as_view = trim(get_option('as_view'));
                            if (isset($as_view) && $as_view !== '') {
                                $as_view = trim(get_option('as_view'));
                            } else {
                                $as_view = 'line';
                            }
                            ?>
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                      <th scope="row">表示タイプ</th>
                                      <td><label><input type="radio" name="as_view" value="line" <?php checked($as_view, 'line'); ?> ><strong>ライン型</strong></label>
                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/line.png" alt="Content-Sidebar" /></td>
                                      <td><label><input type="radio" name="as_view" value="box" <?php checked($as_view, 'box'); ?> ><strong>ボックス型</strong></label>
                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/box.png" alt="Content-Sidebar" /></td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--プロフィール設定-->
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>プロフィールの設定</span></h3>
                    <div class="inside">
                        <div class="main">

                            <?php
                            $as_profile = trim(get_option('as_profile'));
                            if (isset($as_profile) && $as_profile !== '') {
                                $as_profile = trim(get_option('as_profile'));
                            } else {
                                $as_profile = '';
                            }

                            $as_profile_img_type = trim(get_option('as_profile_img_type'));
                            if (isset($as_profile_img_type) && $as_profile_img_type !== '') {
                                $as_profile_img_type = trim(get_option('as_profile_img_type'));
                            } else {
                                $as_view = 'rounded';
                            }

                            $as_profile_page = trim(get_option('as_profile_page'));
                            if (isset($as_profile_page) && $as_profile_page !== '') {
                                $as_profile_page = trim(get_option('as_profile_page'));
                            } else {
                                $as_profile_page = 'page_on';
                            }
                            ?>

<table class="form-table">
                                <tbody>
                                    <tr>
                                      <th scope="row">プロフィール表示</th>
                                      <td><label for="as_profile"><input name="as_profile" type="checkbox" id="chk1 as_profile" value="none" <?php checked(get_option('as_profile'), 'none'); ?> onclick="chkdisp(this, 'ans1')" />プロフィールを表示する</label></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">表示場所の設定</th>
                                      <td><label><input type="radio" name="as_profile_page" value="page_on" <?php checked($as_profile_page, 'page_on'); ?>><strong>全ページに表示</strong></label>　
                            <label><input type="radio" name="as_profile_page" value="page_off"<?php checked($as_profile_page, 'page_off'); ?> ><strong>トップページのみ表示</strong></label></td>
                                    </tr>
         

                                    <tr>
                                        <th scope="row">
                                            <label for="as_profile_title">名前・ニックネーム</label>
                                        </th>
                                        <td>
                                            <input type="text" id="as_profile_title" class="regular-text" name="as_profile_title" value="<?php echo get_option('as_profile_title'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_profile_img">プロフィール画像</label>
                                        </th>
                                        <td>
                                            <input type="text" id="as_profile_img" name="as_profile_img" class="regular-text" value="<?php echo get_option('as_profile_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_profile_img"><input class="cmb_upload_button button" type="button" value="プロフィール画像をアップロードする" /></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_profile_img">画像表示タイプ</label>
                                        </th>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <p><label><input type="radio" name="as_profile_img_type" value="rounded" <?php checked($as_profile_img_type, 'rounded'); ?> ><strong>角丸型</strong></label>
                                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/kadomaru.png" alt="Content-Sidebar" />
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p><label><input type="radio" name="as_profile_img_type" value="circle" <?php checked($as_profile_img_type, 'circle'); ?> ><strong>丸型</strong></label>
                                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/maru.png" alt="Content-Sidebar" />
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p><label><input type="radio" name="as_profile_img_type" value="normal" <?php checked($as_profile_img_type, 'normal'); ?> ><strong>ノーマル</strong></label>
                                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/normal.png" alt="Content-Sidebar" />
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">プレビュー</th>
                                        <td><?php echo '<img src="' . esc_url(get_option('as_profile_img')) . '" width="200"  />'; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_profile_title">コメント</label>
                                        </th>
                                        <td>
                                            <textarea id="as_profile_com" class="regular-text" name="as_profile_com" rows="5" cols="60" wrap="soft"><?php echo get_option('as_profile_com'); ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!--ナビゲーション設定-->
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>ナビゲーションの設定</span></h3>
                    <div class="inside">
                        <div class="main">

                            <?php
                            $as_glnavi = trim(get_option('as_glnavi'));
                            if (isset($as_glnavi) && $as_glnavi !== '') {
                                $as_glnavi = trim(get_option('as_glnavi'));
                            } else {
                                $as_glnavi = '';
                            }

                            $as_ftnavi = trim(get_option('as_ftnavi'));
                            if (isset($as_ftnavi) && $as_ftnavi !== '') {
                                $as_ftnavi = trim(get_option('as_ftnavi'));
                            } else {
                                $as_ftnavi = '';
                            }
                            ?>

                            <p>ヘッダーとフッターにメニューを表示させることが出来ます。ここには固定ページで投稿された記事が自動的に表示されますが、<a href="nav-menus.php?action=edit&menu=0" target="_blank">【外観】の『メニュー』設定</a>を行うことで優先的に設定したメニューが表示されるようになります。</p>
                            <h4><span style="color:#cc0000; font-size:14px;"> ■ 表示する場合はチェックを入れてください</span></h4>
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                      <th scope="row">ヘッダー部ナビ</th>
                                      <td><label for="as_glnavi"><input name="as_glnavi" type="checkbox" id="as_social_buttons" value="none" <?php checked(get_option('as_glnavi'), 'none'); ?> />ヘッダー部にメニューを表示</label></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">フッター部ナビ</th>
                                      <td><label for="as_ftnavi"><input name="as_ftnavi" type="checkbox" id="as_social_buttons" value="none" <?php checked(get_option('as_ftnavi'), 'none'); ?> />フッター部にメニューを表示</label></td>
                                    </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            
            <!--更新日時の表示設定-->
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>更新日時の表示設定</span></h3>
                    <div class="inside">
                        <div class="main">

                            <?php
                            $as_data_single = trim(get_option('as_data_single'));
                            if (isset($as_data_single) && $as_data_single !== '') {
                                $as_data_single = trim(get_option('as_data_single'));
                            } else {
                                $as_data_single = '';
                            }

                            $as_data_page = trim(get_option('as_data_page'));
                            if (isset($as_data_page) && $as_data_page !== '') {
                                $as_data_page = trim(get_option('as_data_page'));
                            } else {
                                $as_ftnavi = '';
                            }
                            ?>

                            <p>ブログ記事や固定ページがアップされた日や更新日の表示設定を行います。</p>
                            <h4><span style="color:#cc0000; font-size:14px;"> ■ 表示する場合はチェックを入れてください</span></h4>
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                      <th scope="row">ブログ記事の更新日時</th>
                                      <td><label for="as_data_single"><input name="as_data_single" type="checkbox" id="as_data_single" value="check" <?php checked(get_option('as_data_single'), 'check'); ?> />表示する</label></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">固定ページの更新日時</th>
                                      <td><label for="as_data_page"><input name="as_data_page" type="checkbox" id="as_data_page" value="check" <?php checked(get_option('as_data_page'), 'check'); ?> />表示する</label></td>
                                    </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            
            

            <!--アイキャッチ設定-->
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>アイキャッチ画像がない場合に表示される画像設定</span></h3>

                    <div class="inside">
                        <div class="main"><p class="setting_description">アイキャッチ画像は各記事で設定することができ、カテゴリ一覧などでタイトル横に記事のイメージとして表示されます。<br />このアイキャッチ画像が設定されなかった場合に変わりに表示される画像をアップロードすることが出来ます。<br />（デフォルトではsamplePhotoという画像が表示されます。）</p>
                            <h4><span style="color:#cc0000; font-size:14px;"> ■画像アップロード</span></h4>

                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_headinfo_type_image_img">アイキャッチ画像</label>
                                        </th>
                                        <td>
                                            <input type="text" id="as_no_img" name="as_no_img" class="regular-text" value="<?php echo get_option('as_no_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_no_img"><input class="cmb_upload_button button" type="button" value="アイキャッチをアップロードする" /></a>
                                        </td>
                                    </tr>
                                <th scope="row">プレビュー</th>
                                <td><?php echo '<img src="' . esc_url(get_option('as_no_img')) . '" width="200"  />'; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

/* ================================================== *
 *
 *    レイアウト・表示設定　astemp_options_page3
 *
 * ================================================== */

function astemp_options_page3() {
    ?>
    <script type="text/javascript">
        jQuery('document').ready(function() {
            jQuery('.media-upload').each(function() {
                var rel = jQuery(this).attr("rel");
                jQuery(this).click(function() {
                    window.send_to_editor = function(html) {
                        html = '<a>' + html + '</a>';
                        imgurl = jQuery('img', html).attr('src');
                        jQuery('#' + rel).val(imgurl);
                        tb_remove();
                    }
                    formfield = jQuery('#' + rel).attr('name');
                    tb_show(null, 'media-upload.php?post_id=0&type=image&TB_iframe=true');
                    return false;
                });
            });
        });
    </script>
    <div class="wrap">    
        <h2>■ トップページ設定</h2>
        <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
            <?php
            settings_fields('astemp-setting-group3');
            do_settings_sections('astemp-setting-group3');
            ?>

            <!--イメージ画像とスライダーの設定-->
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>イメージ画像とスライダーの設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <p class="setting_description">トップページにイメージ画像を表示するか、スライダーを表示するかの設定を行います。</p>

                            <h4><span style="color:#cc0000; font-size:14px;"> ■ イメージ画像を表示しますか？スライダーを表示しますか？ </span></h4>
                            <?php
                            $as_main_img = trim(get_option('as_main_img'));
                            if (isset($as_main_img) && $as_main_img !== '') {
                                $as_main_img = trim(get_option('as_main_img'));
                            } else {
                                $as_main_img = 'as_main_img_img';
                            }
                            ?>
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                      <th scope="row">イメージ設定</th>
                                      <td><label><input type="radio" name="as_main_img" value="as_main_img_img" <?php checked($as_main_img, 'as_main_img_img'); ?> checked ><strong>1枚イメージ画像を表示</strong></label>　
                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/image.png" alt="Content-Sidebar" /></td>
                                      <td><label><input type="radio" name="as_main_img" value="as_main_img_slide" <?php checked($as_main_img, 'as_main_img_slide'); ?>  ><strong>スライダーを表示</strong></label>
                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/slide.png" alt="Content-Sidebar" /></td>
                                    </tr>
                            </table>
                            
                            <h4><span style="color:#cc0000; font-size:14px;"> ■ イメージ画像を選択した場合の設定</span></h4>

                            <table class="form-table">
                                <tr>
                                    <th scope="row">
                                        <label for="as_headinfo_type_image_img">イメージ画像</label><p class="setting_description"><small>画像のサイズは980*400が推奨です。</small></p>
                                <p><?php echo '<img src="' . esc_url(get_option('as_main_img_img1')) . '" width="200" />'; ?></p>
                                    </th>
                                    <td><p>【イメージ画像】<br />
                                            <input type="text" id="as_main_img_img1" class="regular-text" name="as_main_img_img1" value="<?php echo get_option('as_main_img_img1'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_main_img_img1"><input class="cmb_upload_button button" type="button" value="画像をアップロードする" /></a></p>
                                        
                                        <p>【イメージ画像の説明】<br />
                                            <input type="text" id="as_main_img_img1_alt" class="regular-text" name="as_main_img_img1_alt" value="<?php echo get_option('as_main_img_img1_alt'); ?>"></p>
                                        <p>【イメージ画像のリンク先】<br />
                                            <input type="text" id="as_main_img_img1_url" class="regular-text" name="as_main_img_img1_url" value="<?php echo get_option('as_main_img_img1_url'); ?>"></p>
                                    </td>
                                </tr>
                            </table>

                            <h4><span style="color:#cc0000; font-size:14px;"> ■ スライド画像を選択した場合の設定</span></h4>
                            <table class="form-table">
                                <tr>
                                    <th scope="row">
                                        <label for="as_headinfo_type_image_img">スライド画像1</label><p class="setting_description"><small>画像のサイズは800*400が推奨です。</small></p>
                                <p><?php echo '<img src="' . esc_url(get_option('as_main_img_slide1')) . '" width="200"  />'; ?></p>
                                    </th>
                                    <td><p>【スライド画像1】<br />
                                            <input type="text" id="as_main_img_slide1" class="regular-text" name="as_main_img_slide1" value="<?php echo get_option('as_main_img_slide1'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_main_img_slide1"><input class="cmb_upload_button button" type="button" value="画像をアップロードする" /></a></p>
                                        
                                        <p>【スライド画像1の説明】<br />
                                            <input type="text" id="as_main_img_slide1_alt" class="regular-text" name="as_main_img_slide1_alt" value="<?php echo get_option('as_main_img_slide1_alt'); ?>"></p>
                                        <p>【スライド画像1のリンク先】<br />
                                            <input type="text" id="as_main_img_slide1_url" class="regular-text" name="as_main_img_slide1_url" value="<?php echo get_option('as_main_img_slide1_url'); ?>"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="as_headinfo_type_image_img">スライド画像2</label><p class="setting_description"><small>画像のサイズは800*400が推奨です。</small></p>
                                <p><?php echo '<img src="' . esc_url(get_option('as_main_img_slide2')) . '" width="200"  />'; ?></p>
                                    </th>
                                    <td><p>【スライド画像2】<br />
                                            <input type="text" id="as_main_img_slide2" class="regular-text" name="as_main_img_slide2" value="<?php echo get_option('as_main_img_slide2'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_main_img_slide2"><input class="cmb_upload_button button" type="button" value="画像をアップロードする" /></a></p>
                                        
                                        <p>【スライド画像2の説明】<br />
                                            <input type="text" id="as_main_img_slide2_alt" class="regular-text" name="as_main_img_slide2_alt" value="<?php echo get_option('as_main_img_slide2_alt'); ?>"></p>
                                        <p>【スライド画像2のリンク先】<br />
                                            <input type="text" id="as_main_img_slide2_url" class="regular-text" name="as_main_img_slide2_url" value="<?php echo get_option('as_main_img_slide2_url'); ?>"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="as_headinfo_type_image_img">スライド画像3</label><p class="setting_description"><small>画像のサイズは800*400が推奨です。</small></p>
                                <p><?php echo '<img src="' . esc_url(get_option('as_main_img_slide3')) . '" width="200"  />'; ?></p>
                                    </th>
                                    <td><p>【スライド画像3】<br />
                                            <input type="text" id="as_main_img_slide3" class="regular-text" name="as_main_img_slide3" value="<?php echo get_option('as_main_img_slide3'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_main_img_slide3"><input class="cmb_upload_button button" type="button" value="画像をアップロードする" /></a></p>
                                        
                                        <p>【スライド画像3の説明】<br />
                                            <input type="text" id="as_main_img_slide3_alt" class="regular-text" name="as_main_img_slide3_alt" value="<?php echo get_option('as_main_img_slide3_alt'); ?>"></p>
                                        <p>【スライド画像3のリンク先】<br />
                                            <input type="text" id="as_main_img_slide3_url" class="regular-text" name="as_main_img_slide3_url" value="<?php echo get_option('as_main_img_slide3_url'); ?>"></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--PRブロックの設定-->
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>PRブロックの設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <p class="setting_description">トップページの3分割されたPRブロックの設定です。画像とタイトルとテキストにより商品やサービスをトップページでアピールすることが出来ます。</p>
                            <h4><span style="color:#cc0000; font-size:14px;"> ■ PRブロックの表示タイプを選択してください。</span></h4>

                            <?php
                            $as_pr_block = trim(get_option('as_pr_block'));
                            if (isset($as_pr_block) && $as_pr_block !== '') {
                                $as_pr_block = trim(get_option('as_pr_block'));
                            } else {
                                $as_pr_block = 'as_pr_block_off';
                            }

                            $as_pr_img_type = trim(get_option('as_pr_img_type'));
                            if (isset($as_pr_img_type) && $as_pr_img_type !== '') {
                                $as_pr_img_type = trim(get_option('as_pr_img_type'));
                            } else {
                                $as_view = 'rounded';
                            }
                            
                            $as_pr_title_view = trim(get_option('as_pr_title_view'));
                            if (isset($as_pr_title_view) && $as_pr_title_view !== '') {
                                $as_pr_title_view = trim(get_option('as_pr_title_view'));
                            } else {
                                $as_pr_title_view = '';
                            }
                            
                            
                            $as_pr_block = trim(get_option('as_pr_block'));
                            if (isset($as_pr_block) && $as_pr_block !== '') {
                                $as_pr_block = trim(get_option('as_pr_block'));
                            } else {
                                $as_pr_block = 'none';
                            }
                            ?>
                            
                            


<table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_pr_block_title">タイトル</label>
                                        </th>
                                        <td><input type="text" id="as_pr_block_title" class="regular-text" name="as_pr_block_title" value="<?php echo get_option('as_pr_block_title'); ?>"></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">PRアイテムの表示</th>
                 
                                      <td><label><input type="radio" name="as_pr_block" value="as_pr_block_on6" <?php checked($as_pr_block, 'as_pr_block_on6'); ?> ><strong>表示する</strong></label>
                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/pr6.png" alt="Content-Sidebar" /></td>
                  
                                      <td><label><input type="radio" name="as_pr_block" value="as_pr_block_off" <?php checked($as_pr_block, 'as_pr_block_off'); ?> ><strong>表示しない</strong></label>
                                            <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/pr0.png" alt="Content-Sidebar" /></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">アイテム名の表示</th>
                                        <td><label for="as_pr_title_view"><input name="as_pr_title_view" type="checkbox" id="as_pr_title_view" value="check" <?php checked(get_option('as_pr_title_view'), 'check'); ?> onclick="chkdisp(this, 'ans1')" />アイテム名の表示する</label></td>
                                    </tr>
                            </table>

                            <h4><span style="color:#cc0000; font-size:14px;"> ■ 画像表示タイプ</span></h4>
                            <table class="form-table">
                                <th scope="row">
                                    <label for="as_pr_img">画像表示タイプ</label>
                                </th>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <p><label><input type="radio" name="as_pr_img_type" value="rounded" <?php checked($as_pr_img_type, 'rounded'); ?> ><strong>角丸型</strong></label>
                                                    <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/kadomaru.png" alt="Content-Sidebar" />
                                                </p>
                                            </td>
                                            <td>
                                                <p><label><input type="radio" name="as_pr_img_type" value="circle" <?php checked($as_pr_img_type, 'circle'); ?> ><strong>丸型</strong></label>
                                                    <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/maru.png" alt="Content-Sidebar" />
                                                </p>
                                            </td>
                                            <td>
                                                <p><label><input type="radio" name="as_pr_img_type" value="normal" <?php checked($as_pr_img_type, 'normal'); ?> ><strong>ノーマル</strong></label>
                                                    <br /><img src="<?php echo ASTEMP_ADMIN_IMAGES_URL; ?>/normal.png" alt="Content-Sidebar" />
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                </tr>
                            </table>

                            <h4><span style="color:#cc0000; font-size:14px;"> ■ 各PRの設定を</span></h4>
                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_pr_block_on">1つ目のPR設定</label>
                                            <p><?php echo '<img src="' . esc_url(get_option('as_pr_block1_img')) . '" width="200" />'; ?></p>
                                        </th>
                                        <td>
                                            <p>【タイトル】<br />
                                                <input type="text" id="as_pr_block1_title" class="regular-text" name="as_pr_block1_title" value="<?php echo get_option('as_pr_block1_title'); ?>"></p>
                                            <p>【画像】<br />
                                                <input type="text" id="as_pr_block1_img" class="regular-text" name="as_pr_block1_img" value="<?php echo get_option('as_pr_block1_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_pr_block1_img"><input class="cmb_upload_button button" type="button" value="バナーをアップロードする" /></a></p>
                                            

                                            <p>【リンク先】<br />
                                                <input type="text" id="as_pr_block1_url" class="regular-text" name="as_pr_block1_url" value="<?php echo get_option('as_pr_block1_url'); ?>"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_pr_block_on">2つ目のPR設定</label><p><?php echo '<img src="' . esc_url(get_option('as_pr_block2_img')) . '" width="200" />'; ?></p>
                                        </th>
                                        <td>
                                            <p>【タイトル】<br />
                                                <input type="text" id="as_pr_block2_title" class="regular-text" name="as_pr_block2_title" value="<?php echo get_option('as_pr_block2_title'); ?>"></p>
                                            <p>【画像】<br />
                                                <input type="text" id="as_pr_block2_img" class="regular-text" name="as_pr_block2_img" value="<?php echo get_option('as_pr_block2_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_pr_block2_img"><input class="cmb_upload_button button" type="button" value="バナーをアップロードする" /></a></p>
                                            
                                            
                                            <p>【リンク先】<br />
                                                <input type="text" id="as_pr_block2_url" class="regular-text" name="as_pr_block2_url" value="<?php echo get_option('as_pr_block2_url'); ?>"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_pr_block_on">3つ目のPR設定</label><p><?php echo '<img src="' . esc_url(get_option('as_pr_block3_img')) . '" width="200" />'; ?></p>
                                        </th>
                                        <td>
                                            <p>【タイトル】<br />
                                                <input type="text" id="as_pr_block3_title" class="regular-text" name="as_pr_block3_title" value="<?php echo get_option('as_pr_block3_title'); ?>"></p>
                                            <p>【画像】<br />
                                                <input type="text" id="as_pr_block3_img" class="regular-text" name="as_pr_block3_img" value="<?php echo get_option('as_pr_block3_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_pr_block3_img"><input class="cmb_upload_button button" type="button" value="バナーをアップロードする" /></a></p>
                                            
                                            
                                            <p>【リンク先】<br />
                                                <input type="text" id="as_pr_block3_url" class="regular-text" name="as_pr_block3_url" value="<?php echo get_option('as_pr_block3_url'); ?>"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_pr_block_on">4つ目のPR設定</label>
                                            <p><?php echo '<img src="' . esc_url(get_option('as_pr_block4_img')) . '" width="200" />'; ?></p>
                                        </th>
                                        <td>
                                            <p>【タイトル】<br />
                                                <input type="text" id="as_pr_block4_title" class="regular-text" name="as_pr_block4_title" value="<?php echo get_option('as_pr_block4_title'); ?>"></p>
                                            <p>【画像】<br />
                                                <input type="text" id="as_pr_block4_img" class="regular-text" name="as_pr_block4_img" value="<?php echo get_option('as_pr_block4_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_pr_block4_img"><input class="cmb_upload_button button" type="button" value="バナーをアップロードする" /></a></p>
                                            
                                            
                                            <p>【リンク先】<br />
                                                <input type="text" id="as_pr_block4_url" class="regular-text" name="as_pr_block4_url" value="<?php echo get_option('as_pr_block4_url'); ?>"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_pr_block_on">5つ目のPR設定</label><p><?php echo '<img src="' . esc_url(get_option('as_pr_block5_img')) . '" width="200" />'; ?></p>
                                        </th>
                                        <td>
                                            <p>【タイトル】<br />
                                                <input type="text" id="as_pr_block5_title" class="regular-text" name="as_pr_block5_title" value="<?php echo get_option('as_pr_block5_title'); ?>"></p>
                                            <p>【画像】<br />
                                                <input type="text" id="as_pr_block5_img" class="regular-text" name="as_pr_block5_img" value="<?php echo get_option('as_pr_block5_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_pr_block5_img"><input class="cmb_upload_button button" type="button" value="バナーをアップロードする" /></a></p>
                                            
                                            
                                            <p>【リンク先】<br />
                                                <input type="text" id="as_pr_block5_url" class="regular-text" name="as_pr_block5_url" value="<?php echo get_option('as_pr_block5_url'); ?>"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_pr_block_on">6つ目のPR設定</label><p><?php echo '<img src="' . esc_url(get_option('as_pr_block6_img')) . '" width="200" />'; ?></p>
                                        </th>
                                        <td>
                                            <p>【タイトル】<br />
                                                <input type="text" id="as_pr_block6_title" class="regular-text" name="as_pr_block6_title" value="<?php echo get_option('as_pr_block6_title'); ?>"></p>
                                            <p>【画像】<br />
                                                <input type="text" id="as_pr_block6_img" class="regular-text" name="as_pr_block6_img" value="<?php echo get_option('as_pr_block6_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_pr_block6_img"><input class="cmb_upload_button button" type="button" value="バナーをアップロードする" /></a></p>
                                            
                                            
                                            <p>【リンク先】<br />
                                                <input type="text" id="as_pr_block6_url" class="regular-text" name="as_pr_block6_url" value="<?php echo get_option('as_pr_block6_url'); ?>"></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>

            <!--Welcomeメッセージの設定-->
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>Welcomeメッセージの設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <p class="setting_description">トップページにウェルカムメッセージを表示させることが出来ます。入力がない場合は何も表示されません。</p>
                            <h4><span style="color:#cc0000; font-size:14px;">■ 訪問者へのWelcomeメッセージを設定してください。</span></h4>

                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_welcome_msg_title">タイトル</label>
                                        </th>
                                        <td><input type="text" id="as_welcome_msg_title" class="regular-text" name="as_welcome_msg_title" value="<?php echo get_option('as_welcome_msg_title'); ?>"></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">説明
                                            <label for="as_welcome_msg">メッセージ本文</label>
                                        </th>
                                        <td>
                                            <textarea id="as_welcome_msg" class="regular-text" name="as_welcome_msg" rows="5" cols="60" wrap="soft"><?php echo get_option('as_welcome_msg'); ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_welcome_msg_img">画像</label><p><?php echo '<img src="' . esc_url(get_option('as_welcome_msg_img')) . '" />'; ?></p>
                                        </th>
                                        <td>                    
                                            <input type="text" id="as_welcome_msg_img" name="as_welcome_msg_img" class="regular-text" value="<?php echo get_option('as_welcome_msg_img'); ?>" /><a class="media-upload" href="JavaScript:void(0);" rel="as_welcome_msg_img"><input class="cmb_upload_button button" type="button" value="バナーをアップロードする" /></a><br />
                                            <p>
                                                <?php
                                                $as_img_position = trim(get_option('as_img_position'));
                                                if (isset($as_img_position) && $as_img_position !== '') {
                                                    $as_img_position = trim(get_option('as_img_position'));
                                                } else {
                                                    $as_img_position = 'img_left';
                                                }
                                                ?>   
                                                <label><input type="radio" name="as_img_position" value="left" <?php checked($as_img_position, 'left'); ?> checked ><strong>画像を左に配置</strong></label>
                                                <label><input type="radio" name="as_img_position" value="right" <?php checked($as_img_position, 'right'); ?>  ><strong>右に配置</strong></label></p>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!--新着情報　お知らせの設定-->            
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>新着情報　お知らせの設定</span></h3>
                    <div class="inside">
                        <div class="main">
                            <p class="setting_description"></p>
                            <h4><span style="color:#cc0000; font-size:14px;">■ 何件の新着お知らせを表示させますか</span></h4>
                            <?php
                            $as_news_view = trim(get_option('as_news_view'));
                            if (isset($as_news_view) && $as_news_view !== '') {
                                $as_news_view = trim(get_option('as_news_view'));
                            } else {
                                $as_news_view = '6';
                            }

                            $as_home_news = trim(get_option('as_home_news'));
                            if (isset($as_home_news) && $as_home_news !== '') {
                                $as_home_news = trim(get_option('as_home_news'));
                            } else {
                                $as_home_news = '';
                            }
                            $as_cat_img = trim(get_option('as_cat_img'));
                            if (isset($as_cat_img) && $as_cat_img !== '') {
                                $as_cat_img = trim(get_option('as_cat_img'));
                            } else {
                                $as_cat_img = '';
                            }
                            ?>


                            <table class="form-table">
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label for="as_welcome_msg_title">表示件数</label>
                                        </th>
                                        <td>
                                            <p><label><input type="radio" name="as_news_view" value="4" <?php checked($as_news_view, '4'); ?> checked ><strong>4件を表示</strong></label></p>
                                            <p><label><input type="radio" name="as_news_view" value="6" <?php checked($as_news_view, '6'); ?>  ><strong>6件を表示</strong></label></p>
                                            <p><label><input type="radio" name="as_news_view" value="8" <?php checked($as_news_view, '8'); ?>  ><strong>8件を表示</strong></label></p>
                                            <p><label><input type="radio" name="as_news_view" value="10" <?php checked($as_news_view, '10'); ?>  ><strong>10件を表示</strong></label></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            <label for="as_welcome_msg">アイキャッチ画像</label>
                                        </th>
                                        <td>
                                            <input name="as_home_news" type="checkbox" id="as_social_buttons" value="true" <?php checked(get_option('as_home_news'), 'true'); ?> />　表示させる
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <?php submit_button(); ?>
        </form>
    </div>


<?php
}

/* ================================================== *
 *
 *    その他の設定　astemp_options_page4
 *
 * ================================================== */

function astemp_options_page4() {
    ?>
    <script type="text/javascript">
        jQuery('document').ready(function() {
            jQuery('.media-upload').each(function() {
                var rel = jQuery(this).attr("rel");
                jQuery(this).click(function() {
                    window.send_to_editor = function(html) {
                        html = '<a>' + html + '</a>';
                        imgurl = jQuery('img', html).attr('src');
                        jQuery('#' + rel).val(imgurl);
                        tb_remove();
                    }
                    formfield = jQuery('#' + rel).attr('name');
                    tb_show(null, 'media-upload.php?post_id=0&type=image&TB_iframe=true');
                    return false;
                });
            });
        });
    </script>

    <div class="wrap">
        <h2>その他の設定</h2>
        <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
            <?php
            settings_fields('astemp-setting-group4');
            do_settings_sections('astemp-setting-group4');
            ?>

            <!--GoogleMapをフッター部分に表示-->            
            <div class="metabox-holder">
                <div id="toppage_logo_setting" class="postbox " >
                    <h3 class='hndle'><span>GoogleMap</span></h3>
                    <div class="inside">
                        <div class="main">
                            <h4><span style="color:#cc0000; font-size:14px;">■GoogleMapをフッター部分に表示しますか</span></h4>
                            <?php
                            $as_gmap = trim(get_option('as_gmap'));
                            if (isset($as_gmap) && $as_gmap !== '') {
                                $as_gmap = trim(get_option('as_gmap'));
                            } else {
                                $as_gmap = 'on';
                            }
                            ?>   
                            <label><input type="radio" name="as_gmap" value="on" <?php checked($as_gmap, 'on'); ?> checked ><strong>表示する</strong></label>　
                            <label><input type="radio" name="as_gmap" value="off" <?php checked($as_gmap, 'off'); ?>  ><strong>表示しない</strong></label></p>

                        </div>
                    </div>
                </div>
            </div>

            <!--GoogleAnalyticsを設定-->  
            <div class="metabox-holder">
                <div id="as_analytics" class="postbox " >
                    <h3 class='hndle'><span>GoogleAnalytics</span></h3>
                    <div class="inside">
                        <div class="main">
                            <h4><span style="color:#cc0000; font-size:14px;">■ GoogleAnalyticsを設定しますか？</span></h4>
                            <p class="setting_description"><small>GoogleAnalyticsを設定する場合トラッキングID(UA-○○○○-○のようにUAからはじまるID)を入力してください。</small></p>

                            <table class="form-table">
                                <tr>
                                    <th scope="row">
                                        <label for="as_headinfo_type_image_img">トラッキングID</label>
                                    </th>
                                    <td><input type="text" id="as_analytics" class="regular-text" name="as_analytics" value="<?php echo get_option('as_analytics'); ?>">
                                    </td>
                                </tr>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
    <?php submit_button(); ?>
        </form>
    </div>

    <?php
}
?>