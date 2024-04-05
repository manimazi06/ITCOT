<tr class="complaince_docdetails_class_<?php echo $j ?> complaince_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	    <td>
		   <?php echo $this->Form->control('complaince.'.$j.'.product_name', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Products','data-rule-required'=>true,'data-msg-required'=>'Enter Item']); ?>
		</td>									
		<td><?php echo $this->Form->control('complaince.'.$j.'.capacity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity / Year','data-rule-required'=>true,'data-msg-required'=>'Capacity']); ?>
		</td>
		<td> <?php echo $this->Form->control('complaince.'.$j.'.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>
	
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.complaince_docdetails_class_'+i).remove();
		//calculateasdTotal();
    }   
</script>