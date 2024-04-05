<tr class="trainingdelete_docdetails_class_<?php echo $j ?> trainingpresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	     <td><?php echo $this->Form->control('special.'.$j.'.training_in', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Training In','data-rule-required'=>true,'data-msg-required'=>'Enter Training In']); ?>
		</td>
		 <td><?php echo $this->Form->control('special.'.$j.'.institute', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'institute','data-rule-required'=>true,'data-msg-required'=>'Enter Institute']); ?>
		</td>
		 <td><?php echo $this->Form->control('special.'.$j.'.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration']); ?>
		</td>
		 <td><?php echo $this->Form->control('special.'.$j.'.achievement', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Achievement','data-rule-required'=>true,'data-msg-required'=>'Enter Achievement','type'=>'textarea','rows'=>2]); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button class="btn btn-outline-danger btn-xs" style="margin-left:0px;width:60px;">Remove</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(i) {
        $('.trainingdelete_docdetails_class_'+i).remove();
		calculateasdTotal();
    }   
</script>