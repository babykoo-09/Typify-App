<?php
session_start();

if (!isset($_SESSION['username'])) {

  header('Location: ../auth/login.php');

    exit();

}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
$email    = isset($_SESSION['email'])    ? $_SESSION['email']    : 'No Email';

include '../../includes/header.php'; 
?>

<div class="container fade-in">
    <div class="card" style="max-width: 400px; margin: 50px auto; padding: 25px; text-align: center;">
        
        <div style="width: 100px; height: 100px; background: #ddd; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 40px; color: #555;">
            <?php echo substr($username, 0, 1); ?>
        </div>

        <h1 style="margin-bottom: 20px;">PROFILE</h1>
        
        <div style="text-align: left; margin-bottom: 25px;">
            <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Password:</strong> **********</p>
        </div>

        <div style="border-top: 1px solid #eee; padding-top: 15px;">
            <a href="account.php" style="display: block; padding: 10px; color: #333; text-decoration: none;">My account</a>
            <a href="../settings/settings.php" style="display: block; padding: 10px; color: #333; text-decoration: none;">Setting</a>
            <a href="../../auth/logout.php" style="display: block; padding: 10px; color: #ff4d4d; text-decoration: none;">Logout</a>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>