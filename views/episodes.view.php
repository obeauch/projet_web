<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil-admin</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="accueil admin formulaire-admin">

        <header>
            <?php include "parts/nav_admin.php"?>
        </header>

        <main class="conteneur">
            <h1>Épisodes</h1>
            <h2>Ajouter un épisode à la série</h2>
            <div class="login ajout-form">
                <form action="ajout-episode-submit" method="POST" enctype="multipart/form-data">
                    <input type="text" name="titre" placeholder="Titre" required>
                    <textarea type="text" name="description" placeholder="Courte description" required></textarea>
                    <input type="number" name="numero_episode" min="1" max="200" placeholder="Numéro d'épisode" required>

                    <span>date de parution</span><input type="date" name="date_parution" placeholder="Date de parution" required>

                    <input type="number" name="temps" min="1" max="100" placeholder="Durée de l'épisode en minutes" required>

                        <span>Image démonstrative de l'épisode</span>
                        <input type="file" name="image" required>


                        <span>Vidéo de l'épisode</span>
                        <input type="file" name="video" accept="video/*" required>


                    <input type="submit" name="submit" value="Ajouter">

                    <?php if (isset($_GET['erreur'])) {?>
                        <div class="erreur">
                            <p>
                                Un erreur s'est produite lors de la création de l'épisode.
                            </p>
                        </div>
                    <?php }?>
                </form>
            </div>


            <div class="section-bas">
                <h2>Liste des épisodes</h2>
                <?php foreach ($episodes as $episode) {?>
                    <div class="encadres">
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
                            <div class="description-episode">
                                <p><?=$episode["description"]?></p>
                            </div>
                        </div>
                        <a href="modifier-episode?episode_id=<?=$episode["id"]?>"  class="boutons bouton-modifier">Modifier</a>
                    </div>
                <?php }?>
            </div>
        </main>

    </body>
</html>
