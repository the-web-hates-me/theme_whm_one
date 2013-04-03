<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>

    <link href="<?php bloginfo ( "template_directory" ); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo ( "template_directory" ); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php bloginfo ( "template_directory" ); ?>/bootstrap/js/bootstrap.min.js"></script>
</head>