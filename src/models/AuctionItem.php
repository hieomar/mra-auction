<?php

class AuctionItem {
    public $id;
    public $title;
    public $description;
    public $startingBid;
    public $currentBid;
    public $bids = [];
    public $endTime;

    public function __construct($id, $title, $description, $startingBid, $currentBid, $endTime) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->startingBid = $startingBid;
        $this->currentBid = $currentBid;
        $this->$bids = $bids;
        $this->endTime = $endTime;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getStartingBid() {
        return $this->startingBid;
    }

    public function getAllBids() {
        return $this->bids;
    }

    public function getCurrentBid() {
        return $this->currentBid;
    }

    public function getEndTime() {
        return $this->endTime;
    }
}