<?php
// Start a session
session_start();

// Check if user is authenticated
if (isset($_SESSION['username'])) {
    // Return success response with username
    echo json_encode(['success' => true, 'username' => $_SESSION['username']]);
    exit;
} else {
    // Return error response
    echo json_encode(['success' => false]);
    exit;
}
?>
