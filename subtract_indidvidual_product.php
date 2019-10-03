<?php


$name=$_GET['name']."</br>";
$quantity=$_GET['quantity'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pegaso";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM product where name='{$_GET['name']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      	$subtract_kit= $row["quantity"]-$quantity;
	
	   
	   
	   $sql2 = "UPDATE product SET quantity='$subtract_kit' WHERE name='{$_GET['name']}' ";
	   if ($conn->query($sql2) === TRUE) {
		  
    header("refresh: 0; url =view_people_update_pay.php?id=$id"); 
   } else {
    echo "Error updating record: " . $conn->error;
}
    }
} else {
    echo "0 results";
}
$conn->close();

?>