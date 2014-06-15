<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?= $racineWeb ?>">
        <link href="Librairies/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="Contenu/style.css" rel="stylesheet" media="screen">
        <link rel="icon" type="image/png" href="Contenu/Images/favicon.ico" />
        <title><?= isset($title_layout)?$title_layout : 'Polyenco' ?></title>
        <link rel="favicon" href="#">
    </head>
    <body>
        <!-- Contenu de la page -->
        <?= $content_layout ?>
        <nav id="footer" class="navbar navbar-default">
            <p class="credit text-center">Polyenco</p>
        </nav>
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="Librairies/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(function(){
                $('a').tooltip({ placement:'bottom' , trigger:'hover click' });
            });
        </script>
    </body>
</html>

