<div class="container">
	<?php echo form_open('Action/addAction');?>
		<div class="form-group col-md-4">
	      <label for="customerName">Customer Name</label>
	      <select id="customerName" class="form-control" name="customerName" required>
		    <option selected value="">Choose...</option>
		    <?php foreach($customers as $customer):?>
	        	<option value="<?=$customer['id']?>"><?=$customer['name']?></option>
	    	<?php endforeach;?>
	      </select>
	    </div>

	    <div class="form-group col-md-4">
	      <label for="productname">Product Name</label>
	      <select id="productname" class="form-control" name="productname" required>
		    <option selected value="">Choose...</option>
		    <?php foreach($products as $product)?>
	        	<option value="<?=$product['id']?>"><?=$product['name']?></option>
	      </select>
	    </div>

	    <div class="form-group col-md-4">
	      <label for="sellState">Type</label>
		  <select id="sellState" class="form-control" name="sellState" required>
		    <option selected value="">Choose...</option>
	        <option value="1">Sell</option>
	        <option value="2">Buy</option>
	      </select>
	    </div>

	    <div class="form-group col-md-4">
		  <label for="quantity">Quantity</label>
		  <input type="number" class="form-control" id="quantity" name="quantity" required placeholder="Quantity">
		</div>

		<div class="form-group col-md-4">
			<button class="btn btn-success" type="submit">Submit</button>	
		</div>
		
	</form>
</div>