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
              <a href="#" id="blog_link">Blog</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>pages/contact">Contact</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-sm">
            <li>
              <button type="button" class="btn btn-success">Sign Up</button>
              <button type="button" class="btn btn-primary">Sign In</button>
            </li>
          </ul>
        </nav>
      </div>
    </header>