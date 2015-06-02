
<div class="col-xs-12 col-md-4 <?php astemp_layout_side('');?>">
    <div id="side_content">
    <?php
if ( is_front_page() ) {
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
                <h2 class="sub_title">No Widget</h2>
                <p>ウィジットは設定されていません。</p>
            </div>
        <?php
        endif;
        ?>	
<?php
        dynamic_sidebar('sidebar-2');
        dynamic_sidebar('sidebar-3');
        
        ?>
    </div><!--/side_content-->
</div> <!--/col-->
