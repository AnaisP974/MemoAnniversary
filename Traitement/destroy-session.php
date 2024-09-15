<?php
session_start();

// Détruit la session
session_destroy();

// Retourne un message de confirmation
echo json_encode(['message' => 'Session destroyed']);
