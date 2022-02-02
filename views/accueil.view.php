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
        <title>Accueil</title>
    </head>
    <body class="accueil">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <a href="accueil" class="bouton-actif-client">Accueil</a>
                    <a href="videos" class="boutons">Vidéos</a>
                    <a href="a-propos" class="boutons">À propos</a>
                </div>

                <div class="logo-nav">
                    <a href="accueil"><img src="public/images/logo-cinema-fait-maison-bleu.svg" alt=""></a>
                </div>

                <div class="boutons-droit">
                    <div class="bouton-transparent"></div>
                    <a href="infolettre" class="boutons">Infolettre</a>
                </div>
                <div class="gradient"></div>
            </nav>
            <div class="montagne2">
                <img src="public/images/montagne-pale.png" alt="">
            </div>
            <div class="montagne1">
                <img src="public/images/montagne-fonce.png" alt="">
            </div>

            <div class="gradient"></div>
        </header>

        <main class="conteneur">
            <div class="section-haut">
                <div class="titre">
                    <h1>La vie entre quatres murs</h1>
                </div>
                <div class="sous-titre">
                    <h3>SUIVEZ LES MÉSAVENTURES DES TREMBLAY EN PLEIN CONFINEMENT</h3>
                </div>
                <div class="texte">
                    <p>En pleine période de confinement, les Tremblay, une famille de cinq, vestibulum commodo iaculis consequat. Pellentesque rhoncus quam eu ipsum bibendum, et finibus leo laoreet. Nullam placerat velit quis mi ultrices ullamcorper. In faucibus auctor massa sed cursus. Fusce eget enim quis sem tempor pretium. Duis at congue elit. Duis rhoncus mauris velit, quis dapibus orci pulvinar in. Proin ullamcorper sapien lorem, id varius sem dapibus eget. Phasellus faucibus ipsum vel sapien pulvinar, ut posuere dui porta. Duis vel dignissim enim, vel venenatis est.</p>
                </div>
                <div class="logos-commanditaires">
                    <img src="public/images/logo-ssr-bleu.svg" alt="">
                    <img src="public/images/logo-banque-bleu.svg" alt="">
                    <img src="public/images/logo-home-bleu.svg" alt="">
                </div>
            </div>

            <div class="section-bas">
                <h2>Les épisodes</h2>
                <?php foreach ($episodes as $episode) {?>
                    <div class="encadres">
                        <div class="image">
                            <img src="<?=$episode["image"]?>" alt="image/épisode<?=$episode["numero_episode"]?>">
                        </div>
                        <div class="details-episodes">
                            <div class="titre-episode">
                                <h2><?=$episode["titre"]?></h2>
                            </div>
                            <div class="chaque-episode">
                                <div class="numero-episode">Épisode <?=$episode["numero_episode"]?></div>
                                <div class="date-episode"><?=$episode["date_parution"]?></div>
                                <div class="temps-episode"><?=$episode["temps"]?> mins</div>
                            </div>
                            <div class="description-episode">
                                <p><?=$episode["description"]?></p>
                            </div>
                        </div>
                        <a href="videos" class="boutons bouton-play">▶</a>
                    </div>
                <?php }?>
                <!-- <div class="encadres">
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
                        <div class="description-episode">
                            <p>Le mariage est ruiné par l’annonce du gouvernement morbi rutrum id enim ac mattis. Etiam id ante a nibh viverra imperdiet. Phasellus sed finibus erat. Donec sagittis viverra libero, ultrices facilisis augue fringilla id. Curabitur euismod euismod sem, nec commodo mauris euismod at. Nullam quis consequat nulla.</p>
                        </div>

                    </div>

                </div> -->
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

        <script src="public/parallax.js"></script>
    </body>
</html>
