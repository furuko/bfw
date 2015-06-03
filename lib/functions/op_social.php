<?php
/* ------------------------------------------- */
/* 	ソーシャルボタンの設定
  /*------------------------------------------- */

//ソーシャルタグを出力
function as_social_tag() {
    $social_tag = get_option('as_social_buttons');
    if ($social_tag == false) {
        
    } else {

        $as_social_tag .=<<<eof
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>

eof;

        echo $as_social_tag;
    }
//var_dump($social_tag);
}

//記事上下のソーシャルボタン
function as_social_buttons() {

    $disp_social_buttons = '';
    $social_buttons = get_option('as_social_buttons');

    if ($social_buttons == false) {
        echo '';
    } else {
        if (isset($social_buttons) || $social_buttons == 'none') {

            $twitter_id = get_option('twitter_id');
            $page_url = get_permalink();
            $post_title = get_the_title();
            $page_url_encode = urlencode($page_url);
            $pid = get_the_ID();
            $social_flag = get_post_meta($pid, 'post_social_buttons', true);

            $disp_social_buttons .=<<<eof
  <!-- ソーシャルボタン -->
  <ul class="as-sns-btn">
    <li class="as-facebook">
      <div class="fb-like"
        data-href="{$page_url}"
        data-layout="button_count"
        data-action="like"
        data-show-faces="false"></div>
    </li>
    <li class="as-twitter">
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="{$page_url}"  data-text="{$post_title}">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async=true;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </li>
    <li class="as-googleplus">
      <div class="g-plusone" data-href="{$page_url_encode}"></div>
    </li>
    <li class="as-hatena">
      <a href="http://b.hatena.ne.jp/entry/{$page_url_encode}" class="hatena-bookmark-button" data-hatena-bookmark-title="{$post_title}" data-hatena-bookmark-layout="standard" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="//b.hatena.ne.jp/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="//b.hatena.ne.jp/js/bookmark_button.js" charset="utf-8" async="async"></script>
    </li>
  </ul>
eof;
            if ($social_flag == 'none') {
                
            } else {
                echo $disp_social_buttons;
            }
        }//if 
    }
}

//function




/* ------------------------------------------- */
/* 	socal連携ボタン
  /*------------------------------------------- */

function astemp_side_social() {
    $facebook_page_url = esc_url(get_option('as_facebook_page_url'));
    $twitter_from_db = esc_html(get_option('as_twitter'));
    $googleplus_from_db = esc_html(get_option('as_google_plus'));
    $feedly_url = urlencode(get_bloginfo('rss2_url'));

    $header_social_buttons .= '<div id="btn-sns" class="sp-hide">';
    $header_social_buttons .= '<ul>';
    if (!empty($facebook_page_url) or $facebook_page_url !== '') {
        $header_social_buttons .= '<li class="facebook_icon"><a href="' . $facebook_page_url . '" target="_blank"><i class="fa fa-facebook-square"></i></li>';
    }
    if (!empty($twitter_from_db) or $twitter_from_db !== '') {
        $header_social_buttons .= '<li class="twitter_icon"><a target="_blank" href="https://twitter.com/' . $twitter_from_db . '"><i class="fa fa-twitter-square"></i></a></li>';
    }
    if (!empty($googleplus_from_db) or $googleplus_from_db !== '') {
        $header_social_buttons .= '<li class="google_icon"><a target="_blank" href="https://plus.google.com/' . $googleplus_from_db . '"><i class="fa fa-google-plus-square"></i></li>';
    }
    $header_social_buttons .= '<li class="feedly_icon"><a target="_blank" href="http://cloud.feedly.com/#subscription%2Ffeed%2F' . $feedly_url . '"><i class="fa fa-rss"></i></a></li>';
    $header_social_buttons .= '</ul>';
    $header_social_buttons .= '</div>';

    echo $header_social_buttons;
}

function as_social_follow() {
    $follow_buttons = get_option('as_follow_buttons');
    if ($follow_buttons == "follow_on") {
        ?>
        <div class="post-follow-share">
            <h4 class="post-share-title">フォローお願いします！</h4>
            <?php
            $twitter_from_db = "https://twitter.com/" . esc_html(get_option('as_twitter'));
            $feedly_url = "http://cloud.feedly.com/#subscription%2Ffeed%2F" . urlencode(get_bloginfo('rss2_url'));
            ?>
            <aside class="post-follow">
                <ul>
                    <li class="post-follow-twitter"><a href="<?php echo $twitter_from_db; ?>"><span><i class="fa fa-twitter"></i> Twitter</span>でフォロー</a></li>
                    <li class="post-follow-feedly"><a href="<?php echo $feedly_url; ?>"><span><i class="fa fa-rss"></i> Feedly</span>でフォロー</a></li>
                </ul>
            </aside>
        </div>

        <?php
    } else {
        echo "非表示";
    }
}
