<?php

class Category extends Database
{
    public function createCategory($name, $userId): bool
    {
        $request = $this->db->prepare("
        INSERT INTO category (name, user_id) 
        VALUES (:name, :userId)
        ");

        // Exécute la requête avec les paramètres
        $request->execute([
            "name" => $name,
            "userId" => $userId
        ]);

        return true;
    }

    
    public function getAll($userID)
    {
        $request = $this->db->prepare("SELECT * FROM category WHERE user_id LIKE :userID;");

        $request->execute([
            "userID" => $userID
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function deleteCategory(int $catID, int $userId): bool
    {
        $request = $this->db->prepare("
        DELETE FROM category 
        WHERE id = :id
        AND user_id = :userID
        ");

        // Lier les paramètres
        $request->bindParam(':id', $catID, PDO::PARAM_INT);
        $request->bindParam(':userID', $userId, PDO::PARAM_INT);

        // Exécuter la requête
        $request->execute();

        return true;
    }
}