<div class="container">
	<?php echo form_open('Action/addAction');?>
		<div class="form-group col-md-4">
	      <label for="inputState">Customer Name</label>
	      <select id="inputState" class="form-control">
	        <option selected>Batman</option>
	        <option>Superman</option>
	      </select>
	    </div>

	    <div class="form-group col-md-4">
	      <label for="inputState">Product Name</label>
	      <select id="inputState" class="form-control">
	        <option selected>Gun</option>
	        <option>Computer</option>
	      </select>
	    </div>

	    <div class="form-group col-md-4">
	      <label for="inputState">Type</label>
	      <select id="inputState" class="form-control">
	        <option selected>Sell</option>
	        <option>Buy</option>
	      </select>
	    </div>

	    <div class="form-group col-md-4">
		  <label for="quantity">Quantity</label>
		  <input type="number" class="form-control" id="quantity" placeholder="Quantity">
		</div>
	</form>
</div>