<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>My Services</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>My Services <a href="<?php echo base_url(); ?>services/create" class="btn btn-success pull-right">Add New</a></h4></div>
					<div class="panel-body">
						<?php if($services) { ?>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Service Name</th>
									<th>Category</th>
									<th>Price</th>
									<th>Duration</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($services as $serv) { ?>
								<tr>
									<td><?php echo $serv['name']; ?></td>
									<td><?php $cat_name = $this->Service_model->getServiceCategoryName($serv['id']); echo $cat_name; ?></td>
									<td><?php $curr = $this->General_model->getBusinessCurrency($this->session->userdata('user_id')); echo $curr->currency_html.$serv['sell']; ?></td>
									<td><?php $dur = $this->General_model->convertDuration($serv['duration']); echo $dur; ?></td>
									<td><a href="<?php echo base_url(); ?>services/edit/<?php echo $serv['id']; ?>" class="btn btn-success">Edit</a> <a href="" class="btn btn-primary">View</a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
						<?php } else { ?>
				
						<p>You do not have any services yet.</p>
					</div>
				<?php } ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Services</h4></div>
					<div class="panel-body">
						<p>Add the services you will provide to your clients.</p>
						<p class="text-center"><a href="<?php echo base_url(); ?>services/create" class="cta2">Add New Service</a></p>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading"><h4>Service Categories <a href="<?php echo base_url(); ?>services/service_categories" class="btn btn-primary pull-right">View</a></h4></div>
					<div class="panel-body">
						<ul class="mbottom20">
						<?php 
						if($service_cats) {
							foreach($service_cats as $sc) { ?>
							<li><?php echo $sc['name']; ?></li>
						<?php 
							} ?>
							</ul>
							<p class="text-center"><a href="<?php echo base_url(); ?>services/create_service_category" class="btn btn-success">Add New Service Category</a></p>
						<?php
						} else { ?>
							<p>You have not added any service categories.</p>
							<p class="text-center"><a href="<?php echo base_url(); ?>services/create_service_category" class="cta2">Add New Service Category</a></p>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>