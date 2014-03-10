<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>New Service</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<form action="<?php echo base_url(); ?>services/save_service" method="post" class="staff-form" id="service-form">
				<div class="form-group">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>New Service <a href="<?php echo base_url(); ?>services/" class="btn btn-danger pull-right">Cancel</a></h4></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<label for="service_cat">Service Category</label>
								</div>
								<div class="col-lg-6">
									<?php $cats = $this->Service_model->getBusinessServiceCategories($this->session->userdata('user_id')); ?>
									<select class="form-control" name="service_cat" id="service_cat" required>
										<option vlaue="">-- Select Category --</option>
										<?php
										foreach($cats as $sc) { ?>
											<option value="<?php echo $sc['id']; ?>"><?php echo $sc['name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="name">Service Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="name" id="name" class="form-control" required />
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="details">Service Description</label>
								</div>
								<div class="col-lg-6">
									<textarea class="form-control" name="details" id="details" required placeholder="Add a description of your service" rows="5"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="duration">Duration</label>
								</div>
								<div class="col-lg-3">
									<input type="number" name="duration" id="duration" class="form-control" required />
									<p class="help-block">Enter a length of time in minutes</p>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4">
									<label for="cost">Cost</label>
									<input type="number" name="cost" id="cost" class="form-control" number />
									<p class="help-block">How much the service costs you to provide</p>
								</div>
								<div class="col-lg-4">
									<label for="sell">Sell Price</label>
									<input type="number" name="sell" id="sell" class="form-control" required number />
									<p class="help-block">How much you sell the service for</p>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="staff">Assigned Staff</label>
									<p class="help-block">Select which staff can provide this service.</p>
								</div>
								
									<?php 
									$staff = $this->Staff_model->getAllStaff($this->session->userdata('user_id')); 
									foreach ($staff as $staf) { ?>
									<div class="col-lg-3">
										<div class="checkbox">
											<label>
										    	<input type="checkbox" name="staff[<?php echo $staf['id']; ?>]" checked /> <?php echo $staf['first_name']. " ". $staf['last_name']; ?>
											</label>
										</div>
									</div>
									<?php
									}
									?>
									
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
					<a href="<?php echo base_url(); ?>services/" class="btn btn-danger">Cancel</a>
				</div>
			</div>
		</div>
		</form>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
		$('#service-form').validate();
	});
</script>