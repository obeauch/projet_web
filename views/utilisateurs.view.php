<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Utilisateurs/Administrateur</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="accueil admin formulaire-admin">

        <header>
            <?php include "parts/nav_admin.php"?>
        </header>

        <main class="conteneur">
            <h1>Utilisateurs</h1>
            <h2>Ajouter un utilisateur</h2>
            <div class="login ajout-form">
                <form action="ajout-utilisateur-submit" method="POST">
                    <input type="text" name="prenom" placeholder="Prénom">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="courriel" placeholder="Courriel">
                    <input type="text" name="mot_de_passe" placeholder="Mot de passe">
                    <input type="submit" name="submit" value="Ajouter">

                    <?php if (isset($_GET['erreur'])) {?>
                        <div class="erreur">
                            <p>
                                Un erreur s'est produite lors de la création de l'utilisateur.
                            </p>
                        </div>
                    <?php }?>
                </form>
            </div>

            <div class="section-bas">
                <h2>Liste des utilisateurs</h2>

                <?php foreach ($users as $user) {?>
                    <div class="encadres">
                        <div class="utilisateur">
                            <div class="nom-utilisateur">
                                <h3><?=$user["prenom"]?> <?=$user["nom"]?></h3>
                            </div>
                            <div class="courriel-utilisateur">
                                <p><?=$user["courriel"]?></p>
                                <p hidden><?=$user["id"]?></p>
                            </div>
                        </div>
                        <div class="boutons-encadres">
                            <a href="modifier-utilisateur?utilisateur_id=<?=$user["id"]?>" class="boutons bouton-modifier">Modifier</a>
                            <a href="supprimer-utilisateur?utilisateur_id=<?=$user["id"]?>" class="boutons bouton-supprimer">Supprimer</a>
                        </div>
                    </div>
                <?php }?>
            </div>

        </main>

    </body>
</html>
