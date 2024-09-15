<?php

class Timestamp extends Database
{
    private $id;
    

    public function getAll()
    {
        $request = $this->db->prepare("SELECT * FROM category;");

        $request->execute();

        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function create(string $catName)
    {
        $request = $this->db->prepare("INSERT INTO category (name) VALUE (:catName);");

        $request->execute([
            "catName" => $catName,
        ]);
        return "Enregistrement réussit";
    }
}
