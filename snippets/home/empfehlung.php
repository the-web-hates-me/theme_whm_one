<?php

    $recommendedPosts = array( 8, 4);

?>

<div style="width: 940px">
    <div class="headline">Empfehlung der Redaktion</div>

    <?php foreach ( $recommendedPosts as $postId ): ?>
        <?php
            $post = get_post($postId, "OBJECT");
            $commentCount = get_comments_number($postId);
        ?>
        <div>
            <div style="width: 300px; padding-right: 26px; float: left; padding-bottom: 26px;">
                <?php echo get_the_post_thumbnail( $postId ); ?>
            </div>
            <div>
                <div class="headline" style="font-size:1.5em"><?php echo $post->post_title; ?></div>
                <?php echo substr(strip_tags($post->post_content), 0, 600); ?> [...]
                <a href="<?php echo get_permalink( $postId );?>">weiterlesen</a>

                    <div class="metainfo">
                        <div style="float: left; padding-right: 15px;">
                            <?php whm_one::render_image('comment.png'); ?>
                        </div>
                        <div>
                            <strong><?php echo $commentCount ?></strong> Kommentar<?php if ($commentCount != 1) echo "e" ?>
                        </div>
                    </div>

            </div>
        </div>
        <div style="clear: both"></div>
    <?php endforeach; ?>
</div>