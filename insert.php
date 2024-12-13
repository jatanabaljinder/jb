<?php
$con = mysqli_connect("localhost","mysqlroot","cis", "contact"); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO info (FirstName, LastName, Address, City, Province, PostalCode)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[address]','$_POST[city]','$_POST[province]','$_POST[postalcode]')";

if (!mysqli_query($con, $sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con)

?>
<!DOCTYPE html> 
<html>
<body>
<a href="address.php">Back</a>
</body>
</html>
