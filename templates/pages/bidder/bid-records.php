<?php $this->layout('layouts/main', ['title' => 'My Bid Records']) ?>

<div class="bid-records-container">
    <!-- Header with Export Button -->
    <div class="records-header">
        <h1>My Bidding Activity</h1>
        <button id="exportPdfBtn" class="export-btn">
            <svg class="pdf-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
            </svg>
            Export PDF
        </button>
    </div>

    <div class="report-content">
        <!-- Bidding Summary -->
        <section class="report-section">
            <h2 class="section-title">Bidding Summary</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-label">Active Bids</div>
                    <div class="stat-value">12</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Won Auctions</div>
                    <div class="stat-value">5</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Total Spent</div>
                    <div class="stat-value">MK 850,000</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Active Auctions</div>
                    <div class="stat-value">7</div>
                </div>
            </div>
        </section>

        <!-- Active Bids -->
        <section class="report-section">
            <h2 class="section-title">Active Bids</h2>
            <table class="bids-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Your Bid</th>
                        <th>Current Highest</th>
                        <th>End Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="item-info">
                                <img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Item">
                                <div>
                                    <h4>Dell Laptop i7</h4>
                                    <p>Item #001</p>
                                </div>
                            </div>
                        </td>
                        <td>MK 320,000</td>
                        <td>MK 325,000</td>
                        <td>2h 15m</td>
                        <td><span class="status-badge outbid">Outbid</span></td>
                        <td>
                            <button class="bid-btn">Place New Bid</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item-info">
                                <img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Item">
                                <div>
                                    <h4>HP Printer</h4>
                                    <p>Item #002</p>
                                </div>
                            </div>
                        </td>
                        <td>MK 180,000</td>
                        <td>MK 180,000</td>
                        <td>4h 30m</td>
                        <td><span class="status-badge winning">Winning</span></td>
                        <td>
                            <button class="view-btn">View Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Bid History -->
        <section class="report-section">
            <h2 class="section-title">Bid History</h2>
            <table class="history-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Bid Amount</th>
                        <th>Bid Time</th>
                        <th>Result</th>
                        <th>Payment Countdown</th>
                        <th>Payment Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dell Laptop i7</td>
                        <td>MK 320,000</td>
                        <td>Jan 15, 2024 3:45 PM</td>
                        <td><span class="status-badge completed">Won</span></td>
                        <td>5h 30m</td>
                        <td>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script src="https://in.paychangu.com/js/popup.js"></script>
                            <div id="wrapper"></div>
                            <button class="view-btn" onClick="makePayment()">Pay Now</button>
                            <button class="view-btn">View Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>HP Printer</td>
                        <td>MK 180,000</td>
                        <td>Jan 15, 2024 2:30 PM</td>
                        <td><span class="status-badge pending">Pending</span></td>
                        <td><span class="status-badge pending">Pending</span></td>
                        <td> <span class="status-badge pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>HP Printer</td>
                        <td>MK 180,000</td>
                        <td>Jan 15, 2024 2:30 PM</td>
                        <td><span class="status-badge completed">Won</span></td>
                        <td><span class="status-badge completed">Complete</span></td>
                        <td> <span class="status-badge completed">Paid</span></td>
                </tbody>
            </table>
        </section>
    </div>
</div>

<style>
    .bid-records-container {
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .records-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .export-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background-color: #094524;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .export-btn:hover {
        background-color: #0b381b;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .stat-label {
        color: #666;
        font-size: 0.9rem;
    }

    .stat-value {
        font-size: 1.8rem;
        font-weight: bold;
        color: #094524;
        margin: 0.5rem 0;
    }

    .section-title {
        color: #094524;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #fecd0b;
    }

    .report-section {
        background: white;
        padding: 1.5rem;
        border-radius: 8px;
        margin-bottom: 2rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .bids-table,
    .history-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    .bids-table th,
    .history-table th {
        background: #094524;
        color: white;
        padding: 12px;
        text-align: left;
    }

    .bids-table td,
    .history-table td {
        padding: 12px;
        border-bottom: 1px solid #e0e0e0;
    }

    .item-info {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .item-info img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 4px;
    }

    .status-badge {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 0.85em;
    }

    .status-badge.winning {
        background: #e6f4ea;
        color: #137333;
    }

    .status-badge.outbid {
        background: #fce8e6;
        color: #c5221f;
    }

    .status-badge.completed {
        background: #e8f0fe;
        color: #1a73e8;
    }

    .status-badge.pending {
        background: #fff3e0;
        color: #e65100;
    }

    .bid-btn,
    .view-btn {
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.9em;
    }

    .bid-btn {
        background: #fecd0b;
        color: #094524;
    }

    .view-btn {
        background: #e8f0fe;
        color: #1a73e8;
    }

    @media (max-width: 768px) {
        .bid-records-container {
            padding: 1rem;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .item-info {
            flex-direction: column;
            text-align: center;
        }

        .bids-table,
        .history-table {
            display: block;
            overflow-x: auto;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    document.getElementById('exportPdfBtn').addEventListener('click', function() {
        const element = document.querySelector('.report-content');
        const opt = {
            margin: 1,
            filename: 'bid-records.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'portrait'
            }
        };

        html2pdf().set(opt).from(element).save().catch(err => {
            console.error('Error generating PDF:', err);
            alert('Error generating PDF. Please try again.');
        });
    });
</script>
<script>
    function makePayment() {
        PaychanguCheckout({
            "public_key": "pub-live-zcHvb1mKxXofzmYBvjnobwvlYgUBqYWn",
            "tx_ref": '' + Math.floor((Math.random() * 1000000000) + 1),
            "amount": 320000,
            "currency": "MWK",
            "callback_url": "https://example.com/callbackurl",
            "return_url": "https://example.com/returnurl",
            "customer": {
                "email": "yourmail@example.com",
                "first_name": "Mac",
                "last_name": "Phiri",
            },
            "customization": {
                "title": "Test Payment",
                "description": "Payment Description",
            },
            "meta": {
                "uuid": "uuid",
                "response": "Response"
            }
        });
    }
</script>