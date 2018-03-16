<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset=UTF-8" />
    <title>
        <?php echo $title; ?>
    </title>
    <!-- La feuille de styles "base.css" doit être appelée en premier. -->
    <link rel="icon" type="image/jpg" href=<?php echo $href_logo; ?> />
    <link rel="stylesheet" type="text/css" href="./CSS/index.css" media="all" />
    <link rel="stylesheet" type="text/css" href="./CSS/base.css" media="all" />
    <link rel="stylesheet" type="text/css" href="./CSS/modele04.css" media="screen" />
    <script src="https://193.190.65.92/all/jq/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="JS/index.js"></script>
</head>
<body onload="hide()">
    <div id="global">
        <header id="entete">
            <h1>
                <img alt=<?php echo $alt_logo; ?> src=<?php echo $href_logo; ?> />
                <?php echo $site_name; ?>
            </h1>
            <menu id="menu" class="menu">
                <ul>
                    <li><a href="index.html"><?php echo $index; ?></a></li>
                    <li><a href="liste.html"><?php echo $userProfil; ?></a></li>
                    <li><a href="utiliser.html"><?php echo $userInfos; ?></a></li>
                    <li><a href="licence.html"><?php echo $config; ?></a></li>
                    <li><a href="credits.html"><?php echo $gestLog; ?></a></li>
                </ul>
            </menu>
        </header>
        <menu id="sous-menu" class="menu">
            <ul>
                <li><a href="index.html"><?php echo $sem01; ?></a></li>
                <li><a href="liste.html"><?php echo $sem02; ?></a></li>
                <li><a href="utiliser.html"><?php echo $sem03; ?></a></li>
                <li><a href="licence.html"><?php echo $sem04; ?></a></li>
            </ul>
        </menu><!-- #navigation -->
        <main id="contenu">
            <?php echo $contenu; ?>
        </main><!-- #contenu -->
        <footer id="copyright">
            <span id="auteur">
                <?php echo $auteur; ?>
            </span>
            <span> - crédits </span>
            <span id="credit">
                Mise en page &copy; 2018
                <a href="http://www.elephorm.com">Elephorm</a> et
                <a href="http://www.alsacreations.com">Alsacréations</a>
            </span>

        </footer>
    </div><!-- #global -->
</body>
</html>

