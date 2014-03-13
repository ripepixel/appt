<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>Viewing <?php echo $staff->first_name. " ". $staff->last_name; ?></h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Staff Details <a href="<?php echo base_url(); ?>staff/" class="btn btn-danger pull-right">Cancel</a></h4></div>
					<div class="panel-body">
						<div class="row mbottom20">
							<div class="col-lg-2"><strong>Name:</strong></div>
							<div class="col-lg-4"><?php echo $staff->first_name. " ". $staff->last_name; ?></div>
							<div class="col-lg-2"><strong>Telephone:</strong></div>
							<div class="col-lg-4"><?php echo $staff->telephone; ?></div>
						</div>
						<div class="row mbottom20">
							<div class="col-lg-2"><strong>Address:</strong></div>
							<div class="col-lg-4"><?php echo nl2br($staff->address); ?></div>
							<div class="col-lg-2"><strong>Mobile:</strong></div>
							<div class="col-lg-4"><?php echo $staff->mobile; ?></div>
						</div>
						<div class="row mbottom20">
							<?php 
							$dob = floor((time() - strtotime($staff->dob)) / 31556926); ?>							
							<div class="col-lg-2"><strong>Date of Birth:</strong></div>
							<div class="col-lg-4"><?php echo date("d/m/Y", strtotime($staff->dob)); ?> <br />(<?php echo $dob; ?> years old)</div>
							<div class="col-lg-2"><strong>Email:</strong></div>
							<div class="col-lg-4"><?php echo $staff->email; ?></div>
						</div>

						
					</div>
				</div>			
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Upcoming Appointments</h4></div>
					<div class="panel-body">
							

					</div>
				</div>			
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Staff Hours</h4></div>
					<div class="panel-body">
							

					</div>
				</div>			
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Something else</h4></div>
					<div class="panel-body">
							

					</div>
				</div>			
			</div>
		</div>

		
	</div>
</section>