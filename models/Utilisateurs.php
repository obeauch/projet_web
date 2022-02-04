<?php

require_once "bases/BaseModel.php";

class Utilisateurs extends BaseModel
{

    protected $table = "utilisateurs";

    //Crée un nouvel utilisateur qui a accès à tout ce qui est admin
    public function creerUser($prenom, $nom, $courriel, $mot_de_passe)
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

    //Vérifie la connexion d'un utilisateur
    public function verifierConnexionUser($courriel, $mdp)
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
                $_SESSION["useradmin_id"] = $entree["id"];
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

    public function modificationUtilisateur($id, $prenom, $nom, $courriel, $mot_de_passe)
    {
        $sql = "
        UPDATE $this->table
        SET prenom = :prenom, nom = :nom, courriel = :courriel, mot_de_passe = :mot_de_passe

        WHERE id = :id;
        ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":id" => $id,
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":courriel" => $courriel,
            ":mot_de_passe" => $mot_de_passe,
        ]);

        // exit();
        return $success;
    }

    //Supprimer un utilisateur
    public function deleteUtilisateur($id)
    {
        $sql = "DELETE FROM $this->table
                WHERE id = :id
                ";

        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute([
            ":id" => $id,
        ]);

        return $stmt;
    }

}
