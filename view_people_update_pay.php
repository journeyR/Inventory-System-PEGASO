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

$sql = "SELECT * FROM out_product_individual WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        


?>



 <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4><?php  echo   $row["release_to"]; ?></h4>
                </div>
                <div class="card-body">
                  <p></p>
                  <form>
                    <div class="form-group">
                      <label>Name of the Product</label>
                      <input type="text" placeholder="Name of the Product" class="form-control"  value="<?php  echo   $row["name_of_product"]; ?>" disabled>
                    </div>
                    <div class="form-group">       
                      <label>Quantity of the Product</label>
                      <input type="text" placeholder=" " class="form-control"  value="<?php  echo   $row["quantity_product"]; ?>"  disabled/>
                    </div>
					 <div class="form-group">       
                      <label>Release To:</label>
                      <input type="text" placeholder="" class="form-control"  value="<?php  echo   $row["release_to"]; ?>" disabled />
                    </div>
					
					
					<div class="form-group">       
                      <label>Date Release:</label></br>
                       <select name="released_month" class="" required disabled >
						  <option value="<?php  echo   $row["released_month"]; ?>"><?php  echo   $row["released_month"]; ?></option>
                          <option Value="">January</option>
    <option value="">February</option>	
	 <option value="">March</option>
    <option value="">April</option>
    <option value="">May</option>
    <option value="">June</option>
    <option value="">July</option>
    <option value="">August</option>
    <option value="">September</option>
    <option value="">October</option>
	<option value="">November</option>
	<option value="">December</option>
						  </select>
						   <select name="released_day" class="" required disabled>
						  <option value="<?php  echo   $row["released_day"]; ?>"><?php  echo   $row["released_day"]; ?></option>
                         <option VALUE="1">1</option>
    <option VALUE="2">2</option>
    <option VALUE="3">3</option>
    <option VALUE="4" >4</option>
	<option VALUE="5" >5</option>
	<option VALUE="6" >6</option>
	<option VALUE="7" >7</option>
	<option VALUE="8" >8</option>
	<option VALUE="9" >9</option>
	<option VALUE="10" >10</option>
	<option VALUE="11" >11</option>
	<option VALUE="12" >12</option>
	<option VALUE="13" >13</option>
	<option VALUE="14" >14</option>
	<option VALUE="15" >15</option>
	<option VALUE="16" >16</option>
	<option VALUE="17" >17</option>
	<option VALUE="18" >18</option>
	<option VALUE="19" >19</option>
	<option VALUE="20" >20</option>
	<option VALUE="21" >21</option>
	<option VALUE="22" >22</option>
	<option VALUE="23" >23</option>
	<option VALUE="24" >24</option>
	<option VALUE="25" >25</option>
	<option VALUE="26" >26</option>
	<option VALUE="27" >27</option>
	<option VALUE="28" >28</option>
	<option VALUE="29" >29</option>
	<option VALUE="30" >30</option>
	<option VALUE="31" >31</option>
						  </select>
						   <select name="released_year" class="" required disabled >
						  <option value="<?php  echo   $row["released_year"]; ?>"><?php  echo   $row["released_year"]; ?></option>
                          <option value="not a Kit">Not a Kit </option>
                          <option value="kit">Kit</option>
						  </select>
                    </div>
                    <div class="form-group">       
                      <label>Status:</label></br>
                       <select name="status" class="" required disabled >
						  <option value="<?php c ?>"><?php  echo   $row["status"]; ?></option>
                          <option value="Paid">Paid</option>
                          <option value="Unpaid">Unpaid</option>
						</select> 
						</br>
					
                    </div>
                 
                   <div class="form-group">
                      <label>Remarks:</label>
                      <input type="text" placeholder="remark" class="form-control"  value="<?php  echo   $row["remark"]; ?>"  DISABLED />
					  </br>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Update
</button> 
						</br>
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
        <h5 class="modal-title" id="exampleModalLabel">Update: <?php  echo   $row["release_to"]; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
	   
	   <form action="view_people_update_pay2.php?id=<?php echo$id;?>" method="POST">
	   
	    <div class="form-group">
                      <label>Name of the Product:</label>
                      <input type="text" placeholder="Name of the Product" name="product_name" class="form-control" value="<?php  echo   $row["name_of_product"]; ?>">
                    </div>
                    <div class="form-group">       
                      <label>Quantity of the Product:</label>
                      <input type="text" placeholder=" " class="form-control" name="product_quantity"  	value="<?php  echo   $row["quantity_product"]; ?>" />
                    </div>
					 <div class="form-group">       
                      <label>Release To:</label>
                      <input type="text" placeholder="" class="form-control"  name= "release_to" value="<?php  echo   $row["release_to"]; ?>" />
                    </div>
					
			
					<div class="form-group">       
                      <label>Date Release:</label>
                       </br>
                      <select name="month_release" class="" required >
						  <option value="<?php  echo   $row["released_month"]; ?>"><?php  echo   $row["released_month"]; ?></option>
                           <option Value="January">January</option>
						<option value="February">February</option>
						 <option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
						  </select>
						  
						   <select name="release_day" class="" required >
						  <option value="<?php  echo   $row["released_day"]; ?>"><?php  echo   $row["released_day"]; ?></option>
                        <option VALUE="1">1</option>
						<option VALUE="2">2</option>
						<option VALUE="3">3</option>
						<option VALUE="4" >4</option>
						<option VALUE="5" >5</option>
						<option VALUE="6" >6</option>
						<option VALUE="7" >7</option>
						<option VALUE="8" >8</option>
						<option VALUE="9" >9</option>
						<option VALUE="10" >10</option>
						<option VALUE="11" >11</option>
						<option VALUE="12" >12</option>
						<option VALUE="13" >13</option>
						<option VALUE="14" >14</option>
						<option VALUE="15" >15</option>
						<option VALUE="16" >16</option>
						<option VALUE="17" >17</option>
						<option VALUE="18" >18</option>
						<option VALUE="19" >19</option>
						<option VALUE="20" >20</option>
						<option VALUE="21" >21</option>
						<option VALUE="22" >22</option>
						<option VALUE="23" >23</option>
						<option VALUE="24" >24</option>
						<option VALUE="25" >25</option>
						<option VALUE="26" >26</option>
						<option VALUE="27" >27</option>
						<option VALUE="28" >28</option>
						<option VALUE="29" >29</option>
						<option VALUE="30" >30</option>
						<option VALUE="31" >31</option>
						  </select>
						  
						   <select name="release_year" class="" required >
						  <option value="<?php  echo   $row["released_year"]; ?>"><?php  echo   $row["released_year"]; ?></option>
							  <option VALUE="2016">2016</option>
							  <option VALUE="2017">2017</option>
							  <option VALUE="2018">2018</option>
							  <option VALUE="2019">2019</option>
							<option VALUE="2020">2020</option>
						  </select>
                    </div>
                    <div class="form-group">       
                     
					
					<label> Status</label>
					</br>
                        <select name="status" class="" required >
						  <option value="<?php  echo   $row["status"]; ?>"><?php  echo   $row["status"]; ?></option>
                          <option value="Unpaid">Unpaid</option>
                          <option value="Paid">Paid</option>
                        
                        </select>
                      </div>
					  
					  <div class="form-group">
					  <label>Remarks:</label>
					  <textarea class="form-control" name="remark" >
					  <?php  echo   $row["remark"];?>
					  </textarea>
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