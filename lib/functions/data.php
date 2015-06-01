<?php
function astemp_data_page() {
 $as_data_page = get_option('as_data_page');
 if($as_data_page == 'check'){ ?>
<div class="post_data">
<time class="published" datetime="<?php echo get_the_date() ?>"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></time>　
<!-- update date -->
<?php if ( get_the_date() != get_the_modified_date() ) : ?>
  <time class="updated" datetime="<?php echo get_the_modified_date() ?>">
   <i class="fa fa-history"></i> <?php echo get_the_modified_date() ?>
  </time>
<?php endif; ?>
</div>

<?php
 }
}

function astemp_data_single() {
 $as_data_single = get_option('as_data_single');
 if($as_data_single == 'check'){ ?>

<time class="published" datetime="<?php echo get_the_date() ?>"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></time>　
<!-- update date -->
<?php if ( get_the_date() != get_the_modified_date() ) : ?>
  <time class="updated" datetime="<?php echo get_the_modified_date() ?>">
   <i class="fa fa-history"></i> <?php echo get_the_modified_date() ?>
  </time>
<?php endif; ?>

     <?php
 }
}