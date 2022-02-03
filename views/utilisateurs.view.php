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
                    <a href="admin" class="boutons">Épisodes</a>
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
            <h2>Ajouter un utilisateur</h2>
            <div class="login ajout-form">
                <form action="ajout-utilisateur-submit" method="POST">
                    <input type="text" name="prenom" placeholder="Prénom">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="courriel" placeholder="Courriel">
                    <input type="text" name="mot_de_passe" placeholder="Mot de passe">
                    <input type="submit" name="submit" value="Inscription">

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
                            <a href="#" class="boutons bouton-modifier">Modifier</a>
                            <a href="supprimer-utilisateur?id=<?=$user["id"]?>" class="boutons bouton-supprimer">Supprimer</a>
                        </div>
                    </div>
                <?php }?>
            </div>

        </main>

    </body>
</html>
