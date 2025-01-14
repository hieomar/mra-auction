<?php $this->layout('layouts/main', ['title' => 'Station Manager - Auction Items']) ?>

<div class="manager-container">
    <!-- Header Section -->
    <div class="manager-header">
        <h1>Station Manager Dashboard</h1>
        <div class="header-actions">
            <div class="search-box">
                <input type="text" id="managerSearchInput" placeholder="Search items...">
                <button id="searchButton">
                    <span>&#x1F50D;</span>
                </button>
            </div>
            <button class="add-item-btn" onclick="location.href='/?page=addItem'">
                <span>+</span> Add New Item
            </button>
            <button class="export-btn" onclick="location.href='/?page=auction-report'">
                <span>Export Report</span>
            </button>
        </div>
    </div>

    <!-- Items Table -->
    <div class="items-table-container">
        <table class="items-table">
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Starting Price</th>
                    <th>Current Bid</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Items -->
                <tr>
                    <td>#001</td>
                    <td><img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Item" class="item-thumbnail"></td>
                    <td>Travel Backpack</td>
                    <td>MK50,000</td>
                    <td>MK75,000</td>
                    <td><span class="status-active">Active</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="edit-btn" onclick="editItem(1)">Edit</button>
                            <button class=" delete-btn" onclick="deleteItem(1)">Delete</button>
                        </div>
                    </td>
                </tr>
                <!-- Add more items here -->
            </tbody>
        </table>
    </div>
</div>

<?php $this->insert('partials/editItemModal') ?>
<style>
    .manager-container {
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .manager-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .header-actions {
        display: flex;
        gap: 1rem;
    }

    .search-box {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .search-box input {
        padding: 0.5rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 300px;
    }

    .add-item-btn,
    .export-btn {
        background-color: #094524;
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .items-table-container {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .items-table {
        width: 100%;
        border-collapse: collapse;
    }

    .items-table th,
    .items-table td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    .items-table th {
        background-color: #f8f9fa;
        font-weight: 600;
    }

    .item-thumbnail {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 4px;
    }

    .status-active {
        background-color: #e6f4ea;
        color: #137333;
        padding: 0.25rem 0.5rem;
        border-radius: 12px;
        font-size: 0.875rem;
    }

    .action-buttons {
        display: flex;
        gap: 0.5rem;
    }

    .edit-btn,
    .delete-btn {
        padding: 0.25rem 0.75rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .edit-btn {
        background-color: #e3f2fd;
        color: #1976d2;
    }

    .delete-btn {
        background-color: #ffebee;
        color: #d32f2f;
    }

    .edit-item-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .image-preview {
        margin-top: 1rem;
        max-width: 200px;
    }
</style>

<script>
    function editItem(id) {
        // Implement edit functionality
        window.location.href = `/?page=editItem&id=${id}`;
    }

    function deleteItem(id) {
        if (confirm(' Are you sure you want to delete this item?')) {
            // Implement delete functionality
            console.log('Deleting item:', id);
        }
    }

    // Search functionality
    document.getElementById('managerSearchInput').addEventListener('input', function(e) {
        const searchValue = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('.items-table tbody tr');

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchValue) ? '' : 'none';
        });
    });
    // Same JavaScript code as above
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
        }
    }
</script>