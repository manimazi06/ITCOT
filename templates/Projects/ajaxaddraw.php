<tr class="rawdelete_docdetails_class_<?php echo $j ?> rawadding_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	    <td>
		<?php echo $this->Form->control('raw.'.$j.'.particular_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $utilities_particulars, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>									
		<td>
		<?php echo $this->Form->control('raw.'.$j.'.requirement', ['class' => 'form-control requirement num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement']); ?>
		</td>
		<td> 
		<?php echo $this->Form->control('raw.'.$j.'.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>
		<td>
		<?php echo $this->Form->control('raw.'.$j.'.expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','style'=>'text-align:end']); ?>
		</td>
		<td>
		<?php echo $this->Form->control('raw.'.$j.'.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'text']); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.rawdelete_docdetails_class_'+i).remove();
		//calculateasdTotal();
    }   
</script>