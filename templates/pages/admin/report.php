<?php $this->layout('layouts/main', ['title' => 'User Reports']) ?>

<div class="admin-reports-container">
    <!-- Report Header with Export Button -->
    <div class="reports-header">
        <h1>User Reports Dashboard</h1>
        <button id="exportPdfBtn" class="export-btn">
            <svg class="pdf-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
            </svg>
            Export PDF
        </button>
    </div>

    <div class="report-content">
        <!-- User Statistics Overview -->
        <section class="report-section">
            <h2 class="section-title">User Statistics Overview</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-label">Total Users</div>
                    <div class="stat-value">1,234</div>
                    <div class="stat-trend positive">+12% ↑</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Active Bidders</div>
                    <div class="stat-value">892</div>
                    <div class="stat-trend positive">+8% ↑</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Station Managers</div>
                    <div class="stat-value">15</div>
                    <div class="stat-trend neutral">0% →</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">New Users (This Month)</div>
                    <div class="stat-value">127</div>
                    <div class="stat-trend positive">+15% ↑</div>
                </div>
            </div>
        </section>

        <!-- User Activity Analysis -->
        <section class="report-section">
            <h2 class="section-title">User Activity Analysis</h2>
            <table class="activity-table">
                <thead>
                    <tr>
                        <th>User Type</th>
                        <th>Total Count</th>
                        <th>Active</th>
                        <th>Inactive</th>
                        <th>Activity Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bidders</td>
                        <td>892</td>
                        <td>750</td>
                        <td>142</td>
                        <td>84%</td>
                    </tr>
                    <tr>
                        <td>Station Managers</td>
                        <td>15</td>
                        <td>15</td>
                        <td>0</td>
                        <td>100%</td>
                    </tr>
                    <tr>
                        <td>Administrators</td>
                        <td>5</td>
                        <td>5</td>
                        <td>0</td>
                        <td>100%</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Recent User Registrations -->
        <section class="report-section">
            <h2 class="section-title">Recent User Registrations</h2>
            <table class="registrations-table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Registration Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#U001</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>Bidder</td>
                        <td>2024-01-15</td>
                        <td><span class="status-badge active">Active</span></td>
                    </tr>
                    <tr>
                        <td>#U002</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>Station Manager</td>
                        <td>2024-01-14</td>
                        <td><span class="status-badge active">Active</span></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- User Distribution by Region -->
        <section class="report-section">
            <h2 class="section-title">User Distribution by Region</h2>
            <table class="region-table">
                <thead>
                    <tr>
                        <th>Region</th>
                        <th>Total Users</th>
                        <th>Bidders</th>
                        <th>Station Managers</th>
                        <th>Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lilongwe</td>
                        <td>450</td>
                        <td>445</td>
                        <td>5</td>
                        <td>36.5%</td>
                    </tr>
                    <tr>
                        <td>Blantyre</td>
                        <td>380</td>
                        <td>375</td>
                        <td>5</td>
                        <td>30.8%</td>
                    </tr>
                    <tr>
                        <td>Mzuzu</td>
                        <td>270</td>
                        <td>265</td>
                        <td>5</td>
                        <td>21.9%</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>

<style>
    .admin-reports-container {
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .reports-header {
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

    .stat-trend {
        font-size: 0.9rem;
        padding: 4px 8px;
        border-radius: 12px;
        display: inline-block;
    }

    .stat-trend.positive {
        background: #e6f4ea;
        color: #137333;
    }

    .stat-trend.neutral {
        background: #f1f3f4;
        color: #5f6368;
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

    .activity-table,
    .registrations-table,
    .region-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    .activity-table th,
    .registrations-table th,
    .region-table th {
        background: #094524;
        color: white;
        padding: 12px;
        text-align: left;
    }

    .activity-table td,
    .registrations-table td,
    .region-table td {
        padding: 12px;
        border-bottom: 1px solid #e0e0e0;
    }

    .status-badge {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 0.85em;
    }

    .status-badge.active {
        background: #e6f4ea;
        color: #137333;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    document.getElementById('exportPdfBtn').addEventListener('click', function() {
        const element = document.querySelector('.report-content');
        const opt = {
            margin: 1,
            filename: 'user-reports.pdf',
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