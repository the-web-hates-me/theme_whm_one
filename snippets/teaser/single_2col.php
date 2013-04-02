<?php
    the_post();

    $category = get_the_category();
    $firstCategory = $category[0]->cat_name;
    $commentCount = get_comments_number();
?>

<div class="single_2col">

    <div class="category">
       <?php whm_one::render_image('category/'.strtolower($firstCategory).'.png'); ?>
    </div>

    <div class="kicker">
        <?php the_date(); ?>, <strong><?php the_author(); ?></strong>
    </div>

    <div class="title headline">
       <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </div>

    <div class="excerpt">
        <?php the_excerpt();?>
        <a href="<?php the_permalink() ?>">Weiterlesen</a>
    </div>

    <div class="metainfo">
        <div style="float: left; padding-right: 15px;">
            <?php whm_one::render_image('comment.png'); ?>
        </div>
        <div style="line-height: 1.4em;">
            <strong><?php echo $commentCount ?></strong> Kommentar<?php if ($commentCount != 1) echo "e" ?> <br/>
             Kategorie: <strong><?php echo $firstCategory; ?></strong>.
        </div>
    </div>

</div>