
<div class="col-xs-12 col-sm-4 <?php astemp_layout_side(''); ?>">
    <div id="side_content">
        <?php
        if (is_front_page()) {
            as_profile();
        } else {
            as_profile_page();
        }
        ?>

        <?php
        if (is_active_sidebar('sidebar-1')) :
            dynamic_sidebar('sidebar-1');

        else:
            ?>
            <div class="widget">
                <h2 class="side_title">No Widget</h2>
                <p>ウィジットは設定されていません。</p>
            </div>
        <?php
        endif;
        ?>	
        <?php
        dynamic_sidebar('sidebar-2');
        dynamic_sidebar('sidebar-3');
        ?>

        <!--タブ-->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">タブ1</a></li>
            <li><a href="#tab2" data-toggle="tab">タブ2</a></li>
            <li><a href="#tab3" data-toggle="tab">タブ3</a></li>
        </ul>
        <!-- / タブ-->
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
                <p>コンテンツ1</p>
            </div>
            <div class="tab-pane fade" id="tab2">
                <p>コンテンツ3</p>
            </div>
        </div>


    </div><!--/side_content-->
</div> <!--/col-->
