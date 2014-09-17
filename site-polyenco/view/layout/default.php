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
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-20765697-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
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

        <!-- Js -->
        <script type="text/javascript">
            function showText(){
                $("#download").toggle("slide");
            }
        </script>
        <script type="text/javascript">
            var punct = "!\"\\#$%&'()*+,\\-.\\\/:;?@[\\\\\\]_`{|}^=~",
                    accents = "ÀÂÄÇÉÈÊËÎÏÔÖÙÛÜÆŒàâäçéèêëîïôöùûüæœÿŸáíóúñÁÍÓÚÑõÕìÒòÌ",
                    alpha = "a-zA-Z"+accents,
                    num = "\\d",
                    letter = "["+alpha+"]",
                    alphanum = "["+alpha+"0-9]",
                    tot = "["+alpha+"0-9"+punct+"]"
                    erreur = '<div class="alert alert-danger alert-dismissable">'
                            + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                            + '<span class="glyphicon glyphicon-ban-circle"></span><strong> Erreur : </strong>';
            
            
            function addError(element){
                element.className = element.className.replace(" has-success", "");
                if(element.className.indexOf(" has-error")===-1){
                    element.className = element.className + " has-error";
                }
            }
            
            function addSuccess (element){
                element.className = element.className.replace(" has-error", "");
                if(element.className.indexOf(" has-success")===-1){
                    element.className = element.className + " has-success";
                }
            }
            
            function testNom (){
                var regName=new RegExp("^("+letter+"([-' ]{1,2}"+letter+")?)+$"),//Commence par une lettre, contient des lettre et si ' ou espace ou - lettre après.
                        name = document.getElementById("contact_nom");
                if (!regName.test(name.value)){
                    document.getElementById("reponse").innerHTML=erreur
                            + "Le champ Nom n'est pas valide.</div>";
                    addError(name.parentNode);
                    return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(name.parentNode);
                    return true;
                }
            }
            
            function testPrenom (){
                var regName=new RegExp("^("+letter+"([-' ]{1,2}"+letter+")?)+$"),//idem nom
                        forname = document.getElementById("contact_prenom");
                if (!regName.test(forname.value)){
                    document.getElementById("reponse").innerHTML=erreur
                            + "Le champ Prénom n'est pas valide.</div>";
                    addError(forname.parentNode);
                    return false;
                }
                else{
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(forname.parentNode);
                    return true;
                }
            }
            
            function testEntreprise (){
                var regComp=new RegExp("^("+tot+" ?)+$"),//Caractères alphanumériques ou ponctuation espacés ou non.
                        company = document.getElementById("contact_entreprise");
                if (!regComp.test(company.value)){
                    document.getElementById("reponse").innerHTML=erreur
                            + "Le champ Entreprise n'est pas valide.</div>";
                    addError(company.parentNode);
                    return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(company.parentNode);
                    return true;
                }
            }
            
            function testTelephone(){
                var regTel=new RegExp("^(\\+"+num+num+"[ \\-]?)?\\(?"+num+"\\)?[\\- ]?"+num+"[\\- ]?("+num+num+"[\\- ]?){4}$"),//+33 (0)X XX XX XX XX ou avec -
                        tel = document.getElementById("contact_tel");
                if (!regTel.test(tel.value)){
                    document.getElementById("reponse").innerHTML=erreur
                            + "Le champ Téléphone n'est pas valide.</div>";
                    addError(tel.parentNode);
                    return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(tel.parentNode);
                    return true;
                }
            }
            
            function testEmail(){
                var regEmail=new RegExp("^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])+_?@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])+\\.[a-z]{2,4}$"),
                        email = document.getElementById("contact_email");
                if (!regEmail.test(email.value)){
                    document.getElementById("reponse").innerHTML=erreur
                            + "Le champ Email n'est pas valide.</div>";
                    addError(email.parentNode);
                    return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(email.parentNode);
                    return true;
                }
            }
            
            function testMessage(){
                var message = document.getElementById("contact_message");
                if (message.value.length<20){
                    document.getElementById("reponse").innerHTML=erreur
                            + "Le champ Message est trop court.</div>";
                    addError(message.parentNode);
                    return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(message.parentNode);
                    return true;
                }
            }
            
            function testEnvoi(){
                if (testNom()&& testPrenom()&& testEntreprise()&&testTelephone()&&testEmail()&&testMessage()){
                    document.getElementById("reponse").innerHTML='<div class="alert alert-success alert-dismissable">'
                            + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                            + '<span class="glyphicon glyphicon-ok-circle"></span> Votre message a été envoyé.<br>Nous vous contacterons dès que possible. </div>';
                    setTimeout(document.forms['contact_form'].submit(),3000);
                    return true;
                }
                document.getElementById("reponse").innerHTML=erreur
                            + "Il subsiste des erreurs dans le formulaire. Veuillez les corriger.</div>";
                return false;
            }
        </script>
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

