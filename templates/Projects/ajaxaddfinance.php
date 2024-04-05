<tr class="rawdelete_docdetails_class_<?php echo $j ?> financeadding_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	    <td>
		<?php echo $this->Form->control('finance.'.$j.'.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $finance_dropdown, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>									
		<td>
		<?php echo $this->Form->control('finance.'.$j.'.value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','onkeyup'=>'calculatefinancevalue()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement']); ?>
		</td>
		<td>
		<?php echo $this->Form->control('finance.'.$j.'.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks']); ?>
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
		calculatefinancevalue();
    }   
</script>