<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Le styles -->
    <link href="<?php bloginfo ( "template_directory" ); ?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo ( "template_directory" ); ?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo ( "template_directory" ); ?>/style.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>

  </head>

  <body>

    <?php whm_one::render_snippet('global/header')?>

    <div class="container">
        <div class="row">
            <div class="span6">

            <!-- Erste Zeile - Neuster Artikel & Kolumenen -->

                <div class="row">
                    <div class="span4">
                        <?php whm_one::render_teaser('teaser/span4-left', get_post()); ?>
                    </div>
                    <div class="span2">
                        <?php whm_one::render_snippet('widgets/kolumnen-span2'); ?>
                    </div>
                </div>

           <!-- Zweite Zeile - Werbung -->

                <div class="row">
                    <div class="span6">
                        <?php whm_one::render_snippet('banner/728'); ?>
                    </div>
                </div>

           <!-- Dritte Zeile - Empfehlung der Redaktion-->

                <div class="row">
                        <?php whm_one::render_snippet("home/empfehlungsliste"); ?>
                </div>

            </div>
            <div class="span2">
                Sidebar
            </div>
        </div>
    </div> <!-- /container -->

  </body>
</html>