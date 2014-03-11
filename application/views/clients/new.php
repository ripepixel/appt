<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>New Client</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<form action="<?php echo base_url(); ?>clients/save_client" method="post" class="staff-form" id="client-form">
				<div class="form-group">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Client Details <a href="<?php echo base_url(); ?>clients/" class="btn btn-danger pull-right">Cancel</a></h4></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<label for="first_name">First Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="first_name" id="first_name" class="form-control" required /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="last_name">Last Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="last_name" id="last_name" class="form-control" required /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="email">Email</label>
								</div>
								<div class="col-lg-6">
									<input type="email" name="email" id="email" class="form-control" email /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="telephone">Telephone</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="telephone" id="telephone" class="form-control" /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="mobile">Mobile</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="mobile" id="mobile" class="form-control" /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="address">Address</label>
								</div>
								<div class="col-lg-6">
									<textarea name="address" id="address" class="form-control" rows="5"></textarea> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="dob">Date Of Birth</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="dob" id="dob" class="form-control" /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="gender">Gender</label>
								</div>
								<div class="col-lg-6">
									<select name="gender" id="gender" class="form-control">
									<option value="">-- Gender --</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select> 
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<label>Email Reminders</label>
								</div>
								<div class="col-lg-12">
									<div class="checkbox">
										<label for="email_reminders">
										<input type="checkbox" name="email_reminders" id="email_reminders" /> Does the client want to receive email reminders for their appointments?
										</label>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<label>Marketing Emails</label>
								</div>
								<div class="col-lg-12">
									<div class="checkbox">
										<label for="marketing_emails">
										<input type="checkbox" name="marketing_emails" id="marketing_emails" /> Does the client want to receive emails for special offers and promotions?
										</label>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<button class="btn btn-success" type="submit">Save</button>
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
		$("[name='email_reminders']").bootstrapSwitch();
		$("[name='marketing_emails']").bootstrapSwitch();
	});
</script>