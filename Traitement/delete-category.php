<?php
session_start();
// Recuperation des models
require_once("../Models/Database.class.php");
require_once("../Models/Category.class.php");
require_once("../Models/User.class.php");

$modelCategory = new Category;

// Récupérer le userID
$userID = $_SESSION['userID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' & !empty($_POST['catID'])) {
    $catID = ($_POST['catID'])*1;
    $delete = $modelCategory->deleteCategory($catID, $userID);
    if(!$delete) {
        $_SESSION['err'] = "Category not found and not deleted.";
    }
    header('Location: /profile?pg=p_category-new');
    exit();
}
