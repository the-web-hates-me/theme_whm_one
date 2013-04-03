<div class="row">
    <div class="span2">
        <a href="<?php echo $postObject->whm_permalink; ?>">
            <?php echo get_the_post_thumbnail( $postObject->ID ); ?>
        </a>
    </div>
    <div class="span4">
        <div class="headline">
            <a href="<?php echo $postObject->whm_permalink ?>">
                <?php echo $postObject->post_title; ?>
            </a>
        </div>

        <div>
             <?php echo $postObject->whm_excerpt; ?>
             <a href="<?php echo $postObject->whm_permalink ?>">Weiterlesen</a>
        </div>

        <?php whm_one::render_snippet("teaser/partials/metainfo", array( "postObject" => $postObject ))?>

   </div>
</div>