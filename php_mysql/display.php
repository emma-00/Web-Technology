<?php
// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Initialize error messages
$error = "";
$perror = "";

// Check if email is empty
if (empty($email)) {
    $error = "Email is required";
}

// Check if password is empty
if (empty($password)) {
    $perror = "Password is required";
}

// If there are errors, redirect back to the form with error messages
if (!empty($error) || !empty($perror)) {
    header("Location: nextform.php?error=$error&perror=$perror");
    exit();
}

// Assuming form is valid, now forward data to dashboard.php
// Here you could also check if the credentials match with a database, for simplicity we just forward data
header("Location: dashboard.php?email=" . urlencode($email) . "&password=" . urlencode($password));
exit();
?>
