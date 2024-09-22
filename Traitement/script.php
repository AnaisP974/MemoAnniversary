<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'unsetSuccess') {
    unset($_SESSION['succes']);
    echo json_encode(['status' => 'success']);
}
