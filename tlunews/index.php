<?php
require_once 'config.php';
require_once 'controllers/NewsController.php';
require_once 'views/news/index.php';
$newsController = new NewsController($conn);

$action = $_GET['action'] ?? 'index';
