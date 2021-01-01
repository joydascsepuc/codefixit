<div class="container">
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
	  	<?php $i=1;?>
	  	<?php foreach($data as $datum):?>
		    <tr>
		      <th><?=$i;?></th>
		      <td><?=$datum['customer_id']?></td>
		      <td><?=$datum['product_id']?></td>
		      <td><?=$datum['report']?></td>
		      <td><?=$datum['product_price']?></td>
		      <td><?=$datum['created_at']?></td>
		    </tr>
		<?php $i++;?>
		<?php endforeach;?>
	  </tbody>
	</table>
</div>