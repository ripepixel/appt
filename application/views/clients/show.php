<section id="page-title">
    <div class="container">
            <div class="row">
            <h2><?php echo $client->first_name. " ". $client->last_name; ?></h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Client Details</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-2">
								Name:
							</div>
							<div class="col-lg-3">
								<?php echo $client->first_name. " ". $client->last_name; ?>
							</div>
							<div class="col-lg-2 col-lg-offset-2">
								Address:
							</div>
							<div class="col-lg-3">
								<?php echo $client->address; ?>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-2">
								Date of Birth:
							</div>
							<div class="col-lg-3">
								<?php //$dob = $client->dob; $today = new DateTime(); $diff = $today->diff($dob); ?>
								<?php echo date("d/m/Y", strtotime($client->dob)); ?> (<?php //echo date("Y", $diff); ?> years old)
							</div>
							<div class="col-lg-2 col-lg-offset-2">
								Telephone:
							</div>
							<div class="col-lg-3">
								<?php echo $client->telephone; ?>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-2">
								Gender:
							</div>
							<div class="col-lg-3">
								<?php echo $client->gender; ?>
							</div>
							<div class="col-lg-2 col-lg-offset-2">
								Mobile:
							</div>
							<div class="col-lg-3">
								<?php echo $client->mobile; ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-5">
								
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Services History</h4></div>
					<div class="panel-body">
						<p>Show list of services taken</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>