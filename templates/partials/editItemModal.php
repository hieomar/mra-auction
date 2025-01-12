<!-- Edit Item Modal -->
<div id="editItemModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal('editItemModal')">&times;</span>
        <h2>Edit Auction Item</h2>
        <form id="editItemForm" class="edit-item-form">
            <input type="hidden" id="editItemId" name="itemId">

            <div class="form-group">
                <label for="editItemName">Item Name*</label>
                <input type="text" id="editItemName" name="itemName" required>
            </div>

            <div class="form-group">
                <label for="editDescription">Description*</label>
                <textarea id="editDescription" name="description" rows="4" required></textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="editStartingPrice">Starting Price (MK)*</label>
                    <input type="number" id="editStartingPrice" name="startingPrice" min="0" required>
                </div>

                <div class="form-group">
                    <label for="editCategory">Category*</label>
                    <select id="editCategory" name="category" required>
                        <option value="">Select Category</option>
                        <option value="electronics">Electronics</option>
                        <option value="furniture">Furniture</option>
                        <option value="vehicles">Vehicles</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="editItemImage">Item Image</label>
                <input type="file" id="editItemImage" name="itemImage" accept="image/*">
                <div id="editImagePreview" class="image-preview"></div>
            </div>

            <div class="form-actions">
                <button type="button" onclick="closeModal('editItemModal')" class="cancel-btn">Cancel</button>
                <button type="submit" class="submit-btn">Save Changes</button>
            </div>
        </form>
    </div>
</div>