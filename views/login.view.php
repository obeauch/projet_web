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
            <?php include "parts/nav.php"?>
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
                                Les information de connexion fournis, sont inexactes.
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
                <a href="login" class="bouton-actif-admin-footer">Connexion Admin</a>
            </div>
            <div class="logos-reseaux">
                <a href="https://fr-ca.facebook.com/"><img src="public/images/logo-facebook-bleu.svg" alt=""></a>
                <a href="https://fr.linkedin.com/"><img src="public/images/logo-linked-bleu.svg" alt=""></a>
            </div>
        </footer>
    </body>
</html>
