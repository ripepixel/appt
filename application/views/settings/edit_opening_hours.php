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
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Opening Hours</h4></div>
						<div class="panel-body">
							<form action="<?php echo base_url(); ?>settings/update_opening_hours" method="post" class="opening-hours">
								<div class="row">
									<div class="form-group">
						    			<div class="col-lg-12">
						    				<label for="">Monday</label>
						    			</div>
						    			<div class="col-lg-4">
						    				<select name="mon_open" id="mon_open" class="form-control">
						    					<?php 
						    					$data['open'] = $hours->mon_open;
						    					$this->load->view('settings/start_hours', $data); ?>
						    				</select>
						    			</div>
						    			<div class="col-lg-1">
						    				<p class="text-center">-</p>
						    			</div>
						    			<div class="col-lg-4">
						    				<select name="mon_close" id="mon_close" class="form-control">
						    					<?php 
						    					$data['close'] = $hours->mon_close;
						    					$this->load->view('settings/finish_hours', $data); ?>
						    				</select>
						    			</div>
						    			<div class="col-lg-3">
						    				
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
						    					<?php 
						    					$data['open'] = $hours->tues_open;
						    					$this->load->view('settings/start_hours', $data); ?>
						    				</select>
						    			</div>
						    			<div class="col-lg-1">
						    				<p class="text-center">-</p>
						    			</div>
						    			<div class="col-lg-4">
						    				<select name="tues_close" id="tues_close" class="form-control">
						    					<?php 
						    					$data['close'] = $hours->tues_close;
						    					$this->load->view('settings/finish_hours', $data); ?>
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
						    					<?php 
						    					$data['open'] = $hours->wed_open;
						    					$this->load->view('settings/start_hours', $data); ?>
						    				</select>
						    			</div>
						    			<div class="col-lg-1">
						    				<p class="text-center">-</p>
						    			</div>
						    			<div class="col-lg-4">
						    				<select name="wed_close" id="wed_close" class="form-control">
						    					<?php 
						    					$data['close'] = $hours->wed_close;
						    					$this->load->view('settings/finish_hours', $data); ?>
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
						    					<?php 
						    					$data['open'] = $hours->thurs_open;
						    					$this->load->view('settings/start_hours', $data); ?>
						    				</select>
						    			</div>
						    			<div class="col-lg-1">
						    				<p class="text-center">-</p>
						    			</div>
						    			<div class="col-lg-4">
						    				<select name="thurs_close" id="thurs_close" class="form-control">
						    					<?php 
						    					$data['close'] = $hours->thurs_close;
						    					$this->load->view('settings/finish_hours', $data); ?>
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
						    					<?php 
						    					$data['open'] = $hours->fri_open;
						    					$this->load->view('settings/start_hours', $data); ?>
						    				</select>
						    			</div>
						    			<div class="col-lg-1">
						    				<p class="text-center">-</p>
						    			</div>
						    			<div class="col-lg-4">
						    				<select name="fri_close" id="fri_close" class="form-control">
						    					<?php 
						    					$data['close'] = $hours->fri_close;
						    					$this->load->view('settings/finish_hours', $data); ?>
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
						    					<?php 
						    					$data['open'] = $hours->sat_open;
						    					$this->load->view('settings/start_hours', $data); ?>
						    				</select>
						    			</div>
						    			<div class="col-lg-1">
						    				<p class="text-center">-</p>
						    			</div>
						    			<div class="col-lg-4">
						    				<select name="sat_close" id="sat_close" class="form-control">
						    					<?php 
						    					$data['close'] = $hours->sat_close;
						    					$this->load->view('settings/finish_hours', $data); ?>
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
						    					<?php 
						    					$data['open'] = $hours->sun_open;
						    					$this->load->view('settings/start_hours', $data); ?>
						    				</select>
						    			</div>
						    			<div class="col-lg-1">
						    				<p class="text-center">-</p>
						    			</div>
						    			<div class="col-lg-4">
						    				<select name="sun_close" id="sun_close" class="form-control">
						    					<?php 
						    					$data['close'] = $hours->sun_close;
						    					$this->load->view('settings/finish_hours', $data); ?>
						    				</select>
						    			</div>
						    		</div>
						    	</div>

						    	<div class="row">
						    		<div class="col-lg-12">
						           		<button class="btn btn-success" type="submit">Update</button>
						       		</div>
					       		</div>

							</form>
						</div>
					</div>
			</div>
			<?php $this->load->view('settings/sidebar'); ?>
			<div class="col-lg-4">
				<p><strong>Note:</strong> You can always book appointments outside of your business opening hours.</p>
			</div>
		</div>
	</div>
</section>