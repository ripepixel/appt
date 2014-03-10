<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>Edit Service</h2>
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
						<div class="panel-heading"><h4>Edit Service <a href="<?php echo base_url(); ?>services/" class="btn btn-danger pull-right">Cancel</a></h4></div>
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
										foreach($cats as $sc) { 
										$is_sel = ($sc['id'] == $service->service_category_id) ? "selected='selected'" : ""; ?>
											<option value="<?php echo $sc['id']; ?>" <?php echo $is_sel; ?>><?php echo $sc['name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="name">Service Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="name" id="name" class="form-control" value="<?php echo $service->name; ?>" required />
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="details">Service Description</label>
								</div>
								<div class="col-lg-6">
									<textarea class="form-control" name="details" id="details" required placeholder="Add a description of your service" rows="5"><?php echo $service->details; ?></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="duration">Duration</label>
								</div>
								<div class="col-lg-3">
									<input type="text" name="duration" id="duration" class="form-control" value="<?php echo $service->duration; ?>" required />
									<p class="help-block">Enter a length of time in minutes</p>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4">
									<label for="cost">Cost</label>
									<input type="text" name="cost" id="cost" class="form-control" value="<?php echo $service->cost; ?>" />
									<p class="help-block">How much the service costs you to provide</p>
								</div>
								<div class="col-lg-4">
									<label for="sell">Sell Price</label>
									<input type="text" name="sell" id="sell" class="form-control" value="<?php echo $service->sell; ?>" required />
									<p class="help-block">How much you sell the service for</p>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="staff">Assigned Staff</label>
									<p class="help-block">Select which staff can provide this service.</p>
								</div>
								
									<?php 
									foreach ($staff as $staf) {
										if($this->General_model->findNeedleInHaystack($service_staff, $staf['id'], 'staff_id') == TRUE) {
											$checked = "checked";
										} else {
											$checked = "";
										}
									 ?>
									<div class="col-lg-3">
										<div class="checkbox">
											<label>
										    	<input type="checkbox" name="staff[<?php echo $staf['id']; ?>]" <?php echo $checked; ?> /> <?php echo $staf['first_name']. " ". $staf['last_name']; ?>
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