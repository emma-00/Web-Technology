<?php
// Check if the email and password are passed as query parameters
if (isset($_GET['email']) && isset($_GET['password'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    // Sanitize the data to avoid XSS attacks
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);
} else {
    // If no email or password are found, redirect to the login form
    header("Location: nextform.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    
    <div>
        <strong>Email:</strong> <?php echo $email; ?>
    </div>
    <div>
        <strong>Password:</strong> <?php echo $password; ?>
    </div>
    
    <p>You have successfully logged in!</p>
    
    <a href="logout.php">Logout</a>
</body>
</html>
