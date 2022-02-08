<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Équipe de production</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="accueil admin formulaire-admin">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <a href="episodes" class="boutons">Épisodes</a>
                    <a href="utilisateurs" class="boutons">Utilisateurs</a>
                    <a href="membres" class="bouton-actif-admin">Équipe</a>
                </div>
                <div class="logo-nav">
                    <a href="#"><img src="public/images/logo-cinema-fait-maison-bleu.svg" alt=""></a>
                </div>
                <div class="boutons-droit">
                    <div class="bouton-transparent"></div>
                    <a href="accueil" class="boutons">déconnexion</a>
                </div>
                <div class="gradient"></div>
            </nav>

        </header>

        <main class="conteneur">

            <h1>Équipe de production</h1>
            <h2>Modifier les propriétés de <?=$membre["prenom"]?></h2>
                <div class="login ajout-form">
                    <form action="modifier-membre-submit" method="POST"  enctype="multipart/form-data">

                        <span>Prénom</span>
                        <input type="text" name="prenom" value="<?=$membre["prenom"]?>" required>

                        <span>Nom</span>
                        <input type="text" name="nom" value="<?=$membre["nom"]?>" required>

                        <span>Poste</span>
                        <input type="text" name="poste" value="<?=$membre["poste"]?>" required>

                        <span>Courte description</span>
                        <textarea type="text" name="description" required><?=$membre["description"]?></textarea>

                        <span>Image du membre de l'équipe <strong>(choisir à nouveau)</strong></span>
                        <input type="file" name="photo" value="<?=$membre["photo"]?>" required>
                        <input type="hidden" name="id" value="<?=$membre["id"]?>">
                        <input type="submit" name="submit" value="Modifier">

                        <?php if (isset($_GET["erreur"])) {?>
                            <div>
                                <p>
                                    Une erreur est survenue lors de la modification du membre.
                                </p>
                            </div>
                        <?php }?>
                    </form>
                </div>

        </main>

    </body>
</html>
