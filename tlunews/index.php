<?php

require_once 'config/connDB.php';
require_once 'controllers/NewsController.php';

$newsController = new NewsController(connDB::getConnection());
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'detail':
        $id = $_GET['id'] ?? null;
        $newsController->detail($id);
        break;

    case 'index':
    default:
        $newsController->index();
        break;
}
