<?php

require_once "bases/BaseModel.php";

class Membres extends BaseModel
{

    protected $table = "membres";

    // Fonction qui crée dans la base de données
    public function creer($prenom, $nom, $poste, $description, $photo)
    {

        $sql = "
           INSERT INTO $this->table (prenom, nom, poste, description, photo)
           VALUES (:prenom, :nom, :poste, :description, :photo);
           ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":poste" => $poste,
            ":description" => $description,
            ":photo" => $photo,

        ]);

        return $success;
    }

    public function modificationMembre($id, $prenom, $nom, $poste, $description, $photo)
    {

        $sql = "
            UPDATE $this->table
            SET prenom = :prenom, nom = :nom, poste = :poste, description = :description, photo = :photo

            WHERE id = :id;
            ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":id" => $id,
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":poste" => $poste,
            ":description" => $description,
            ":photo" => $photo,
        ]);

        return $success;
    }
}
