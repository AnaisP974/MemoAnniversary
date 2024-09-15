<?php
session_start();
// Recuperation des models
require_once("../Models/Database.class.php");
require_once("../Models/Category.class.php");
require_once("../Models/User.class.php");

$modelCategory = new Category;

// Récupérer le userID
$userID = $_SESSION['userID'];

if($_SERVER['REQUEST_METHOD'] === 'POST' & !empty($_POST['name']))
{
    $new = trim(htmlspecialchars($_POST['name']));
    // Vérifier si le nom existe déjà en BDD
    $data = $modelCategory->getByName($new, $userID);
    if($data)
    {
        $_SESSION['err'] = "The category '" . $new . "' already exists";
        header('Location: /profile?pg=p_category-new');
        exit();
    }

    $newCat = $modelCategory->createCategory($new, $userID);
    header('Location: /profile?pg=p_category-new');
    exit();
}