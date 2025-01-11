<?php $this->layout('layouts/main', ['title' => $title]) ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Filter</title>
  
</head>
<body>
  <div class="auction-container">
    <!-- Sidebar -->
    <div class="filter-sidebar" id="filterSidebar">
    
<button class="close-sidebar-btn" id="closeSidebarBtn">
  <span>&#x2716;</span> Close
</button>

      <h3>Filter Options</h3>

      <!-- Category Filter -->
      <div class="filter-section">
        <h4>Categories</h4>
        <label class="input-label"><input type="checkbox" value="Electronics"> Electronics</label>
        <label class="input-label"><input type="checkbox" value="Clothing"> Clothing</label>
        <label class="input-label"><input type="checkbox" value="Furniture"> Furniture</label>
      </div>

      <!-- Price Filter -->
      <div class="filter-section">
        <h4>Price</h4>
        <label class="input-label"><input type="checkbox" value="under50"> Under MK50,000</label>
        <label class="input-label"><input type="checkbox" value="50to100">MK50,000 - MK100,000</label>
        <label class="input-label"><input type="checkbox" value="above100"> Above MK100,000</label>
      </div>

      <!-- New Arrivals -->
      <div class="filter-section">
        <h4>New Arrivals</h4>
        <label class="input-label"><input type="checkbox" value="new"> Show New Arrivals</label>
      </div>

       <!-- Apply Filter Button -->
  <button class="apply-filter-btn button register-btn" id="applyFilterBtn">Apply Filter</button>
    </div>

    <!-- Main Section -->
    <div class="products-section">
    <button class="open-sidebar-btn" id="openSidebarBtn">
  <img src="/public/images/filterlogo.png" alt="Filter" class="filter-icon">
  
</button>


      <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search products...">
        <button id="searchButton">
            <span>&#x1F50D;</span>
        </button>
        </div>


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
    </div>
  </div>

  <script>
    // Sidebar toggle functionality
    const openSidebarBtn = document.getElementById('openSidebarBtn');
    const closeSidebarBtn = document.getElementById('closeSidebarBtn');
    const filterSidebar = document.getElementById('filterSidebar');

    openSidebarBtn.addEventListener('click', () => {
      filterSidebar.classList.add('active');
    });

    closeSidebarBtn.addEventListener('click', () => {
      filterSidebar.classList.remove('active');
    });

    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const products = document.querySelectorAll('.product-item');

    searchInput.addEventListener('input', () => {
      const searchValue = searchInput.value.toLowerCase();
      products.forEach(product => {
        if (product.textContent.toLowerCase().includes(searchValue)) {
          product.style.display = '';
        } else {
          product.style.display = 'none';
        }
      });
    });
  </script>
</body>
</html>
