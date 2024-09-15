<?php

class User extends Database
{
    public function createUser($name, $email, $password): bool
    {
        $request = $this->db->prepare("
        INSERT INTO user (name, email, password) 
        VALUES (:name, :email, :password)
        ");

        // Exécute la requête avec les paramètres
        $request->execute([
            "name" => $name,
            "email" => $email,
            "password" => $password
        ]);

        return true;
    }

    public function getAll()
    {
        $request = $this->db->prepare("SELECT * FROM user;");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByName($name)
    {
        $request = $this->db->prepare("SELECT * FROM user WHERE user.name LIKE :name");

        $request->execute([
            "name" => $name
        ]);

        $data = $request->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getByEmail($email)
    {
        $request = $this->db->prepare("SELECT * FROM user WHERE user.email LIKE :email");

        $request->execute([
            "email" => $email
        ]);

        $data = $request->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public function newConnexion($userID)
    {
        // Prépare la requête UPDATE pour mettre à jour la date et l'heure de connexion
        $request = $this->db->prepare("
        UPDATE user 
        SET lastLogin = CURRENT_TIMESTAMP 
        WHERE id = :userID
    ");

        // Exécute la requête avec le paramètre userID
        $request->execute([
            "userID" => $userID
        ]);
    }

}
