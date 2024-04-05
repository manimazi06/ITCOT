<tr class="rawdelete_docdetails_class_<?php echo $j ?> fixedadding_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	    <td>
		<?php echo $this->Form->control('fixed.'.$j.'.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $fixed, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>									
		<td>
		<?php echo $this->Form->control('fixed.'.$j.'.capital_value', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','onkeyup'=>'calculatevalue()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement']); ?>
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
        calculatevalue();
    }   
</script>