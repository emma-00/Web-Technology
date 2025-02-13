<html>
    <style>
        div {
            margin: 10px 0;
        }
    </style>
    <body>
        <!-- Display error message if it exists -->
        <?php 
        if (isset($_GET['error'])) { 
            echo "<p style='color:red;'>" . htmlspecialchars($_GET['error']) . "</p>";
        } 
        ?>

        <form action="db.php" method="POST">
            <div>
                <label>Firstname</label>
                <input type="text" name="first_name" value="<?php echo isset($_GET['fname']) ? htmlspecialchars($_GET['fname']) : ''; ?>">
            </div>
            <div>
                <label>Lastname</label>
                <input type="text" name="last_name" value="<?php echo isset($_GET['lname']) ? htmlspecialchars($_GET['lname']) : ''; ?>">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>">
            </div>
            <div>
                <label>Password</label>
                <input type="text" name="pass" value="<?php echo isset($_GET['pass']) ? htmlspecialchars($_GET['pass']) : ''; ?>">
            </div>
            <input type="submit" value="Signup">
        </form>
    </body>
</html>
