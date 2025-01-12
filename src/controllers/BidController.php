<?php

require_once __DIR__ . '/../models/Bid.php';
require_once __DIR__ . '/../models/AuctionItem.php';

class BidController
{
    public function getAllBids($auctionItemId)
    {
        // Placeholder for fetching bids from a data source
        $bids = [
            new Bid(1, $auctionItemId, 101, 100.00, 'January 1, 2024 10:00:00'),
            new Bid(2, $auctionItemId, 102, 150.00, 'January 1, 2024 11:00:00'),
            new Bid(3, $auctionItemId, 103, 200.00, 'January 1, 2024 12:00:00'),
        ];

        return $bids;
    }

    public function getTopBids($auctionItemId, $limit = 3)
    {
        // Placeholder for fetching top bids from a data source
        $bids = $this->getAllBids($auctionItemId);
        usort($bids, function ($a, $b) {
            return $b->bidAmount - $a->bidAmount;
        });

        return array_slice($bids, 0, $limit);
    }
}
