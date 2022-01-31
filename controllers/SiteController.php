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
    public function accueil()
    {
        include "views/accueil.view.php";
    }

    public function aPropos()
    {
        $membres_model = new Membres();
        $posts = $membres_model->tous();
        include "views/aPropos.view.php";
    }

    public function video()
    {
        include "views/video.view.php";
    }

    public function login()
    {
        include "views/login.view.php";
    }

    public function loginSubmit()
    {
        $estEnvoye = isset($_POST["submit"]);

        if ($estEnvoye) {
            $courriel = $_POST["courriel"];
            $mot_de_passe = $_POST["mot_de_passe"];

            $administrateur = new Administrateurs();
            $success = $administrateur->verifierConnexion($courriel, $mot_de_passe);

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

    public function admin()
    {
        include "views/admin.view.php";
    }

    public function infolettre()
    {
        include "views/infolettre.view.php";
    }

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

    public function ajoutMembre()
    {
        $membres_model = new Membres();
        $posts = $membres_model->tous();
        include "views/ajout-membre.view.php";
    }

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
            $photo = $upload->placerDans("public/uploads");

            // Appelle le modèle avec une méthode creer
            $membre = new Membres();
            $success = $membre->creer($prenom, $nom, $poste, $description, $photo);

            if ($success) {
                header("location:ajout-membre");
                exit();
            } else {
                header("location:ajout-membre?erreur=1");
                exit();
            }

        } else {
            header("location:ajout-membre?erreur=1");
            exit();
        }

        exit();
    }

    public function ajoutEpisode()
    {
        include "views/ajout-episode.view.php";
    }
    public function ajoutUtilisateur()
    {
        include "views/ajout-utilisateur.view.php";
    }
}
