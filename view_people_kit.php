<?php include('header.php'); ?>



yahooo succesfull ko nga pag tawo 


<br/><h1>Inventory of kits </h1>
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
$sql = "SELECT * FROM out_product_kit order by id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table class='table table-borderless table-striped table-earning'><center><tr><td><h5>ID</td><td><h5>Number of Kit(s)</td><td><h5>Release To:</td><td><h5>Date Release:</td><td></td><td><h5>Status:</td><td><h5	</td> </tr></br>";
    // output data of each rows
    while($row = $result->fetch_assoc()) {
        echo "<tr><center><td>".$row["id"]."<td>".$row["number_of_kit"]."</td>"."<td>".$row["release_to"]."</td>"."<td>".$row["month_release"]." ".$row["day_release"].",".$row["year_release"]."</td><td>";
		
	if($row["status"]=='Unpaid' or $row["status"]=='UNPAID')
			
			{
		 echo "<td style='color:red;'><b>".$row["status"]."</b></td>";
		
			}
			
			
			
			
			else
			{
				
					echo "<td style='color:green;'><b>".$row["status"]."</b></td>";
		
			}
		echo "<td>"."<a href='view_people_kit_data.php ?id=".$row["id"]."'>View</a>"."</td>"."</tr>";
    }
    echo "</table>";
} else { 
    echo "No Data Found...";
}
$conn->close();
  
  
?>


<?php include('footer.php'); ?>