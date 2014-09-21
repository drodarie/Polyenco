<!-- Header -->
<header>
    <div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

        <div id="logo">
            <a href="<?php echo Router::url('Accueil/index'); ?>" title="Polyenco"><img src="<?= IMG . 'Titre.svg' ?>" alt="Logo"></a>
        </div>
        <?php isset($content_for_header) ? require $content_for_header : '' ?>
    </div>
</header>
<!-- Fin du Header -->
