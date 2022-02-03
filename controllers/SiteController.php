<?php

require_once "bases/BaseController.php";
require_once "models/Administrateurs.php";
require_once "models/Episodes.php";
require_once "models/Infolettres.php";
require_once "models/Membres.php";
require_once "models/Utilisateurs.php";
require_once "utils/Upload.php";

class SiteController extends BaseController
{

    //Affiche la page accueil
    public function accueil()
    {
        // $d = "2022-01-14";
        // $d_chiffre = strtotime($d);

        // echo date("j", $d_chiffre);
        // n avec tableau [janvier, février, mars,...]
        // exit();
        $les_episodes = new Episodes();
        $episodes = $les_episodes->ordreEpisodes();

        include "views/accueil.view.php";
    }

    //Affiche la page apropos avec les membres provenants de bdd
    public function aPropos()
    {
        $membres_model = new Membres();
        $posts = $membres_model->tous();

        include "views/aPropos.view.php";
    }

    //Affiche la page des vidéos
    public function videos()
    {
        $les_episodes = new Episodes();
        $un_episode = $les_episodes->ordreEpisodes();

        include "views/videos.view.php";

    }

    public function videosAccueil()
    {

        $les_episodes = new Episodes();
        $un_episode = $les_episodes->ordreEpisodes();

        $id = $_GET["episode_id"];

        $episodes_model = new Episodes();
        $mon_video = $episodes_model->parId($id);

        include "views/videosAccueil.view.php";
    }

    //Affiche page de connexion vers admin
    public function login()
    {
        include "views/login.view.php";
    }

    //Connexion admin et Utilisateurs
    public function loginSubmit()
    {
        $estEnvoye = isset($_POST["submit"]);

        if ($estEnvoye) {
            $courriel = $_POST["courriel"];
            $mot_de_passe = $_POST["mot_de_passe"];

            $administrateur = new Administrateurs();
            $utilisateur = new Utilisateurs();
            $success = $administrateur->verifierConnexionAdmin($courriel, $mot_de_passe) || $utilisateur->verifierConnexionUser($courriel, $mot_de_passe);

            if ($success) {
                // redirigé vers feed
                header("location:admin");
            } else {
                header("location:login?erreur=1");
                exit();
            }

        } else {
            header("location:login?erreur=1");
            exit();
        }

    }

    //Affiche page admin(episodes) avec les épisodes ajoutées en ordre d'épisodes
    public function admin()
    {
        $les_episodes = new Episodes();
        $episodes = $les_episodes->ordreEpisodes();

        include "views/admin.view.php";
    }

    //Affiche la page d'inscription à l'infolettre
    public function infolettre()
    {
        include "views/infolettre.view.php";
    }

    /**
     * POST de création d'un client à l'infolettre
     * Ne sera pas visible
     */
    public function ajoutInfolettreSubmit()
    {
        // Vérifier si c'est envoyé
        $formEnvoye = isset($_POST["submit"]);

        // Récupère
        if ($formEnvoye) {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $courriel = $_POST["courriel"];

            // Appelle le modèle avec une méthode creer
            $infolettre = new Infolettres();
            $success = $infolettre->creer($prenom, $nom, $courriel);

            if ($success) {
                header("location:infolettre?reussi=1");
                exit();
            } else {
                header("location:infolettre?erreur=1");
                exit();
            }

        } else {
            header("location:infolettre?erreur=1");
            exit();
        }

        exit();
    }

    //affiche page membres, permet d'afficher tout ce qui est dans table membres (bdd)
    public function membres()
    {
        $membres_model = new Membres();
        $posts = $membres_model->tous();

        include "views/membres.view.php";
    }

    /**
     * POST de création d'un membre
     * Ne sera pas visible
     */
    public function ajoutMembreSubmit()
    {
        // Vérifier si c'est envoyé
        $formEnvoye = isset($_POST["submit"]);

        // Récupère
        if ($formEnvoye) {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $poste = $_POST["poste"];
            $description = $_POST["description"];

            $upload = new Upload("photo");
            $photo = $upload->placerDans("public/uploads/images");

            // Appelle le modèle avec une méthode creer
            $membre = new Membres();
            $success = $membre->creer($prenom, $nom, $poste, $description, $photo);

            if ($success) {
                header("location:membres");
                exit();
            } else {
                header("location:membres?erreur=1");
                exit();
            }

        } else {
            header("location:membres?erreur=1");
            exit();
        }

        exit();
    }

    public function supprimerMembre()
    {

        // Id de l'utilisateur à supprimer
        $id = $_GET['id'];

        $membres = new Membres();
        $membre = $membres->deleteMembre($id);

        header("location:membres");
        exit();
    }

    public function modifierMembre()
    {
        $id = $_GET["membre_id"];

        $les_membres = new Membres();
        $membre = $les_membres->parId($id);

        include "views/modifierEpisode.view.php";
    }

    public function modifierMembreSubmit()
    {
        // Vérifier si c'est envoyé
        $formEnvoye = isset($_POST["submit"]);

        // Récupère
        if ($formEnvoye) {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $poste = $_POST["poste"];
            $description = $_POST["description"];

            $upload = new Upload("photo");
            $photo = $upload->placerDans("public/uploads/images");

            // Appelle le modèle avec une méthode creer
            $membre = new Membres();
            $success = $membre->creer($prenom, $nom, $poste, $description, $photo);

            if ($success) {
                header("location:membres");
                exit();
            } else {
                header("location:membres?erreur=1");
                exit();
            }

        } else {
            header("location:membres?erreur=1");
            exit();
        }

        exit();
    }

    public function episode()
    {

        include "views/admin.view.php";
    }

    /**
     * POST de création d'une épisode
     * Ne sera pas visible
     */
    public function ajoutEpisodeSubmit()
    {
        // Si le form est envoyé
        if (isset($_POST["submit"])) {
            $titre = $_POST["titre"];
            $numero_episode = $_POST["numero_episode"];
            $date_parution = $_POST["date_parution"];
            $temps = $_POST["temps"];
            $description = $_POST["description"];

            // Déplace le fichier uploader et retourne le chemin
            $upload_image = new Upload("image");
            $image = $upload_image->placerDans("public/uploads/images");

            // Déplace le fichier uploader et retourne le chemin
            $upload_video = new Upload("video");
            $video = $upload_video->placerDans("public/uploads/videos");

            // Fait le insert à l'aide du model
            $episode = new Episodes();
            $success = $episode->creer($titre, $numero_episode, $date_parution, $temps, $description, $image, $video);

            // Si le insert a fonctionné, retourne vers la page admin
            if ($success) {
                header("location:admin");
                exit();
            } else {
                // Sinon, retourne quand même vers la page admin, mais avec le paramètre GET erreur
                header("location:admin?erreur=1");
                exit();
            }
        } else {
            // Si le form n'a pas été envoyé correctement, retourne sur admin avec une erreur
            header("location:admin?erreur=1");
            exit();
        }
    }

    public function modifierEpisode()
    {
        $id = $_GET["episode_id"];

        $les_episodes = new Episodes();
        $mon_episode = $les_episodes->parId($id);

        include "views/modifierEpisode.view.php";
    }

    public function modifierEpisodeSubmit()
    {
        // Si le form est envoyé
        if (isset($_POST["submit"])) {
            $id = $_POST["id"];
            $titre = $_POST["titre"];
            $numero_episode = $_POST["numero_episode"];
            $date_parution = $_POST["date_parution"];
            $temps = $_POST["temps"];
            $description = $_POST["description"];

            // Déplace le fichier uploader et retourne le chemin
            $upload_image = new Upload("image");
            $image = $upload_image->placerDans("public/uploads/images");

            // Déplace le fichier uploader et retourne le chemin
            $upload_video = new Upload("video");
            $video = $upload_video->placerDans("public/uploads/videos");

            // Fait la modification à l'aide du model
            $episode = new Episodes();
            $success = $episode->modificationEpisode($id, $titre, $numero_episode, $date_parution, $temps, $description, $image, $video);

            // Si le insert a fonctionné, retourne vers la page admin
            if ($success) {
                header("location:admin");
                exit();
            } else {
                // Sinon, retourne quand même vers la page admin, mais avec le paramètre GET erreur
                header("location:admin?erreur=1");
                exit();
            }
            // } else {
            //     // Si le form n'a pas été envoyé correctement, retourne sur admin avec une erreur
            //     header("location:admin?erreur=1");
            //     exit();
        }
    }

    //Page utilisateur, permet d'afficher les détails de la bdd
    public function utilisateurs()
    {
        $utilisateurs_model = new Utilisateurs();
        $users = $utilisateurs_model->tous();

        include "views/utilisateurs.view.php";
    }

    /**
     * POST de création de compte utilisateur
     * Ne sera pas visible
     */
    public function ajoutUtilisateurSubmit()
    {
        // Si le form est envoyé
        if (isset($_POST["submit"])) {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $courriel = $_POST["courriel"];

            // Le mot de passe est encrypter ici avec password_hash
            $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);

            // Fait le insert à l'aide du model
            $utilisateur = new Utilisateurs();
            $success = $utilisateur->creerUser($prenom, $nom, $courriel, $mot_de_passe);

            // Si le insert s'est bien passé, retourne vers l'accueil (connexion)
            if ($success) {
                header("location:utilisateurs");
                exit();
            } else {
                // S'il y a eu une erreur, on retourne vers le formulaire d'inscription
                header("location:utilisateurs?erreur=1");
                exit();
            }

        } else {
            // Si le form n'a pas été envoyé, on retourne vers le form d'inscription
            header("location:utilisateurs?erreur=1");
            exit();
        }

    }

    /**
     * Supprime un ou plusieurs utilisateurs
     * À partir de route supprimer-utilisateur
     */
    public function supprimerUtilisateur()
    {

        // Id de l'utilisateur à supprimer
        $id = $_GET['id'];

        $utilisateurs = new Utilisateurs();
        $utilisateur = $utilisateurs->deleteUtilisateur($id);

        header("location:utilisateurs");
        exit();
    }
}
