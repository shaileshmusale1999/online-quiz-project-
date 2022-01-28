<?php

include('header.php');



?>
<br />
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="exam.php">Quiz List</a></li>
    	<li class="breadcrumb-item active" aria-current="page">Quiz Result</li>
  	</ol>
</nav>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-9">
				<h3 class="panel-title">Quiz Result</h3>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="result_table">
				<thead>
					<tr>
						<th>Profile Image</th>
						<th>Student Name</th>
						<th>Attendance Status</th>
						<th>Marks</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<script>

$(document).ready(function(){

	var code = "<?php echo $_GET["code"];?>";

	var dataTable = $('#result_table').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"ajax_action.php",
			type:"POST",
			data:{action:'fetch', page:'exam_result', code:code}
		}
	});

});

</script>