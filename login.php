<?php
// Start a session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your users (replace with your actual user data)
    $users = array(
        'user1' => 'password1',
        'user2' => 'password2'
    );

    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user exists and the password matches
    if (array_key_exists($username, $users) && $users[$username] === $password) {
        // Authentication successful, set session variables
        $_SESSION['username'] = $username;

        // Return success response
        echo json_encode(['success' => true]);
        exit;
    } else {
        // Return error response
        echo json_encode(['success' => false]);
        exit;
    }
}
?>
