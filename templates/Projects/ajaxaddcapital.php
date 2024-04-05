<tr class="rawdelete_docdetails_class_<?php echo $j ?> capitaladding_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	    <td>
		<?php echo $this->Form->control('capital.'.$j.'.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $capital_drop, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>									
		<td>
		<?php echo $this->Form->control('capital.'.$j.'.duration', ['class' => 'form-control calculatevalue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','onkeyup'=>'calculatevalue()','data-rule-required'=>true,'data-msg-required'=>'Enter Duration']); ?>
		</td>
		<td>
		<?php echo $this->Form->control('capital.'.$j.'.quantity', ['class' => 'form-control workingquantity amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity','onkeyup'=>'calculateworkingquantity()','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity']); ?>
		</td>
		<td>
		<?php echo $this->Form->control('capital.'.$j.'.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','options'=>$units,'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select unit']); ?>
		</td>

        <td>
		<?php echo $this->Form->control('capital.'.$j.'.value', ['class' => 'form-control workingvalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','onkeyup'=>'calculateworkingvalue()','data-rule-required'=>true,'data-msg-required'=>'Enter Value']); ?>
		</td>

	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        //alert('hi');
        $('.rawdelete_docdetails_class_'+i).remove();
		//calculateasdTotal();
		calculateworkingquantity();
		calculateworkingvalue();
    }   
</script>