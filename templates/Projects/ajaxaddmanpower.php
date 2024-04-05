<tr class="rawdelete_docdetails_class_<?php echo $j ?> manadding_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	    <td>
		<?php echo $this->Form->control('manpower.'.$j.'.particular_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $manpower_particulars, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>									
		<td>
		<?php echo $this->Form->control('manpower.'.$j.'.numbers', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculatenumber()','data-rule-required'=>true,'data-msg-required'=>'Enter Number']); ?>
		</td>
		<td> 
		<?php echo $this->Form->control('manpower.'.$j.'.salaries', ['class' => 'form-control wages', 'templates' => ['inputContainer' => '{{content}}'],  'label' => false, 'error' => false,'onkeyup'=>'calculatewages()','data-rule-required'=>true]); ?>
		</td>

		<td>
		<?php echo $this->Form->control('manpower.'.$j.'.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'text']); ?>
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
		calculaterequirement();
		calculatenumber();
		calculatewages();
    }   
</script>