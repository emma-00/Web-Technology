<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="display.php" method="POST">
    <div><label>Email</label>
    <input type="text" name="email"></div>
    <?php if(isset($_GET["error"])){
        echo $_GET["error"]; }
        ?>
    <div><label>Password</label>
    <input type="password" name="password">
</div>
<?php if(isset($_GET["perror"])){
        echo $_GET["perror"]; }
        ?>
<input type="submit" value="submit">
</form>
</body>
</html>