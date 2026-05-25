<?php
session_start();
require_once __DIR__ . '/../includes/db.php';

header('Content-Type: application/json');

// Get user ID before destroying session
$user_id = $_SESSION['user_id'] ?? null;

// Clear session
session_destroy();

// Clear remember token cookie
setcookie('remember_token', '', time() - 3600, '/', '', false, true);

// Update last logout time if needed
if ($user_id) {
    // Optional: log logout activity
    error_log("User $user_id logged out at " . date('Y-m-d H:i:s'));
}

echo json_encode([
    'status' => 'success',
    'message' => 'Logout berhasil'
]);
?>