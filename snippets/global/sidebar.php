


<div class="row">
    <div class="span2">
        <div class="headline">Suche</div>
        <?php whm_one::render_snippet("global/sidebar/search"); ?>
    </div>
</div>

<div class="row">
        <div class="span2 sidebar-element sticky-sidebar">
            <div class="headline">Kategorien</div>
            <?php whm_one::render_snippet("global/partials/categories"); ?>
        </div>
</div>

<div class="row">
    <div class="span2 sidebar-element">
         <?php whm_one::render_snippet("global/sidebar/facebook"); ?>
    </div>
</div>

<div class="row">
    <div class="span2 sidebar-element recent-comments">
         <div class="headline">Neue Kommentare</div>
         <?php whm_one::render_recent_comments(); ?>
    </div>
</div>

<div class="row">
    <div class="span2">
        <div class="headline">Werbung</div>
         <?php whm_one::render_snippet("banner/300"); ?>
    </div>
</div>

<script type="text/javascript">
$('.sticky-sidebar').waypoint('sticky', {
	  offset: 30 // Apply "stuck" when element 30px from top
	});
</script>