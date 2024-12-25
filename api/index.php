<?php

require '../vendor/autoload.php';
require '../src/controllers/BidController.php';

use League\Plates\Engine;

// Initialize Plates
$templates = new Engine('../templates');

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
    default:
        echo $templates->render('pages/home', ['title' => 'Home']);
        break;
}