<div class="container">
	<div class="row">
		<div class="col-md-6">
			<p class="bg-info p-2" style="font-size: 1.2rem;">Total Product Purchased</p>
			<?php $alltotal = 0;?>
			<?php foreach($purchases as $purchase):?>
				<?php $alltotal += $purchase['total']; ?>
			<?php endforeach;?>
			<p><?=$alltotal?></p>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Serial</th>
			      <th scope="col">Time</th>
			      <th scope="col">Amount</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i=1;?>
			  	<?php foreach($purchases as $purchase):
			  		$monthNum = $purchase['month'];
					$dateObj   = DateTime::createFromFormat('!m', $monthNum);
					$monthName = $dateObj->format('F'); ?>
				    <tr>
				      <th><?=$i;?></th>
				      <td><?php echo $monthName.','.$purchase['year'];?></td>
				      <td><?=$purchase['total'];?></td>
				    </tr>
				<?php $i++; endforeach;?>
			  </tbody>
			</table>
		</div>
		<div class="col-md-6">
			<p class="bg-primary p-2" style="font-size: 1.2rem;">Total Product Sales</p>
			<?php $alltotal = 0;?>
			<?php foreach($sales as $sale):?>
				<?php $alltotal += $sale['total']; ?>
			<?php endforeach;?>
			<p><?=$alltotal?></p>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Serial</th>
			      <th scope="col">Time</th>
			      <th scope="col">Amount</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php $k=1;?>
			  	<?php foreach($sales as $sale):
			  		$monthNum = $sale['month'];
					$dateObj   = DateTime::createFromFormat('!m', $monthNum);
					$monthName = $dateObj->format('F'); ?>
				    <tr>
				      <th><?=$k;?></th>
				      <td><?php echo $monthName.','.$sale['year'];?></td>
				      <td><?=$sale['total'];?></td>
				    </tr>
				<?php $k++; endforeach;?>
			  </tbody>
			</table>
		</div>
	</div>
</div>



<!-- <?php var_dump($purchases); ?> -->