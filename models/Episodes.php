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

    //place les episodes en ordre de numéro d'épisode
    public function ordreEpisodes()
    {
        $sql = "
        SELECT $this->table.*
        FROM $this->table
        ORDER BY numero_episode ASC
        ";

        $stmt = $this->pdo()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }

    //Modifie tout ce qui est dans la table épisode en fonction du id
    public function modificationEpisode($id, $titre, $numero_episode, $date_parution, $temps, $description, $image, $video)
    {

        $sql = "
            UPDATE $this->table
            SET titre = :titre,
                numero_episode = :numero_episode,
                date_parution = :date_parution,
                temps = :temps,
                description = :description,
                image = :image,
                video = :video

            WHERE id = :id;
            ";

        $stmt = $this->pdo()->prepare($sql);

        $success = $stmt->execute([
            ":id" => $id,
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
