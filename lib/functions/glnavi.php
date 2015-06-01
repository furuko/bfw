<?php
/* ------------------------------------------- */
/* 	Gl-navi
/*-------------------------------------------- */

function astemp_glnavi() {
    $as_glnavi = get_option('as_glnavi');
    
    if($as_glnavi == true){

           if (has_nav_menu('Header')) { ?>
<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
</button>
<nav class="navbar-collapse collapse glnavi" id="navigation" role="navigation">
                    <!-- Navigation -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'Header',
                    'items_wrap'      => '<ul id="%1$s"  class="nav navbar-nav">%3$s</ul>',
                    )); ?>
                    <!-- /Navigation -->
</nav>

           <?php } else { ?>

<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
</button>
<nav class="navbar-collapse collapse glnavi" id="navigation" role="navigation">
                    <ul class="nav navbar-nav">
<?php
    $pages = get_pages();
    foreach ( $pages as $page ) {
        $option = '<li><a href="' . get_page_link( $page->ID ) . '" class="sample8">';
        $option .= $page->post_title;
        $option .= '</a></li>';
        echo $option;
    }
?>
    </ul></nav>

           <?php }
      
    }else {

    }
 } ?>

<?php 
function astemp_ftnavi() {
    $as_ftnavi = get_option('as_ftnavi');
    
    if($as_ftnavi == true){
        echo '<nav>';
        wp_nav_menu(array(
            'theme_location' => 'Footer',
            'items_wrap'      => '<ul id="%1$s" class="">%3$s</ul>'
            ));
        echo '</nav>';
    } else { ?>
        <nav>
                    <ul>
<?php
    $pages = get_pages();
    foreach ( $pages as $page ) {
        $option = '<li><a href="' . get_page_link( $page->ID ) . '">';
        $option .= $page->post_title;
        $option .= '</a></li>';
        echo $option;
    }
?>
    </ul></nav>
    <?php }
}

?>
