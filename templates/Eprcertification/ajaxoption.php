<option value=''>Select Category </option>
<?php foreach($wasteCategories as $wasteCategory){ ?>
	<option value='<?php echo $wasteCategory['id'];?>'><?php echo $wasteCategory['name'];?></option>
<?php } ?>
