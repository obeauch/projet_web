<?php

require_once "bases/BaseModel.php";

class Membres extends BaseModel
{

    protected $table = "membres";

    // Fonction qui crée dans la base de données
    public function creer($prenom, $nom, $poste, $description, $photo)
    {

        $sql = "
           INSERT INTO $this->table (prenom, nom, poste, description, photo, fk_membre_admin_id)
           VALUES (:prenom, :nom, :poste, :description, :photo, :fk_membre_admin_id);
           ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":poste" => $poste,
            ":description" => $description,
            ":photo" => $photo,
            ":fk_membre_admin_id" => $_SESSION["administrateur_id"],
        ]);

        return $success;

    }
}
