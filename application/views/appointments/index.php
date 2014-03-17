<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>Appointments</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
					
			</div>
			<div class="col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>New Appointment</h4></div>
					<div class="panel-body">
						<p class="text-center"><a href="#" class="cta2" data-toggle="modal" data-target="#myModal">New Appointment</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">New Appointment</h4>
      </div>
      <div class="modal-body">
				<form action="<?php echo base_url(); ?>appointments/create_appointment" method="post" class="staff-form" id="client-form">
					<div class="form-group">
						<label for="client_search">Search Client</label>
        		<input type="text" name="client-search" id="client-search" class="form-control" onkeyup="lookup();" placeholder="Enter search terms" autocomplete="off" />
						<input type="hidden" name="client_id" id="client_id" value="" />
						<div id="suggestions">
			    		<div class="client_search_list" id="autoSuggestionsList">    
							</div>
						</div>
					</div>
        	<div class="form-group">
						<label for="client_search">Or Add New Client</label>
						<div class="row">
							<div class="col-lg-6">
								<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" />
							</div>
							<div class="col-lg-6">
								<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" />
							</div>
						</div>
					</div>
				<div class="form-group">
					<label for="service_cat">Choose Service Type</label>
        	<select name="service_cat" id="service_cat" onchange="getServices();" class="form-control">
						<option value="">-- Choose Service Category --</option>
        		<?php foreach($service_cats as $sc) {?>
							<option value="<?php echo $sc['id']; ?>"><?php echo $sc['name']; ?></option>
							<?php } ?>
        	</select>
				</div>
				<div class="form-group">
					<label for="service">Choose Service</label>
					<select name="service" id="service" onchange="getStaffForService();" class="form-control">
        		<option value="">-- Choose Service --</option>
        	</select>
				</div>

				<div class="form-group">
					<label for="staff">Choose Staff Member</label>
					<select name="staff" id="staff" class="form-control">
        		<option value="">-- Choose Staff --</option>
        	</select>
				</div>
				
				<div class="form-group">
					<label for="appointment_date">Date</label>
					<input type="text" name="appointment_date" id="appointment_date" class="form-control" onchange="getAvailableAppointments();" /> 
				</div>
				<div class="row">
					<div id="times">
					
					</div>
				</div>
				<div class="form-group">
					<label for="deposit">Any Deposit?</label>
					<input type="text" name="deposit" id="deposit" class="form-control" /> 
				</div>
				
        <p>If deposit is full amount, set status to paid.</p>
        <p>then confirm</p>
        <p>new client will be created if they do not exist</p>
        <p>If new client, send to edit client detail page so they can fill out more information.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>



<script type="text/javascript">
	function lookup() {
		var inputString = document.getElementById('client-search').value;
        if(inputString.length < 2) {
            $('#suggestions').hide();
						$('#search-help').show();
        } else {
            $.post("<?php echo base_url(); ?>clients/filter_clients_for_appointments", {queryString: ""+inputString+""}, function(data){
                if(data.length > 0) {
					$('#search-help').hide();
                    $('#suggestions').show();
                    $('#autoSuggestionsList').html(data);
                }
            });
        }
    }

		function getServices() {
			var catID = document.getElementById('service_cat').value;
			$.post("<?php echo base_url(); ?>appointments/get_services_by_category", {queryString: ""+catID+""}, function(data){
				if(data.length > 0) {
					$('#service').html(data);
				}
			});
		}
		
		function getStaffForService() {
			var servID = document.getElementById('service').value;
			$.post("<?php echo base_url(); ?>appointments/get_staff_for_service", {queryString: ""+servID+""}, function(data){
				if(data.length > 0) {
					$('#staff').html(data);
				}
			});
		}
		
		function getAvailableAppointments () {
			serviceID = document.getElementById('service').value;
			staffID = document.getElementById('staff').value;
			chosenDate = document.getElementById('appointment_date').value;
			$.post("<?php echo base_url(); ?>appointments/get_available_appointments", {serviceID: serviceID, staffID: staffID, chosenDate: chosenDate}, function(data){
				$('#times').html(data);
			});
		}

    function fill(clientName, clientID) {
    	var cName = clientName;
    	var cID = clientID;
        $('#client-search').val(cName);
				$('#client_id').val(cID);
        setTimeout("$('#suggestions').hide();", 200);
    } 

</script>