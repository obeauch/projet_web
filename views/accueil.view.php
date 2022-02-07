<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="accueil">

        <header>
            <?php include "parts/nav.php"?>

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
                                <div class="date-episode"><?=$this->dates($episode["date_parution"])?></div>
                                <div class="temps-episode"><?=$episode["temps"]?> mins</div>
                            </div>
                            <div class="description-episode">
                                <p><?=$episode["description"]?></p>
                            </div>
                        </div>
                        <a href="videos?numero_episode=<?=$episode["numero_episode"]?>" class="boutons bouton-play">▶</a>
                    </div>
                <?php }?>

            </div>
        </main>

        <?php include "parts/footer.php"?>

        <script src="public/parallax.js"></script>
    </body>
</html>
