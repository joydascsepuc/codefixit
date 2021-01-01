<div class="container">
	<?php echo form_open('Action/customerInfo');?>
		<div class="form-group col-md-4">
	      <label for="customerName">Customer Name</label>
	      <select id="customerName" class="form-control" name="customerName" required>
		    <?php foreach($customers as $customer):?>
	        	<option value="<?=$customer['id']?>"><?=$customer['name']?></option>
	    	<?php endforeach;?>
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
	  <?php if($sales != NULL):?>
		  <tbody>
		  	<?php $i = 1;?>
		  	<?php foreach($sales as $sale):?>
			    <tr>
			      <th><?=$i;?></th>
			      <td><?=$sale['customer_id'];?></td>
			      <td><?=$sale['product_id'];?></td>
			      <td>Sell</td>
			      <td><?=$sale['product_price']?></td>
			      <td><?=$sale['created_at'];?></td>
			    </tr>
			<?php $i++;?>
			<?php endforeach;?>
		  </tbody>
	  <?php endif;?>
	  <?php if($purchases != NULL):?>
		  <tbody>
		  	<?php foreach($purchases as $purchase):?>
			    <tr>
			      <th><?=$i;?></th>
			      <td><?=$purchase['customer_id'];?></td>
			      <td><?=$purchase['product_id'];?></td>
			      <td>Purchased</td>
			      <td><?=$purchase['product_price']?></td>
			      <td><?=$purchase['created_at'];?></td>
			    </tr>
			<?php $i++;?>
			<?php endforeach;?>
		  </tbody>
	  <?php endif;?>
	</table>
</div>
