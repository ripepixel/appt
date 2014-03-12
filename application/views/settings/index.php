<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>My Business Settings</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Opening Hours</h4></div>
						<div class="panel-body">
							<form action="<?php echo base_url(); ?>settings/save_business_details" method="post" class="opening-hours" id="business-form">
								<div class="row">
									<div class="form-group">
						    			<div class="col-lg-12">
						    			<h4>Address Details</h4>
						    				<label for="street">Street</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="text" name="street" id="street" class="form-control" required />
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    				<label for="town">Town</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="text" name="town" id="town" class="form-control" required />
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    				<label for="county">County</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="text" name="county" id="county" class="form-control" required />
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    				<label for="postcode">Postcode</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="text" name="postcode" id="postcode" class="form-control" required />
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    				<label for="country">Country</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<select name="country" class="form-control">
						    				<?php $countries = $this->Setting_model->getCountries();
						    				foreach($countries as $country) { ?>
						    					<option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
						    				<?php
						    				}
						    				?>
						    				</select>
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    			<h4>Contact Details</h4>
						    				<label for="telephone">Telephone</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="text" name="telephone" id="telephone" class="form-control" />
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    				<label for="public_email">Public Email</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="email" name="public_email" id="public_email" class="form-control" email />
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    				<label for="website">Website</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="text" name="website" id="website" class="form-control" />
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    			<h4>Social Media Details</h4>
						    				<label for="facebook">Facebook Page</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="text" name="facebook" id="facebook" class="form-control" />
						    			</div>
						    		</div>

						    		<div class="form-group">
						    			<div class="col-lg-12">
						    				<label for="twitter">Twitter Page</label>
						    			</div>
						    			<div class="col-lg-8">
						    				<input type="text" name="twitter" id="twitter" class="form-control" />
						    			</div>
						    		</div>

						    	</div>

						    	<div class="row">
						    		<div class="col-lg-12">
						           		<button class="btn btn-success" type="submit">Save</button>
						       		</div>
					       		</div>

							</form>
						</div>
					</div>
			</div>
			<?php $this->load->view('settings/sidebar'); ?>
			<div class="col-lg-4">
				<p>Update your business details to be listed on our searchable business listings page.</p>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
		$('#business-form').validate();
	});
</script>