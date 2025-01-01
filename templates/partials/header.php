<head>

</head>
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
                <button class="button login-btn" onclick="openModal('loginModal')">Login</button>
                <button class="button register-btn" onclick="openModal('registerModal')">Register</button>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('loginModal')">&times;</span>
            <h2>Login</h2>
            <form id="loginForm" method="post" action="/login">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="auth-button login-btn">Login</button>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal('registerModal')">&times;</span>
            <h2>Register</h2>
            <form id="registerForm" method="post" action="/register">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit" class="auth-button register-btn">Register</button>
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
</header>