<?php

require_once "bases/BaseModel.php";

class Utilisateurs extends BaseModel
{

    protected $table = "utilisateurs";

    public function creer($prenom, $nom, $courriel, $mot_de_passe)
    {
        $sql = "
            INSERT INTO $this->table (prenom, nom, courriel, mot_de_passe)
            VALUES (:prenom, :nom, :courriel, :mot_de_passe);
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":courriel" => $courriel,
            ":mot_de_passe" => $mot_de_passe,
        ]);

        return $success;
    }

    public function verifierConnexion($courriel, $mdp)
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
                $_SESSION["utilisateur_id"] = $entree["id"];
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
