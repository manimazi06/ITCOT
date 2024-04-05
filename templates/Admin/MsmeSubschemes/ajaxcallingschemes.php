<option value="">Select MSME Schemes</option>
<?php foreach($Msmeschemes as $Msmescheme){  ?>
<option value = "<?php echo $Msmescheme['id']; ?>"><?php echo $Msmescheme['name']; ?></option>
<?php } ?>