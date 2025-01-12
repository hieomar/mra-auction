<?php $this->layout('layouts/main', ['title' => 'Auction Report']) ?>
<style>
    .main-report-content {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 20px;
        background: #f5f5f5;
    }

    .report-container {
        max-width: 1200px;
        margin: 0 auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .section {
        margin-bottom: 30px;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
    }

    .section-title {
        color: #094524;
        border-bottom: 2px solid #fecd0b;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .info-item {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 4px;
        text-align: center;
    }

    .info-label {
        font-weight: bold;
        color: #666;
        font-size: 0.9em;
    }

    .info-value {
        font-size: 1.2em;
        color: #094524;
        margin-top: 5px;
    }

    .items-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .items-table th {
        background: #094524;
        color: white;
        padding: 12px;
        text-align: left;
    }

    .items-table td {
        padding: 12px;
        border-bottom: 1px solid #e0e0e0;
    }

    .status-badge {
        padding: 5px 10px;
        border-radius: 12px;
        font-size: 0.85em;
    }

    .status-completed {
        background: #e6f4ea;
        color: #137333;
    }

    .status-pending {
        background: #fff3e0;
        color: #e65100;
    }

    .bid-history {
        max-height: 150px;
        overflow-y: auto;
        margin-top: 10px;
        padding: 10px;
        background: #f8f9fa;
        border-radius: 4px;
    }

    .bid-item {
        display: flex;
        justify-content: space-between;
        padding: 5px 0;
        border-bottom: 1px solid #e0e0e0;
    }

    .export-container {
        text-align: right;
        margin-bottom: 20px;
    }

    .export-btn {
        background: #094524;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .export-btn .pdf-icon {
        margin-right: 8px;
    }
</style>

<div class="main-report-content">
    <div class="report-container">
        <!-- Add export button container -->
        <div class="export-container">
            <button id="exportPdfBtn" class="export-btn">
                <svg class="pdf-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9.5 8.5c0 .83-.67 1.5-1.5 1.5H7v2H5.5V9H8c.83 0 1.5.67 1.5 1.5v1zm10 5.5H13v-6h1.5v4.5h2.5V17zm-5-4.5h-1v3H12v-3z" />
                </svg>
                Export PDF
            </button>
        </div>

        <!-- General Auction Information -->
        <section class="section">
            <h2 class="section-title">General Auction Information</h2>
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">Auction Title</div>
                    <div class="info-value">MRA January Auction 2024</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Auction ID</div>
                    <div class="info-value">#AUC-2024-001</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Date</div>
                    <div class="info-value">January 15, 2024</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Time</div>
                    <div class="info-value">10:00 AM - 4:00 PM</div>
                </div>
            </div>
        </section>

        <!-- Summary of Auction Results -->
        <section class="section">
            <h2 class="section-title">Auction Summary</h2>
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">Items Sold</div>
                    <div class="info-value">45</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Total Bids</div>
                    <div class="info-value">157</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Revenue Generated</div>
                    <div class="info-value">MK 2,450,000</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Participants</div>
                    <div class="info-value">89</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Unsold Items</div>
                    <div class="info-value">5</div>
                </div>
            </div>
        </section>

        <!-- Detailed Item Information -->
        <section class="section">
            <h2 class="section-title">Item Details</h2>
            <table class="items-table">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Starting Price</th>
                        <th>Winning Bid</th>
                        <th>Winner</th>
                        <th>Payment Status</th>
                        <th>Bid History</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#ITEM-001</td>
                        <td>Dell Laptop i7</td>
                        <td>MK 250,000</td>
                        <td>MK 320,000</td>
                        <td>John Doe</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>
                            <div class="bid-history">
                                <div class="bid-item">
                                    <span>John Doe</span>
                                    <span>MK 320,000</span>
                                    <span>3:45 PM</span>
                                </div>
                                <div class="bid-item">
                                    <span>Jane Smith</span>
                                    <span>MK 315,000</span>
                                    <span>3:42 PM</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#ITEM-002</td>
                        <td>HP Printer</td>
                        <td>MK 150,000</td>
                        <td>MK 180,000</td>
                        <td>Jane Smith</td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td>
                            <div class="bid-history">
                                <div class="bid-item">
                                    <span>Jane Smith</span>
                                    <span>MK 180,000</span>
                                    <span>2:30 PM</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Financial Overview -->
        <section class="section">
            <h2 class="section-title">Financial Overview</h2>
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">Total Revenue</div>
                    <div class="info-value">MK 2,450,000</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Pending Payments</div>
                    <div class="info-value">MK 180,000</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Completed Payments</div>
                    <div class="info-value">MK 2,270,000</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Service Fees</div>
                    <div class="info-value">MK 122,500</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Net Payout</div>
                    <div class="info-value">MK 2,327,500</div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>