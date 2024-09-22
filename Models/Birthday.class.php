<?php

class Birthday extends Database
{
    public function createBirthday($name, $description, $birth_date, $message, $phone, $email, $likes, $sms, $isSMS, $isEmail, $country, $user_id, $category_id): bool
    {
        $request = $this->db->prepare("
        INSERT INTO birthday (name, description, birthday_date, message, phone, email, likes, sms, isSMS, isEmail, country, user_id, category_id) 
        VALUES (:name, :description, :birthday_date, :message, :phone, :email, :likes, :sms, :isSMS, :isEmail, :country, :user_id, :category_id)
        ");

        // Exécute la requête avec les paramètres
        $request->execute([
            "name" => $name,
            "description" => $description,
            "birthday_date" => $birth_date,
            "message" => $message,
            "phone" => $phone,
            "email" => $email,
            "likes" => $likes,
            "sms" => $sms,
            "isSMS" => $isSMS,
            "isEmail" => $isEmail,
            "country" => $country,
            "user_id" => $user_id,
            "category_id" => $category_id
        ]);

        return true;
    }

    public function getAll($userID)
    {
        $sql = "
        SELECT 
            b.*, 
            c.name AS category
        FROM 
            birthday b
        LEFT JOIN 
            category c ON b.category_id = c.id
        WHERE 
            b.user_id = :userID;
    ";

        $request = $this->db->prepare($sql);

        $request->execute([
            "userID" => $userID
        ]);

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function deleteBirthday(int $birthID, int $userId): bool
    {
        $request = $this->db->prepare("
        DELETE FROM birthday 
        WHERE id = :id
        AND user_id = :userID
        ");

        // Lier les paramètres
        $request->bindParam(':id', $birthID, PDO::PARAM_INT);
        $request->bindParam(':userID', $userId, PDO::PARAM_INT);

        // Exécuter la requête
        $request->execute();

        return true;
    }
}