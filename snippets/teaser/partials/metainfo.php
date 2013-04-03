<div class="metainfo">
    <div style="float: left; padding-right: 15px;">
        <?php whm_one::render_image('comment.png'); ?>
    </div>
    <div>
        <?php echo $data["postObject"]->whm_comment_count_string ?><br/>
        Kategorie: <strong><?php echo $data["postObject"]->whm_category->cat_name; ?></strong>
    </div>
</div>