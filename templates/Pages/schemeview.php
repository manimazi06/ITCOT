<!-- <section class="breadcrump ">
   <div>
   <?php if($schemes[0]['department']['scheme_type_id'] == 1){ ?>
			<h4>Union Government Schemes</h4>
			<?php }else if($schemes[0]['department']['scheme_type_id'] == 2){ ?>
			<h4>State Government Schemes</h4>
            <?php } ?>
			<p style="color: white;"><?php echo $schemes[0]['department']['name']; ?></p>
   </div>
</section> -->


<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
			<div class="page-title d-flex flex-column me-3">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bold my-1 fs-3"> <?php if($schemes[0]['department']['scheme_type_id'] == 1){ ?>
					<h3>Union Government Schemes</h3>
					<?php }else if($schemes[0]['department']['scheme_type_id'] == 2){ ?>
					<h3>State Government Schemes</h3>
					<?php } ?>
					 <b><p style="color:#093875;"><?php echo $schemes[0]['department']['name']; ?></p></b>
				</h1>
				<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">								
					<li class="breadcrumb-item text-gray-600">
						 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">Digital-Library</a>
					</li>					
					<li class="breadcrumb-item text-gray-600">
					 <?php if($schemes[0]['department']['scheme_type_id'] == 1){ ?>
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'unionschemes']); ?>">Union Schemes</a>
					 <?php }else if($schemes[0]['department']['scheme_type_id'] == 2){ ?>
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'stateschemes']); ?>">State Schemes</a>
					 <?php } ?>
					</li>
					<li class="breadcrumb-item text-gray-500">Schemes</li>
				</ul>  
			</div>
		</div>
	</div>
    <div class="press-content mt-3 " >
      <div class="container">
        <div class="content-space  row ">
            <div class="uniongov-content text-start">

            <div class="row">
                <div class="table-responsive">
		       <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded" id="kt_datatable_dom_positioning" >
		
				  <thead>
					<tr>
					   <th scope="col">S.No</th> 
					  <th scope="col">Name of the Schemes</th>
					  <th scope="col"></th>
					</tr>
				  </thead>
				  <tbody>
					 <?php $i=1; foreach($schemes as $key => $scheme){ 
					 if($scheme['parent_department_id'] != ''){
						 if($key == 0 && $id == 2){
					 ?>	
					 <tr>					  
					   <th colspan="3" style="text-align:center;"><?php echo $parent_department[1] ?></th>					   
					 </tr>					 
				    <?php }else if($key == 3 && $id == 2){ ?>
					 <tr>					  
					   <th colspan="3" style="text-align:center;"><?php echo $parent_department[2] ?></th>					  
					 </tr>	
                     <?php }else if($key == 5 && $id == 8){ ?>
					 <tr>					  
					   <th colspan="3" style="text-align:center;"><?php echo $parent_department[3] ?></th>					  
					 </tr>						 
					 <?php } }?>
					 <tr class="row-odd">
					  <td scope="row"><?php echo $i; ?></td> 
					  <td><?php echo $scheme['name']; ?></td>
					  <td><a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemedetailview',$id,$scheme['id']]); ?>" id="open">Open</a> </td>
					 
					  
						<!-- <input type="hidden" id="schemeType" value=<?php echo $schemeType ?>> -->
						<input type="hidden" id="dept_id" value=<?php echo $id ?>>
						<input type="hidden" id="dept_scheme" value=<?php echo $scheme['id'] ?>>
					 
					 </tr>
					 <?php  $i++; } ?>

				  </tbody>
				</table>
              </div>
            </div>            
         
            </div>          
        </div>
      </div>
    </div>
<script>
<?php if($id != 2 && $id != 8){ ?>
	$("#kt_datatable_dom_positioning").DataTable({
	"language": {
		"lengthMenu": "Show _MENU_",
	},
	"dom":
		"<'row'" +
		"<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
		"<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
		">" +

		"<'table-responsive'tr>" +

		"<'row'" +
		"<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
		"<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
		">"
});
<?php  } ?>



$(window).on('load', function() {


	var currLoc = $(location).attr('href'); 
	var encode = btoa($(location).attr('href')); 

	//alert(encode);
	
	// var schemeType=$('#schemeType').val();
	var dept=$('#dept_id').val();
var dept_schemes=$('#scheme_type').val();

	//alert(schemeType);

	setInterval(function(){
		
		

	$.ajax({
	
					async: true,
					dataType: "html",
					url: '<?php echo $this->Url->webroot; ?>../ajaxdigitallogs/' + encode + '/' + dept + '/'+dept_schemes,
				
				// beforeSend: function(xhr) {
				// xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				// },
					
					success: function(data, textStatus) {
						 //alert(data);
					
					}
				});

				alert("URL Copied");
			 }, 120000);
			

});


</script>