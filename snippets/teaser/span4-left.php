<div class="teaser-span4-left">
    <div class="category">
       <?php whm_one::render_image('category/'.strtolower($postObject->whm_category->cat_name).'.png'); ?>
    </div>

    <div class="kicker">
        <?php echo $postObject->whm_formatted_date; ?>, <strong><?php echo $postObject->whm_author_name; ?></strong>
    </div>

    <div class="title headline">
       <a href="<?php echo $postObject->whm_permalink ?>"><?php echo $postObject->post_title; ?></a>
    </div>

    <div class="excerpt">
        <?php echo $postObject->whm_excerpt ?>
        <a href="<?php echo $postObject->whm_permalink ?>">Weiterlesen</a>
    </div>

     <?php whm_one::render_snippet("teaser/partials/metainfo", array( "postObject" => $postObject ))?>

</div>