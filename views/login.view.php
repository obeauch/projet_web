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
        <title>Login</title>
    </head>
    <body class="formulaire">

        <header>
            <nav>
                <div class="boutons-gauche">
                    <div class="boutons bouton-gauche1">
                        <a href="accueil">Accueil</a>
                    </div>
                    <div class="boutons bouton-gauche2">
                        <a href="a-propos">À propos</a>
                    </div>
                </div>
                <div class="logo-nav">
                    <a href="#"><img src="public/images/logo-cinema-fait-maison-bleu.svg" alt=""></a>
                </div>
                <div class="boutons-droit">
                    <div class="bouton-transparent"></div>
                    <div class="boutons bouton-droit1">
                        <a href="infolettre">Infolettre</a>
                    </div>
                </div>
                <div class="gradient"></div>
            </nav>
        </header>

        <main class="conteneur">
            <h1>Connectez-vous à votre compte administrateur</h1>
            <div class="login login-form">
                <form action="#" method="POST">
                    <input type="text" name="courriel" placeholder="Courriel">
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe">
                    <input type="submit" name="submit" value="Connexion">
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
