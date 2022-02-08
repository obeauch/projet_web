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
            <h2>Modifier l'épisode <?=$mon_episode["titre"]?></h2>

                <div class="login ajout-form">
                    <form action="modifier-episode-submit" method="POST" enctype="multipart/form-data">
                        <span>Titre</span><input type="text" name="titre" value="<?=$mon_episode["titre"]?>">
                        <span>Courte description</span><textarea type="text" name="description"><?=$mon_episode["description"]?></textarea>
                        <span>Numéro d'épisode</span><input type="number" name="numero_episode" min="1" max="200" value="<?=$mon_episode["numero_episode"]?>">

                        <span>Date de parution</span><input type="date" name="date_parution" value="<?=$mon_episode["date_parution"]?>">

                        <span>Durée en minutes</span><input type="number" name="temps" min="1" max="100" value="<?=$mon_episode["temps"]?>">

                        <span>Image démonstrative de l'épisode <strong>(choisir à nouveau)</strong></span>
                        <input type="file" name="image" required>

                        <span>Vidéo de l'épisode <strong>(choisir à nouveau)</strong></span>
                        <input type="file" name="video" accept="video/*" required>

                        <input type="hidden" name="id" value="<?=$mon_episode["id"]?>">

                        <input type="submit" name="submit" value="Modifier">


                        <?php if (isset($_GET['erreur'])) {?>
                            <div class="erreur">
                                <p>
                                    Une erreur s'est produite lors de la modification de l'épisode.
                                </p>
                            </div>
                        <?php }?>

                    </form>
                </div>

        </main>

    </body>
</html>
