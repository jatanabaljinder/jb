<?php
$link = mysqli_connect("localhost","mysqlroot","cis", "contact"); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$data = mysqli_query($link, "SELECT * FROM info"); 
?>

<!DOCTYPE html> 
<html>
<body>
<P>
<form style="color:000000" action="insert.php" method="post">
Firstname: <input type="text" name="firstname" /><br>
Lastname: <input type="text" name="lastname" /><br>
Address: <input type="text" name="address" /><br>
City: <input type="text" name="city" /><br>
Province: <input type="text" name="province" /><br>
Postal Code: <input type="text" name="postalcode" /><br>
<input type="submit" value="Add" name="Submit" />
</form>

<h2>The following people are now signed up for our newsletter.</br> If you do not see your name and wish to receive the monthly letter, <br>
please fill out your information above and click "Submit"</h2>
<br>
<?php 
    Print "<table style='color:000000' border cellpadding=3>"; 
    while($info = mysqli_fetch_array( $data, MYSQLI_ASSOC )) 
        { 
        Print "<tr>"; 
        Print "<th style='font-style:italic;'>Name:</th> <td style='color:000000'>".$info['FirstName']." ".$info['LastName']. "</td> ";
        }; 
    Print "</table>"; 
   mysqli_close()
?> 
</body>
</html>

