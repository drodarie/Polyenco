<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="fr"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="fr"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="fr"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr"> <!--<![endif]-->
    <head>
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?= isset($title_layout) ? $title_layout : 'Polyenco' ?></title> 

        <meta name="description" content="Site Web de la Junior-Entreprise Polyenco" /> 

        <!-- Mobile Specifics -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true"/>
        <meta name="MobileOptimized" content="320"/>   
        <!-- Mobile Internet Explorer ClearType Technology -->
        <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

        <!-- Bootstrap -->
        <link href="<?= BOOTSTRAP . 'css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?= BRUSHED . 'css/bootstrap-responsive.min.css' ?>" rel="stylesheet">

        <!-- Supersized -->
        <link href="<?= BRUSHED . 'css/supersized.css' ?>" rel="stylesheet">
        <link href="<?= BRUSHED . 'css/supersized.shutter.css' ?>" rel="stylesheet">

        <!-- FancyBox -->
        <link href="<?= BRUSHED . 'css/fancybox/jquery.fancybox.css' ?>" rel="stylesheet">

        <!-- Font Icons -->
        <link href="<?= BRUSHED . 'css/fonts.css' ?>" rel="stylesheet">

        <!-- Shortcodes -->
        <link href="<?= BRUSHED . 'css/shortcodes.css' ?>" rel="stylesheet">

        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

        <!-- Time Lines -->
         <link href="<?= BRUSHED . 'css/timeline.css' ?>" rel="stylesheet">
        <!-- Main Style -->
        <link href="<?= CSS . 'main.css' ?>" rel="stylesheet">
        
        <!-- Responsive -->
        <link href="<?= BRUSHED . 'css/responsive.css' ?>" rel="stylesheet">
        
        <!-- Page Style -->
        <?php echo isset($style_for_page)? '<link href="'.$style_for_page.'" rel="stylesheet">' : ''?>

        <!-- Fav Icon -->
        <link rel="icon" type="image/png" href="<?= IMG . 'Favicon.png' ?>" />
        <link rel="shortcut icon" href="<?= IMG . 'Favicon.png' ?>" />

        <link rel="apple-touch-icon" href="#">
        <link rel="apple-touch-icon" sizes="114x114" href="#">
        <link rel="apple-touch-icon" sizes="72x72" href="#">
        <link rel="apple-touch-icon" sizes="144x144" href="#">

        <!-- Modernizr -->
        <script src="<?= BRUSHED . 'js/modernizr.js' ?>"></script>

        <!-- Analytics -->
        <?php include_once("analyticstracking.php") ?>
        <!-- End Analytics -->

	<!-- HTML5 for IE -->
	<!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<!-- end HTML5 for IE -->
    </head>


    <body style="background-image: <?=IMG.'slider/Fond.jpg'?>;">
        <!-- Splash Screen: écran d'attente -->
        <div class="ole">
            <section id="jSplash">
                <div id="circle"></div>
            </section>
        </div>
        <!-- Fin du Splash Screen -->

        <?php
        require ROOT . DS . 'view' . DS . 'layout' . DS . 'header.php';
        echo $content_layout;
        ?>

        <!-- Back To Top -->
        <a id="back-to-top" href="#">
            <i class="font-icon-arrow-simple-up"></i>
        </a>
        <!-- End Back to Top -->

        <!-- Footer -->
        <footer>
            <p class="credits">&copy;2014 Polyenco. All rights reserved</p>
        </footer>
        <!-- End Footer -->

        <input type="hidden" id="webroot" value="<?= BASE_URL ?>">


        <script src="<?= JS.'download_text.js'?>"></script> <!-- JS for displaying the text of download -->
        <script src="<?= JS.'form_entreprise.js'?>"></script> <!-- JS for the Form -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
        <script src="<?= BOOTSTRAP . 'js/bootstrap.min.js' ?>"></script> <!-- Bootstrap -->
        <script src="<?= BRUSHED . 'js/supersized.3.2.7.min.js' ?>"></script> <!-- Slider -->
        <script src="<?= BRUSHED . 'js/waypoints.js' ?>"></script> <!-- WayPoints -->
        <script src="<?= BRUSHED . 'js/waypoints-sticky.js' ?>"></script> <!-- Waypoints for Header -->
        <script src="<?= BRUSHED . 'js/jquery.isotope.js' ?>"></script> <!-- Isotope Filter -->
        <script src="<?= BRUSHED . 'js/jquery.fancybox.pack.js' ?>"></script> <!-- Fancybox -->
        <script src="<?= BRUSHED . 'js/jquery.fancybox-media.js' ?>"></script> <!-- Fancybox for Media -->
        <script src="<?= BRUSHED . 'js/jquery.tweet.js' ?>"></script> <!-- Tweet -->
        <script src="<?= BRUSHED . 'js/plugins.js' ?>"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
        <script src="<?= JS . 'main.js' ?>"></script> <!-- Default JS -->
        <!-- End Js -->

    </body>

