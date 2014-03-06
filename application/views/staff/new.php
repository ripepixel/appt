<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>New Staff Member</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<form action="<?php echo base_url(); ?>staff/save_staff" method="post" class="staff-form">
				<div class="form-group">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Staff Details</h4></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<label for="first_name">First Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="first_name" id="first_name" class="form-control" /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="last_name">Last Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="last_name" id="last_name" class="form-control" /> 
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<label for="email">Email</label>
								</div>
								<div class="col-lg-6">
									<input type="email" name="email" id="email" class="form-control" /> 
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
									<textarea name="address" id="address" class="form-control"></textarea> 
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

						</div>
					</div>
				</div>
			
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Staff Hours</h4></div>
						<div class="panel-body">
							<div class="row">
						<div class="form-group">
			    			<div class="col-lg-12">
			    				<label for="">Monday</label>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="mon_open" id="mon_open" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="mon_close" id="mon_close" class="form-control">
			    					<?php $this->load->view('settings/finish_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-3">
			    				<div class="checkbox">
									<label>
		                  				<input type="checkbox" id="copy_times" /> Copy to all
									</label>
								</div>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="form-group">
			    			<div class="col-lg-12">
			    				<label for="">Tuesday</label>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="tues_open" id="tues_open" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="tues_close" id="tues_close" class="form-control">
			    					<?php $this->load->view('settings/finish_hours'); ?>
			    				</select>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="form-group">
			    			<div class="col-lg-12">
			    				<label for="">Wednesday</label>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="wed_open" id="wed_open" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="wed_close" id="wed_close" class="form-control">
			    					<?php $this->load->view('settings/finish_hours'); ?>
			    				</select>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="form-group">
			    			<div class="col-lg-12">
			    				<label for="">Thursday</label>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="thurs_open" id="thurs_open" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="thurs_close" id="thurs_close" class="form-control">
			    					<?php $this->load->view('settings/finish_hours'); ?>
			    				</select>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="form-group">
			    			<div class="col-lg-12">
			    				<label for="">Friday</label>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="fri_open" id="fri_open" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="fri_close" id="fri_close" class="form-control">
			    					<?php $this->load->view('settings/finish_hours'); ?>
			    				</select>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="form-group">
			    			<div class="col-lg-12">
			    				<label for="">Saturday</label>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="sat_open" id="sat_open" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="sat_close" id="sat_close" class="form-control">
			    					<?php $this->load->view('settings/finish_hours'); ?>
			    				</select>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="form-group">
			    			<div class="col-lg-12">
			    				<label for="">Sunday</label>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="sun_open" id="sun_open" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="sun_close" id="sun_close" class="form-control">
			    					<?php $this->load->view('settings/finish_hours'); ?>
			    				</select>
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
					<a href="<?php echo base_url(); ?>staff/" class="btn btn-danger">Cancel</a>
				</div>
			</div>
		</div>
		</form>
	</div>
</section>