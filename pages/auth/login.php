<?php include '../../includes/header.php'; ?>

<div class="page-center fade-in">
    <div class="card auth-card">
        <h1>Login</h1>
        <p class="subtitle">Masuk ke akun Typify Anda</p>

        <form method="POST" action="/Typify-App-ellen/auth/login-process.php">
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan email" required>
                <small class="error-message"></small>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
                <small class="error-message"></small>
            </div>

            <div class="auth-links">
                <label style="display: flex; align-items: center; gap: 6px; font-size: 12px;">
                    <input type="checkbox" name="remember" style="width: 16px; height: 16px; cursor: pointer;">
                    Ingat saya
                </label>
                <a href="#" class="forgot-password-link">Lupa Password?</a>
            </div>

            <button type="submit" class="primary-btn">Login</button>
        </form>

        <div class="auth-divider">atau</div>

        <div class="social-auth">
            <button type="button" class="social-btn" title="Login dengan Google">🔵</button>
            <button type="button" class="social-btn" title="Login dengan Facebook">👤</button>
            <button type="button" class="social-btn" title="Login dengan GitHub">⭐</button>
        </div>

        <p style="text-align: center; font-size: 13px; margin-top: 20px; color: rgba(31, 41, 55, 0.7);">
            Belum punya akun? <a href="/Typify-App-ellen/pages/auth/register.php" class="auth-switch-link">Daftar di sini</a>
        </p>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>