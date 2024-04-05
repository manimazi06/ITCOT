<tr class="workdelete_docdetails_class_<?php echo $j ?> workpresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>	    
		<td><?php echo $this->Form->control('work.'.$j.'.organisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Organisation','data-rule-required'=>true,'data-msg-required'=>'Enter Organisation']); ?>
		</td>
		 <td><?php echo $this->Form->control('work.'.$j.'.position', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Position','data-rule-required'=>true,'data-msg-required'=>'Enter Position']); ?>
		</td>
		 <td><?php echo $this->Form->control('work.'.$j.'.nature_work', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Nature of Work','data-rule-required'=>true,'data-msg-required'=>'Enter Nature of Work']); ?>
		</td>
		<td><?php echo $this->Form->control('work.'.$j.'.from_date', ['class' => 'form-control datepicker'.$j.'', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'From Date','data-rule-required'=>true,'data-msg-required'=>'Select Date','onchange'=>'workingdays('.$j.')']); ?>
		</td>
		 <td><?php echo $this->Form->control('work.'.$j.'.to_date', ['class' => 'form-control datepicker'.$j.'', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'To Date','data-rule-required'=>true,'data-msg-required'=>'Select Date','onchange'=>'workingdays('.$j.')']); ?>
		</td>
		 <td><?php echo $this->Form->control('work.'.$j.'.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration']); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-danger btn-xs" style="margin-left:0px;width:75px;font-size:11px">Remove</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.workdelete_docdetails_class_'+i).remove();
		calculateasdTotal();
    } 
   var i = <?php echo $j; ?>;
    $('.datepicker' + i).flatpickr({
		 maxDate: "today",
        dateFormat: "d-m-Y",
        allowInput: false
    });	
</script>