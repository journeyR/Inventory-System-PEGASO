<?php
include('database_connect.php');

$username = $_POST['loginUsername'];
$password = $_POST['loginPassword'];

$duplicate=mysqli_query($conn,"select * from user where username='$username' AND password='$password'");
if (mysqli_num_rows($duplicate)>0)
{
	
	 header("refresh:1 ;url=main_page.php");
echo "<a href='main_page.php'>  gwapo ko </a>";
}

  




else{

echo "blessed";

}
 

?>