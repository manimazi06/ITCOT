<tr class="workdetails_<?php echo $j ?> workpresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>	    
		<td><?php echo $this->Form->control('work.'.$j.'.organisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Organisation','data-rule-required'=>true,'data-msg-required'=>'Enter Organisation','onclick'=>"display($j)"]); ?>
		    <?php echo $this->Form->control('work.'.$j.'.is_active', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>1]); ?>

		</td>
		 <td><?php echo $this->Form->control('work.'.$j.'.position', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Position','data-rule-required'=>true,'data-msg-required'=>'Enter Position','onclick'=>"display($j)"]); ?>
		</td>
		 <td><?php echo $this->Form->control('work.'.$j.'.nature_work', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Nature of Work','data-rule-required'=>true,'data-msg-required'=>'Enter Nature of Work','onclick'=>"display($j)"]); ?>
		</td>
		<td><?php echo $this->Form->control('work.'.$j.'.from_date', ['class' => 'form-control datepicker'.$j.'', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'From Date','data-rule-required'=>true,'data-msg-required'=>'Select Date','onchange'=>'workingdays('.$j.')']); ?>
		<span id="fromdate" style="color: red;"></span>		
	</td>
		 <td><?php echo $this->Form->control('work.'.$j.'.to_date', ['class' => 'form-control datepicker'.$j.'', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'To Date','data-rule-required'=>true,'data-msg-required'=>'Select Date','onchange'=>'workingdays('.$j.')','onchange' => 'calculateworking(' . $j . ')']); ?>
		 <span id="todate" style="color: red;"></span>	
		</td>
		 <td><?php echo $this->Form->control('work.'.$j.'.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration']); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px">Delete</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(c) {
        $('.workdetails_'+c).remove();
		calculateasdTotal();
    } 
   var i = <?php echo $j; ?>;
    $('.datepicker' + i).flatpickr({
		 maxDate: "today",
        dateFormat: "d-m-Y",
        allowInput: false
    });	


	// function display(j){
	// 	var j;

	// 	var spec=$('#work-'+j+'-organisation').val();
		
	// 	//alert(j);

	// 	if(spec ==''){

	// 		//alert('Enter the Item');
	// 		$('#fromdate').html('Enter From date');
	// 		$('#todate').html('Enter To date');
	// 		$('#work-'+j+'-from-date').focus();
	// 		$('#work-'+j+'-to-date').focus();
	// 	}

	// }


	function calculateworking(count){

//alert(count);

var startDate1 = $('#work-' + count + '-from-date').val();
var endDate1 = $('#work-' + count + '-to-date').val();


//  var slice_start=startDate1.slice(6,10);
//  var slice_end=endDate1.slice(6,10);

if(startDate1>endDate1)
{
alert('To Date should be higher than From Date');

$('#work-' + count + '-duration').val('').trigger('change');
$('#work-' + count + '-from-date').val('').trigger('change');
$('#work-' + count + '-to-date').val('').trigger('change');
}

}
</script>