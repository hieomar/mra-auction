<?php $this->layout('layouts/main', ['title' => $title]) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Bid Page</title>
    
</head>
<body>
    <div class="main">
        <div class="container">
            <!-- Product Details Section -->
            <div class="product-details">
                <img src="https://m.media-amazon.com/images/I/61mvAVYx1wL.jpg" alt="Product Image">
            </div>

            <!-- Auction Details Section -->
            <div class="auction-details">
                <!-- Product Information -->
                <div>
                    <h1>I5 Full Set Dell Desktop Computer - Original Mouse and Keyboard</h1>
                    <div class="auction-details-productStat">
                        <p>Category: Desktop Computer</p>
                        <p>Condition: Used</p>
                    </div>
                    <p id="shortDescription">
                        This Dell desktop computer features an Intel i5 processor, providing robust performance for daily tasks and professional workloads.
                    </p>
                    <p id="fullDescription" class="hidden">
                        The set includes the original Dell mouse and keyboard for seamless operation. Ideal for home, office, or educational use, this used system has been tested and is in excellent working condition. Whether for browsing, office applications, or light gaming, this desktop ensures a smooth and reliable experience.
                    </p>
                    <p id="seeMoreButton">See More</p>
                </div>

                <!-- Auction Details -->
                <div class="auction-details">
                    <h2>Auction Details</h2>
                    <div class="auction-info">
                        <div class="info-item">
                            <p>Starting Price</p>
                            <p class="price">$100</p>
                        </div>
                        <div class="info-item">
                            <p>Current Bid</p>
                            <p class="price">$150</p>
                        </div>
                        <div class="info-item timer">
                            <p>Time Left</p>
                            <p id="timer">00:05:00</p>
                        </div>
                    </div>
                </div>



                <!-- Bid Section -->
                <div class="bid-section">
                    <label for="bidAmount">Your Bid Amount:</label>
                    <input type="number" id="bidAmount" min="151" placeholder="Enter your bid">
                    <button class="place-bid-button" onclick="placeBid()">Place Bid</button>
                </div>

                <!-- Bid History -->
                <div class="bid-history">
                    <h3>Bid History</h3>
                    <ul id="bidHistory">
                        <li>John: $150</li>
                        <li>Jane: $140</li>
                        <li>Doe: $130</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Countdown Timer Logic
        const timerElement = document.getElementById('timer');
        let timeLeft = 300; // 5 minutes in seconds

        function updateTimer() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            if (timeLeft > 0) {
                timeLeft--;
            } else {
                clearInterval(timerInterval);
                alert('Auction Ended!');
            }
        }

        const timerInterval = setInterval(updateTimer, 1000);

        // Bid Placement Logic
        function placeBid() {
            const bidAmount = document.getElementById('bidAmount').value;
            const bidHistory = document.getElementById('bidHistory');

            if (bidAmount && parseInt(bidAmount) > 150) { // Replace 150 with the current bid dynamically in a real app
                const newBid = document.createElement('li');
                newBid.textContent = `You: $${bidAmount}`;
                bidHistory.prepend(newBid);
                alert(`Bid of $${bidAmount} placed successfully!`);
            } else {
                alert('Please enter a valid bid amount higher than the current bid.');
            }
        }

        // See More Feature Logic
        const seeMoreButton = document.getElementById('seeMoreButton');
        const fullDescription = document.getElementById('fullDescription');

        seeMoreButton.addEventListener('click', () => {
            if (fullDescription.classList.contains('hidden')) {
                fullDescription.classList.remove('hidden');
                seeMoreButton.textContent = 'See Less';
            } else {
                fullDescription.classList.add('hidden');
                seeMoreButton.textContent = 'See More';
            }
        });
    </script>
</body>
</html>
