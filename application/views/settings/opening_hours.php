<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>My Business Opening Hours</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<form action="<?php echo base_url(); ?>settings/save_opening_hours" method="post" class="opening-hours">
					<div class="row">
						<div class="form-group">
			    			<div class="col-lg-12">
			    				<label for="">Monday</label>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="mon_start" id="mon_start" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="mon_finish" id="mon_finish" class="form-control">
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
			    				<select name="tues_start" id="tues_start" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="tues_finish" id="tues_finish" class="form-control">
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
			    				<select name="wed_start" id="wed_start" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="wed_finish" id="wed_finish" class="form-control">
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
			    				<select name="thurs_start" id="thurs_start" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="thurs_finish" id="thurs_finish" class="form-control">
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
			    				<select name="fri_start" id="fri_start" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="fri_finish" id="fri_finish" class="form-control">
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
			    				<select name="sat_start" id="sat_start" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="sat_finish" id="sat_finish" class="form-control">
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
			    				<select name="sun_start" id="sun_start" class="form-control">
			    					<?php $this->load->view('settings/start_hours'); ?>
			    				</select>
			    			</div>
			    			<div class="col-lg-1">
			    				<p class="text-center">-</p>
			    			</div>
			    			<div class="col-lg-4">
			    				<select name="sun_finish" id="sun_finish" class="form-control">
			    					<?php $this->load->view('settings/finish_hours'); ?>
			    				</select>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="col-lg-12">
				    		<div class="form-group">
			           			<button class="btn btn-success" type="submit">Save</button>
			       			</div>
			       		</div>
		       		</div>

				</form>
			</div>
			<?php $this->load->view('settings/sidebar'); ?>
		</div>
	</div>
</section>