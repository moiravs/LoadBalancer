<?php
require_once __DIR__ . '/database/database.php';

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';

$db = Database::getInstance();
$conn = $db->getConnection();

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'welcome.php';
        break;

    case '/store':
        require __DIR__ . $viewDir . 'store.php';
        break;

    case '/account':
        require __DIR__ . $viewDir . 'account.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}