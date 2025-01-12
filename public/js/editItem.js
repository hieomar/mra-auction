function editItem(id) {
    // Get item data (replace with your actual API call)
    const itemData = {
        id: id,
        name: "Sample Item",
        description: "Sample Description",
        startingPrice: 50000,
        category: "electronics"
    };

    // Populate modal fields
    document.getElementById('editItemId').value = itemData.id;
    document.getElementById('editItemName').value = itemData.name;
    document.getElementById('editDescription').value = itemData.description;
    document.getElementById('editStartingPrice').value = itemData.startingPrice;
    document.getElementById('editCategory').value = itemData.category;

    // Show modal
    openModal('editItemModal');
}

function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

// Form submission handler
document.getElementById('editItemForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    // Implement your save logic here
    console.log('Saving item:', Object.fromEntries(formData));

    closeModal('editItemModal');
});

// Edit Station-manager details
function editStationManager(id) {
    // Get item data (replace with your actual API call)
    const stationManagerData = {
        id: id,
        firstname: "Sample Firstname",
        lastname: "Sample Lastname",
        email: "example@gmail.com",
        phone: "1234567890",
        station: "Lilongwe"
    };

    // Populate modal fields                
    document.getElementById('editManagerId').value = stationManagerData.id;
    document.getElementById('editmanagerFirstName').value = stationManagerData.firstname;
    document.getElementById('editmanagerLastName').value = stationManagerData.lastname;
    document.getElementById('editmanagerEmail').value = stationManagerData.email;
    document.getElementById('editManagerPhoneNumber').value = stationManagerData.phone;
    document.getElementById('editManagerStation').value = stationManagerData.station;

    // Show modal           
    openModal('editManagerModal');
}
