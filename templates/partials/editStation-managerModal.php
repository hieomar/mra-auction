<!-- Edit Station Manager Modal -->
<div id="editManagerModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal('editManagerModal')">&times;</span>
        <h2>Edit Station Manager Details</h2>
        <form id="editManagerForm" class="add-manager-form">
            <input type="hidden" id="editManagerId" name="managerId">

            <div class="form-group">
                <label for="editManagerImage">Item Image</label>
                <input type="file" id="editManagerImage" name="managerImage" accept="image/*">
                <div id="editImagePreview" class="image-preview"></div>
            </div>

            <div class="form-group">
                <label for="editmanagerFirstName">First Name*</label>
                <input type="text" id="editmanagerFirstName" name="managerFirstName" required>
            </div>

            <div class="form-group">
                <label for="editmanagerLastName">Last Name*</label>
                <input type="text" id="editmanagerLastName" name="managerLastName" required>
            </div>

            <div class="form-group">
                <label for="managerEmail">Email*</label>
                <input type="email" id="editmanagerEmail" name="managerEmail" required>
            </div>

            <div class="form-group">
                <label for="editManagerPhoneNumber">Phone Number*</label>
                <input type="tel" id="editManagerPhoneNumber" name="managerPhoneNumber" required>
            </div>
            <div class="form-group">
                <label for="editManagerStation">Station*</label>
                <select id="editManagerStation" name="managerStation" required>
                    <option value="">Select Station</option>
                    <option value="lilongwe">Lilongwe</option>
                    <option value="blantyre">Blantyre</option>
                    <option value="mzuzu">Mzuzu</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="button" onclick="closeModal('editManagerModal')" class="cancel-btn">Cancel</button>
                <button type="submit" class="submit-btn">Save Changes</button>
            </div>
        </form>
    </div>
</div>