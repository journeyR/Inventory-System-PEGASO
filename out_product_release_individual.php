<?php

$name_of_product=$_POST['name_of_product'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$release_to=$_POST['release_to'];
$quantity=$_POST['quantity'];
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

$sql = "INSERT INTO out_product_individual (name_of_product, quantity_product,release_to, released_month,released_day,released_year,status,remark)
VALUES ('$name_of_product', '$quantity', '$release_to', '$month', '$day',' $year','$status','$remark')";

if ($conn->query($sql) === TRUE) {
	echo "Programmer"; 
    header("refresh: 0; url = subtract_indidvidual_product.php?name=$name_of_product &quantity=$quantity &id=$id"); 
} 



else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}












$conn->close();
?>