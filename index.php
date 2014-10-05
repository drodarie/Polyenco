<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="fr"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="fr"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="fr"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr"> <!--<![endif]-->
    <head>
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Polyenco est la Junior-Entreprise de Polytech Lyon. 
		Polyenco met au service des entreprises le savoir-faire des élèves de Polytech, pour réaliser
              leurs projets en ingénierie." />
        <meta name="keywords" content="polyenco, junior, entreprise, CNJE, polytech, étudiant,
              association, projet, informatique, mécanique, industrie, matériaux, biomédical, Lyon, je" />
        <meta name="language" content="fr-FR" />
        <meta name="description" content="Site Web de la Junior-Entreprise Polyenco" />
        <meta name="author" content="Etudiants de Polyenco" />

        <title>Polyenco</title> 


        <!-- Mobile Specifics -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true"/>
        <meta name="MobileOptimized" content="320"/>

        <!-- Mobile Internet Explorer ClearType Technology -->
        <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

        <!-- Bootstrap -->
        <link href="Librairies/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="Librairies/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

        <!-- Supersized -->
        <link href="Librairies/brushed/_include/css/supersized.css" rel="stylesheet">
        <link href="Librairies/brushed/_include/css/supersized.shutter.css" rel="stylesheet">

        <!-- FancyBox -->
        <link href="Librairies/brushed/_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

        <!-- Font Icons -->
        <link href="Librairies/brushed/_include/css/fonts.css" rel="stylesheet">

        <!-- Shortcodes -->
        <link href="Librairies/brushed/_include/css/shortcodes.css" rel="stylesheet">

        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

        <!-- Time Lines -->
        <link href="Librairies/brushed/_include/css/timeline.css" rel="stylesheet">
        <!-- Main Style -->
        <link href="css/main.css" rel="stylesheet">

        <!-- Responsive -->
        <link href="Librairies/brushed/_include/css/responsive.css" rel="stylesheet">

        <!-- Page Style -->
        <link href="css/entreprise.css" rel="stylesheet">

        <!-- Fav Icon -->
        <link rel="icon" type="image/png" href="img/Favicon.png" />
        <link rel="shortcut icon" href="img/Favicon.png" />

        <link rel="apple-touch-icon" href="#">
        <link rel="apple-touch-icon" sizes="114x114" href="#">
        <link rel="apple-touch-icon" sizes="72x72" href="#">
        <link rel="apple-touch-icon" sizes="144x144" href="#">

        <!-- Modernizr -->
        <script src="Librairies/brushed/_include/js/js/modernizr.js"></script>

        <!-- Analytics -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-43036950-1', 'auto');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
        </script>
        <!-- End Analytics -->

        <!-- HTML5 for IE -->
        <!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
        <!-- end HTML5 for IE -->
    </head>

    <body>
        <!-- Splash Screen: écran d'attente -->
        <div class="ole">
            <section id="jSplash">
                <div id="circle"></div>
            </section>
        </div>
        <!-- Fin du Splash Screen -->

        <!-- Header -->
        <header>
            <div class="sticky-nav">
                <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

                <div id="logo">
                    <a href="/" title="Polyenco"><img src="img/Titre.svg" alt="Logo"></a>
                </div>
                <nav id="menu">
                    <ul id="menu-nav">
                        <li class="current"><a href="#home-slider" id="menu1">Accueil</a></li>
                        <li><a href="#Presentation" id="menu2">Présentation</a></li>
                        <li><a href="#Competences" id="menu3">Compétences</a></li>
                        <li><a href="#Methodologie" id="menu4">Méthodologie</a></li>
                        <li><a href="#References" id="menu5">Références</a></li>
                        <li><a href="#Contact" id="menu6">Contact</a></li>
                    </ul>
                </nav>    
            </div>
        </header>
        <!-- Fin du Header -->


        ﻿<!-- Homepage Slider -->
        <div id="home-slider">
            <div class="slider-text">
                <div id="slidecaption"></div>
            </div>   

            <div class="control-nav">
                <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
                <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
                <ul id="slide-list"></ul>

                <a id="nextsection" href="#Presentation"><i class="font-icon-arrow-simple-down"></i></a>
            </div>
        </div>
        <!-- Fin Homepage Slider -->

        <!-- Section Accueil -->
        <div id="Accueil">
            <div id="social-area" class="page">
                <div class="row">
                    <nav id="social">
                        <ul>
                            <li><a href="https://twitter.com/Polyenco"><span class="font-icon-social-twitter" title="Notre Twitter"></span></a></li>
                            <li><a href="https://www.facebook.com/Polyenco"><span class="font-icon-social-facebook" title="Notre Facebook"></span></a></li>
                            <li><a href="https://plus.google.com/112643057659135338279/posts"><span class="font-icon-social-google-plus" title="Notre Google+"></span></a></li>
                            <li><a href="https://www.linkedin.com/company/1470627?trk=tyah&amp;trkInfo=tarId%3A1393405148288%2Ctas%3APolyenco%2Cidx%3A2-1-2"><span class="font-icon-social-linkedin" title="Notre LinkedIn"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Fin Section Accueil -->

        <!-- Section Présentation -->
        <div id="Presentation" class="page">
            <div class="container">
                <div class="row">
                    <h1 class="title-page">Présentation</h1>
                </div>

                <div class="row">
                    <img src="img/Equipes/EquipeActuelle.jpg" class="img-responsive" alt="Equipe">
                </div>

                <div id="bloc" class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <img src="img/Logo.svg" class="img-responsive" alt="Polyenco">
                        <ul  class="big-list-style-none small-list-margin">
                            <li>Polyenco, la junior-entreprise de Polytech Lyon, est administrée par ses étudiants.</li>
                            <li>Nous nous chargeons de réaliser, pour le bénéfice de clients variés, des projets faisant appel aux connaissances acquises au sein de notre formation.</li>
                            <li>Avec ses six filières, notre école forme en effet de futurs ingénieurs compétents et qualifiés.
                                Ce savoir-faire diversifié permet d'effectuer des missions telles que la réalisation ou la maintenance de sites internet, d'applications en informatique industrielle ou médicale, 
                                la réalisation ou le suivi d’études de systèmes industriels ainsi que de méthodes de calcul de haute performance.</li>
                            <li>Polyenco offre ainsi un lien privilégié entre entreprises et étudiants, en mettant au service des entreprises les compétences et le professionnalisme des élèves de Polytech.</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5">
                        <img src="img/J-E.png" class="img-responsive" alt="Junior Entreprise">
                        <ul  class="big-list-style-none small-list-margin">
                            <li>Une <b>Junior-Entreprise</b> est une association économique et pédagogique à but non lucratif.</li>
                            <li>Dépendante d'une école ou d'une université, elle permet aux étudiants de réaliser des études grâce aux compétences acquises au sein de leur établissement, et cela pour une clientèle très variée.</li>
                            <li>L'ensemble des Junior-entreprise est regroupé autour de la Confédération Nationale des Junior-Entreprises (CNJE) dont le rôle est d'assurer que ces associations respectent les chartes de qualité et de déontologie.</li>
                            <li>Plus d'informations sur <a href="http://www.junior-entreprises.com/" target="_blank">le site officiel de la CNJE</a>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Section Présentation -->

        <!-- Section Compétences -->
        <div id="Competences" class="page">
            <div class="container">
                <div class="row">
                    <h1 class="title-page">Compétences</h1>
                </div>
                <!-- Plaquette à télécharger-->
                <div class="plaquette" id="plaquette" onclick="showText()">
                    <h3>
                        <span class="glyphicon glyphicon-download-alt"></span>
                        <a id="download" href="img/Plaquette.jpg" target="_blank">Télécharger notre plaquette</a>
                    </h3>
                </div>
                <!-- Fin Plaquette à télécharger-->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#firstArea">
                                    <img src="img/Informatique.svg" class="img-responsive" alt="Informatique"><br>
                                    <h4>Informatique</h4><br>
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="firstArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                    <p class="accordion-inner-text"> Le département informatique forme des ingénieurs compétents dans de nombreux domaines : </p>
                                    <ul class="accordion-inner-list accordion-inner-text"> 
                                        <li> Gestion, création et administration de bases de données </li>
                                        <li> Analyse, programmation et développement d’applications web et mobiles sur tous types de support</li>
                                        <li> Connaissances approfondies en systèmes informatiques : systèmes d’exploitation, réseaux et sécurité</li>
                                        <li> Gestion de projets, aide à la décision pour la gérance financière et stratégique</li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#secondArea">
                                    <img src="img/MAM.svg" class="img-responsive" alt="Mathématiques Appliquées et Modélisation"><br>
                                    <h4>Mathématiques Appliquées et Modélisation</h4>
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="secondArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                    <p class="accordion-inner-text"> Les compétences de ces ingénieurs reposent sur une culture des mathématiques appliquées et une maîtrise des outils informatiques : </p>
                                    <ul class="accordion-inner-list accordion-inner-text"> 
                                        <li> Analyse des données statistiques industrielles et simulation numérique </li>
                                        <li> Elaboration de schémas de discréditation et des techniques de résolutions des grands systèmes d’équations</li> 
                                        <li> Développement de solutions informatiques adaptées aux architectures logicielles et matérielles de calcul</li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#thirdArea">
                                    <img src="img/GBM.svg" class="img-responsive" alt="Génie Biomédical"><br>
                                    <h4>Génie Biomédical</h4><br>
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="thirdArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                    <p class="accordion-inner-text"> Cette formation  est notamment axée sur l’électronique, l’informatique et le biomédical : </p>
                                    <ul class="accordion-inner-list accordion-inner-text"> 
                                        <li> Physique des capteurs, traitement du signal et de l’imagerie médicale </li>
                                        <li> Conduite de la politique d’investissement et de la maintenance des plateaux techniques hospitaliers en établissements de soins</li> 
                                        <li> Conception et diffusion des dispositifs et équipements biomédicaux depuis leur création jusqu’à leur utilisation</li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#fourthArea">
                                    <img src="img/Mecanique.svg" class="img-responsive" alt="Mécanique"><br>
                                    <h4>Mécanique</h4><br>
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="fourthArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                    <p class="accordion-inner-text"> L’ingénieur mécanicien est capable de gérer les aspects organisationnels, économiques et techniques d’un projet mécanique. </p>
                                    <ul class="accordion-inner-list accordion-inner-text"> 
                                        <li> Développement, conception et mise au point de systèmes pluri-techniques </li>
                                        <li> Connaissances en mécanique des fluides, des solides, des structures et en analyse énergétique</li> 
                                        <li> Modélisation, calculs et création de pièces mécaniques assistés par ordinateurs</li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#fifthArea">
                                    <img src="img/Materiaux.svg" class="img-responsive" alt="Matériaux et Ingénierie des Surfaces"><br>
                                    <h4 id="long">Matériaux et Ingénierie des Surfaces</h4>
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="fifthArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                    <p class="accordion-inner-text"> Pôle d’activités pluridisciplinaires en science des matériaux et ingénierie des surfaces et interfaces :</p>
                                    <ul class="accordion-inner-list accordion-inner-text"> 
                                        <li> Science des surfaces : caractérisation des performances, traitement et modification des surfaces </li>
                                        <li> Science des matériaux : recherche, développement et production de nouveaux (multi-)matériaux</li> 
                                        <li> Conception assistée par ordinateur,  modélisation et qualité</li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="accordion-group last">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#sixthArea">
                                    <img src="img/SI.svg" class="img-responsive" alt="Systèmes Industriels"><br>
                                    <h4>Systèmes Industriels</h4><br>
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="sixthArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                    <p class="accordion-inner-text"> Le département a pour but de former des ingénieurs capables de s’adapter à tous les milieux industriels.</p>
                                    <ul class="accordion-inner-list accordion-inner-text"> 
                                        <li> Expertise  des méthodes et du management d’études ou de projets </li>
                                        <li> Nombreux domaines de compétences allant de la mécanique à l’électronique, l’automatisme ou bien l’informatique</li> 
                                        <li> Liens importants avec la gestion de la production ou de la qualité en entreprises</li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Section Compétences -->


        <!-- Section Méthodologie -->
        <div id="Methodologie" class="page">
            <div class="container">
                <div class="row">
                    <h1 class="title-page">Méthodologie</h1>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 bloc">
                        <div id="bloc-engagements">
                            <ul class="big-list-margin">
                                <li class="list-style-none"><h3>Nos Engagements</h3> </li>
                                <li class="list-style-none"><h4> Polyenco s'engage à : </h4></li>
                                <li> Mettre tout en oeuvre pour respecter vos exigences dans les limites de nos compétences.</li>
                                <li> Rester en contact permanent avec vous pour être à l'écoute de vos besoins.</li>
                                <li> Effectuer un suivi constant de la qualité des documents et rendus qui vous seront adressés</li>
                                <li> Respecter les termes de confidentialité de toutes les études que vous nous confierez.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" data-toogle="tooltip" data-original-title="Premier contact"></i></a></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Premier contact</h4>
                                        <img class="img-responsive" src="img/Methodologie/Contact.jpg" alt="Contact"/>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Vous nous faites part de vos besoins.<br>
                                            Nous convenons d'un rendez-vous pour construire avec vous votre projet.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li  class="timeline-inverted">
                                <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" data-toogle="tooltip" data-original-title="Entretien"></i></a></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Entretien</h4>
                                        <img class="img-responsive" src="img/Methodologie/Meeting.jpg" alt="Meeting"/>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Nous analysons les besoins et les contraintes autour de votre projet afin d'établir un cahier des charges.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" data-toogle="tooltip" data-original-title="Proposition commerciale"></i></a></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Proposition commerciale</h4>
                                        <img class="img-responsive" src="img/Methodologie/Signature.jpg" alt="Signature"/>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Un chef de projet, votre contact privilégié au sein de Polyenco, définit une méthodologie et formalise votre projet en une proposition commerciale.<br>
                                            Si la proposition vous convient, il valide avec vous le cahier des charges. 
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li  class="timeline-inverted">
                                <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" data-toogle="tooltip" data-original-title="Réalisation"></i></a></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Réalisation</h4>
                                        <img class="img-responsive" src="img/Methodologie/Clavier.jpg" alt="Réalisation"/>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Le chef de projet vous informe régulièrement de l'avancement de l'étude.
                                            Il garantit le respect des exigences, des délais, et de la qualité de la réalisation.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="clearfix"></li>
                        </ul>
                        <div class="timeline-bottom">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Validation</h4>
                                    <img class="img-responsive" src="img/Methodologie/Check.jpg" alt="Validation"/>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        Nous vous remettons les livrables. Vous disposez alors d'une période pour les tester, et demander des modifications.<br>
                                        Enfin, nous évaluons avec vous la qualité de l'étude et discutons de l'évolution de votre projet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Section Méthodologie -->


        <!-- Section Références -->
        <div id="References" class="page">
            <div class="container">
                <div class="row">
                    <h1 class="title-page">Références</h1>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <nav id="options" class="work-nav">
                            <ul id="filters" class="option-set" data-option-key="filter">
                                <li class="type-work">Types</li>
                                <li><a href="#filter" data-option-value="*" class="selected">Tous</a></li>
                                <li><a href="#filter" data-option-value=".client">Précédents clients</a></li>
                                <li><a href="#filter" data-option-value=".partenaire">Partenaires</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-10">
                        <div class="row">
                            <div id="tiles" class="isotope">
                                <!-- Item Project and Filter Name -->
                                <div class="item-element client">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="ATS Studio" href="img/References/logo-ATS.png" >
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img class="img-responsive" src="img/References/logo-ATS.png" alt="ATS">
                                    <!-- End Item Project -->
                                </div>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <div class="item-element partenaire">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="BNP Paribas" href="img/References/logo-BNP.png">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img class="img-responsive" src="img/References/logo-BNP.png" alt="BNP">
                                </div>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <div class="item-element client">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Bouygues" href="img/References/logo-Bouygues.png">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img class="img-responsive" src="img/References/logo-Bouygues.png" alt="Bouygues">
                                </div>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <div class="item-element partenaire">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Confédération Nationnale Junior Entreprise" href="img/References/logo-JE.png">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img class="img-responsive" src="img/References/logo-JE.png" alt="Junior-Entreprise">
                                </div>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <div class="item-element client">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Filtration SASU" href="img/References/logo-filtrationSASU.png">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img class="img-responsive" src="img/References/logo-filtrationSASU.png" alt="FiltrationSASU">
                                    <!-- End Item Project -->
                                </div>
                                <!-- End Item Project -->

                                <!-- Item Project and Filter Name -->
                                <div class="item-element partenaire client">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Polytech Lyon" href="img/References/logo-Polytech.png">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img class="img-responsive" src="img/References/logo-Polytech.png" alt="Polytech">
                                </div>
                                <!-- End Item Project -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Section Références -->


        <!-- Section Contact -->
        <div id="Contact" class="page">
            <div class="container">
                <div class="row">
                    <h1 class="title-page">Contact</h1>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-6">
                        <div class="row">
                            <h2>Notre adresse</h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-0">
                                <img src="img/polytech.jpg" class="img-responsive" alt="Polytech Lyon">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <ul class="big-list-style-none adresse ">
                                    <li> Poly Engineering Consulting </li>
                                    <li>  Bâtiment ISTIL </li>
                                    <li> Université Claude Bernard Lyon1 </li>
                                    <li> Campus de la Doua </li>
                                    <li> 15 boulevard André Latarjet </li>
                                    <li> Villeurbanne - 69622 </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2" id="ExtraInfos">
                                    <h4>
                                        Mail : contact.polyenco@gmail.com <br>
                                        Téléphone : +33 (0)4 72 43 10 93
                                    </h4>
                                    
                                </div>
                                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.5900219695504!2d4.86832999999999!3d45.779405999999916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea98de9f04fb%3A0xa34cbe87f6c6b03b!2sPolytech+Lyon!5e0!3m2!1sfr!2sfr!4v1407505236793"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-7 col-md-6">
                        <form role="form" name="contact_form" id="contact-form" action="traitement_mail.php" method="post">
                            <div class="row">
                                <h2>Posez-nous vos questions</h2>                 
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12" id="reponse">
                                    <?php 
                                        if(isset($_GET["envoi"]))
                                        {
                                            if($_GET["envoi"] == '0')
                                            {?>
                                               <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <span class="glyphicon glyphicon-ok-circle"></span> Votre message a été envoyé.<br> Nous vous contacterons dès que possible. 
                                               </div>
                                            <?php 
                                            }
                                            if($_GET["envoi"] == '1')
                                            {
                                            ?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <span class="glyphicon glyphicon-ban-circle"></span> Erreur lors de l'envoi: <br> Merci de nous contacter par mail à junior-polyenco@gmail.com
                                                </div>
                                            <?php 
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nom" class="form-control" name="contact_nom" id="contact_nom" onchange="testNom()" required />
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Prenom" class="form-control" name="contact_prenom" id="contact_prenom" onchange="testPrenom()" required />
                                    </div>
                                </div>	                      
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Entreprise" class="form-control" name="contact_entreprise" id="contact_entreprise" onchange="testEntreprise()" required />
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Numéro de téléphone" class="form-control" name="contact_tel" id="contact_tel" onchange="testTelephone()" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Adresse Email" class="form-control" name="contact_email" id="contact_email" onchange="testEmail()" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <textarea  placeholder="Message" class="form-control" name="contact_message" id="contact_message" rows="10"  onchange="testMessage()" required ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-xs-offset-5 col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5">
                                    <div class="form-group">
                                        <input type="button" class="submit" value="Envoyer" onclick="testEnvoi()">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Section Contact -->

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

        <input type="hidden" id="webroot" value="/">
        <script src="js/download_text.js"></script> <!-- JS for displaying the text of download -->
        <script src="js/form_entreprise.js"></script> <!-- JS for the Form -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
        <script src="Librairies/bootstrap/js/bootstrap.min.js"></script> <!-- Bootstrap -->
        <script src="Librairies/brushed/_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
        <script src="Librairies/brushed/_include/js/waypoints.js"></script> <!-- WayPoints -->
        <script src="Librairies/brushed/_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
        <script src="Librairies/brushed/_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
        <script src="Librairies/brushed/_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
        <script src="Librairies/brushed/_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
        <script src="Librairies/brushed/_include/js/jquery.tweet.js"></script> <!-- Tweet -->
        <script src="Librairies/brushed/_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
        <script src="js/main.js"></script> <!-- Default JS -->
        <!-- End Js -->
    </body>
