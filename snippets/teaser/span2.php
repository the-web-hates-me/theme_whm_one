<div class="span2 teaser-span2">
    <div class="category">
       <?php whm_one::render_image('category/'.strtolower($postObject->whm_category->cat_name).'.png'); ?>
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