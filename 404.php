<?php get_header(); ?>
<nav id='breadcrumb'>
    <div class='breadcrumb'><div class="container inner"><?php breadcrumb() ?></div></div>
</nav>
<div class="container inner">
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 <?php astemp_layout_main('');?> margin-top-md" id="main_content">
           <h2 class="sub_title">このページは見つかりませんでした。</h2> 
           
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sample_img/404.png" alt="見つかりませんでした">
           <p>目的のページをメニューやカテゴリより探すか、下記よりキーワードで検索してみてください。</p>
           
            <form method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                        <div class="input-group">
                            <input type="text" name="s" id="s" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" id="searchsubmit" value="">検索</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
            
        </div><!--main_content-->

        <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>