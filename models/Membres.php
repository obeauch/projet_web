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

    public function deleteMembre($id)
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
