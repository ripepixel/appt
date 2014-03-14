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
        <input type="text" name="client-search" id="client-search" class="form-control" onkeyup="lookup();" placeholder="Enter search terms" />
			<div id="suggestions">
			    <div class="client_search_list" id="autoSuggestionsList">    
				</div>
			</div>
        <p>or add new client</p>
        <p>Choose Service</p>
        <p>List only staff that do that service</p>
        <p>choose date</p>
        <p>Only show available times</p>
        <p>Enter deposit paid, if any</p>
        <p>then confirm</p>
        <p>new client will be created if they do not exist</p>
        <p>If new client, send to edit client detail page so they can fill out more information.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
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

    function fill(clientName, clientID) {
    	var cName = clientName;
    	var cID = clientID;
        $('#client-search').val(cName);
        setTimeout("$('#suggestions').hide();", 200);
    } 

</script>