<?php
// Recuperation des models
require_once("./Models/Database.class.php");
require_once("./Models/Category.class.php");
require_once("./Models/User.class.php");

$modelCategory = new Category;

// Récupérer le userID
$userID = $_SESSION['userID'];

// Récupérer la liste de catégories créé par l'utilisateur
$categories = $modelCategory->getAll($userID);