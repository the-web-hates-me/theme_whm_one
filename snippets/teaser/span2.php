<div class="span2 teaser-span2">
    <div class="category">
       <?php whm_one::render_image('category/'.$postObject->whm_category->slug.'.png'); ?>
    </div>
    <div class="title headline">
         <a href="<?php echo $postObject->whm_permalink ?>"><?= $postObject->post_title; ?></a>
    </div>
    <div class="excerpt">
        <?= $postObject->whm_excerpt; ?>
        <a href="<?php echo $postObject->whm_permalink ?>">weiterlesen.</a>
    </div>

     <?php whm_one::render_snippet("teaser/partials/metainfo", array( "postObject" => $postObject ))?>

</div>