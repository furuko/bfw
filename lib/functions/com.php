<?php
/* ------------------------------------------- */
/* 	コメント表示
/*------------------------------------------- */

function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>

<div class="panel panel-default">
  <div class="panel-body">
    <div id="comment-<?php comment_ID(); ?>">
        
        <?php comment_text() ?>
        
        <div class="row margin-bottom-md">
            <div class="reply-btn">
                <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
            </div>
        
            <div class="comment-author vcard">
                <?php printf(__('<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; <cite class="fn">%s</cite> <span class="says"> さん</span>'), get_comment_author_link()) ?>
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp; <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php edit_comment_link(__('(Edit)'), '  ', '') ?></a>
            </div>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Your comment is awaiting moderation.') ?></em>
                <br />
            <?php endif; ?>

            
        </div>
  </div>
</div>

        <?php
    }