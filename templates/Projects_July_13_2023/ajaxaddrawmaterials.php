<tr class="rawdelete_docdetails_class_<?php echo $j ?> rawpresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td> 
		<td>
		  <?php echo $this->Form->control('raw.'.$j.'.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'data-msg-required'=>'Enter Item']); ?>
		</td>
		<td><?php echo $this->Form->control('raw.'.$j.'.quantity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity']); ?>
		</td>
		<td><?php echo $this->Form->control('raw.'.$j.'.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>
		<td><?php echo $this->Form->control('raw.'.$j.'.value', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value']); ?>
		</td>
		<td><?php echo $this->Form->control('raw.'.$j.'.revenue_year', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year']); ?>
		</td>
		<td><?php echo $this->Form->control('raw.'.$j.'.capacity_utilisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation']); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-danger btn-xs" style="margin-left:0px;width:75px;font-size:11px;">Remove</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.rawdelete_docdetails_class_'+i).remove();
		//calculateasdTotal();
    }   
</script>