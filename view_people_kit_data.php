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

$sql = " SELECT * FROM out_product_kit where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        


?>




 <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Release To: <?php  echo   $row["release_to"]; ?></h4>
                </div>
                <div class="card-body">
                  <p></p>
                  <form>
                    <div class="form-group">
                      <label>Number of Kit:</label>
                      <input type="text" placeholder="Number of Kit" class="form-control"  value="<?php  echo   $row["number_of_kit"]; ?>" disabled>
                    </div>
                    <div class="form-group">       
                      <label>Release To:</label>
                      <input type="text" placeholder=" " class="form-control"  value="<?php  echo   $row["release_to"]; ?>"  disabled />
                    </div>
					 <div class="form-group">       
                      <label>Date of Release:</label>
                      <input type="text" placeholder="" class="form-control"  value="<?php  echo   $row["month_release"]; ?> <?php  echo   $row["day_release"]; ?>,<?php  echo   $row["year_release"]; ?>" disabled />
                    </div>
					
					
					<div class="form-group">       
                      <label>Status:</label>
                      <input type="text" placeholder="" class="form-control"  value="<?php  echo   $row["status"]; ?>" disabled />
                    </div>
					
					
					<div class="form-group">       
                      <label>Remark:</label>
                      <input type="text" placeholder="" class="form-control"   value="<?php  echo   $row["remark"]; ?>"  disabled />
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
        <h5 class="modal-title" id="exampleModalLabel">Update:<?php  echo   $row["release_to"]; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
	   
	   <form action="view_people_kit_data_update.php?id=<?php echo$id;?>" method="POST">
	   
	    <div class="form-group">
                      <label>Number of Kit:</label>
                      <input type="number" placeholder="Name of the Product "name="number_kit" class="form-control" value="<?php  echo   $row["number_of_kit"]; ?>">
                    </div>
                    <div class="form-group">       
                      <label>Release To:</label>
                      <input type="text" placeholder=" " class="form-control" name="release_to"  	value="<?php  echo   $row["release_to"]; ?>" />
                    </div>
					 <div class="form-group">       
                      <label>Date Release:</label>
					  </br>
                      <select name="month_release" class="" required >
						  <option value="<?php  echo   $row["month_release"]; ?>"><?php  echo   $row["month_release"]; ?></option>
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
						  
						   <select name="day_release" class="" required >
						  <option value="<?php  echo   $row["day_release"]; ?>"><?php  echo   $row["day_release"]; ?></option>
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
						  
						   <select name="year_release" class="" required >
						  <option value="<?php  echo   $row["year_release"]; ?>"><?php  echo   $row["year_release"]; ?></option>
							  <option VALUE="2016">2016</option>
							  <option VALUE="2017">2017</option>
							  <option VALUE="2018">2018</option>
							  <option VALUE="2019">2019</option>
							<option VALUE="2020">2020</option>
						  </select>
                    </div>
					
			
					<div class="form-group">       
                      <label>Status:</label></br>
                      <select name="status" >
					   <option value="<?php  echo   $row["status"]; ?>"> <?php  echo   $row["status"]; ?> </option>
						<option VALUE="Unpaid">Unpaid</option>
					    <option VALUE="Paid">Paid</option>
					  
					  </select>
                    </div>
                    <div class="form-group">       
                     
					
					<label>Remark:</label><br>
                       
                  <textarea placeholder="Name of the Product" name="remark" class="form-control" >
				  
				  <?php  echo   $row["remark"]; ?>
				  
				  
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