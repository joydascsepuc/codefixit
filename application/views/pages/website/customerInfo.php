<div class="container">
	<?php echo form_open('Action/customerInfo');?>
		<div class="form-group col-md-4">
	      <label for="inputState">Customer Name</label>
	      <select id="inputState" class="form-control">
	        <option selected>Batman</option>
	        <option>Superman</option>
	      </select>
	    </div>
	    <div class="form-group col-md-4">
	      <button type="submit" class="btn btn-primary">Submit</button>
	    </div>
	</form>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Serial</th>
	      <th scope="col">Customer Name</th>
	      <th scope="col">Product Name</th>
	      <th scope="col">Transection Type</th>
	      <th scope="col">Product Price</th>
	      <th scope="col">Date</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Batman</td>
	      <td>Gun</td>
	      <td>Sell</td>
	      <td>1500</td>
	      <td>2020/05/04</td>
	    </tr>
	  </tbody>
	</table>
</div>