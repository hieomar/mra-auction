<?php $this->layout('layouts/main', ['title' => 'Home']) ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags for character encoding, viewport, and compatibility -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Title of the page -->
  <title>MRA Online Auction - Home</title>
  
  <!-- Link to external CSS for styling -->
  <link rel="stylesheet" href="styles.css">
  
  <!-- Favicon for the website -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

  <!-- Hero Section -->
  <div class="home_hero_section">
    <div class="hero_wrapper">
      <div class="hero_left">
        <h1>Welcome to MRA Online Auction</h1>
        <p>Explore and bid on items in our secure and transparent online auction system.</p>
        <div class="hero_buttons">
          <a href="#auctions" class="button login-btn">Explore Auctions</a>
          <a href="#about" class="button login-btn">About Us</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Auction Items Section -->
  <section class="auction-items">
  <h2>Items on Auction</h2>
  <div class="item-grid">
    <!-- Example Item 1 -->
    <div class="auction-item">
      <a href="/?page=itemDetails&item_id=2">
        <div class="price-container">
          <div class="price-info">
            <span class="label">Price:</span>
            <span class="starting-price">MK50,000</span>
          </div>
          <div class="price-info">
            <span class="label">Current Bid:</span>
            <span class="current-price">MK75,000</span>
          </div>
        </div>
        <img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Auction Item" />
        <div class="auction_item_desc">
          <h3>Travel Backpack</h3>
          <p>
            Durable and spacious backpack designed for all your travel adventures.
          </p>
          <div class="read-more">
            Bid
            <span class="arrow-icon">➔</span>
          </div>
        </div>
      </a>
    </div>

    <!-- Example Item 2 -->
    <div class="auction-item">
      <a href="/?page=itemDetails&item_id=2">
        <div class="price-container">
          <div class="price-info">
            <span class="label">Price:</span>
            <span class="starting-price">MK40,000</span>
          </div>
          <div class="price-info">
            <span class="label">Current Bid:</span>
            <span class="current-price">MK65,000</span>
          </div>
        </div>
        <img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Auction Item" />
        <div class="auction_item_desc">
          <h3>Travel Backpack</h3>
          <p>
            Durable and spacious backpack designed for all your travel adventures.
          </p>
          <div class="read-more">
            Bid
            <span class="arrow-icon">➔</span>
          </div>
        </div>
      </a>
    </div>

    <!-- Example Item 4 -->
    <div class="auction-item">
      <a href="/?page=itemDetails&item_id=4">
        <div class="price-container">
          <div class="price-info">
            <span class="label">Price:</span>
            <span class="starting-price">MK70,000</span>
          </div>
          <div class="price-info">
            <span class="label">Current Bid:</span>
            <span class="current-price">MK90,000</span>
          </div>
        </div>
        <img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Auction Item" />
        <div class="auction_item_desc">
          <h3>Luggage Set</h3>
          <p>
            Stylish and lightweight luggage set for all your travel needs.
          </p>
          <div class="read-more">
            Bid
            <span class="arrow-icon">➔</span>
          </div>
        </div>
      </a>
    </div>

    <!-- Example Item 4 -->
    <div class="auction-item">
      <a href="/?page=itemDetails&item_id=4">
        <div class="price-container">
          <div class="price-info">
            <span class="label">Price:</span>
            <span class="starting-price">MK70,000</span>
          </div>
          <div class="price-info">
            <span class="label">Current Bid:</span>
            <span class="current-price">MK90,000</span>
          </div>
        </div>
        <img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Auction Item" />
        <div class="auction_item_desc">
          <h3>Luggage Set</h3>
          <p>
            Stylish and lightweight luggage set for all your travel needs.
          </p>
          <div class="read-more">
            Bid
            <span class="arrow-icon">➔</span>
          </div>
        </div>
      </a>
    </div>

    <!-- Example Item 3 -->
    <div class="auction-item">
      <a href="/?page=itemDetails&item_id=3">
        <div class="price-container">
          <div class="price-info">
            <span class="label">Price:</span>
            <span class="starting-price">MK60,000</span>
          </div>
          <div class="price-info">
            <span class="label">Current Bid:</span>
            <span class="current-price">MK80,000</span>
          </div>
        </div>
        <img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Auction Item" />
        <div class="auction_item_desc">
          <h3>Smart Monitor</h3>
          <p>
            4K UHD smart monitor with advanced connectivity and crystal-clear visuals.
          </p>
          <div class="read-more">
            Bid
            <span class="arrow-icon">➔</span>
          </div>
        </div>
      </a>
    </div>

    <!-- Example Item 4 -->
    <div class="auction-item">
      <a href="/?page=itemDetails&item_id=4">
        <div class="price-container">
          <div class="price-info">
            <span class="label">Price:</span>
            <span class="starting-price">MK70,000</span>
          </div>
          <div class="price-info">
            <span class="label">Current Bid:</span>
            <span class="current-price">MK90,000</span>
          </div>
        </div>
        <img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Auction Item" />
        <div class="auction_item_desc">
          <h3>Luggage Set</h3>
          <p>
            Stylish and lightweight luggage set for all your travel needs.
          </p>
          <div class="read-more">
            Bid
            <span class="arrow-icon">➔</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>


 

 
</body>

</html>
