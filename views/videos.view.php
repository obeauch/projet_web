<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les épisodes</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="video">

        <header>
            <?php include "parts/nav.php"?>
        </header>

        <main class="conteneur">

            <div class="section-gauche">
                <div class="details-episodes">
                    <div class="titre-episode">
                        <h2><?=$video["titre"]?></h2>
                    </div>
                    <div class="chaque-episode">
                        <div class="numero-episode">Épisode <?=$video["numero_episode"]?></div>
                        <div class="date-episode"><?=$video["date_parution"]?></div>
                        <div class="temps-episode"><?=$video["temps"]?> mins</div>
                    </div>
                </div>

                <video controls>
                    <source src="<?=$video["video"]?>" type="video/mp4">
                </video>
            </div>

            <!-- <div class="ligne-verticale"></div> -->

            <div class="section-droite">
                <h2>Les épisodes</h2>

                <?php foreach ($un_episode as $episode) {?>

                    <a href="<?=$episode["video"]?>" class="boutons encadres">
                        <div class="image">
                            <img src="<?=$episode["image"]?>" alt="image/épisode<?=$episode["numero_episode"]?>">
                        </div>
                        <div class="details-episodes">
                            <div class="titre-episode">
                                <h3><?=$episode["titre"]?></h3>
                            </div>
                            <div class="chaque-episode">
                                <div class="numero-episode">Épisode <?=$episode["numero_episode"]?></div>
                                <div class="date-episode"><?=$episode["date_parution"]?></div>
                                <div class="temps-episode"><?=$episode["temps"]?> mins</div>
                            </div>
                        </div>
                    </a>

                <?php }?>

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