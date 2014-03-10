<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>My Service Categories</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>My Service Categories <a href="<?php echo base_url(); ?>services/" class="btn btn-danger pull-right">Cancel</a> <a href="<?php echo base_url(); ?>services/create_service_category" class="btn btn-success pull-right">Add New</a></h4></div>
					<div class="panel-body">
						<?php if($service_cats) { ?>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Category Name</th>
									<th>Services</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($service_cats as $sc) { ?>
								<tr>
									<td><?php echo $sc['name']; ?></td>
									<td><?php $sc_count = $this->Service_model->getServiceCountForCategory($sc['id'], $this->session->userdata('user_id')); 
									$svs_txt = ($sc_count == 1) ? " Service" : " Services";
									echo $sc_count. $svs_txt; ?></td>
									<td><a href="<?php echo base_url(); ?>services/edit_service_category/<?php echo $sc['id']; ?>" class="btn btn-success">Edit</a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
						<?php } else { ?>
				
						<p>You do not have any service categories yet.</p>
					</div>
				<?php } ?>
				</div>
			</div>
			

		</div>
	</div>
</section>