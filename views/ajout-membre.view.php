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
        <title>Membre de l'équipe</title>
    </head>
    <body class="accueil admin formulaire-admin">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <a href="admin" class="boutons bouton-gauche1">Épisodes</a>
                    <a href="ajout-utilisateur" class="boutons bouton-gauche2">Utilisateurs</a>
                    <a href="ajout-membre" class="boutons bouton-gauche3">Membres</a>
                </div>
                <div class="logo-nav">
                    <a href="#"><img src="public/images/logo-cinema-fait-maison-bleu.svg" alt=""></a>
                </div>
                <div class="boutons-droit">
                    <div class="bouton-transparent"></div>
                    <a href="accueil" class="boutons bouton-droit1">déconnexion</a>
                </div>
                <div class="gradient"></div>
            </nav>
        </header>

        <main class="conteneur">
            <h1>Membres</h1>
            <h2>Ajouter un membre à l'équipe</h2>
            <div class="login ajout-form">
                <form action="#" method="POST">
                    <input type="text" name="prenom" placeholder="Prénom">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="courriel" placeholder="Courriel">
                    <input type="text" name="mot_de_passe" placeholder="Mot de passe">
                    <input type="submit" name="submit" value="Inscription">
                </form>
            </div>

            <div class="section-bas">
                <h2>Membres de l’équipe de production</h2>
                <div class="encadres">
                    <div class="image">
                        <img src="public/images/episode1.jpg" alt="">
                    </div>
                    <div class="nom-titre">
                        <div class="nom-membres">
                            <h3>Alain Thériault</h3>
                        </div>
                        <div class="titre-membres">
                            <p>Producteur / Réalisateur</p>
                        </div>
                    </div>
                    <div class="description-membres">
                        <p>Etiam id ante a nibh viverra imperdiet. Phasellus sed finibus erat. Donec sagittis viverra libero, ultrices facilisis augue fringilla id. Curabitur euismod euismod sem, nec commodo mauris euismod at. Nullam quis consequat nulla.</p>
                    </div>
                    <div class="boutons-encadres">
                        <a href="#" class="boutons bouton-modifier">Modifier</a>
                        <a href="#" class="boutons bouton-supprimer">Supprimer</a>
                    </div>
                </div>

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
