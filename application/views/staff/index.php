<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>My Staff</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>My Staff <a href="<?php echo base_url(); ?>staff/create" class="btn btn-success pull-right">Add New</a></h4></div>
					<div class="panel-body">
						<?php if($staff) { ?>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Telephone</th>
									<th>Mobile</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($staff as $stf) { ?>
								<tr>
									<td><?php echo $stf['first_name']; ?></td>
									<td><?php echo $stf['last_name']; ?></td>
									<td><?php echo $stf['telephone']; ?></td>
									<td><?php echo $stf['mobile']; ?></td>
									<td><a href="<?php echo base_url(); ?>staff/edit/<?php echo $stf['id']; ?>" class="btn btn-success">Edit</a> <a href="" class="btn btn-primary">View</a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
						<?php } else { ?>
				
						<p>You do not have any staff yet.</p>
					</div>
				<?php } ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Staff</h4></div>
					<div class="panel-body">
						<p>List the staff members that will provide services to your clients.</p>
						<p class="text-center"><a href="<?php echo base_url(); ?>staff/create" class="cta2">Add New Staff</a></p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>