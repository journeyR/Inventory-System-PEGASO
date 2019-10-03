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

$product_name=$_POST['name_product'];
$quantity_product=$_POST['quantity_of_product'];
$expiration_date=$_POST['expiration_date'];
$description=$_POST['description'];
$kit=$_POST['kit'];







$sql = "INSERT INTO product (name, quantity, expiration_date,description, kit) VALUES ('$product_name', '$quantity_product', '$expiration_date', '$description','$kit')";

if ($conn->query($sql) === TRUE) {
    echo "<a href='product.php'>New record created successfully</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>