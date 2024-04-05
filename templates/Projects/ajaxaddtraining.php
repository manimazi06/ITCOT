<tr class="trainingdetails_<?php echo $j ?> trainingpresent_row_in_post">                                              
    <td align="center" style="width:2%;"><?php echo $j+1; ?></td>
	     <td><?php echo $this->Form->control('special.'.$j.'.training_in', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Training In','data-rule-required'=>true,'data-msg-required'=>'Enter Training In','onclick'=>"display($j)"]); ?>
			 <?php echo $this->Form->control('special.'.$j.'.is_active', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>1]); ?>
		</td>
		 <td><?php echo $this->Form->control('special.'.$j.'.institute', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'institute','data-rule-required'=>true,'data-msg-required'=>'Enter Institute','onclick'=>"display($j)"]); ?>
		</td>
		<td><?php echo $this->Form->control('special.'.$j.'.from_date', ['class' => 'form-control datepicker'.$j.'', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'From Date','data-rule-required'=>false,'data-msg-required'=>'Select Date','onchange'=>'trainingdays('.$j.')']); ?>
	<span id="fromdate" style="color: red;"></span>	
	</td>
		 <td><?php echo $this->Form->control('special.'.$j.'.to_date', ['class' => 'form-control datepicker'.$j.'', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'To Date','data-rule-required'=>false,'data-msg-required'=>'Select Date','onchange'=>'trainingdays('.$j.')','onchange'=>'calculatehigher(' . $j . ')']); ?>
		 <span id="todate" style="color: red;"></span>	
		</td>
		 <td><?php echo $this->Form->control('special.'.$j.'.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>false,'data-msg-required'=>'Enter Duration','readonly']); ?>
		</td>
		 <td><?php echo $this->Form->control('special.'.$j.'.achievement', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Achievement','data-rule-required'=>false,'data-msg-required'=>'Enter Achievement','type'=>'textarea','rows'=>2]); ?>
		</td>
	 <td style="text-align:center;">
        <a onclick='row_remove(<?php echo $j; ?>);'>
            <button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
        </a>
    </td>
</tr>
<script>

    function row_remove(b) {
		//alert(i);
        $('.trainingdetails_'+b).remove();
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

	// 	var spec=$('#special-'+j+'-training-in').val();

	// 	//alert(j);

	// 	if(spec ==''){

	// 		//alert('Enter the Item');
	// 		$('#fromdate').html('Enter From date');
	// 		$('#todate').html('Enter To date');
	// 		$('#special-'+j+'-from-date').focus();
	// 		$('#special-'+j+'-to-date').focus();
	// 	}

	// }


	
function calculatehigher(count){

//alert(count);

var startDate1 = $('#special-' + count + '-from-date').val();
var endDate1 = $('#special-' + count + '-to-date').val();

//alert(startDate1);
// var slice_start=startDate1.slice(3,10);
// var slice_end=endDate1.slice(6,10);
//alert(slice_start);
if(startDate1>endDate1)
{
alert('To Date should be higher than From Date');

$('#special-' + count + '-duration').val('').trigger('change');
$('#special-' + count + '-from-date').val('').trigger('change');
$('#special-' + count + '-to-date').val('').trigger('change');
}

}
</script>