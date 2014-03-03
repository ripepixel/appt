<section id="page-title">
    <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    <h2>Try Appt Free For 30 Days</h2>
                    <p>You can upgrade, downgrade or cancel at any time.</p>
                </div>
            </div>
    </div>
</section>

<section id="features_1">
	<div class="container">
		<div class="row">
	    	<div class="col-sm-6 col-md-6 col-lg-6">
	    		<form id="form" action="<?php echo base_url(); ?>users/process_registration" method="POST">
	    			<h3>Your Details</h3>
	    			<div class="form-group">
	    				<label for="first_name">First Name</label>
	    				<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" required />
	    			</div>
	    			<div class="form-group">
	    				<label for="surname">Last Name</label>
	    				<input type="text" class="form-control" id="surname" name="surname" placeholder="Enter your last name" required />
	    			</div>
	    			<div class="form-group">
	    				<label for="email">Email</label>
	    				<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required email />
	    			</div>
	    			<div class="form-group">
	    				<label for="password">Password</label>
	    				<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password" required minlength="6" />
	    			</div>

	    			<hr class="thin" />

	    			<h3>Your Business Details</h3>
	    			<div class="form-group">
	    				<label for="business_name">Business Name</label>
	    				<input type="text" class="form-control" id="business_name" name="business_name" placeholder="Enter your business name" required />
	    			</div>
	    			<div class="form-group">
	    				<label for="business_category">Business Type</label>
	    				<select name="business_category" class="form-control" required>
	    				<?php foreach($business_cats as $bc) { ?>
	    				<option value="<?php echo $bc['id']; ?>"><?php echo $bc['name']; ?></option>
	    				<?php } ?>
	    				</select>
	    			</div> 

	    			<p>We use goCardless for our payments, which use the Direct Debit scheme. Please have your bank account number and sort code at the ready.</p>
	    			<p>By starting your free trial, you are confirming that you accept the <a href="<?php echo base_url(); ?>pages/terms" target="_blank">Terms &amp; Conditions</a>.</p>
	    			<p>&nbsp;</p>
						<input type="hidden" name="plan_id" value="1" />

	    			<div class="form-group">
	    				<button type="submit" class="btn btn-success">Start Your Free Trial</button>
	    			</div>		

	    			<hr class="thin" />

	    			<h3>Your Plan Details</h3>
	    			<?php
	    			$now = date('d/m/Y', time());
	    			$expiry = date('d/m/Y', time()+2592000);
	    			?>
	    			<p>Your plan will start today, <strong><?php echo $now; ?></strong>, and your 30 day trial will expire on the <strong><?php echo $expiry; ?></strong>. Your first payment will be taken on, or around, the <strong><?php echo $expiry; ?></strong>. You can cancel your account at any time.</p>

	    			
	    		</form>
	    	</div>
	    	<div class="col-sm-2 col-md-2 col-lg-2">
	    	</div>
	    	<div class="col-sm-4 col-md-4 col-lg-4 signup-faq">
	    		<h4>When Will I Be Charged</h4>
	    		<p>Once you have created your account, you will be given 30 days free of charge. Once the 30 days are up, you will start to be charged every month.</p>

	    		<h4>Can I Cancel</h4>
	    		<p>You can cancel your account at any time. If you cancel within your 30 day, free, period, you will not be charged at all.</p>

	    		<h4>What Support Do You Give</h4>
	    		<p>All support questions are answered through email or our support area.</p>
	    	</div>
	    </div>
	</div>

</section>

<script type="text/javascript">
	$(document).ready(function() {
		$('#form').validate();
	});
</script>
