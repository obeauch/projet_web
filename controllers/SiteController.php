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

    //Affiche la page accueil détruit la session lorsqu'on y accède
    public function accueil()
    {
        session_destroy();
        session_start(); //

        //Les épisodes en ordre de numero_episode
        $les_episodes = new Episodes();
        $episodes = $les_episodes->ordreEpisodes();

        $les_videos = new Episodes();
        $video = $les_videos->tous();

        include "views/accueil.view.php";

    }

    // Fonction qui réécrie les dates en français
    public function dates($d)
    {

        $d_chiffre = strtotime($d);
        $mois_francais = ["Janvier ", "Février ", "Mars ", "Avril ", "Mai ", "Juin ", "Juillet ", "Août ", "Septembre ", "Octobre ", "Novembre ", "Décembre "];

        $jour = date("j ", $d_chiffre);
        $mois = $mois_francais[date("n ", $d_chiffre) - 1];
        $annee = date("Y ", $d_chiffre);

        $date = $jour . " " . $mois . " " . $annee;

        return $date;
    }

    //Affiche la page apropos avec les membres provenants de bdd
    public function aPropos()
    {
        $membres_model = new Membres();
        $posts = $membres_model->tous();

        include "views/aPropos.view.php";
    }

    public function videos()
    {

        $les_episodes = new Episodes();
        $un_episode = $les_episodes->ordreEpisodes();

        $numero = $_GET["numero_episode"];

        $episodes_model = new Episodes();
        $mon_video = $episodes_model->parNumeroEpisode($numero);

        include "views/videos.view.php";
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
                header("location:episodes");
            } else {
                header("location:login?erreur=1");
                exit();
            }

        } else {
            header("location:login?erreur=1");
            exit();
        }

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

    // Vérifie si un admin ou useradmin est connecté
    public function estConnecte()
    {
        //Si useradmin ou administrateur est connecté (session), accède à la page
        $connect = isset($_SESSION["administrateur_id"]) || isset($_SESSION["useradmin_id"]);

        // Si pas connecté, redirige vers page accueil avec erreur donc session vidé du même coup
        if (!$connect) {
            header("location:accueil?erreur=1");
            exit();
        }
    }

    //affiche page membres, permet d'afficher tout ce qui est dans table membres (bdd)
    public function membres()
    {
        //Vérifie si connecté avec fonction plus haut du controller
        $this->estConnecte();

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
        $id = $_GET['membre_id'];

        $membres = new Membres();
        $membre = $membres->delete($id);

        header("location:membres");
        exit();
    }

    public function modifierMembre()
    {
        //Vérifie si connecté avec fonction plus haut du controller
        $this->estConnecte();

        $id = $_GET["membre_id"];

        $les_membres = new Membres();
        $membre = $les_membres->parId($id);

        include "views/modifierMembre.view.php";
    }

    public function modifierMembreSubmit()
    {

        // Récupère
        if (isset($_POST["submit"])) {
            $id = $_POST["id"];
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $poste = $_POST["poste"];
            $description = $_POST["description"];

            $upload = new Upload("photo");
            $photo = $upload->placerDans("public/uploads/images");

            // Appelle le modèle avec une méthode creer
            $membre = new Membres();
            $success = $membre->modificationMembre($id, $prenom, $nom, $poste, $description, $photo);

            if ($success) {
                header("location:membres");
                exit();
            } else {
                header("location:modifierMembre?erreur=1");
                exit();
            }

        } else {
            header("location:modifierMembre?erreur=1");
            exit();
        }

        exit();
    }

    //Affiche page admin(episodes) avec les épisodes ajoutées en ordre d'épisodes
    public function episodes()
    {
        //Vérifie si connecté avec fonction plus haut du controller
        $this->estConnecte();

        $les_episodes = new Episodes();
        $episodes = $les_episodes->ordreEpisodes();

        include "views/episodes.view.php";
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

            // Si le insert a fonctionné, retourne vers la page episodes
            if ($success) {
                header("location:episodes");
                exit();
            } else {
                // Sinon, retourne vers la page episodes, mais avec le paramètre GET erreur
                header("location:episodes?erreur=1");
                exit();
            }
        } else {
            // Si le form n'a pas été envoyé correctement, retourne sur episodes avec une erreur
            header("location:episodes?erreur=1");
            exit();
        }
    }

    public function modifierEpisode()
    {

        //Vérifie si connecté avec fonction plus haut du controller
        $this->estConnecte();

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
                header("location:episodes");
                exit();
            } else {
                // Sinon, retourne vers la page modifierEpisode, mais avec le paramètre GET erreur
                header("location:modifierEpisode?erreur=1");
                exit();
            }

        } else {
            // Si le form n'a pas été envoyé correctement, retourne sur admin avec une erreur
            header("location:modifierEpisode?erreur=1");
            exit();
        }
    }

    /**
     * Supprime un ou plusieurs utilisateurs
     * À partir de route supprimer-utilisateur
     */
    public function supprimerEpisode()
    {

        // Id de l'utilisateur à supprimer
        $id = $_GET['episode_id'];

        $episodes = new Episodes();
        $episode = $episodes->delete($id);

        header("location:episodes");
        exit();
    }

    //Page utilisateur, permet d'afficher les détails de la bdd
    public function utilisateurs()
    {
        //Vérifie si connecté avec fonction plus haut du controller
        $this->estConnecte();

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

            // Si le insert s'est bien passé, retourne vers la page utilisateurs
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

    public function modifierUtilisateur()
    {

        //Vérifie si connecté avec fonction plus haut du controller
        $this->estConnecte();

        $id = $_GET["utilisateur_id"];

        $les_utilisateurs = new Utilisateurs();
        $mon_utilisateur = $les_utilisateurs->parId($id);

        include "views/modifierUtilisateur.view.php";

    }

    public function modifierUtilisateurSubmit()
    {
        // Si le form est envoyé
        if (isset($_POST["submit"])) {
            $id = $_POST["id"];
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $courriel = $_POST["courriel"];

            // Le mot de passe est encrypter ici avec password_hash
            $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);

            // Fait la modification à l'aide du model
            $utilisateur = new Utilisateurs();
            $success = $utilisateur->modificationUtilisateur($id, $prenom, $nom, $courriel, $mot_de_passe);

            // Si le insert a fonctionné, retourne vers la page utilisateur
            if ($success) {
                header("location:utilisateurs");
                exit();
            } else {
                // Sinon, retourne vers la page modifierUtilisateur, mais avec le paramètre GET erreur
                header("location:modifierUtilisateur?erreur=1");
                exit();
            }

        } else {
            // Sinon, retourne vers la page modifierUtilisateur, mais avec le paramètre GET erreur
            header("location:modifierUtilisateur?erreur=1");
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
        $id = $_GET['utilisateur_id'];

        $utilisateurs = new Utilisateurs();
        $utilisateur = $utilisateurs->delete($id);

        header("location:utilisateurs");
        exit();
    }
}
