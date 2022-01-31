<?php

require_once "bases/BaseController.php";

class SiteController extends BaseController
{
    public function accueil()
    {
        include "views/accueil.view.php";
    }

    public function aPropos()
    {
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

    // public function loginSubmit()
    // {
    //     $estEnvoye = isset($_POST["submit"]);

    //     if ($estEnvoye) {
    //         $courriel = $_POST["courriel"];
    //         $mot_de_passe = $_POST["mot_de_passe"];

    //         $administrateur = new Administrateurs();
    //         $success = $administrateur->verifierConnexion($courriel, $mot_de_passe);

    //         if ($success) {
    //             // redirigé vers feed
    //             header("location:admin");
    //         } else {
    //             header("location:login?erreur=1");
    //             exit();
    //         }

    //     } else {
    //         header("location:login?erreur=1");
    //         exit();
    //     }
    // }

    public function admin()
    {
        include "views/admin.view.php";
    }

    public function infolettre()
    {
        include "views/infolettre.view.php";
    }

    public function ajoutMembre()
    {
        include "views/ajout-membre.view.php";
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
