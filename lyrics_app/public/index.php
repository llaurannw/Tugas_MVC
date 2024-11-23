<?php
require_once '../core/Database.php';
require_once '../app/models/LyricsModel.php';
require_once '../app/views/LyricsView.php'; // Perbaiki ini
require_once '../app/controllers/LyricsController.php';

$db = new Database();
$model = new LyricsModel($db->getConnection());
$view = new LyricsView();
$controller = new LyricsController($model, $view);
$controller->handleRequest();
?>
