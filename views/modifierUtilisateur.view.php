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
        <title>Utilisateurs/Administrateur</title>
    </head>
    <body class="accueil admin formulaire-admin">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <a href="episodes" class="boutons">Épisodes</a>
                    <a href="utilisateurs" class="bouton-actif-admin">Utilisateurs</a>
                    <a href="membres" class="boutons">Équipe</a>
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
            <h1>Utilisateurs</h1>
            <h2>Modifier les informations de <?=$mon_utilisateur["prenom"]?></h2>
            <div class="login ajout-form">
                <form action="ajout-utilisateur-submit" method="POST">
                    <span>Prénom</span>
                    <input type="text" name="prenom" value="<?=$mon_utilisateur["prenom"]?>" required>

                    <span>Nom</span>
                    <input type="text" name="nom" value="<?=$mon_utilisateur["nom"]?>" required>

                    <span>Courriel</span>
                    <input type="text" name="courriel" value="<?=$mon_utilisateur["courriel"]?>" required>

                    <span>Mot de passe <strong>(choisir à nouveau)</strong></span>
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" value="Modifier">

                    <?php if (isset($_GET['erreur'])) {?>
                        <div class="erreur">
                            <p>
                                Un erreur s'est produite lors de la création de l'utilisateur.
                            </p>
                        </div>
                    <?php }?>
                </form>
            </div>

        </main>

    </body>
</html>
