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
    <body class="video">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <a href="accueil" class="boutons bouton-gauche1">Accueil</a>
                    <a href="a-propos" class="boutons bouton-gauche2">À propos</a>
                </div>

                <div class="logo-nav">
                    <a href="accueil"><img src="public/images/logo-cinema-fait-maison-bleu.svg" alt=""></a>
                </div>

                <div class="boutons-droit">
                    <div class="bouton-transparent"></div>
                    <a href="infolettre" class="boutons bouton-droit1">Infolettre</a>
                </div>
                <div class="gradient"></div>
            </nav>
        </header>

        <main class="conteneur">

            <div class="section-gauche">
                <div class="details-episodes">
                    <div class="titre-episode">
                        <h2>Le choc</h2>
                    </div>
                    <div class="chaque-episode">
                        <div class="numero-episode">Épisode 1</div>
                        <div class="date-episode">7 février 2022</div>
                        <div class="temps-episode">9 mins</div>
                    </div>
                </div>

                <video controls>
                    <source src="public/videos/placeholder-video.mp4" type="video/mp4">
                </video>
            </div>

            <div class="section-droite">
                <a href="video" class="boutons encadres">
                    <div class="image">
                        <img src="public/images/episode1.jpg" alt="">
                    </div>
                    <div class="details-episodes">
                        <div class="titre-episode">
                            <h2>Le choc</h2>
                        </div>
                        <div class="chaque-episode">
                            <div class="numero-episode">Épisode 1</div>
                            <div class="date-episode">7 février 2022</div>
                            <div class="temps-episode">9 mins</div>
                        </div>
                    </div>
                </a>

                <div class="encadres">
                    <div class="image">
                        <img src="public/images/episode1.jpg" alt="">
                    </div>
                    <div class="details-episodes">
                        <div class="titre-episode">
                            <h2>Le choc</h2>
                        </div>
                        <div class="chaque-episode">
                            <div class="numero-episode">Épisode 1</div>
                            <div class="date-episode">7 février 2022</div>
                            <div class="temps-episode">9 mins</div>
                        </div>
                    </div>
                    <!-- <a href="video" class="boutons bouton-play">▶</a> -->
                </div>
                <div class="encadres">
                    <div class="image">
                        <img src="public/images/episode1.jpg" alt="">
                    </div>
                    <div class="details-episodes">
                        <div class="titre-episode">
                            <h2>Le choc</h2>
                        </div>
                        <div class="chaque-episode">
                            <div class="numero-episode">Épisode 1</div>
                            <div class="date-episode">7 février 2022</div>
                            <div class="temps-episode">9 mins</div>
                        </div>
                    </div>
                    <!-- <a href="video" class="boutons bouton-play">▶</a> -->
                </div>
                <div class="encadres">
                    <div class="image">
                        <img src="public/images/episode1.jpg" alt="">
                    </div>
                    <div class="details-episodes">
                        <div class="titre-episode">
                            <h2>Le choc</h2>
                        </div>
                        <div class="chaque-episode">
                            <div class="numero-episode">Épisode 1</div>
                            <div class="date-episode">7 février 2022</div>
                            <div class="temps-episode">9 mins</div>
                        </div>
                    </div>
                    <!-- <a href="video" class="boutons bouton-play">▶</a> -->
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