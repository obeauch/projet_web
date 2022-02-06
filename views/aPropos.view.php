<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>À propos</title>
        <?php include "parts/head.php"?>
    </head>
    <body class="a-propos">

        <header>
            <?php include "parts/nav.php"?>
        </header>

        <main class="conteneur">
            <h1>À propos de Cinéma fait maison</h1>

            <div class="encadres texte-a-propos">
                <p>
                Depuis maintenant 20 ans, Cinéma fait maison contribue au développement culturel du Québec en faisant la production de Maecenas vitae nunc in lorem vehicula vulputate. Sed placerat tellus sed tortor elementum, eget placerat nunc suscipit. Aenean eget tortor at turpis pellentesque egestas. Nulla mauris leo, elementum id purus facilisis, imperdiet fringilla velit. Nam eu dignissim quam. In sit amet arcu tortor. Duis ligula purus, hendrerit vitae massa nec, sollicitudin tristique odio. Curabitur malesuada consectetur ultricies.
                <br>
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum officia corrupti voluptatibus vel laudantium cum eius dolorem officiis minus maiores sunt voluptate repellat, reiciendis quam? Voluptatibus nesciunt placeat suscipit tempora?
                <br>
                <br>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quia dignissimos cumque inventore ex praesentium exercitationem officia, tempora nemo, vero voluptatum nihil laudantium. Minima voluptas, mollitia totam ullam laboriosam dolores!
                </p>
            </div>

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
                    </div>
                </div>
            <?php }?>

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