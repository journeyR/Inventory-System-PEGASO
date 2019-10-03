
<?php

$id= $_GET['id'];
$product_name=$_POST['product_name'];
$product_quantity=$_POST['product_quantity'];
$product_description=$_POST['product_description'];
$product_expiration=$_POST['expiration_date'];
$product_kit=$_POST['kit'];

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


$sql = "UPDATE product SET name='$product_name',quantity='$product_quantity',description='$product_description',expiration_date='$product_expiration',kit='$product_kit' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("refresh:0 ;url=view_product.php?id=$id");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>