<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="formulaire">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <a href="accueil" class="boutons">Accueil</a>
                    <a href="videos?numero_episode=1" class="boutons">Vidéos</a>
                    <a href="a-propos" class="boutons">À propos</a>
                </div>

                <div class="logo-nav">
                    <a href="accueil"><img src="public/images/logo-cinema-fait-maison-bleu.svg" alt=""></a>
                </div>

                <div class="boutons-droit">
                    <div class="bouton-transparent"></div>
                    <a href="infolettre" class="boutons">Infolettre</a>
                </div>
                <div class="gradient"></div>
            </nav>
        </header>

        <main class="conteneur">
            <h1>Connectez-vous à votre compte administrateur</h1>
            <div class="login login-form">
                <form action="login-submit" method="POST">
                    <input type="text" name="courriel" placeholder="Courriel" required>
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" value="Connexion">

                    <?php if (isset($_GET['erreur'])) {?>
                        <div class="erreur">
                            <p>
                                Les informations de connexion fournis, sont inexactes.
                            </p>
                        </div>
                    <?php }?>
                </form>

            </div>
        </main>

        <?php include "parts/footer.php"?>
    </body>
</html>
