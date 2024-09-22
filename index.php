<?php
session_start();

include_once("./Components/partials/head.php");

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/Views/';

// Récupérer la valeur du paramètre 'pg' dans l'url
// S'il n'y a pas de valeur 'pg', il sera égal à "home"
$page = $_GET['pg'] ?? 'p_home';

// Si la page n'éxiste pas retourner la page d'erreur 404.php
if (!file_exists("./Components/" . $page . ".php")) {
    $page = '404';
};

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/about':
        require __DIR__ . $viewDir . 'about.php';
        break;

    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    case '/login':
        require __DIR__ . $viewDir . 'login.php';
        break;

    case '/register':
        require __DIR__ . $viewDir . 'register.php';
        break;

    case '/reset-password':
        require __DIR__ . $viewDir . 'reset-password.php';
        break;

    case '/profile':
        require __DIR__ . $viewDir . 'profile.php';
        break;

    case '/profile?pg=p_home':
        require __DIR__ . $viewDir . 'profile.php';
        break;

    case '/profile?pg=p_birthdays':
        require __DIR__ . $viewDir . 'profile.php';
        break;

    case '/profile?pg=new_birthday':
        require __DIR__ . $viewDir . 'profile.php';
        break;

    case '/profile?pg=p_categories':
        require __DIR__ . $viewDir . 'profile.php';
        break;

    case '/profile?pg=new_category':
        require __DIR__ . $viewDir . 'profile.php';
        break;

    case '/profile?pg=p_settings':
        require __DIR__ . $viewDir . 'profile.php';
        break;

    case '/dashboard':
        require __DIR__ . $viewDir . 'dashboard.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

require_once("./Components/partials/footer.php");