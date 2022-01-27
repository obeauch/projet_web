<?php

require_once "bases/BaseController.php";

class SiteController extends BaseController
{
    public function accueil()
    {
        include "views/accueil.view.php";
    }

    public function login()
    {
        include "views/login.view.php";
    }

    public function aPropos()
    {
        include "views/aPropos.view.php";
    }

    public function infolettre()
    {
        include "views/infolettre.view.php";
    }
}
