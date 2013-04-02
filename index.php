<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

include_once __DIR__.'/config/home.config.php';
get_header(); ?>


<div id="content-body">
	<div class="content">

	    <div class="content-element">
    	    <?php whm_one::render_snippet("teaser/single_2col"); ?>
    	    <?php whm_one::render_snippet("home/kolumnen"); ?>
	    </div>

	    <div style="clear: both;"></div>

	    <div class="content-element">
	        <?php whm_one::render_image("banner_728.png")?>
	    </div>

	    <div style="clear: both;"></div>

	    <div class="content-element">
	        <?php whm_one::render_snippet("home/empfehlung")?>
	    </div>

	    <div style="clear: both;"></div>

	    <div class="content-element">
	        <?php whm_one::render_snippet("home/neueartikel")?>
	    </div>

	</div>
	<div class="sidebar">
	    Sidebar
        <?php get_sidebar(); ?>
	</div>
</div>

<div style="clear:both"></div>

<?php get_footer(); ?>