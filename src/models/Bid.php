<?php

class Bid {
    public $id;
    public $auctionItemId;
    public $bidderId;
    public $bidAmount;
    public $bidTime;

    public function __construct($id, $auctionItemId, $bidderId, $bidAmount, $bidTime) {
        $this->id = $id;
        $this->auctionItemId = $auctionItemId;
        $this->bidderId = $bidderId;
        $this->bidAmount = $bidAmount;
        $this->bidTime = $bidTime;
    }

    public function getBidDetails() {
        return [
            'id' => $this->id,
            'auctionItemId' => $this->auctionItemId,
            'bidAmount' => $this->bidAmount,
            'bidTime' => $this->bidTime,
        ];
    }
}