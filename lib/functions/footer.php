<?php

function astemp_footer_meta() {
$main_img_type = get_option('as_main_img');

if ($main_img_type == 'as_main_img_slide') { ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slide.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slide.css" media="screen"/>
<?php }
}

function astemp_footer_map() {
    $gmap = get_option('as_gmap');
    if (empty($gmap) or $gmap == "off") {
        
        echo "";
        echo "<div class='col-xs-12 col-sm-4 fotter-left margin-top-md'>\n";

        $logo_image = get_option('as_logo_image');
        $logo_text = get_option('as_logo_text');
        if (!empty($logo_image) && get_option('as_logo_type') == 'as_logo_type_image') : $logo_inner = '<img src="' . get_option('as_logo_image') . '" alt="' . get_bloginfo('name') . '" />';
        else: if (!empty($logo_text) && get_option('as_logo_type') == 'as_logo_type_text') : $logo_inner = get_option('as_logo_text');
            else: $logo_inner = get_bloginfo('name');
            endif;
        endif;

        echo '<div class="footer_logo_link"><a href="';
        echo home_url();
        echo'">';
        echo $logo_inner;
        echo '</a></div></div>';
        
        echo "<div class='col-xs-12 col-sm-4 fotter-right margin-top-md'>\n";

        $kihon_info_name = get_option('as_kihon_info_name');
        $kihon_info_post = get_option('as_kihon_info_post');
        $kihon_info_ad = get_option('as_kihon_info_ad');
        $kihon_info_tel = get_option('as_kihon_info_tel');
        $kihon_info_fax = get_option('as_kihon_info_fax');
        $kihon_info_rest = get_option('as_kihon_info_rest');
        $kihon_info_time = get_option('as_kihon_info_time');

        if (!empty($kihon_info_name)) {
            $kihon_info_name = "<div class='kihon_info_name'>".$kihon_info_name ."</div>";
        }
        if (!empty($kihon_info_post)) {
            $kihon_info_post = "<div class='kihon_info'>". $kihon_info_post ."</div>";
        }
        if (!empty($kihon_info_ad)) {
            $kihon_info_ad = "<div class='kihon_info'>".  $kihon_info_ad ."</div>";
        }
        if (!empty($kihon_info_tel)) {
            $kihon_info_tel = "<div class='kihon_info'><span class='glyphicon glyphicon-earphone' aria-hidden='true'></span> ＴＥＬ：".  $kihon_info_tel ."</div>\n";
        }
        if (!empty($kihon_info_fax)) {
            $kihon_info_fax = "<div class='kihon_info'><span class='glyphicon glyphicon-save-file' aria-hidden='true'></span> ＦＡＸ：".  $kihon_info_fax ."</div>\n";
        }
        if (!empty($kihon_info_rest)) {
            $kihon_info_rest = "<div class='kihon_info'><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span> 定休日：".  $kihon_info_rest ."</div>\n";
        }
        if (!empty($kihon_info_time)) {
            $kihon_info_time = "<div class='kihon_info'><span class='glyphicon glyphicon-time' aria-hidden='true'></span> 時　間：".  $kihon_info_time ."</div>\n";
        }
        echo  $kihon_info_name  .  $kihon_info_post .  $kihon_info_ad  ;

        echo '</div>';
        
        echo "<div class='col-xs-12 col-sm-4 fotter-right2 margin-top-md'>\n";
        echo  $kihon_info_tel . $kihon_info_fax . $kihon_info_time . $kihon_info_rest ;
        echo '</div><!--col-xs-12 col-sm-8 margin-top-md-->';
        
        echo "";
    } else {
        
        echo "\n";
        echo "<div class='col-xs-12 col-sm-4 fotter-left margin-top-md'>\n";
        $logo_image = get_option('as_logo_image');
        $logo_text = get_option('as_logo_text');
        if (!empty($logo_image) && get_option('as_logo_type') == 'as_logo_type_image') : $logo_inner = '<img src="' . get_option('as_logo_image') . '" alt="' . get_bloginfo('name') . '" />';
        else: if (!empty($logo_text) && get_option('as_logo_type') == 'as_logo_type_text') : $logo_inner = get_option('as_logo_text');
            else: $logo_inner = get_bloginfo('name');
            endif;
        endif;
        echo '<div class="footer_logo_link"><a href="';
        echo home_url();
        echo '">';

        echo $logo_inner;
        echo '</a></div>';
        $kihon_info_name = get_option('as_kihon_info_name');
        $kihon_info_post = get_option('as_kihon_info_post');
        $kihon_info_ad = get_option('as_kihon_info_ad');
        $kihon_info_tel = get_option('as_kihon_info_tel');
        $kihon_info_fax = get_option('as_kihon_info_fax');
        $kihon_info_rest = get_option('as_kihon_info_rest');
        $kihon_info_time = get_option('as_kihon_info_time');



        if (!empty($kihon_info_ad)) {
            $kihon_info_ad = "<li><strong>". $kihon_info_name ."</strong><br />". $kihon_info_post."<br />" . $kihon_info_ad . "</li>\n";
        }
        if (!empty($kihon_info_tel)) {
            $kihon_info_tel = "<li><span class='glyphicon glyphicon-earphone' aria-hidden='true'></span>  ＴＥＬ：" . $kihon_info_tel . "</li>\n";
        }
        if (!empty($kihon_info_fax)) {
            $kihon_info_fax = "<li><span class='glyphicon glyphicon-save-file' aria-hidden='true'></span> ＦＡＸ：" . $kihon_info_fax . "</li>\n";
        }
        if (!empty($kihon_info_rest)) {
            $kihon_info_rest = "<li><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span> 定休日：" . $kihon_info_rest . "</li>\n";
        }
        if (!empty($kihon_info_time)) {
            $kihon_info_time = "<li><span class='glyphicon glyphicon-time' aria-hidden='true'></span>  時　間：" . $kihon_info_time . "</li>\n";
        }
        
        echo "<div class='row_footer'><ul>" .  $kihon_info_ad . $kihon_info_tel . $kihon_info_fax . $kihon_info_time . $kihon_info_rest ;
        echo '</ul></div></div><!--col-xs-12 col-sm-4 fotter-left margin-top-md-->';
        
        echo "<div class='col-xs-12 col-sm-8 margin-top-md fotter-right margin-bottom-md'>\n";
        $gmap = get_option('as_gmap');
        if ($gmap == 'on') {
            $go_map = $kihon_info_ad;
            if (get_option('as_kihon_info_post')) {
                echo '<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.jp/maps?q=';
                echo get_option('as_kihon_info_ad');
                echo '&z=15&output=embed&iwloc=J&t=m"></iframe>';
            }
        }

        echo '</div><!--col-xs-12 col-sm-8 margin-top-md-->';
    }
}


