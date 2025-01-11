<?php $this->layout('layouts/main', ['title' => 'Add Auction Item']) ?>

<div class="add-item-container">
    <h1>Add New Auction Item</h1>

    <form action="/?action=addItem" method="POST" enctype="multipart/form-data" class="add-item-form">
        <div class="form-group">
            <label for="itemName">Item Name*</label>
            <input type="text" id="itemName" name="itemName" required>
        </div>

        <div class="form-group">
            <label for="description">Description*</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="startingPrice">Starting Price (MK)*</label>
                <input type="number" id="startingPrice" name="startingPrice" min="0" required>
            </div>

            <div class="form-group">
                <label for="category">Category*</label>
                <select id="category" name="category" required>
                    <option value="">Select Category</option>
                    <option value="electronics">Electronics</option>
                    <option value="furniture">Furniture</option>
                    <option value="vehicles">Vehicles</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="endDate">End Date*</label>
                <input type="date" id="endDate" name="endDate" required>
            </div>

            <div class="form-group">
                <label for="endTime">End Time*</label>
                <input type="time" id="endTime" name="endTime" required>
            </div>
        </div>

        <div class="form-group">
            <label for="itemImage">Item Image*</label>
            <input type="file" id="itemImage" name="itemImage" accept="image/*" required>
            <div id="imagePreview" class="image-preview"></div>
        </div>

        <div class="form-actions">
            <button type="button" onclick="location.href='/?page=station-manager'" class="cancel-btn">Cancel</button>
            <button type="submit" class="submit-btn">Add Item</button>
        </div>
    </form>
</div>

<style>
    .add-item-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .add-item-form {
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

    label {
        font-weight: 600;
        color: #333;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="time"],
    select,
    textarea {
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
    }

    textarea {
        resize: vertical;
    }

    .image-preview {
        margin-top: 1rem;
        max-width: 200px;
        max-height: 200px;
    }

    .image-preview img {
        max-width: 100%;
        height: auto;
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
        margin-top: 1rem;
    }

    .submit-btn,
    .cancel-btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: 600;
    }

    .submit-btn {
        background-color: #094524;
        color: white;
    }

    .cancel-btn {
        background-color: #f8f9fa;
        color: #333;
    }
</style>

<script>
    document.getElementById('itemImage').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('imagePreview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
            }
            reader.readAsDataURL(file);
        }
    });
</script>