<tr class="rawdelete_docdetails_class_<?php echo $j ?> rawpresent_row_in_post">
	<td align="center" style="width:2%;"><?php echo $j + 1; ?></td>
	<td>
		<?php echo $this->Form->control('raw.' . $j . '.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item', 'data-rule-required' => true, 'onkeypress' => "return AvoidSpaceraw(this.value,$key2)", 'data-msg-required' => 'Enter Item', 'value' => $value2['item']]); ?>
	</td>
	<td><?php echo $this->Form->control('raw.' . $j . '.quantity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity', 'data-rule-required' => true, 'data-msg-required' => 'Enter Quantity', 'value' => $value2['quantity']]); ?>
	</td>
	<td>
		<?php echo $this->Form->control('raw.' . $j . '.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit', 'value' => $value2['unit_id']]); ?>
	</td>
	<td><?php echo $this->Form->control('raw.' . $j . '.value', ['class' => 'form-control amount rawvalue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'value' => $value2['value'], 'style' => 'text-align:end', 'onkeyup' => 'calculaterawvalue()']); ?>
	</td>
	<td><?php echo $this->Form->control('raw.' . $j . '.revenue_year', ['class' => 'form-control amount rawrevenue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Revenue / Year', 'data-rule-required' => true, 'data-msg-required' => 'Enter Sales Revenue / Year', 'value' => $value2['revenue_year'], 'style' => 'text-align:end', 'onkeyup' => 'calculaterawrevenue()']); ?>
	</td>
	<td><?php echo $this->Form->control('raw.' . $j . '.capacity_utilisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation', 'data-rule-required' => true, 'data-msg-required' => 'Enter Capacity Utilisation']); ?>
	</td>
	<td style="text-align:center;">
		<a onclick='row_remove(<?php echo $j; ?>);'>
			<button class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
		</a>
	</td>
</tr>
<script>
	function row_remove(i) {
		$('.rawdelete_docdetails_class_' + i).remove();
		//calculateasdTotal();
		calculaterawvalue();
		calculaterawrevenue();
	}
</script>