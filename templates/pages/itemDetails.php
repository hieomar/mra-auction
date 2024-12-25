<?php $this->layout('layouts/main', ['title' => $title]) ?>

<h1>Item Details</h1>
<section class="item-details">
    <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" />
    <h2><?= $item['name'] ?></h2>
    <p><?= $item['description'] ?></p>
</section>
<button class="bid-button">Place Bid</button>

<h1>Top 3 Bids for Auction Item</h1>
<section class="bids-list">
    <ul>
        <?php foreach ($bids as $bid): ?>
            <li>
                Bid ID: <?= $bid->id ?>, 
                Bidder ID: <?= $bid->bidderId ?>, 
                Amount: $<?= number_format($bid->bidAmount, 2) ?>, 
                Time: <?= $bid->bidTime ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>