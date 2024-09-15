<?php
session_start();

include_once("./Components/head.php");

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/Views/';

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

    case '/dashboard':
        require __DIR__ . $viewDir . 'dashboard.php';
        break;

    case '/categories':
        require __DIR__ . $viewDir . 'categories.php';
        break;

    case '/birthdays':
        require __DIR__ . $viewDir . 'birthdays.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

require_once("./Components/footer.php");