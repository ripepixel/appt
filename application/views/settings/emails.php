<section id="page-title">
    <div class="container">
    	<div class="row">
      	<h2>My Email Settings</h2>
      </div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<form action="<?php echo base_url(); ?>settings/save_email_settings" method="post" class="opening-hours" id="email-settings-form">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Reminder Emails <a href="<?php echo base_url(); ?>settings/" class="btn btn-danger pull-right">Cancel</a></h4></div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<label for="email_reminders">Email Reminders</label>
									</div>
									<div class="col-lg-12">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="email_reminders" id="email_reminders" /> Send email reminders to your clients?
											</label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12">
										<label for="minutes_before">When To Email</label>
									</div>
									<div class="col-lg-8">
										<input type="number" name="minutes_before" id="minutes_before" class="form-control" required />
										<small class="help-block">How many minutes before, the appointment starts, do you want to send the email?<br />
											1440 = 24 hours / 720 = 12 hours / 360 = 6 hours</small>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12">
										<label for="reminder_email">Reminder Email Content</label>
									</div>
									<div class="col-lg-8">
										<textarea name="reminder_email" id="reminder_email" class="form-control" rows="5" required>Hi {customer_name},
Just a little reminder that you have an appointment booked for today at {appointment_time}.
Many Thanks
{business_name}
										</textarea>
									</div>
								</div>


							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<button class="btn btn-success" type="submit">Save</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<?php $this->load->view('settings/sidebar'); ?>
			
		</div>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
		$('#email-settings-form').validate();
		$("[name='email_reminders']").bootstrapSwitch();
	});
</script>