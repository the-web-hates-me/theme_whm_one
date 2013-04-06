<div class="row">
    <div class="span2">
        <div class="headline">Suche</div>
        <?php whm_one::render_snippet("global/sidebar/search"); ?>
    </div>
</div>

<div class="row">
        <div class="span2 sidebar-element">
            <div class="headline">Kategorien</div>
            <?php whm_one::render_snippet("global/partials/categories"); ?>
        </div>
</div>

<div class="row">
    <div class="span2 sidebar-element">
        <div class="fb-like-box" data-border-color="white" data-href="http://www.facebook.com/thewebhatesme" data-width="292" data-show-faces="true" data-stream="false" data-header="false"></div>
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