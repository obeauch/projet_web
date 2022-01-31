<?php

require_once "bases/BaseModel.php";

class Episodes extends BaseModel
{

    protected $table = "episodes";

    // Fonction qui crée dans la base de données
    public function creer($titre, $numero_episode, $date_parution, $temps, $description, $image, $video)
    {

        $sql = "
            INSERT INTO $this->table (titre, numero_episode, date_parution, temps, description, image, video)
            VALUES (:titre, :numero_episode, :date_parution, :temps, :description, :image, :video);
            ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":titre" => $titre,
            ":numero_episode" => $numero_episode,
            ":date_parution" => $date_parution,
            ":temps" => $temps,
            ":description" => $description,
            ":image" => $image,
            ":video" => $video,
        ]);

        return $success;

    }
}
