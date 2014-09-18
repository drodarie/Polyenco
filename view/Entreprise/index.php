<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>
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
                    <li><a href="https://twitter.com/Polyenco"><span class="font-icon-social-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/Polyenco"><span class="font-icon-social-facebook"></span></a></li>
                    <li><a href="https://plus.google.com/112643057659135338279/posts"><span class="font-icon-social-google-plus"></span></a></li>
                    <li><a href="https://www.linkedin.com/company/1470627?trk=tyah&amp;trkInfo=tarId%3A1393405148288%2Ctas%3APolyenco%2Cidx%3A2-1-2"><span class="font-icon-social-linkedin"></span></a></li>
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
            <img src="<?= IMG . 'Equipes/EquipeActuelle.jpg' ?>" class="img-responsive" alt="Equipe">
        </div>

        <div id="bloc" class="row">
            <div class="col-xs-12 col-sm-12 col-md-7">
                <img src="<?= IMG . 'Logo.svg' ?>" class="img-responsive" alt="Polyenco">
                <h5>
                    Polyenco, la junior-entreprise de Polytech Lyon, est administrée par ses étudiants.
                    </br>Nous nous chargeons de réaliser, pour le bénéfice de clients variés, des projets faisant appel aux connaissances acquises au sein de notre formation.</br>
                    </br>Avec ses six filières, notre école forme en effet de futurs ingénieurs compétents et qualifiés. Ce savoir-faire diversifié permet d'effectuer des missions telles que la réalisation ou la maintenance de sites internet, d'applications en informatique industrielle ou médicale, la réalisation ou le suivi d’études de systèmes industriels ainsi que de méthodes de calcul de haute performance.</br>
                    </br>Polyenco offre ainsi un lien privilégié entre entreprises et étudiants, en mettant au service des entreprises les compétences et le professionnalisme des élèves de Polytech.
                </h5>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5">
                <img src="<?= IMG . 'J-E.png' ?>" class="img-responsive" alt="Junior Entreprise">
                <h5>
                    Une <b>Junior-Entreprise</b> est une association économique et pédagogique à but non lucratif.</br> 
                    </br>Dépendante d'une école ou d'une université, elle permet aux étudiants de réaliser des études grâce aux compétences acquises au sein de leur établissement, et cela pour une clientèle très variée.</br>
                    </br>L'ensemble des Junior-entreprise est regroupé autour de la Confédération Nationale des Junior-Entreprises (CNJE) dont le rôle est d'assurer que ces associations respectent les chartes de qualité et de déontologie.
                    </br>Plus d'informations sur <a href="http://www.junior-entreprises.com/">le site officiel de la CNJE</a>.</br>
                </h5>
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
                <a id="download" href="<?= IMG . 'Plaquette.jpg' ?>" target="_blank">Télécharger notre plaquette</a>
            </h3>
        </div>
        <!-- Fin Plaquette à télécharger-->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="accordion-group">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#firstArea">
                            <img src="<?= IMG . 'Informatique.svg' ?>" class="img-responsive" alt="Informatique"></br>
                            <h4>Informatique</h4></br>
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                    </div>
                    <div id="firstArea" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h5>Le département informatique forme des ingénieurs compétents dans de nombreux domaines :</br>
                                </br>- Gestion, création et administration de bases de données</br>
                                - Analyse, programmation et développement d’applications web et mobiles sur tous types de support</br>
                                - Connaissances approfondies en systèmes informatiques : systèmes d’exploitation, réseaux et sécurité</br>
                                - Gestion de projets, aide à la décision pour la gérance financière et stratégique</br>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="accordion-group">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#secondArea">
                            <img src="<?= IMG . 'MAM.svg' ?>" class="img-responsive" alt="Mathématiques Appliquées et Modélisation"></br>
                            <h4>Mathématiques Appliquées et Modélisation</h4>
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                    </div>
                    <div id="secondArea" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h5>Les compétences de ces ingénieurs reposent sur une culture des mathématiques appliquées et une maîtrise des outils informatiques :</br>
                                </br>- Analyse des données statistiques industrielles et simulation numérique</br>
                                - Elaboration de schémas de discréditation et des techniques de résolutions des grands systèmes d’équations</br>
                                - Développement de solutions informatiques adaptées aux architectures logicielles et matérielles de calcul
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="accordion-group">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#thirdArea">
                            <img src="<?= IMG . 'GBM.svg' ?>" class="img-responsive" alt="Génie Biomédical"></br>
                            <h4>Génie Biomédical</h4></br>
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                    </div>
                    <div id="thirdArea" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h5>Cette formation  est notamment axée sur l’électronique, l’informatique et le biomédical :</br>
                                </br>- Physique des capteurs, traitement du signal et de l’imagerie médicale</br>
                                - Conduite de la politique d’investissement et de la maintenance des plateaux techniques hospitaliers en établissements de soins</br>
                                - Conception et diffusion des dispositifs et équipements biomédicaux depuis leur création jusqu’à leur utilisation</br>
                            </h5>
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
                            <img src="<?= IMG . 'Mecanique.svg' ?>" class="img-responsive" alt="Mécanique"></br>
                            <h4>Mécanique</h4></br>
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                    </div>
                    <div id="fourthArea" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h5>L’ingénieur mécanicien est capable de gérer les aspects organisationnels, économiques et techniques d’un projet mécanique.</br>
                                </br>- Développement, conception et mise au point de systèmes pluri-techniques</br>
                                - Connaissances en mécanique des fluides, des solides, des structures et en analyse énergétique</br>
                                - Modélisation, calculs et création de pièces mécaniques assistés par ordinateurs</br>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="accordion-group">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#fifthArea">
                            <img src="<?= IMG . 'Materiaux.svg' ?>" class="img-responsive" alt="Matériaux et Ingénierie des Surfaces"></br>
                            <h4 id="long">Matériaux et Ingénierie des Surfaces</h4>
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                    </div>
                    <div id="fifthArea" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h5>Pôle d’activités pluridisciplinaires en science des matériaux et ingénierie des surfaces et interfaces :</br>
                                </br>- Science des surfaces : caractérisation des performances, traitement et modification des surfaces</br>
                                - Science des matériaux : recherche, développement et production de nouveaux (multi-)matériaux</br>
                                - Conception assistée par ordinateur,  modélisation et qualité
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="accordion-group last">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#sixthArea">
                            <img src="<?= IMG . 'SI.svg' ?>" class="img-responsive" alt="Systèmes Industriels"></br>
                            <h4>Systèmes Industriels</h4></br>
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                    </div>
                    <div id="sixthArea" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <h5>Le département a pour but de former des ingénieurs capables de s’adapter à tous les milieux industriels.</br>
                                </br>- Expertise  des méthodes et du management d’études ou de projets</br>
                                - Nombreux domaines de compétences allant de la mécanique à l’électronique, l’automatisme ou bien l’informatique</br>
                                - Liens importants avec la gestion de la production ou de la qualité en entreprises</br>
                            </h5>
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
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="bloc">
                    <h3>Nos Engagements</br></h3>
                    <h4> Polyenco s'engage à :</br></br> 
                    <ul>
                        <li> Mettre tout en oeuvre pour respecter vos exigences dans les limites de nos compétences.</br></br></li>
                        <li> Rester en contact permanent avec vous pour être à l'écoute de vos besoins.</br></br></li>
                        <li> Effectuer un suivi constant de la qualité des documents et rendus qui vous seront adressés.</br></br></li>
                        <li> Respecter les termes de confidentialité de toutes les études que vous nous confierez. </br></li>
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
                                <img class="img-responsive" src="<?= IMG . 'Methodologie/Contact.jpg' ?>" alt="Contact"/>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Vous nous faites part de vos besoins.</br>
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
                                <img class="img-responsive" src="<?= IMG . 'Methodologie/Meeting.jpg' ?>" alt="Meeting"/>
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
                                <img class="img-responsive" src="<?= IMG . 'Methodologie/Signature.jpg' ?>" alt="Signature"/>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Un chef de projet, votre contact privilégié au sein de Polyenco, définit une méthodologie et formalise votre projet en une proposition commerciale.</br>
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
                                <img class="img-responsive" src="<?= IMG . 'Methodologie/Clavier.jpg' ?>" alt="Réalisation"/>
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
                            <img class="img-responsive" src="<?= IMG . 'Methodologie/Check.jpg' ?>" alt="Validation"/>
                        </div>
                        <div class="timeline-body">
                            <p>
                                Nous vous remettons les livrables. Vous disposez alors d'une période pour les tester, et demander des modifications.</br>
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
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="ATS Studio" href="<?= IMG . 'References' . DS . 'logo-ATS.png' ?>" >
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img class="img-responsive" src="<?= IMG . 'References' . DS . 'logo-ATS.png' ?>" alt="ATS">
                            <!-- End Item Project -->
                        </div>
                        <!-- End Item Project -->
                        
                        <!-- Item Project and Filter Name -->
                        <div class="item-element partenaire">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="BNP Paribas" href="<?= IMG . 'References' . DS . 'logo-BNP.png' ?>">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img class="img-responsive" src="<?= IMG . 'References' . DS . 'logo-BNP.png' ?>" alt="BNP">
                        </div>
                        <!-- End Item Project -->
                        
                        <!-- Item Project and Filter Name -->
                        <div class="item-element client">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Bouygues" href="<?= IMG . 'References' . DS . 'logo-Bouygues.png' ?>">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img class="img-responsive" src="<?= IMG . 'References' . DS . 'logo-Bouygues.png' ?>" alt="Bouygues">
                        </div>
                        <!-- End Item Project -->
                        
                        <!-- Item Project and Filter Name -->
                        <div class="item-element partenaire">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Confédération Nationnale Junior Entreprise" href="<?= IMG . 'References' . DS . 'logo-JE.png' ?>">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img class="img-responsive" src="<?= IMG . 'References' . DS . 'logo-JE.png' ?>" alt="Junior-Entreprise">
                        </div>
                        <!-- End Item Project -->
                        
                        <!-- Item Project and Filter Name -->
                        <div class="item-element client">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Filtration SASU" href="<?= IMG . 'References' . DS . 'logo-filtrationSASU.png' ?>">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img class="img-responsive" src="<?= IMG . 'References' . DS . 'logo-filtrationSASU.png' ?>" alt="FiltrationSASU">
                            <!-- End Item Project -->
                        </div>
                        <!-- End Item Project -->
                        
                        <!-- Item Project and Filter Name -->
                        <div class="item-element partenaire client">
                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Polytech Lyon" href="<?= IMG . 'References' . DS . 'logo-Polytech.png' ?>">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb font-icon-plus"></span>
                            </a>
                            <!-- Thumb Image and Description -->
                            <img class="img-responsive" src="<?= IMG . 'References' . DS . 'logo-Polytech.png' ?>" alt="Polytech">
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
                        <img src="<?= IMG . 'polytech.jpg' ?>" class="img-responsive" alt="Polytech Lyon">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h5 class="adresse">
                            Poly Engineering Consulting </br>
                            Bâtiment ISTIL </br>
                            Université Claude Bernard Lyon1 </br>
                            Campus de la Doua </br>
                            15 boulevard André Latarjet </br>
                            Villeurbanne - 69622 </br>
                        </h5>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2" id="ExtraInfos">
							<img src="<?= IMG . 'adresse-mail.png' ?>" class="img-responsive" alt="adresse-mail">
							<img src="<?= IMG . 'telephone.png' ?>" class="img-responsive" alt="telephone">
						</div>
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.5900219695504!2d4.86832999999999!3d45.779405999999916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea98de9f04fb%3A0xa34cbe87f6c6b03b!2sPolytech+Lyon!5e0!3m2!1sfr!2sfr!4v1407505236793"></iframe>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-7 col-md-6">
                <form role="form" name="contact_form" id="contact-form" action="<?= Router::url('Entreprise/sendEmail'); ?>" method="post">
                    <div class="row">
                        <h2>Posez-nous vos questions</h2>                 
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" id="reponse">
                            <?= $this->Session->flash();?>
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
                                <textarea type="text" placeholder="Message" class="form-control" name="contact_message" id="contact_message" rows="10"  onchange="testMessage()" required ></textarea>
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
