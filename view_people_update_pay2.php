


<?php

$id= $_GET['id'];
$product_name=$_POST['product_name'];
$product_quantity=$_POST['product_quantity'];
$release_to=$_POST['release_to'];
$month=$_POST['month_release'];
$day=$_POST['release_day'];
$year=$_POST['release_year'];
$status=$_POST['status'];
$remark=$_POST['remark'];


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


$sql = "UPDATE out_product_individual SET name_of_product='$product_name',quantity_product='$product_quantity',release_to='$release_to',released_month='$month',released_day='$day',released_year='$year',status='$status',remark='$remark' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	?>
	
	
	
	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
</br></br></br></br></br></br></br></br>

<center>

<div class="loader"></div>
<center>
</body>
</html>

	
	
	
<?php
    header("refresh:0.5 ;url=view_people_update_pay.php?id=$id");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>