<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php
            wp_title('|', true, 'right');
            bloginfo('name');
            ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slide.css" rel="stylesheet">
        <style>
            @import url(http://fonts.googleapis.com/earlyaccess/notosansjapanese.css);
        </style>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" type="text/javascript"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" type="text/javascript"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body id="page_top" <?php body_class(); ?>>   

        <!-- header -->
        <header id="toppage" class="navbar navbar-default" role="banner">
            <div class="container inner">
                <p id="description"><?php bloginfo('description'); ?></p>
                <div class="row">
                    <div class="col-xs-12  col-sm-6">
                        <div class="header_left"><?php astemp_logo(''); ?></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="header_right"><?php astemp_headinfo(''); ?></div>
                    </div>
                </div>
                <?php astemp_glnavi(''); ?>
            </div><!--container-->
        </header>
        <!-- header -->
