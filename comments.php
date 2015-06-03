<div id="comments">
    <?php if (have_comments()): ?>
    

        <h2 class="comments-header"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> コメント</h2>
        <ul>
            <?php wp_list_comments('callback=mytheme_comment'); ?>
        </ul>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <div class="com-nav" role="navigation">
                <div class="com-back"><?php previous_comments_link(__('&laquo; 古いコメント', '')); ?></div>
                <div class="com-next"><?php next_comments_link(__('新しいコメント &raquo;', '')); ?></div>
            </div><!-- .com-nav -->
            <div class="clear"></div>
        <?php endif; ?>

    <?php endif; ?>

    <?php
// デフォルト値取得
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ( $req ? " aria-required='true'" : '' );

//$fields設定
    $fields = array(
        'author' => '<div class="form-group"><p class="input-info"><label for="author">' .
        'Name' . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
        '<br /><input id="author" class="form-control" placeholder="Text input" name="author" type="text" value="' .
        esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p></div>',
        'email' => '<div class="form-group"><p class="input-info"><label for="email">' .
        'Email' . ( $req ? '<span class="required">*</span>（公開されません）' : '' ) . '</label> ' .
        '<br /><input id="email inputPassword3"  class="form-control" placeholder="Password" name="email" type="text" value="' .
        esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p></div>',
        'url' => '',
    );

    $fields = apply_filters('comment_form_default_fields', $fields);

// $comment_notes_before設定
    $comment_notes_before = NULL;

// $comment_notes_after
    $comment_notes_after = NULL;

// $args設定
    $args = array(
        'fields' => apply_filters('comment_form_default_fields', $fields),
        'comment_field' => '<p class="comment-form-comment"><label for="comment">コメント</label>'
        . '<textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
        'id_submit' => 'submit',
        'title_reply'          => '',
        'comment_notes_before' => $comment_notes_before,
        'comment_notes_after' => $comment_notes_after
    );
    ?>
            
<a type="button" class="as-com-btn" data-toggle="collapse" data-target="#demo">
  コメントする
</a>
            
 <div id="demo" class="collapse">
<?php comment_form($args); ?>
</div>



</div><!-- #comments -->