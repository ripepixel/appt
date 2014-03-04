<section id="page-title">
    <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    <h2>Sign In To Your Account</h2>
                    <p>Simple appointment scheduling awaits.</p>
                </div>
            </div>
    </div>
</section>

<section id="features_1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <form id="form" action="<?php echo base_url(); ?>users/process_signin" method="POST">
                    <h3>Enter Your Login Details</h3>
                    <?php echo validation_errors(); ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Enter your email address" required email />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password" required />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Sign In</button>
                    </div>   
                </form>
                <p>Don't have an account? <a href="<?php echo base_url(); ?>users/register">Sign Up here</a>.</p>
                <p>Forgot your password? Reset it here.</p>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 signup-faq">
                <h4>Marketing Stuff Here</h4>
                <p>Once you have created your account, you will be given 30 days free of charge. Once the 30 days are up, you will start to be charged every month.</p>

                <h4>Marketing Stuff Here</h4>
                <p>You can cancel your account at any time. If you cancel within your 30 day, free, period, you will not be charged at all.</p>

                <h4>Marketing Stuff Here</h4>
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
