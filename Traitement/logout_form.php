<?php
session_start();

// Vide toutes les variables de session
$_SESSION = array();

// Détruis la session
session_destroy();

// Stocker un message de succès dans la session avant de rediriger
session_start();
$_SESSION['msg'] = "Logout successful. I hope you enjoyed the app. See you soon!";

// Rediriger l'utilisateur après la déconnexion
header("Location: /login");
exit(); // Toujours terminer par exit après une redirection

