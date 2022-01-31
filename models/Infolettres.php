<?php

require_once "bases/BaseModel.php";

class Infolettres extends BaseModel
{

    protected $table = "infolettres";

    // Fonction qui crée dans la base de données
    public function creer($prenom, $nom, $courriel)
    {

        $sql = "
           INSERT INTO $this->table (prenom, nom, courriel)
           VALUES (:prenom, :nom, :courriel);
           ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":courriel" => $courriel,
        ]);

        return $success;

    }
}
