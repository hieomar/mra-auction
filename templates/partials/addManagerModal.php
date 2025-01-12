<!-- Add Manager Modal -->
<div id="addManagerModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal('addManagerModal')">&times;</span>
        <h2>Add Station Manager</h2>
        <form id="addManagerForm" class="add-manager-form">
            <div class="form-group">
                <label for="managerManagerImage">Item Image</label>
                <input type="file" id="managerImage" name="managerImage" accept="image/*">
                <div id="editImagePreview" class="image-preview"></div>
            </div>

            <div class="form-group ">
                <label for="managerName">First Name*</label>
                <input type="text" id="managerFirstName" name="managerFirstName" required>
            </div>

            <div class="form-group">
                <label for="managerName">Last Name*</label>
                <input type="text" id="managerLastName" name="managerLastName" required>
            </div>

            <div class="form-group">
                <label for="managerEmail">Email*</label>
                <input type="email" id="managerEmail" name="managerEmail" required>
            </div>

            <div class="form-group">
                <label for="managerEmail">Phone Number*</label>
                <input type="tel" id="managerPhoneNumber" name="managerPhoneNumber" required>
            </div>
            <div class="form-group">
                <label for="managerStation">Station*</label>
                <select id="managerStation" name="managerStation" required>
                    <option value="">Select Station</option>
                    <option value="lilongwe">Lilongwe</option>
                    <option value="blantyre">Blantyre</option>
                    <option value="mzuzu">Mzuzu</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="button" onclick="closeModal('addManagerModal')" class="cancel-btn">Cancel</button>
                <button type="submit" class="submit-btn">Add Manager</button>
            </div>
    </div>
</div>