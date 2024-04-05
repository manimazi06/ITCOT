<tr class="machinerydelete_docdetails_class_<?php echo $j ?> machinerypresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>	  
		<td><?php echo $this->Form->control('machinery.'.$j.'.description', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Description','data-rule-required'=>true,'data-msg-required'=>'Enter description','type'=>'textarea','rows'=>2]); ?>
		</td>
		 <td><?php echo $this->Form->control('machinery.'.$j.'.quantity', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'quantity','data-rule-required'=>true,'data-msg-required'=>'Enter quantity']); ?>
		</td>
		 <td><?php echo $this->Form->control('machinery.'.$j.'.price', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Price','data-rule-required'=>true,'data-msg-required'=>'Enter Price','style'=>'text-align:end']); ?>
		</td>
		 <td><?php echo $this->Form->control('machinery.'.$j.'.total_value', ['class' => 'form-control amount mvalue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'total value','data-rule-required'=>true,'data-msg-required'=>'Enter total value','style'=>'text-align:end','onkeyup'=>'calculatemvalue()']); ?>
		</td> 
		 <td><?php echo $this->Form->control('machinery.'.$j.'.suppliername', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier name','data-rule-required'=>true,'data-msg-required'=>'Enter name']); ?>
		</td>
		 <td><?php echo $this->Form->control('machinery.'.$j.'.supplieraddress', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier address','data-rule-required'=>true,'data-msg-required'=>'Enter address','type'=>'textarea','rows'=>2]); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button type="button" class="btn btn-danger btn-xs" style="margin-left:0px;width:75px;font-size:11px;">Delete</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.machinerydelete_docdetails_class_'+i).remove();
		//calculateasdTotal();
		//calculaterequirement();
		calculatemvalue();
		
    }   
</script>