<?php
session_start();
// Check if username and password are correct
if ($username === 'admin' && $password === 'password') {
    // Set session variable
    $_SESSION['loggedin'] = true;
    // Redirect to menu page
    header('Location: menu.html');
    exit;
} else {
    echo 'Incorrect username or password. Please try again.';
}
?>
