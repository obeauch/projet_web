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
            <h2>Ajouter un membre à l'équipe</h2>
            <div class="login ajout-form">
                <form action="ajout-membre-submit" method="POST"  enctype="multipart/form-data">
                    <input type="text" name="prenom" placeholder="Prénom">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="poste" placeholder="Poste">
                    <textarea type="text" name="description" placeholder="Courte description du nouveau membre"></textarea>
                    <input type="file" name="photo" placeholder="Photo">
                    <input type="submit" name="submit" value="Ajouter">

                    <?php if (isset($_GET['erreur'])) {?>
                        <div>
                            <p>
                                Une erreur est survenue.
                            </p>
                        </div>
                    <?php }?>
                </form>
            </div>

            <div class="section-bas">
                <h2>Membres de l’équipe de production</h2>
                <?php foreach ($posts as $post) {?>
                    <div class="encadres">
                        <div class="image">
                            <img src="<?=$post["photo"]?>" alt="">
                        </div>
                        <div class="nom-titre">
                            <div class="nom-membres">
                                <h3><?=$post["prenom"]?> <?=$post["nom"]?></h3>
                            </div>
                            <div class="titre-membres">
                                <p><?=$post["poste"]?></p>
                            </div>
                        </div>
                        <div class="description-membres">
                            <p><?=$post["description"]?></p>
                            <p hidden><?=$post["id"]?></p>
                        </div>
                        <div class="boutons-encadres">
                            <a href="modifier-membre?membre_id=<?=$post["id"]?>" class="boutons bouton-modifier">Modifier</a>
                            <a href="supprimer-membre?membre_id=<?=$post["id"]?>" class="boutons bouton-supprimer">Supprimer</a>
                        </div>
                    </div>
                <?php }?>

            </div>
        </main>

        <!-- <footer>
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
        </footer> -->
    </body>
</html>
