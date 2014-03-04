<section id="footer">
        <div class="container">
            <div class="row" id="newsletter">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    
                    <h2>Subscribe to our newsletter</h2>
                    <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.
                    </p>
                    
                    <div id="newsletter_form">
                        <form action="" method="post" class="subscribe-form" id="subscribe-form">
                            <input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address..."  required>
                                <button type="submit" class="subscribe-submit">Notify Me</button>
                        </form>
                    </div>
                    <div id="preview"></div>
                    
                </div>
            </div>
           
           <div class="row">
               <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" id="share">
                   
                   <div id="social_icons">
                       <ul>
                           <li><i id="tw_icon" class="fa fa-facebook-square fa-4x" onclick="location.href='#'"></i></li>
                           <li><i id="tw_icon" class="fa fa-twitter fa-4x" onclick="location.href='#'"></i></li>
                           <li><i id="tw_icon" class="fa fa-google-plus fa-4x" onclick="location.href='#'"></i></li>
                       </ul>
                   </div>
                   
                   <p>Copyright &copy; 2014 how media</p>
     
               </div>
           </div>
           
        </div>
    </section>

    <!-- JavaScript plugins comes here -->
    
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.scrollTo.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.form.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
    <script src="<?php echo base_url(); ?>js/retina.js"></script>
    <script src="<?php echo base_url(); ?>js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>js/nivo-lightbox.min.js"></script>
    <script type="text/javascript">
        $('document').ready(function(){
                $('#subscribe-form').ajaxForm( {
                target: '#preview',
                success: function() { 
                      $('#subscribe-form').slideUp('slow');
                      $('#preview').css({"opacity":"1"});
                    }
                });
            });
    </script>
    
  </body>
</html>