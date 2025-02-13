<?php
//mysql information
  $mysqlhost = "localhost:3307"; //localhost 
  $mysqluser = "root";
  $mysqlpassword = "";
  $mysqldb = "nextform";

  $con = mysqli_connect($mysqlhost, $mysqluser, $mysqlpassword, $mysqldb);
  if (!$con) {
        echo "database error";
        die;
  } else {
    echo "connected to db\n";
  }
//   $query = "insert into customer(First_name,Last_name,Email,Password)values('john','nash','john.nash@gmail.com','Test1234')";
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$pass=$_POST['pass'];
$email=$_POST['email'];

if (empty($fname) || empty($lname) || empty($email) || empty($pass)) 
{
  $errorMessage = "All fields are required.";
  die;
}

  else {
    // Check if email already exists
    $checkQuery = "SELECT * FROM customer WHERE Email = '$email'";
    $result = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
      $errorMessage = "Email already exists. Please use a different email.";
      header("Location: register.php?error=Email%20already%20exists");
     exit();
    } 
    else {
        $query="insert into customer(First_name,Last_name,Email,Password)values('$fname','$lname','$email','$pass')";
    }
}
mysqli_query($con, $query);
  echo "inserted successfully";
  ?>
  
