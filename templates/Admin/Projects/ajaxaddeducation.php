<tr class="delete_docdetails_class_<?php echo $j ?> edupresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	<td>
	  <?php echo $this->Form->control('education.'.$j.'.education_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $educations, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Education']); ?>
	</td>
	<td><?php echo $this->Form->control('education.'.$j.'.institute', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'institute','data-rule-required'=>true,'data-msg-required'=>'Enter Institute']); ?>
	</td>
	<td><?php echo $this->Form->control('education.'.$j.'.major_subject', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Major Subject','data-rule-required'=>true,'data-msg-required'=>'Enter Major Subject']); ?>
	</td>
	<td><?php echo $this->Form->control('education.'.$j.'.year_passing', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Year Passing','data-rule-required'=>true,'data-msg-required'=>'Enter Year Passing','maxlength'=>4]); ?>
	</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-outline-danger btn-xs" style="margin-left:0px;width:60px;">Remove</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.delete_docdetails_class_'+i).remove();
		calculateasdTotal();
    }   
</script>