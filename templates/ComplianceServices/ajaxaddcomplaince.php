<tr class="complaince_docdetails_class_<?php echo $j ?> complaince_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	<td>
		   <?php echo $this->Form->control('complaince.'.$j.'.product_name', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Products','data-rule-required'=>true,'data-msg-required'=>'Products']); ?>
		</td>									
		<td>
			<?php echo $this->Form->control('complaince.'.$j.'.capacity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity','data-rule-required'=>true,'data-msg-required'=>'Capacity']); ?>
		</td>
		<td> <?php echo $this->Form->control('complaince.'.$j.'.capacity_pervalue', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $cap_dropdown, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
		</td>
		<td> 
		<?php echo $this->Form->control('complaince.'.$j.'.unit', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Unit','data-rule-required'=>true,'data-msg-required'=>'Unit']); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.complaince_docdetails_class_'+i).remove();
		//calculateasdTotal();
    }   
</script>