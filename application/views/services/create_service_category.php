<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>New Service Category</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<form action="<?php echo base_url(); ?>services/save_service_category" method="post" class="staff-form" id="service_cat-form">
				<div class="form-group">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Service Category</h4></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<label for="name">Category Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="name" id="name" class="form-control" required />
									<?php echo form_error('name'); ?>
									<p class="help-block">eg, Beauty Treatments</p>
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
					<a href="<?php echo base_url(); ?>services/" class="btn btn-danger">Cancel</a>
				</div>
			</div>
		</div>
		</form>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
		$('#service_cat-form').validate();
	});
</script>