<?php
    the_post();

    $category = get_the_category();
    $firstCategory = $category[0]->cat_name;
?>

<div class="single_2col">

    <div class="category">
       <?php whm_one::render_image('category/'.strtolower($firstCategory).'.png'); ?>
    </div>

    <div class="kicker">
        <?php the_date(); ?>, <strong><?php the_author(); ?></strong>
    </div>

    <div class="title headline">
       <?php the_title(); ?>
    </div>

    <div class="excerpt">
        <?php the_excerpt();?>
        <a href="<?php the_permalink() ?>">Weiterlesen</a>
    </div>

</div>