<?php
session_start();
// Recuperation des models
require_once("../Models/Database.class.php");
require_once("../Models/Birthday.class.php");
require_once("../Models/User.class.php");

$modelBirthday = new Birthday;

// Récupérer le userID
$userID = $_SESSION['userID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' & !empty($_POST['birthID'])) {
    $birthID = ($_POST['birthID']) * 1;
    $delete = $modelBirthday->deleteBirthday($birthID, $userID);
    if (!$delete) {
        $_SESSION['err'] = "Birthday not found and not deleted.";
    }
    $_SESSION['succes'] = "Birthday deleted.";
    header('Location: /profile?pg=p_home');
    exit();
}
