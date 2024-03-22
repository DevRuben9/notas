<?php

$view = $_GET['view'];
switch ($view) {
    case 'home':
        require_once 'home.php';
        return;
        break;
    case 'view':
        require_once 'view.php';
        return;
        break;
    case 'create':
        require_once 'create.php';
        return;
        break;
    default:
}