<?php
session_start();
//Récupère les fonctions
require_once( '../Services/functions.php');
require_once('../Services/country_codes.php');


// Recuperation des models
require_once("../Models/Database.class.php");
require_once("../Models/Birthday.class.php");
require_once("../Models/User.class.php");

$modelBirthday = new Birthday;

// Récupérer le userID
$user_id = $_SESSION['userID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST);

    if(isset($_SESSION['birthErr']))
    {
        // Supprimer tous les messages d'erreurs précédents
        unset($_SESSION['birthErr']);
    }

    // 1. VERIFIER la validité DES DONNEES SAISIES PAR L'UTILISATEUR
    $_SESSION['birthErr'] = "";

    // --- NAME ---
    if(empty($_POST['name']))
    {
        $_SESSION['birthErr'] .= "Please indicate the name <br>";
    } else {
        $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
        // Vérifier la longeur du nom 
        if(!minMaxLength(3, 20, $name))
        {
            $_SESSION['birthErr'] .= "The name must contain 3 to 20 characters.<br>";
        }
    }

    // --- BIRTH_DATE ---
    if (empty($_POST['birth_date'])) {
        $_SESSION['birthErr'] .= "Please indicate the birth date <br>";
    } else {
        $birth_date = $_POST['birth_date'];
        // vérifier que la date soit bien valide 
        if(!validateDate($birth_date))
        {
            $_SESSION['birthErr'] .= "Please choose a valid birth date.<br>";
        }
    }

    // --- PHONE ---
    if (!empty($_POST['phone']) && empty($_POST['country_code'])) {
        $_SESSION['birthErr'] .= "Please indicate the country code. <br>";
    } elseif (!empty($_POST['phone']) && !empty($_POST['country_code'])) {
        $code = $_POST['country_code'];
        $country = findCountryByCode($code, $country_codes);
        $phone = claenPhone($_POST['phone']);
        if(!isPhoneNumuber($phone))
        {
            $_SESSION['birthErr'] .= "Please indicate a valid phone number.<br>";
        }
        if(!$country)
        {
            $_SESSION['birthErr'] .= "Select a valid country code.<br>";
        }
        if(isPhoneNumuber($phone) && $country)
        {
            $phone = $code . $phone;
            $isSMS = $_POST['isSMS'] === "yes" ? 1 : 0;
            $sms = htmlspecialchars(trim($_POST['sms']), ENT_QUOTES, 'UTF-8');
        }
    }

    // --- EMAIL ---
    if(!empty($_POST['email']))
    {
        $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
        if(!isValidEmail($email))
        {
            $_SESSION['birthErr'] .= "Indicate a valid email address.<br>";
        } else {
            $isEmail = $_POST['isEmail'] === "yes" ? 1 : 0;
            $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');
        }
    } else {
        $email = NULL;
        $isEmail = 0;
        $message = "";
    }


    // Sinon enregistrer les données 
    if(empty($_POST['phone']))
    {
        $phone = NULL;
        $isSMS = 0;
        $sms = "";
        $country = NULL;
    }

    if(!empty($_POST['description']))
    {
        $description = htmlspecialchars(trim($_POST['description']), ENT_QUOTES, 'UTF-8');
        if(!minMaxLength(0, 1500, $description))
        {
            $_SESSION['birthErr'] .= "The 'description' field must not exceed 1500 characters.<br>";

        }
    } else {
        $description = NULL;
    }

    if (!empty($_POST['likes'])) {
        $likes = htmlspecialchars(trim($_POST['likes']), ENT_QUOTES, 'UTF-8');
        if (!minMaxLength(0, 1500, $likes)) {
            $_SESSION['birthErr'] .= "The 'likes' field must not exceed 1500 characters.<br>";
        }
    } else {
        $likes = NULL;
    }

    if (!empty($_POST['category'])) {
        $category_id = $_POST['category'];
    } else {
        $category_id = NULL;
    }

    // S'il y a des erreurs rédiriger sur le formulaire
    if ($_SESSION['birthErr'] !== ""
    ) {
        header('Location: /profile?pg=new_birthday');
        exit();
    }
    // Les enregistrer en bdd
    $newBirthday = $modelBirthday->createBirthday($name, $description, $birth_date, $message, $phone, $email, $likes, $sms, $isSMS, $isEmail, $country, $user_id, $category_id);
    // Message de succès
    $_SESSION['succes'] = "Birthday of '" . $name . "' has been successfully recorded.";
    // redirection à la pages des birthdays
    header('Location: /profile?pg=p_home');
    exit();
}
