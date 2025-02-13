<?php
$mysqlhost = "localhost:3307"; //localhost 
$mysqluser = "root";
$mysqlpassword = "";
$mysqldb = "nextform";

$con = mysqli_connect($mysqlhost, $mysqluser, $mysqlpassword, $mysqldb);
if (!$con) {
    echo "database error";
    die;
}
$id=$_GET['id'];
$query="delete from customer where ID=$id";
mysqli_query($con,$query);
header("Location:customers_list.php");