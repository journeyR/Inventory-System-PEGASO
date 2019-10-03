 	<?php include ('header.php') ?>		
 
 
<?php

$id = $_GET['id'];



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

$sql = "SELECT * FROM product WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        


?>




 <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4><?php  echo   $row["name"]; ?></h4>
                </div>
                <div class="card-body">
                  <p></p>
                  <form>
                    <div class="form-group">
                      <label>Name of the Product</label>
                      <input type="text" placeholder="Name of the Product" class="form-control"  value="<?php  echo   $row["name"]; ?>" disabled>
                    </div>
                    <div class="form-group">       
                      <label>Quantity of the Product in Stock</label>
                      <input type="text" placeholder=" " class="form-control"  value="<?php  echo   $row["quantity"]; ?>"  disabled />
                    </div>
					 <div class="form-group">       
                      <label>Description</label>
                      <input type="text" placeholder="" class="form-control"  value="<?php  echo   $row["description"]; ?>" disabled />
                    </div>
					
					
					<div class="form-group">       
                      <label>Kit</label>
                      <input type="text" placeholder="" class="form-control"  value="<?php  echo   $row["kit"]; ?>" disabled />
                    </div>
					
					
					<div class="form-group">       
                      <label>Expiration Date</label>
                      <input type="date" placeholder="" class="form-control"   value="<?php  echo   $row["expiration_date"]; ?>"  disabled />
                    </div>
                    <div class="form-group">       
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Update
</button>  <input type="submit" value="Delete" class="btn btn-secondary">
                    </div>
                  </form>
                </div>
              </div>
            </div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
	   
	   <form action="view_product_update.php?id=<?php echo$id;?>" method="POST">
	   
	    <div class="form-group">
                      <label>Name of the Product</label>
                      <input type="text" placeholder="Name of the Product"name="product_name" class="form-control" value="<?php  echo   $row["name"]; ?>">
                    </div>
                    <div class="form-group">       
                      <label>Quantity of the Product in Stock</label>
                      <input type="text" placeholder=" " class="form-control" name="product_quantity"  	value="<?php  echo   $row["quantity"]; ?>" />
                    </div>
					 <div class="form-group">       
                      <label>Description</label>
                      <input type="text" placeholder="" class="form-control"  name= "product_description" value="<?php  echo   $row["description"]; ?>" />
                    </div>
					
			
					<div class="form-group">       
                      <label>Expiration Date</label>
                      <input type="date" placeholder="" class="form-control"  name="expiration_date" value="<?php  echo   $row["expiration_date"]; ?>" />
                    </div>
                    <div class="form-group">       
                     
					
					<label> Part of Kit or Not!</label>
                        <select name="kit" class="form-control" required >
						  <option value="<?php  echo   $row["kit"]; ?>"><?php  echo   $row["kit"]; ?></option>
                          <option value="not a Kit">Not a Kit </option>
                          <option value="kit">Kit</option>
                        
                        </select>
                      </div>
					 
					 
				
                  
	   
	   

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" value="edit" class="btn btn-primary">Save changes</button>
		</form>
      </div>
    </div>
  </div>
</div>


<?php


  }
} else {
    echo "0 results";
}
$conn->close();

?>
			
			
			
	<?php include ('footer.php') ?>		