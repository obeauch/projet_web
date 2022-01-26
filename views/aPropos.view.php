<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Noticia+Text&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?=BASE?>/public/css/style.css">
        <title>À propos</title>
    </head>
    <body class="a-propos">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <div class="boutons bouton-accueil">
                        <a href="accueil">Accueil</a>
                    </div>
                    <div class="boutons bouton-a-propos">
                        <a href="#">À propos</a>
                    </div>
                </div>
                <div class="logo-nav">
                    <a href="#"><img src="public/images/logo-cinema-fait-maison-bleu.svg" alt=""></a>
                </div>
                <div class="boutons-droit">
                    <div class="bouton-transparent"></div>
                    <div class="boutons bouton-infolettre">
                        <a href="#">Infolettre</a>
                    </div>
                </div>
                <div class="gradient"></div>
            </nav>
        </header>

        <main class="conteneur">
            <h1>À propos de Cinéma fait maison</h1>

            <div class="texte-a-propos encadres">
                <p>
                Depuis maintenant 20 ans, Cinéma fait maison contribue au développement culturel du Québec en faisant la production de Maecenas vitae nunc in lorem vehicula vulputate. Sed placerat tellus sed tortor elementum, eget placerat nunc suscipit. Aenean eget tortor at turpis pellentesque egestas. Nulla mauris leo, elementum id purus facilisis, imperdiet fringilla velit. Nam eu dignissim quam. In sit amet arcu tortor. Duis ligula purus, hendrerit vitae massa nec, sollicitudin tristique odio. Curabitur malesuada consectetur ultricies.
                </p>
            </div>

            <h2>Membres de l’équipe de production</h2>

            <div class="encadres">
                    <div class="photo">
                        <img src="public/images/episode1.jpg" alt="">
                    </div>
                    <div class="nom-titre">
                        <div class="nom-membres">
                            <h3>Alain Thériault</h3>
                        </div>
                        <div class="titre-membres">
                            <p>Producteur / Réalisateur</p>
                        </div>
                    </div>
                    <div class="description-membres">
                        <p>Etiam id ante a nibh viverra imperdiet. Phasellus sed finibus erat. Donec sagittis viverra libero, ultrices facilisis augue fringilla id. Curabitur euismod euismod sem, nec commodo mauris euismod at. Nullam quis consequat nulla.</p>
                    </div>

                </div>
        </main>

        <footer>
            <div class="logos-commanditaires">
                <a href="#"><img src="public/images/logo-ssr-bleu.svg" alt=""></a>
                <a href="#"><img src="public/images/logo-banque-bleu.svg" alt=""></a>
                <a href="#"><img src="public/images/logo-home-bleu.svg" alt=""></a>
            </div>
            <div class="bouton-admin">
                <a href="login">Connexion Admin</a>
            </div>
            <div class="logos-reseaux">
                <a href="https://fr-ca.facebook.com/"><img src="public/images/logo-facebook-bleu.svg" alt=""></a>
                <a href="https://fr.linkedin.com/"><img src="public/images/logo-linked-bleu.svg" alt=""></a>
            </div>
        </footer>
    </body>
</html>