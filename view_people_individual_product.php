<?php include('header.php'); ?>


<br/><h1>Inventory of Products</h1>
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
$sql = "SELECT * FROM out_product_individual order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table class='table table-borderless table-striped table-earning'><center><tr><td><h5>ID</td><td><h5>Name of Product</td><td><h5>Quantity</td><td><h5>Release To:</td><td><h5>Date Release:</td><td></td><td><h5>Status:</td><td><h5	</td> </tr></br>";
    // output data of each rows
    while($row = $result->fetch_assoc()) {
		
        echo "<tr><center><td>".$row["id"]."<td>".$row["name_of_product"]."</td>"."<td>".$row["quantity_product"]."</td>"."<td>".$row["release_to"]."</td>"."<td>".$row["released_month"]." ".$row["released_day"].",".$row["released_year"]."</td><td>";
		
		
		if($row["status"]=='Unpaid')
			
			{
		 echo "<td style='color:red;'><b>".$row["status"]."</b></td>";
		
			}
			
			
			
			
			else
			{
				
					echo "<td style='color:green;'><b>".$row["status"]."</b></td>";
		
			}
		echo "<td>"."<a href='view_people_update_pay.php?id=".$row["id"]."'>View</a>"."</td>"."</tr>";
    }
    echo "</table>";
} else { 
    echo "No Data Found...";
}
$conn->close();
  
  
?>


<?php include('footer.php'); ?>