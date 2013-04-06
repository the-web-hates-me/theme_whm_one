<div class="span6">
    <div class="headline">Aktuelle Artikel</div>

    <div class="row">
        <?php the_post(); ?>
        <?php for( $i = 0; $i < 6; $i++) :?>
            <?php if ( have_posts()) {
            	the_post();
            	whm_one::render_teaser('teaser/span2', get_post());
            }?>

        <?php endfor; ?>
    </div>
</div>