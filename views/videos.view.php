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
            <nav>
                <div class="boutons-gauche">
                    <a href="accueil" class="boutons">Accueil</a>
                    <a href="videos?numero_episode=1" class="bouton-actif-client">Vidéos</a>
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
        </header>

        <main class="conteneur">

            <div class="section-gauche">
                <div class="details-episodes">
                    <div class="titre-episode">
                        <h2><?=$mon_video["titre"]?></h2>
                    </div>
                    <div class="chaque-episode">
                        <div class="numero-episode">Épisode <?=$mon_video["numero_episode"]?></div>
                        <div class="date-episode"><?=$this->dates($mon_video["date_parution"])?></div>
                        <div class="temps-episode"><?=$mon_video["temps"]?> mins</div>
                    </div>
                </div>

                <video controls>
                    <source src="<?=$mon_video["video"]?>" type="video/mp4">
                </video>
            </div>

            <div class="section-droite">
                <h2>Les épisodes</h2>

                <div class="liens-videos">
                    <?php foreach ($un_episode as $episode) {?>

                        <a href="videos?numero_episode=<?=$episode["numero_episode"]?>" class="boutons encadres">
                            <div class="image">
                                <img src="<?=$episode["image"]?>" alt="image/épisode<?=$episode["numero_episode"]?>">
                            </div>
                            <div class="details-episodes">
                                <div class="titre-episode">
                                    <h3><?=$episode["titre"]?></h3>
                                </div>
                                <div class="chaque-episode">
                                    <div class="numero-episode">Épisode <?=$episode["numero_episode"]?></div>
                                    <div class="date-episode"><?=$this->dates($episode["date_parution"])?></div>
                                    <div class="temps-episode"><?=$episode["temps"]?> mins</div>
                                </div>
                            </div>
                        </a>

                    <?php }?>

                </div>

            </div>

        </main>

        <?php include "parts/footer.php"?>
    </body>
</html>