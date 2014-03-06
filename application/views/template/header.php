<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Your Logo -->
          <a href="<?php echo base_url(); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>images/logo_dark.png" alt="" /></a>
        </div>
        <!-- Start Navigation -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
           <?php if($this->session->userdata('user_id')) { ?>
           <ul class="nav navbar-nav">
            <li>
              <a href="<?php echo base_url(); ?>dashboard/">Dashboard</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>">Appointments</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>">Clients</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>settings/">My Business</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>">Help</a>
            </li>
          </ul>
           <?php } else { ?>
          <ul class="nav navbar-nav">
            <li>
              <a href="<?php echo base_url(); ?>" id="home_link">Home</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>pages/features">Features</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>users/signup">Pricing</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>blog" id="blog_link">Blog</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>pages/contact">Contact</a>
            </li>
          </ul>
           <?php } ?>

          <ul class="nav navbar-nav navbar-right hidden-sm">
            <li>
            <?php if($this->session->userdata('user_id')) { ?>
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                My Business <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="<?php echo base_url(); ?>staff/">Staff</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>settings/">Settings</a></li>
              </ul>
            </div>
              <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url(); ?>users/signout'">Sign Out</button>
            <?php } else { ?>
              <button type="button" class="btn btn-success" onclick="window.location.href='<?php echo base_url(); ?>users/register'">Try Free</button>
              <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url(); ?>users/signin'">Sign In</button>
            <?php } ?>
            </li>
          </ul>
        </nav>
      </div>
    </header>

		<?php
			if ($this->session->flashdata('success')) {
					echo "<div id='fadeout'>";
          echo "<section id='alerts'>";
					echo "<div class='container'>";
					echo "<div class='row'>";
					echo '<div class="span8 offset4">';
						echo "<div class='alert alert-success alert-dismissable'>";
						echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
							echo $this->session->flashdata('success');
						echo "</div>";
					echo "</div>";
					echo "</div></div></section>";
          echo "</div>";
			}

			if ($this->session->flashdata('error')) {
				echo "<section id='alerts'>";
				echo "<div class='container'>";
				echo "<div class='row'>";
					echo '<div class="span8 offset4">';
						echo "<div class='alert alert-danger alert-dismissable'>";
						echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
							echo $this->session->flashdata('error');
						echo "</div>";
					echo "</div>";
					echo "</div></div></section>";
			}
		?>