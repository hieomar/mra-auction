<header>
    <nav>
        <div class="logo-container">
            <a href="/"><img src="../../public/images/logo.svg" alt="MRA Online Auction"></a>
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="/?page=home">Home</a></li>
                <li><a href="/?page=auctions">Auctions</a></li>
                <li><a href="/?page=about">About Us</a></li>
            </ul>
            <div class="auth-buttons">
                <button class="auth-button login-btn" onclick="openModal('loginModal')">Login</button>
                <button class="auth-button register-btn" onclick="openModal('registerModal')">Register</button>
            </div>
        </div>
    </nav>
</header>

<!-- Login Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal('loginModal')">&times;</span>
        <h2>Login</h2>
        <form id="loginForm">
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit" class="auth-button register-btn">Login</button>
        </form>
    </div>
</div>



<script>
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