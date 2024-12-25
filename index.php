<?php

require './vendor/autoload.php';

use League\Plates\Engine;

// Initialize Plates
$templates = new Engine('templates');

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'about':
        echo $templates->render('pages/about', ['title' => 'About Us']);
        break;
    case 'auctions':
        echo $templates->render('pages/auctions', ['title' => 'Auctions']);
        break;
    default:
        echo $templates->render('pages/home', ['title' => 'Home']);
        break;
}