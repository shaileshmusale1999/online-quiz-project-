<?php

//user.php

include('header.php');

?>
<br />
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-9">
				<h3 class="panel-title">Students</h3>
			</div>
		<!-- 
			<div class="col-md-3" align="right">
				<button type="button" id="add_button" class="btn btn-info btn-sm" style="border-radius: 50%;"><i class="fa fa-plus"></i></button>
			</div>
 		-->
		</div>
	</div>
	<div class="card-body">
		<span id="message_operation"></span>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="user_data_table">
				<thead>
					<tr>
						<th>Profile Image</th>
						<th>Student Name</th>
						<th>Email ID</th>
						<th>Gender</th>
						<th>Contact No.</th>
						<th>Email Verified</th>
						<th>Action</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<div class="modal" id="detailModal">
  	<div class="modal-dialog">
    	<div class="modal-content">

      		<!-- Modal Header -->
      		<div class="modal-header">
        		<h4 class="modal-title"><b>Student Details</b></h4>
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
      		</div>

      		<!-- Modal body -->
      		<div class="modal-body" id="user_details">
        		
      		</div>

      		<!-- Modal footer -->
      		<div class="modal-footer">
        		<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      		</div>
    	</div>
  	</div>
</div>

<script>

$(document).ready(function(){
	
	var dataTable = $('#user_data_table').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"ajax_action.php",
			type:"POST",
			data:{action:'fetch', page:'user'}
		},
		"columnDefs":[
			{
				"targets":[0,6],
				"orderable":false,
			},
		],
	});

	$(document).on('click', '.details', function(){
		var user_id = $(this).attr('id');
		$.ajax({
	      	url:"ajax_action.php",
	      	method:"POST",
	      	data:{action:'fetch_data', user_id:user_id, page:'user'},
	      	success:function(data)
	      	{
	        	$('#user_details').html(data);
	        	$('#detailModal').modal('show');
	      	}
	    });
	});

});

</script>

