<?php
$number_of_kit=$_GET['kit'];


echo $number_of_kit.'<br>';

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
//coffee
$sql = "SELECT quantity  FROM product WHERE id=1";
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
    
	$subtract_kit= $row["quantity"]-$number_of_kit;
	
	   
	   
	   $sql2 = "UPDATE product SET quantity='$subtract_kit' WHERE id=1 ";
	   if ($conn->query($sql2) === TRUE) {
    header("refresh: 3; url = product.php"); 
   } else {
    echo "Error updating record: " . $conn->error;
}
	   
} 
	


	   	
 }
	
	
	
	
//juice	
$sql2 = "SELECT quantity  FROM product WHERE id=2";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
    
	$subtract_kit= $row["quantity"]-$number_of_kit;
	
	   
	   
	   $sql2 = "UPDATE product SET quantity='$subtract_kit' WHERE id=2";
	   if ($conn->query($sql2) === TRUE) {
    header("refresh: 3; url = product.php"); 
   } else {
    echo "Error updating record: " . $conn->error;
}
	   
} 
	


	   	
    }	
	


//liniment oil 
$sql3= "SELECT quantity  FROM product WHERE id=3";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) {
    
	$subtract_kit= $row["quantity"]-$number_of_kit;
	
	   
	   
	   $sql2 = "UPDATE product SET quantity='$subtract_kit' WHERE id=3";
	   if ($conn->query($sql2) === TRUE) {
    header("refresh: 3; url = product.php"); 
   } else {
    echo "Error updating record: " . $conn->error;
}
	   
} 
	


	   	
    }	

	
	
	
//liniment gel
$sql4= "SELECT quantity  FROM product WHERE id=4";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    // output data of each row
    while($row = $result4->fetch_assoc()) {
    
	$subtract_kit= $row["quantity"]-$number_of_kit;
	
	   
	   
	   $sql2 = "UPDATE product SET quantity='$subtract_kit' WHERE id=4";
	   if ($conn->query($sql2) === TRUE) {
    header("refresh: 3; url = product.php"); 
   } else {
    echo "Error updating record: " . $conn->error;
}
	   
} 
	


	   	
    }		
	
//charcoal soap
$sql5= "SELECT quantity  FROM product WHERE id=5";
$result5 = $conn->query($sql5);

if ($result5->num_rows > 0) {
    // output data of each row
    while($row = $result5->fetch_assoc()) {
    
	$subtract_kit= $row["quantity"]-$number_of_kit;
	
	   
	   
	   $sql2 = "UPDATE product SET quantity='$subtract_kit' WHERE id=5";
	   if ($conn->query($sql2) === TRUE) {
    header("refresh: 3; url = product.php"); 
   } else {
    echo "Error updating record: " . $conn->error;
}
	   
} 
	


	   	
    }	
	
	
	
	
//carrot soap 
$sql6= "SELECT quantity  FROM product WHERE id=6";
$result6 = $conn->query($sql6);

if ($result6->num_rows > 0) {
    // output data of each row
    while($row = $result6->fetch_assoc()) {
    
	$subtract_kit= $row["quantity"]-$number_of_kit;
	
	   
	   
	   $sql2 = "UPDATE product SET quantity='$subtract_kit' WHERE id=6";
	   if ($conn->query($sql2) === TRUE) {
    header("refresh: 3; url = product.php"); 
   } else {
    echo "Error updating record: " . $conn->error;
}
	   
} 
	


	   	
    }	
	

	
//gluta papay soap 
$sql7= "SELECT quantity  FROM product WHERE id=7";
$result7 = $conn->query($sql7);

if ($result7->num_rows > 0) {
    // output data of each row
    while($row = $result7->fetch_assoc()) {
    
	$subtract_kit= $row["quantity"]-$number_of_kit;
	
	   
	   
	   $sql2 = "UPDATE product SET quantity='$subtract_kit' WHERE id=7";
	   if ($conn->query($sql2) === TRUE) {
    header("refresh: 3; url = product.php"); 
   } else {
    echo "Error updating record: " . $conn->error;
}
	   
} 
	


	   	
    }	


 else {
    echo "0 results";
}
$conn->close();

?>