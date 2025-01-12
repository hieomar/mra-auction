<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/controllers/BidController.php';

use League\Plates\Engine;

// Initialize Plates
$templates = new Engine(__DIR__ . '/templates');

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'about':
        echo $templates->render('pages/about', ['title' => 'About Us']);
        break;
    case 'auctions':
        echo $templates->render('pages/auctions', ['title' => 'Auctions']);
        break;
    case 'itemDetails':
        $auctionItemId = $_GET['item_id'] ?? null;
        if ($auctionItemId) {
            $bidController = new BidController();
            $bids = $bidController->getTopBids($auctionItemId);
            $itemDetails = [
                'id' => $auctionItemId,
                'name' => 'Sample Item', // Placeholder for item name
                'image' => 'https://api.algobook.info/v1/randomimage?category=computer', // Placeholder for item image
                'description' => 'This is a sample item description.', // Placeholder for item description
            ];
            echo $templates->render('pages/itemDetails', ['title' => 'Item Details', 'item' => $itemDetails, 'bids' => $bids]);
        } else {
            echo "Auction item ID is required.";
        }
        break;
    case 'station-manager':
        echo $templates->render('pages/station-manager/index', ['title' => 'Station Manager']);
        break;
    case 'addItem':
        echo $templates->render('pages/station-manager/addItem', ['title' => 'Add Auction Item']);
        break;
    case 'auction-report':
        echo $templates->render('pages/station-manager/report', ['title' => 'Auction Report']);
        break;
    case 'admin':
        echo $templates->render('pages/admin/index', ['title' => 'Admin Dashboard']);
        break;
    default:
        echo $templates->render('pages/home', ['title' => 'Home']);
        break;
}
