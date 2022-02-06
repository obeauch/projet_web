<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Infolettre</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="formulaire">

        <header>
            <?php include "parts/nav.php"?>
        </header>

        <main class="conteneur">
            <h1>Inscrivez-vous à notre infolettre</h1>
            <div class="login login-form">
                <form action="ajout-infolettre-submit" method="POST">
                    <input type="text" name="prenom" placeholder="Prénom" required>
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="email" name="courriel" placeholder="Courriel"required>
                    <input type="submit" name="submit" value="Inscription">

                    <?php if (isset($_GET['erreur'])) {?>
                        <div>
                            <p>
                                Une erreur est survenue.
                            </p>
                        </div>
                    <?php }?>
                    <?php if (isset($_GET['reussi'])) {?>
                        <div>
                            <p>
                                Bravo, votre inscription à l'infolettre à réussie!
                            </p>
                        </div>
                    <?php }?>
                </form>
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
