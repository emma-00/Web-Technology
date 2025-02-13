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
  }
  $result=mysqli_query($con,"select * from customer");
?>
  <table border="1">
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["First_name"]; ?></td>
            <td><?php echo $row["Last_name"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><a href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
        
         <?php } ?>
</table>