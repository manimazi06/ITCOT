<tr class="refdelete_docdetails_class_<?php echo $j ?> refpresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>	  
		<td><?php echo $this->Form->control('reference.'.$j.'.name', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Name','data-rule-required'=>true,'data-msg-required'=>'Enter Name']); ?>
		</td>
		 <td><?php echo $this->Form->control('reference.'.$j.'.address', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Address','data-rule-required'=>true,'data-msg-required'=>'Enter Address','type'=>'textarea','rows'=>2]); ?>
		</td>
		 <td><?php echo $this->Form->control('reference.'.$j.'.occupation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Occupation','data-rule-required'=>true,'data-msg-required'=>'Enter Ocupation']); ?>
		</td>		
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-danger btn-xs" style="margin-left:0px;width:75px;font-size:11px;">Remove</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.refdelete_docdetails_class_'+i).remove();
		//calculateasdTotal();
    }   
</script>