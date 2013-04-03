<div class="row">
	<div class="span2">
		<a href="<?php echo $postObject->whm_permalink; ?>">
            <?php echo get_the_post_thumbnail( $postObject->ID ); ?>
        </a>
	</div>
	<div class="span4">
		<div class="kicker">
            <?php echo $postObject->whm_formatted_date; ?>, <strong><?php echo $postObject->whm_author_name; ?></strong>
		</div>
		<div class="headline">
			<a href="<?php echo $postObject->whm_permalink ?>">
                <?php echo $postObject->post_title; ?>
            </a>
		</div>

		<div class="excerpt">
             <?php echo $postObject->whm_excerpt; ?>
             <a href="<?php echo $postObject->whm_permalink ?>">weiterlesen</a>
		</div>

        <?php whm_one::render_snippet("teaser/partials/metainfo", array( "postObject" => $postObject ))?>

   </div>
</div>