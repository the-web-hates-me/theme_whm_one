<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Le styles -->
    <link href="<?php bloginfo ( "template_directory" ); ?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo ( "template_directory" ); ?>/style.css" rel="stylesheet" media="screen">

    <script src="<?php bloginfo ( "template_directory" ); ?>/js/jquery-1.9.1.min.js"></script>

    <!-- jquery Waypoints -->
    <script src="<?php bloginfo ( "template_directory" ); ?>/js/waypoints.min.js"></script>
    <script src="<?php bloginfo ( "template_directory" ); ?>/js/waypoints-sticky.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic' rel='stylesheet' type='text/css'>

  </head>

  <body class="home">

    <?php whm_one::render_snippet('global/header')?>

    <div class="container">
        <div class="row">
            <div class="span6">

            <!-- Erste Zeile - Neuster Artikel & Kolumenen -->

                <div class="row section">
                    <div class="span4">
                        <?php whm_one::render_teaser('teaser/span4-left', get_post()); ?>
                    </div>
                    <div class="span2 visible-desktop kolumnen">
                        <?php whm_one::render_snippet('widgets/kolumnen-span2'); ?>
                    </div>
                </div>

           <!-- Zweite Zeile - Werbung -->

                <div class="row section visible-desktop">
                    <div class="span6">
                        <?php whm_one::render_snippet('banner/728'); ?>
                    </div>
                </div>

           <!-- Dritte Zeile - Empfehlung der Redaktion-->

                <div class="row section empfehlung">
                        <?php whm_one::render_snippet("home/empfehlungsliste"); ?>
                </div>

           <!-- Vierte Zeile - Neuste Artikel -->

                <div class="row section">
                        <?php whm_one::render_snippet("home/neuste-artikel"); ?>
                </div>

            </div>
            <div class="span2 visible-desktop sidebar">
                <?php whm_one::render_snippet("global/sidebar"); ?>
            </div>
        </div>
    </div> <!-- /container -->

    <?php whm_one::render_snippet('global/footer')?>

  </body>
</html>