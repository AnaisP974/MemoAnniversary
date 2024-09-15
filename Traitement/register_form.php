<?php
session_start();

// Recuperation des models
require_once("../Models/Database.class.php");
require_once("../Models/User.class.php");

$modelUser = new User;

// Tous les champs doivent être complétés
if(!empty($_POST['name']) & !empty($_POST['email']) & !empty($_POST['password']) & !empty($_POST['confirm-password']))
{
    unset($_SESSION['err']);
    // Stoker les valeurs dans une variable de façon sécurisée
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirm-password']);

    // TRAITEMENT DES ERREURS
    // Vérifier que l'email n'éxiste pas en bdd sinon demander à l'utilisateur de changer son mot de passe
    $userEmail = $modelUser->getByEmail($email);
    if ($userEmail) {
        $_SESSION['err'] .= "- Email already exists. Please reset your password. <br>";
        header('Location: /reset-password');
        exit();
    }

    // Vérifier que les mots de passe soient identiques
    if($password !== $confirmPassword){
        $_SESSION['err'] .= "- The passwords must match. <br>";
    } else {
        $password = password_hash($password, PASSWORD_BCRYPT);
    }
    // Vérifier que le nom n'éxiste pas en bdd
    $userName = $modelUser->getByName($name);
    if($userName){
        $_SESSION['err'] .= "- Username '" . $name . "' already exists. Please choose another one. <br>";
    }
    

    if($_SESSION['err']){
        header('Location: /register');
        exit();  
    } 
    else 
    {
        // Création du user en bdd
        $user = $modelUser->createUser($name, $email, $password);
        // Si la création est OK 
        if($user)
        {
            // TODO: Ajouter le traitement d'envoi d'email pour confirmer la création d'un compte
            // ........
            
            $_SESSION['msg'] = "Congratulations, your account has been successfully created! You can now log in.";
            header('Location: /login');
            exit();
        }
    }
        
} 
else 
{
    $_SESSION['err'] = "Please fill out all the fields in the form.";
    header('Location: /register');
    exit();
};