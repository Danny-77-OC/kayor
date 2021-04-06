<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kayor-Import vous approvisionne en fruits et légumes frais,originaires d'afrique de l'ouest nos produist sont triés sur leur qualité et offert au meulleur prix" />
	<meta name="keywords" content="fruits,légumes,frais,kayor-import,afrique de l'ouest,mali,sénégal,commande,gombo,mangue,piment,ananas,aubergine,courneuve,paris,marché de rungis,qualité,connexion,produit,offre,information,formulaire d'inscription,Freshly Yours">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <link rel="apple-touch-icon" sizes="57x57" href="image/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="image/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="image/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="image/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="image/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="image/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="image/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="image/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="image/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="image/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">




    <title><?= $title ?></title>



</head>

<body class="bg-success">


    <header id="head">

        <img src="image/cover.png" alt="image_de_champ_cultivé" id="cover">

        <div class="container-fluid cover">

            <nav id="menu" class=" fixed-top bg-warning">

                <div class="dropdown ml-5" id="menuAdmin">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administrateur
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><a href="index.php?action=listMember">liste des inscrits</a></button>
                        <button class="dropdown-item" type="button"><a href="index.php?action=listCmd">liste des commandes</a></button>
                    </div>
                </div>

                <div class="col">
                    <ul class="row justify-content-center">
                        <li class="col"><a href="index.php?action=introduction">Accueil</a></li>
                        <li class="col"><a href="index.php?action=product"> produits</a></li>
                        <li class="col"><a href="index.php?action=inscription">inscription</a></li>
                        <li class="col"><a href="index.php?action=connexion">connection</a> </li>
                        <li class="col"><a href="index.php?action=deconnexion">deconnection</a></li>

                    </ul>

                </div>



            </nav>




            <h1 class="display-1" id="mainTitle">Kay🍅r Imp🍊rt</h1>
            <h2 id="secondTitle">Freshly Yours</h2>



    </header>

    <?= $content ?>


    <footer class="row justify-content-center mt-5 ml-5 mr-0">
        <p class="col-5">adresse: 27 rue des couronnes 75020 Paris</p>
        <p class="col-4">téléphone: 06 46 81 11 25</p>
        <p class="col-3">email: www.kayor-import.com</p>
    </footer>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>



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
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-XXXXXXXX-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>