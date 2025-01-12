<?php $this->layout('layouts/main', ['title' => 'Admin Dashboard']) ?>

<div class="admin-dashboard">
    <div class="dashboard-header">
        <h1>Admin Dashboard</h1>
        <div class="header-actions">
            <div class="search-box">
                <input type="text" id="adminSearchInput" placeholder="Search...">
                <button id="searchButton">
                    <span>&#x1F50D;</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Admin Navigation -->
    <div class="admin-nav">
        <button class="tab-btn active" data-tab="items">Auction Items</button>
        <button class="tab-btn" data-tab="users">Users</button>
    </div>

    <!-- User Management Options (visible only when Users tab is active) -->
    <div id="userManagementOptions" class="user-management-options" style="display: none;">
        <div class="management-buttons">
            <button class="tab-btn" onclick="openModal('addManagerModal')">Add Manager</button>
            <button class="tab-btn" onclick="openModal('reportsModal')">Reports</button>
        </div>
        <div class="filters">
            <div class="filter-dropdown">
                <select id="userTypeFilter">
                    <option value="all">All Users</option>
                    <option value="bidder">Bidders</option>
                    <option value="manager">Station Managers</option>
                    <option value="admin">Admins</option>
                </select>
            </div>
            <div class="filter-dropdown">
                <select id="stationTypeFilter">
                    <option value="all">All Stations</option>
                    <option value="lilongwe">Lilongwe</option>
                    <option value="blantyre">Blantyre</option>
                    <option value="mzuzu">Mzuzu</option>
                </select>
            </div>
        </div>
    </div>


    <!-- Auction Items Tab -->
    <div class=" tab-content active" id="items-tab">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Starting Price</th>
                    <th>Current Bid</th>
                    <th>Station</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample item data -->
                <tr>
                    <td>#001</td>
                    <td><img src="https://api.algobook.info/v1/randomimage?category=computer" alt="Item" class="item-thumbnail"></td>
                    <td>Travel Backpack</td>
                    <td>MK50,000</td>
                    <td>MK75,000</td>
                    <td>Lilongwe Station</td>
                    <td><span class="status-active">Active</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="edit-btn" onclick="editItem(1)">Edit</button>
                            <button class="delete-btn" onclick="deleteItem(1)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Users Tab -->
    <div class="tab-content" id="users-tab">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample user data -->
                <tr>
                    <td>#U001</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Bidder</td>
                    <td><span class="status-active">Active</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="edit-btn" onclick="editStationManager(1)">Edit</button>
                            <button class="delete-btn" onclick="deleteUser(1)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- MODALS -->

<!-- Add Manager Modal
<?php $this->insert('partials/addManagerModal') ?>

<!-- Reports Modal -->
<div id="reportsModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal('reportsModal')">&times;</span>
        <h2>Reports</h2>
        <p>Reports go here...</p>
    </div>
</div>

<!-- Edit Item Modal -->
<style>
    .admin-dashboard {
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .admin-nav {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
        align-items: center;
    }

    .tab-btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: #f0f0f0;
    }

    .tab-btn.active {
        background-color: #094524;
        color: white;
    }

    .filter-dropdown {
        margin-left: auto;
    }

    .filter-dropdown select {
        padding: 0.5rem;
        border-radius: 4px;
        border: 1px solid #ddd;
    }

    .admin-table {
        width: 100%;
        border-collapse: collapse;
    }

    .admin-table th,
    .admin-table td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
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

    .user-management-options {
        margin: 1rem 0;
        padding: 1rem;
        background-color: #f8f9fa;
        border-radius: 4px;
    }

    .management-buttons {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .filters {
        display: flex;
        gap: 1rem;
    }
</style>

<script>
    // Tab switching functionality
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    const userManagementOptions = document.getElementById('userManagementOptions');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Add active class to clicked button and corresponding content
            button.classList.add('active');
            document.getElementById(`${button.dataset.tab}-tab`).classList.add('active');

            // Show/hide user management options based on active tab
            if (button.dataset.tab === 'users') {
                userManagementOptions.style.display = 'block';
            } else {
                userManagementOptions.style.display = 'none';
            }
        });
    });

    // User type filter functionality
    document.getElementById('userTypeFilter').addEventListener('change', function(e) {
        const filterValue = e.target.value;
        // Implement filtering logic here
        console.log('Filtering by:', filterValue);
    });

    // Search functionality
    document.getElementById('adminSearchInput').addEventListener('input', function(e) {
        const searchValue = e.target.value.toLowerCase();
        // Implement search logic here
        console.log('Searching for:', searchValue);
    });

    function editItem(id) {
        // Implement edit item functionality
        console.log('Editing item:', id);
    }

    function deleteItem(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            // Implement delete item functionality
            console.log('Deleting item:', id);
        }
    }


    function deleteUser(id) {
        if (confirm('Are you sure you want to delete this user?')) {
            // Implement delete user functionality
            console.log('Deleting user:', id);
        }
    }
</script>

<?php
$this->insert('partials/editItemModal');
$this->insert('partials/editStation-managerModal')
?>