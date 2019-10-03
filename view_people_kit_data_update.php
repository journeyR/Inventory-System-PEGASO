<?php

$id= $_GET['id'];


$kit=$_POST['number_kit'];
$release_to=$_POST['release_to'];
$month=$_POST['month_release'];
$day=$_POST['day_release'];
$year=$_POST['year_release'];
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


$sql = "UPDATE out_product_kit SET number_of_kit='$kit',release_to='$release_to',month_release='$month',day_release='$day',year_release='$year',status='$status',remark='$remark' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("refresh:0 ;url=view_people_kit_data.php?id=$id");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>