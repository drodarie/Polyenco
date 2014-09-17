<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div> 

    <div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>

        <a id="nextsection"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- Fin Homepage Slider -->

<div id="Links" class="page">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-4 col-sm-3 col-md-3 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                <a href="<?php echo Router::url('Entreprise/index'); ?>">
                    <h3>Partie Entreprise</h3>
                    <img src="<?= IMG . 'icone-entreprise2.png' ?>" class="img-responsive" alt="Partie Entreprise">
                </a>
            </div>
            <div class="col-xs-4 col-xs-offset-2 col-sm-offset-4 col-sm-3 col-md-3 col-md-offset-4">
                <a href="<?php echo Router::url('Etudiant/index'); ?>">
                    <h3>Partie Etudiante</h3>
                    <img src="<?= IMG . 'icone-etudiant2.png' ?>" class="img-responsive" alt="Partie Etudiante">  
                </a>
            </div> 
        </div>   
    </div>
</div>

<!-- Section Accueil -->
<div id="Accueil">
    <div id="social-area" class="page">
        <div class="row">
            <nav id="social">
                <ul>
                    <li><a href="https://twitter.com/Polyenco"><span class="font-icon-social-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/Polyenco"><span class="font-icon-social-facebook"></span></a></li>
                    <li><a href="https://plus.google.com/112643057659135338279/posts"><span class="font-icon-social-google-plus"></span></a></li>
                    <li><a href="https://www.linkedin.com/company/1470627?trk=tyah&trkInfo=tarId%3A1393405148288%2Ctas%3APolyenco%2Cidx%3A2-1-2"><span class="font-icon-social-linkedin"></span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Fin Section Accueil -->