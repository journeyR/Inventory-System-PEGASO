<?php
$number_kit=$_POST['number_of_kit'];
$release_to=$_POST['release_to'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
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

$sql = "INSERT INTO out_product_kit (number_of_kit, release_to, month_release,day_release, year_release,status,remark)
VALUES ('$number_kit', '$release_to', '$month', '$day', '$year', '$status','$remark')";

if ($conn->query($sql) === TRUE) {
	echo "Programmer"; 
    header("refresh: 0; url = subtract_kit.php?kit=$number_kit"); 
} 



else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}












$conn->close();
?>