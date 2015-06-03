<?php

function astemp_no_img(){
    $as_no_img = get_option('as_no_img');
    
    if(empty($as_no_img)){ ?>
        <div class="no-thum-box">
        No-Image
    </div>
    
   <?php }else { ?>
<div class="thum-box"> <a href="<?php the_permalink(); ?>"><img src="<?php echo $as_no_img; ?>" width="320px" /></a></div>
   <?php }
}
