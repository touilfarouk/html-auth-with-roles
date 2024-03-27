<?php
// Start a session
session_start();

// Check if user is authenticated
if (isset($_SESSION['username'])) {
    // Unset session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Return success response
    echo json_encode(['success' => true]);
    exit;
} else {
    // Return error response
    echo json_encode(['success' => false]);
    exit;
}
?>
