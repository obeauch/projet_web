<?php

require_once "bases/BaseModel.php";

class Administrateurs extends BaseModel
{

    protected $table = "administrateurs";

    //Vérifie la connexion de l'administrateur
    public function verifierConnexionAdmin($courriel, $mdp)
    {
        // Lire le mot de passe du user avec le courriel
        $sql = "
            SELECT id, mot_de_passe
            FROM $this->table
            WHERE courriel = :courriel
        ";

        $stmt = $this->pdo()->prepare($sql);

        $stmt->execute([
            ":courriel" => $courriel,
        ]);

        $entree = $stmt->fetch();

        if ($entree != false) {

            // vérifier si mot de passe correspond
            $mot_passe_ok = password_verify($mdp, $entree["mot_de_passe"]);

            if ($mot_passe_ok) {
                // sauvegarde seulement le id de celui qui est connecté
                $_SESSION["administrateur_id"] = $entree["id"];
                // return $mot_passe_ok;
                return true;
            } else {
                return false;
            }
            //Le email n'existe pas dans la bdd
        } else {
            return false;
        }

    }

}
