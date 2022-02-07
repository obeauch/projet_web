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
            <nav>
                <div class="boutons-gauche">
                    <a href="accueil" class="boutons">Accueil</a>
                    <a href="videos?numero_episode=1" class="boutons">Vidéos</a>
                    <a href="a-propos" class="bouton-actif-client">À propos</a>
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

        <?php include "parts/footer.php"?>
    </body>
</html>