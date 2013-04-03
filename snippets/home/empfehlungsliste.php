    <div class="span6">
        <div class="headline">Empfehlung der Redaktion</div>
    </div>
<?php

    include_once __DIR__.'/../../config/home.config.php';
    $recommendedPosts = $recommendedArticles[whm_one::get_environment()];

    foreach( $recommendedPosts as $recommendedPost ) {
    	echo '</div><div class="row"><div class="span6">';
        whm_one::render_teaser("teaser/span6", get_post($recommendedPost, OBJECT));
        echo "</div>";
    }

?>