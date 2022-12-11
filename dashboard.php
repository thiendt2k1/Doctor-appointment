<?php

//dashboard.php



include('class/Appointment.php');

$object = new Appointment;

include('header.php');

$object->query = "
SELECT * FROM doctor_schedule_table 
INNER JOIN doctor_table 
ON doctor_table.doctor_id = doctor_schedule_table.doctor_id
WHERE doctor_schedule_table.doctor_schedule_date >= '".'1/1/2019'."' 
AND doctor_schedule_table.doctor_schedule_status = 'Active' 
AND doctor_table.doctor_status = 'Active' 
ORDER BY doctor_schedule_table.doctor_schedule_date ASC
";

$result = $object->get_result();

?>

<div class="container-fluid">
	<?php
	include('navbar.php');
	?>
	<br />
	<div class="card">
		      		<form method="post" action="result.php">
			      		<div class="card-header"><h3><b>Doctor Schedule List</b></h3></div>
			      		<div class="card-body">
		      				<div class="table-responsive">
		      					<table class="table table-striped table-bordered">
		      						<tr>
		      							<th>Doctor Name</th>
		      							<th>Education</th>
		      							<th>Speciality</th>
		      							<th>Appointment Date</th>
		      							<th>Appointment Day</th>
		      							<th>Available Time</th>
		      							<th>Action</th>
		      						</tr>
		      						<?php
		      						foreach($result as $row)
		      						{
		      							echo '
		      							<tr>
		      								<td>'.$row["doctor_name"].'</td>
		      								<td>'.$row["doctor_degree"].'</td>
		      								<td>'.$row["doctor_expert_in"].'</td>
		      								<td>'.$row["doctor_schedule_date"].'</td>
		      								<td>'.$row["doctor_schedule_day"].'</td>
		      								<td>'.$row["doctor_schedule_start_time"].' - '.$row["doctor_schedule_end_time"].'</td>
		      								<td><button type="button" name="get_appointment" class="btn btn-primary btn-sm get_appointment" data-id="'.$row["doctor_schedule_id"].'">Get Appointment</button></td>
		      							</tr>
		      							';
		      						}
		      						?>
		      					</table>
		      				</div>
		      			</div>
		      		</form>
		      	</div>

</div>

<?php

include('footer.php');

?>

<div id="appointmentModal" class="modal fade">
  	<div class="modal-dialog">
    	<form method="post" id="appointment_form">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h4 class="modal-title" id="modal_title">Make Appointment</h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        		<div class="modal-body">
        			<span id="form_message"></span>
                    <div id="appointment_detail"></div>
                    <div class="form-group">
                    	<label><b>Reasone for Appointment</b></label>
                    	<textarea name="reason_for_appointment" id="reason_for_appointment" class="form-control" required rows="5"></textarea>
                    </div>
        		</div>
        		<div class="modal-footer">
          			<input type="hidden" name="hidden_doctor_id" id="hidden_doctor_id" />
          			<input type="hidden" name="hidden_doctor_schedule_id" id="hidden_doctor_schedule_id" />
          			<input type="hidden" name="action" id="action" value="book_appointment" />
          			<input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Book" />
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		</div>
      		</div>
    	</form>
  	</div>
</div>


<script>

$(document).ready(function(){

	var dataTable = $('#appointment_list_table').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"action.php",
			type:"POST",
			data:{action:'fetch_schedule'}
		},
		"columnDefs":[
			{
                "targets":[6],				
				"orderable":false,
			},
		],
	});

	$(document).on('click', '.get_appointment', function(){

		var doctor_schedule_id = $(this).data('doctor_schedule_id');
		
		var doctor_id = $(this).data('doctor_id');

		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:'make_appointment', doctor_schedule_id:doctor_schedule_id},
			success:function(data)
			{
				$('#appointmentModal').modal('show');
				$('#hidden_doctor_id').val(doctor_id);
				$('#hidden_doctor_schedule_id').val(doctor_schedule_id);
				$('#appointment_detail').html(data);
			}
		});

	});

	$('#appointment_form').parsley();

	$('#appointment_form').on('submit', function(event){

		event.preventDefault();

		if($('#appointment_form').parsley().isValid())
		{

			$.ajax({
				url:"action.php",
				method:"POST",
				data:$(this).serialize(),
				dataType:"json",
				beforeSend:function(){
					$('#submit_button').attr('disabled', 'disabled');
					$('#submit_button').val('wait...');
				},
				success:function(data)
				{
					$('#submit_button').attr('disabled', false);
					$('#submit_button').val('Book');
					if(data.error != '')
					{
						$('#form_message').html(data.error);
					}
					else
					{	
						window.location.href="appointment.php";
					}
				}
			})

		}

	})

});

</script>