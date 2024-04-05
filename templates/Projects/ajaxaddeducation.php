<tr class="edudetails_<?php echo $j ?> edupresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	<td>
	  <?php echo $this->Form->control('educationqualification.'.$j.'.education_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $educations, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Education']); ?>
	  <?php echo $this->Form->control('educationqualification.'.$j.'.is_active', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>1]); ?>
	</td>
	<td><?php echo $this->Form->control('educationqualification.'.$j.'.institute', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'institute','data-rule-required'=>true,'data-msg-required'=>'Enter Institute']); ?>
	</td>
	<td><?php echo $this->Form->control('educationqualification.'.$j.'.major_subject', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Major Subject','data-rule-required'=>true,'data-msg-required'=>'Enter Major Subject']); ?>
	</td>
	<td><?php echo $this->Form->control('educationqualification.'.$j.'.year_passing', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Year Passing','data-rule-required'=>true,'data-msg-required'=>'Enter Year Passing','maxlength'=>4]); ?>
	</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px">Delete</button>
        </a>
    </td>
</tr>
<script>
    function row_remove(a) {
		//alert(i);
        $('.edudetails_'+a).remove();
		calculateasdTotal();
    }   
</script>