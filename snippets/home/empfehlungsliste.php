<div class="span6">
    <div class="headline">Empfehlung der Redaktion</div>

    <?php

        include_once __DIR__.'/../../config/home.config.php';
        $recommendedPosts = $recommendedArticles[whm_one::get_environment()];

        foreach( $recommendedPosts as $index => $recommendedPost ) {
        	if ( $index == count( $recommendedPosts )-1) {
        		$class = "";
        	}else{
        		$class =" post";
        	}
        	echo '<div class="row '.$class.'"><div class="span6">';
            whm_one::render_teaser("teaser/span6", get_post($recommendedPost, OBJECT));
            echo "</div></div>";
        }

    ?>

</div>