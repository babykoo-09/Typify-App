<?php include '../../includes/header.php'; ?>

<div class="container fade-in">
    <div class="card" style="max-width: 400px; margin: 50px auto; padding: 25px;">
        <h1 style="text-align: center; margin-bottom: 25px;">Setting</h1>
        
        <div class="setting-menu">
            <a href="../profile/account.php" class="menu-item">Account</a>
            <a href="privacy.php" class="menu-item">Private ></a>
            <a href="language.php" class="menu-item">Language ></a>
            <a href="theme.php" class="menu-item">Theme Mode ></a>
            <a href="notifications.php" class="menu-item">Notifications ></a>
        </div>
    </div>
</div>

<style>
.menu-item {
    display: block; 
    padding: 15px; 
    border-bottom: 1px solid #eee; 
    text-decoration: none; 
    color: #333;
}
.menu-item:hover { background-color: #f0f0f0; }
</style>
<?php include '../../includes/footer.php'; ?>