<?php include('header.php');?>

<div class="col-lg-10">
              <div class="card">
                
               
              </div>
			  
			  
			  
			  
			  
			  <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Add New Product </h4>
                </div>
                <div class="card-body">
                  <p>he</p>
				  <form action="add_product.php" method="POST">
                  <div class="form-group">
                      <label>Name of the Product</label>
                      <input id="inlineFormInput" type="text" name="name_product" placeholder="Name of the product" class="mr-3 form-control" required>

                    </div>
					
					
					
					
					
					  <div class="form-group">
                      <label>Quantity of the Products</label>
                      <input id="inlineFormInputGroup" type="number" name="quantity_of_product" placeholder="Quantity" class="mr-3 form-control form-control"required >
                    </div>
					
					
					
					<div class="form-group">
                      <label> Expiration Date</label>
                      <input id="inlineFormInputGroup" name="expiration_date" type="date" placeholder="Expiration Date" class="mr-3 form-control form-control" required>
                    </div>
					
                    <div class="form-group">
                      <label> Description of the Product</label>
					  
                      <input id="inlineFormInputGroup" name="description" type="text" placeholder="Description" class="mr-3 form-control form-control" required>
                    </div>
					
					
					
					<div class="form-group">
					<label> Part of Kit or Not!</label>
                        <select name="kit" class="form-control" required >
						  <option value=""> </option>
                          <option value="not a kit">Not a Kit </option>
                          <option value="kit">Kit</option>
                        
                        </select>
                      </div>
					
					
                       <div class="form-group">
                      <input type="submit" value="Submit" class="mr-3 btn btn-primary">
                    </div>
					
					
                  </form>
                </div>
              </div>
			  
			  
			  
			  
			  
			  
            </div>
			
			
			
			
			
			
<?php include('footer.php');?>