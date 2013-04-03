<div class="row">
    <div class="span2">
        <div class="headline">Suche</div>
    </div>
</div>

<div class="row">
    <div class="span2">
        <div class="headline">Kategorien</div>

        <div class="categories">
            <ul>
                <?php
                    $categories = get_categories();
                    foreach( $categories as $category ):
                ?>
                <li>
                    <div style="float:left">
                        <?php whm_one::render_image('category/'.strtolower($category->cat_name).'.png'); ?>
                    </div>
                    <strong><?php echo whm_one::shortenCategory($category->cat_name) ?></strong><br/>
                    <?php echo $category->category_count; ?> Artikel
               </li>
               <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="span2">
        facebook
    </div>
</div>