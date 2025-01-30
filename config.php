<?php
header('Content-Type: application/json');

// Définir le jeton et le chat ID de manière sécurisée
$botToken = "7846685441:AAHr1oVPbePKBpvJ-osHYg4s9tu1xgAFVN0";
$chatId = "871351122";

// Retourner les données en JSON pour l'appel AJAX
echo json_encode([
    "botToken" => $botToken,
    "chatId" => $chatId
]);
?>
