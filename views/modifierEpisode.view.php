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
                    <a href="admin" class="bouton-actif-admin">Épisodes</a>
                    <a href="utilisateurs" class="boutons">Utilisateurs</a>
                    <a href="membres" class="boutons">Membres</a>
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
            <h1>Épisodes</h1>
            <h2>Ajouter un épisode à la série</h2>
            <div class="login ajout-form">
                <form action="ajout-episode-submit" method="POST" enctype="multipart/form-data">
                    <input type="text" name="titre" placeholder="Titre">
                    <textarea type="text" name="description" placeholder="Courte description"></textarea>
                    <input type="number" name="numero_episode" min="1" max="200" placeholder="Numéro d'épisode">

                    <span>date de parution</span><input type="date" name="date_parution" placeholder="Date de parution">

                    <input type="number" name="temps" min="1" max="100" placeholder="Durée de l'épisode en minutes">

                        <span>Image démonstrative de l'épisode</span>
                        <input type="file" name="image">


                        <span>Vidéo de l'épisode</span>
                        <input type="file" name="video" accept="video/*">

                    <input type="submit" name="submit" value="Ajouter">
                </form>
            </div>

        </main>

    </body>
</html>
