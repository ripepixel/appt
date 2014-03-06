<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>Edit Client (<?php echo $client->first_name." ". $client->last_name; ?>)</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<form action="<?php echo base_url(); ?>clients/update_client" method="post" class="staff-form" id="client-form">
				<div class="form-group">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Client Details <a href="<?php echo base_url(); ?>clients/" class="btn btn-danger pull-right">Cancel</a></h4></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<label for="first_name">First Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $client->first_name; ?>" required /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="last_name">Last Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $client->last_name; ?>" required /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="email">Email</label>
								</div>
								<div class="col-lg-6">
									<input type="email" name="email" id="email" class="form-control" value="<?php echo $client->email; ?>" email /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="telephone">Telephone</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="telephone" id="telephone" class="form-control" value="<?php echo $client->telephone; ?>" /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="mobile">Mobile</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $client->mobile; ?>" /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="address">Address</label>
								</div>
								<div class="col-lg-6">
									<textarea name="address" id="address" class="form-control" rows="5"><?php echo $client->address; ?></textarea> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="dob">Date Of Birth</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="dob" id="dob" class="form-control" value="<?php echo date('d-m-Y', strtotime($client->dob)); ?>" /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="gender">Gender</label>
								</div>
								<div class="col-lg-6">
									<select name="gender" id="gender" class="form-control">
										
									<option value="" <?php $sel = ($client->gender == "") ? "selected='selected'" : ""; echo $sel; ?>>-- Gender --</option>
									<option value="Male" <?php $sel = ($client->gender == "Male") ? "selected='selected'" : ""; echo $sel; ?>>Male</option>
									<option value="Female" <?php $sel = ($client->gender == "Female") ? "selected='selected'" : ""; echo $sel; ?>>Female</option>
									</select> 
								</div>
							</div>
							<input type="hidden" name="client_id" id="client_id" value="<?php echo $client->id; ?>" />
						</div>
					</div>
				</div>
			
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<button class="btn btn-success" type="submit">Update</button>
					<a href="<?php echo base_url(); ?>clients/" class="btn btn-danger">Cancel</a>
				</div>
			</div>
		</div>
		</form>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
		$('#client-form').validate();
	});
</script>