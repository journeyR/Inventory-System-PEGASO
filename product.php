<?php 
include ('header.php');
?>
<br/><h1> List of PEGASO Products</h1>
<?php
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
$sql = "SELECT * FROM product order by id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table class='table table-borderless table-striped table-earning'><center><tr><td><h5>ID</td><td><h5>Name of Product</td><td><h5>Quantity</td><td><h5	</td> </tr></br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><center><td>".$row["id"]."<td>".$row["name"]."</td>"."<td>".$row["quantity"]."</td><td>"."<a href='view_product.php?id=".$row["id"]."'>View Product</a>"."</tr>";
    }
    echo "</table>";
} else { 
    echo "No Data Found...";
}
$conn->close();
  
  
?>






<?php
include ('footer.php');


?>