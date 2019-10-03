<?php include ('header.php'); ?>


<!-- Button trigger modal -->

<center><h1>Release Product(s)</h1></center>
</br>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
 Kit(s)
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
 Individual Products(s)
</button>


<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#bco">
  Business Center Operator (BCO)
</button>

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mco">
  Mega Center Operator (MCO)
</button>
<!-- Modal -->
<form action="out_product_release.php" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Release Kit(s)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
		Number of kits:<input type="number" class="form-control" name="number_of_kit" placeholder="Number of Kits" REQUIRED aria-describedby="basic-addon1">
		Release to:<input type="Name" class="form-control" name="release_to" placeholder="Release to..." aria-describedby="basic-addon1" REQUIRED >
		Date: <div class="form-group">
 
  <select class="" id="sel1" name="month">
  <option Value="<?php echo date('F');?>"><?php echo date('F');?></option>
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
   <select class="" id="sel1" name="day">
      <option VALUE="<?php echo date('j');?>"><?php echo date('j');?></option>
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
   <select class="" id="sel1" name="year">
   <option VALUE="<?php echo date('Y');?>"><?php echo date('Y');?></option>
    <option VALUE="2016">2016</option>
    <option VALUE="2017">2017</option>
	<option VALUE="2018">2018</option>
	<option VALUE="2019">2019</option>
	<option VALUE="2020">2020</option>
  </select>
</div>
Status:</br>
<select class="" id="sel1" name="status">
    <option VALUE="Paid">Paid</option>`
    <option VALUE="Unpaid">Unpaid</option>

  </select>
  </br>
  Remark:
  <textarea name="remark" class="form-control">
  
  
  
  </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</form>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Release Individual Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="out_product_release_individual.php" method="POST" >
      <div class="modal-body">
        <?php
		$hostname ="localhost";
		$username ="root";
		$password="";
		$databaseName="pegaso"; 
		$connect=mysqli_connect($hostname,$username , $password,$databaseName);
		$query ="SELECT * FROM `product`";
		$result1 = mysqli_query($connect,$query);
		?>
		
		
		
		
		Product(s)
		<select class="form-control" name="name_of_product">
		<?php while ($row1 = mysqli_fetch_array($result1)):; ?>
		<option value="<?php echo $row1[0];?>"> <?php echo $row1[0];  ?></option> 
		<?php  endwhile; ?>
		</select>
		
		</br>Date: <div class="form-group">
 
  <select class="" id="sel1" name="month">
  <option Value="<?php echo date('F');?>"><?php echo date('F');?></option>
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
   <select class="" id="sel1" name="day">
      <option VALUE="<?php echo date('j');?>"><?php echo date('j');?></option>
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
   <select class="" id="sel1" name="year">
   <option VALUE="<?php echo date('Y');?>"><?php echo date('Y');?></option>
    <option VALUE="2016">2016</option>
    <option VALUE="2017">2017</option>
	<option VALUE="2018">2018</option>
	<option VALUE="2019">2019</option>
	<option VALUE="2020">2020</option>
  </select>
</div>
		Release to:<input type="text" class="form-control" name="release_to" placeholder="Release to..." aria-describedby="basic-addon1" REQUIRED >
		Quantity:<input type="Number" class="form-control" name="quantity" placeholder="Quantity" aria-describedby="basic-addon1" REQUIRED >
		Status: </br>
		<select name="status">
		<option value="Paid">Paid</option>
		<option value="Unpaid">Unpaid</option>
		</select></br>
		Remarks:
	<input type="text" class="form-control" name="remark" placeholder="remarks" aria-describedby="basic-addon1" >
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  
  </form>
</div>






<div class="modal fade" id="bco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Business Center Operator(MCO)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="mco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mega Center Operator(MCO)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include ('footer.php'); ?>





