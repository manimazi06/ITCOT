<tr class="productiondelete_docdetails_class_<?php echo $j ?> productionpresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	    <td>
		   <?php echo $this->Form->control('production.'.$j.'.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'data-msg-required'=>'Enter Item']); ?>
		</td>									
		<td><?php echo $this->Form->control('production.'.$j.'.quantity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Total Quantity / Year']); ?>
		</td>
		<td> <?php echo $this->Form->control('production.'.$j.'.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>
		<td><?php echo $this->Form->control('production.'.$j.'.revenue_year', ['class' => 'form-control amount revenue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Sales Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year','onkeyup'=>'calculaterevenue()','style'=>'text-align:end']); ?>
		</td>
		<td><?php echo $this->Form->control('production.'.$j.'.capacity_utilisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Year Passing','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation']); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-danger btn-xs" style="margin-left:0px;width:75px;font-size:11px;">Remove</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.productiondelete_docdetails_class_'+i).remove();
		//calculateasdTotal();
    }   
</script>