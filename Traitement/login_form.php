<?php
session_start();

// Recuperation des models
require_once("../Models/Database.class.php");
require_once("../Models/User.class.php");

$modelUser = new User;

// TRAITEMENT DU FORMULAIRE DE CONNEXION
if (!empty($_POST['identity']) && !empty($_POST['password'])) 
{
    //J'enregistre les éléments renseignés par l'urilisateur
    $identity = trim(htmlspecialchars($_POST['identity']));
    $password = htmlspecialchars($_POST['password']);

    //Vérifier si l'utilisateur existe via le nom
    $user = $modelUser->getByName($identity);
    // echo($user) ? "tu as été trouvé !" : "Tu n'as pas été trouvé";
    // S'il n'est pas retrouvé par le nom 
    if(!$user)
    {
        // Rechercher l'utilisateur via l'email
        $user = $modelUser->getByEmail($identity);

        if(!$user){
            // s'il n'existe pas rediriger vers la page de connexion avec un message d'erreur
            $_SESSION['err'] = "Incorrect username or password.";
            header('Location: /login');
            exit();
        }
    }
    
    // Une fois l'utilisateur trouvé 
    // echo "Tu as été retrouvé " . $user['name'];
    
    // vérifier le mot de passe
    //Récupération du mot de passe  en bdd
    $hashedPassword = $user['password'];
    // Vérification du mot de passe fourni par l'utilisateur avec le hash stocké
    if (password_verify($password, $hashedPassword)) {
        // Authentification réussie
        $_SESSION['msg'] = "Login successful !";
        $_SESSION['user'] = 'isConnected';
        $_SESSION['userID'] = $user['id'];
        //Mise à jour de la date de dernière connexion
        $modelUser->newConnexion($user['id']); 
        // Si l'utilisateur a un role "user" rediriger vers son profile
        if($user['role'] === "user"){
            $_SESSION['role'] = 'user';
            header('Location: /profile');
            exit();
        }
        // Si lutilisateur a un role "admin" rediriger vers le dashboard
        if ($user['role'] === "admin") {
            $_SESSION['role'] = 'admin';
            header('Location: /dashboard');
            exit();
        }
    } else {
        // Mot de passe incorrect
        $_SESSION['err'] = "Incorrect username or password.";
        header('Location: /login');
        exit();
    }
}
else 
{
    $_SESSION['err'] = "All fields are required.";
    header('Location: /login');
    exit();
}