<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>My Clients</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>My Clients <a href="<?php echo base_url(); ?>clients/create" class="btn btn-success pull-right">Add New</a></h4></div>
					<div class="panel-body">
						<?php if($clients) { ?>
						<table class="table table-striped" id="clients-table">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Telephone</th>
									<th>Mobile</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($clients as $clnt) { ?>
								<tr>
									<td><?php echo $clnt['first_name']; ?></td>
									<td><?php echo $clnt['last_name']; ?></td>
									<td><?php echo $clnt['telephone']; ?></td>
									<td><?php echo $clnt['mobile']; ?></td>
									<td><a href="<?php echo base_url(); ?>clients/edit/<?php echo $clnt['id']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a> <a href="<?php echo base_url(); ?>clients/show/<?php echo $clnt['id']; ?>" class="btn btn-primary"><i class="fa fa-search"></i></a> <a href="<?php echo base_url(); ?>clients/show/<?php echo $clnt['id']; ?>" class="btn btn-info"><i class="fa fa-calendar"></i></a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
						<?php } else { ?>
				
						<p>You do not have any clients yet.</p>
					</div>
				<?php } ?>
				</div>
			</div>
			<div class="col-lg-3">
								
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Search Clients</h4></div>
					<div class="panel-body">
						<input type="text" name="client-search" id="client-search" class="form-control" onkeyup="lookup();" placeholder="Enter search terms" />
						<div id="suggestions">
						    <div class="client_search_list" id="autoSuggestionsList">    
						    </div>
						</div>
						<small id="search-help">You can search by first name, last name or address.</small>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading"><h4>New Clients</h4></div>
					<div class="panel-body">
						<p>You can manually add clients, or import them from a spreadsheet (csv file).</p>
						<p class="text-center"><a href="<?php echo base_url(); ?>clients/create" class="cta2">Add New Client</a></p>
						<p class="text-center"><br />Import Clients</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<script type="text/javascript">
	function lookup() {
		var inputString = document.getElementById('client-search').value;
        if(inputString.length < 2) {
            $('#suggestions').hide();
						$('#search-help').show();
        } else {
            $.post("<?php echo base_url(); ?>clients/filter_clients", {queryString: ""+inputString+""}, function(data){
                if(data.length > 0) {
										$('#search-help').hide();
                    $('#suggestions').show();
                    $('#autoSuggestionsList').html(data);
                }
            });
        }
    }

    function fill(thisValue) {
        $('#client-search').val(thisValue);
        setTimeout("$('#suggestions').hide();", 200);
    } 

</script>