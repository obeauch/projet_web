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
        <title>Accueil-admin</title>
    </head>
    <body class="accueil admin formulaire-admin">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <div class="boutons bouton-gauche3">
                        <a href="admin">Épisodes</a>
                    </div>
                    <div class="boutons bouton-gauche1">
                        <a href="ajout-utilisateur">Utilisateurs</a>
                    </div>
                    <div class="boutons bouton-gauche2">
                        <a href="ajout-membre">Membres</a>
                    </div>
                </div>
                <div class="logo-nav">
                    <a href="#"><img src="public/images/logo-cinema-fait-maison-bleu.svg" alt=""></a>
                </div>
                <div class="boutons-droit">
                    <div class="bouton-transparent"></div>
                    <div class="boutons bouton-droit1">
                        <a href="accueil">déconnexion</a>
                    </div>
                </div>
                <div class="gradient"></div>
            </nav>
        </header>

        <main class="conteneur">
            <h1>Épisodes</h1>
            <h2>Ajouter un épisode à la série</h2>
            <div class="login ajout-form">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <input type="text" name="titre" placeholder="Titre">
                    <textarea type="text" name="description" placeholder="Courte description"></textarea>
                    <input type="text" name="numero_episode" placeholder="Numéro d'épisode">
                    <input type="text" name="date_publication" placeholder="Date de publication">
                    <input type="text" name="duree_episode" placeholder="Durée de l'épisode">
                    <input type="file" name="image">
                    <input type="submit" name="submit" value="Ajouter">
                </form>
            </div>


            <div class="section-bas">
                <h2>Liste des épisodes</h2>
                <div class="encadres">
                    <div class="image-episode">
                        <img src="public/images/episode1.jpg" alt="">
                    </div>
                    <div class="details-episodes">
                        <div class="titre-episode">
                            <h3>Le choc</h3>
                        </div>
                        <div class="chaque-episode">
                            <div class="numero-episode">Épisode 1</div>
                            <div class="date-episode">7 février 2022</div>
                            <div class="temps-episode">9 mins</div>
                        </div>
                        <div class="description-episode">
                            <p>Le mariage est ruiné par l’annonce du gouvernement morbi rutrum id enim ac mattis. Etiam id ante a nibh viverra imperdiet. Phasellus sed finibus erat. Donec sagittis viverra libero, ultrices facilisis augue fringilla id. Curabitur euismod euismod sem, nec commodo mauris euismod at. Nullam quis consequat nulla.</p>
                        </div>

                    </div>
                    <div class="boutons bouton-modifier">
                        <a href="#">Modifier</a>

                    </div>
                </div>
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
